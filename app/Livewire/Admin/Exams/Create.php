<?php

namespace App\Livewire\Admin\Exams;

use App\Models\Category;
use App\Models\Exam;
use App\Models\Topic;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{
    public string $name;
    public string $description;
    public string $duration;
    public string $type = '';
    public ?int $price = null;
    public ?array $exam_settings = [];

    public function mount()
    {
        $this->exam_settings = [
            ['category_id' => "", 'topic_id' => "", 'question_count' => ""]
        ];
    }

    public function updated($key)
    {
        if (str_ends_with($key, '.category_id')) {
            $index = explode('.', $key)[1];
            $this->exam_settings[$index]['topic_id'] = "";
        }
    }


    public function addSetting()
    {
        $this->exam_settings[] =  [
            'category_id' => "",
            'topic_id' => "",
            'question_count' => ""
        ];
    }

    public function removeSetting($index)
    {
        unset($this->exam_settings[$index]);
    }




    public function save()
    {
        $data = $this->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'duration' => 'required',
                'type' => 'required',
                'price' => 'required_if:type,paid|nullable|numeric|min:0',
                'exam_settings' => 'required|array',
                'exam_settings.*.category_id' => 'required|exists:categories,id',
                'exam_settings.*.topic_id' => 'required|exists:topics,id',
                'exam_settings.*.question_count' => 'required|integer|min:1',
            ],
            [
                'name.required' => 'Name is required.',
                'description.required' => 'Description is required.',
                'duration.required' => 'Duration is required.',
                'type.required' => 'Type is required.',
                'price.required_if' => 'Price is required.',
                'exam_settings.*.category_id.required' => 'Category is required.',
                'exam_settings.*.category_id.exists' => 'The selected category is invalid.',
                'exam_settings.*.topic_id.required' => 'Topic is required.',
                'exam_settings.*.topic_id.exists' => 'The selected topic is invalid.',
                'exam_settings.*.question_count.required' => 'Question count is required.',
                'exam_settings.*.question_count.integer' => 'Question count must be a number.',
                'exam_settings.*.question_count.min' => 'Question count must be at least 1.',
            ]
        );
        $exam = Exam::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'duration' => $data['duration'],
            'type' => $data['type'],
            'price' => $data['price'],
        ]);
        $exam->examSettings()->createMany($data['exam_settings']);
        $this->redirectRoute('admin.exams.index', navigate: true);
    }

    public function render()
    {
        $data = [
            'categories' => Category::all()
        ];
        return view('livewire.admin.exams.form', $data);
    }
}
