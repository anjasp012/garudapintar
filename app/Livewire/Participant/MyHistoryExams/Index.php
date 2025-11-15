<?php

namespace App\Livewire\Participant\MyHistoryExams;

use App\Models\Exam;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $query = '';

    #[On('examDeleted')]
    public function updateList($exam) {

    }

    public function search()
    {
        $this->resetPage();
    }

    public function render()
    {
        $data = [
            'exams' => Exam::where('name', 'like', '%'.$this->query.'%')->orderByDesc('created_at')->paginate(8)
        ];
        return view('livewire.participant.my-history-exams.index', $data);
    }
}
