<?php

namespace App\Livewire\Admin\Exams;

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
            'exams' => Exam::where('name', 'like', '%'.$this->query.'%')->orderByDesc('created_at')->paginate(5)
        ];
        return view('livewire.admin.exams.index', $data);
    }
}
