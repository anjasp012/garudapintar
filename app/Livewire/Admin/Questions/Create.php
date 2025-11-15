<?php

namespace App\Livewire\Admin\Questions;

use App\Models\Category;
use App\Models\Question;
use App\Models\Topic;
use Livewire\Component;

class Create extends Component
{
    public $topics = [];

    public $category = '';
    public $topic = '';
    public $type = '';
    public $question = '';
    public $correct_answer;
    public $explanation = '';

    public $question_options = [
        [
            'option_label' => 'A',
            'option_text' => ''
        ],
        [
            'option_label' => 'B',
            'option_text' => ''
        ],
        [
            'option_label' => 'C',
            'option_text' => ''
        ],
        [
            'option_label' => 'D',
            'option_text' => ''
        ],
        [
            'option_label' => 'E',
            'option_text' => ''
        ],
    ];

    protected function rules()
    {
        // RULES DASAR
        $rules = [
            'category' => 'required|exists:categories,id',
            'topic'    => 'required|exists:topics,id',
            'type'     => 'required|in:single_choice,essay',

            'question'    => 'required|string',
            'explanation' => 'nullable|string',
            'correct_answer' => 'required|string',
        ];


        foreach ($this->question_options as $index => $option) {
            $rules["question_options.$index.option_text"] = $this->type !== 'essay' ? 'required|string' : '';
        }


        return $rules;
    }

    public function updatedCategory($value)
    {
        $this->topics = Topic::where('category_id', $value)->get();
        $this->topic = ''; // reset topic
    }

    public function save()
    {
        $this->validate();
        $question = Question::create([
            'category_id' => $this->category,
            'topic_id' => $this->topic,
            'type' => $this->type,
            'question' => $this->question,
            'correct_answer' => $this->correct_answer,
            'explanation' => $this->explanation,
            'score' => 1,
        ]);

        if ($question->type != 'essay') {
            $question->questionOptions()->createMany($this->question_options);
        }

        $this->redirectRoute('admin.questions.index', navigate: true);
    }


    public function render()
    {
        $data = [
            'categories' => Category::all(),
            'topics' => Topic::query()
        ];
        return view('livewire.admin.questions.form', $data);
    }
}
