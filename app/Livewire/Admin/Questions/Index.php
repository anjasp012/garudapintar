<?php

namespace App\Livewire\Admin\Questions;

use App\Models\Question;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $query = '';


    #[On('importSucceeded')]
    public function updateList() {}

    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();
    }


    public function render()
    {
        $data = [
            'questions' => Question::where('question', 'like', '%' . $this->query . '%')->orderByDesc('created_at')->paginate(10)
        ];
        return view('livewire.admin.questions.index', $data);
    }
}
