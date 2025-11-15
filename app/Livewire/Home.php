<?php

namespace App\Livewire;

use App\Models\Exam;
use App\Models\ExamSession;
use App\Models\ExamSessionQuestion;
use App\Models\Invoice;
use App\Models\Question;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Novay\Word\Facades\Word;

#[Layout('layouts.app')]
class Home extends Component
{
    public $exams;
    public $channels = [];
    public $selectedExamId = null;
    public $showPaymentModal = false;

    public function mount()
    {
        $this->exams = Exam::with('examSettings')->get();
    }

    public function joinExam(Exam $exam)
    {
        if ($exam->type === 'paid') {
            $response = Http::withToken(config('tripay.api_key'))
                ->get('https://tripay.co.id/api-sandbox/merchant/payment-channel');

            $this->channels = json_decode($response)->data;
            $this->selectedExamId = $exam->id;
            $this->showPaymentModal = true;
            return;
        }

        $examSession = auth()->user()->examSessions()->create([
            'exam_id' => $exam->id,
            'remaining_time' => $exam->duration * 60,
            'is_completed' => false
        ]);

        foreach ($exam->examSettings as $key => $setting) {
            $questions = Question::where('category_id', $setting->category_id)
                ->where('topic_id', $setting->topic_id)
                ->inRandomOrder()
                ->limit($setting->question_count)
                ->get();
            $questionsArray = $questions->values()->map(function ($q, $index) {
                return [
                    'question_id'  => $q->id,
                ];
            })->toArray();

            $examSession->examSessionQuestions()->createMany($questionsArray);
        };

        $this->redirectRoute('participant.exams.index', navigate: true);
    }

    public function joinExamAgain(Exam $exam)
    {
        dd($exam->examSettings);
    }

    public function createTransaction($method, $examId)
    {

        $exam = Exam::find($examId);
        $apiKey       = config('tripay.api_key');
        $privateKey   = config('tripay.private_key');
        $merchantCode = config('tripay.merchant_code');
        $merchantRef  = 'GP-' . rand(1000, 9999);
        $amount       = $exam->price;

        $data = [
            'method'         => $method,
            'merchant_ref'   => $merchantRef,
            'amount'         => $amount,
            'customer_name'  => auth()->user()->name,
            'customer_email' => auth()->user()->email,
            'customer_phone' => '0',
            'order_items'    => [
                [
                    'sku'         => 'GP-06',
                    'name'        => $exam->name,
                    'price'       => $exam->price,
                    'quantity'    => 1,
                ]
            ],
            'callback_url'   => route('tripay.callback'),
            'return_url'   => route('participant.exams.index'),
            'expired_time' => (time() + (24 * 60 * 60)), // 24 jam
            'signature'    => hash_hmac('sha256', $merchantCode . $merchantRef . $amount, $privateKey)
        ];

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_FRESH_CONNECT  => true,
            CURLOPT_URL            => 'https://tripay.co.id/api-sandbox/transaction/create',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_HTTPHEADER     => ['Authorization: Bearer ' . $apiKey],
            CURLOPT_FAILONERROR    => false,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => http_build_query($data),
            CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4
        ]);

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);
        if (empty($error)) {
            Invoice::create([
                'invoice_code' => $merchantRef,
                'user_id' => auth()->user()->id,
                'exam_id' => $exam->id,
                'payment_method' => $method,
                'total_amount' => $amount,
            ]);
            return redirect(json_decode($response)->data->checkout_url);
        } else {
            return $error;
        }
    }

    public function render()
    {
        return view('livewire.home');
    }
}
