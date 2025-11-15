<?php

namespace App\Livewire\Participant;

use App\Models\Exam;
use App\Models\ExamSession;
use App\Models\Question;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.participant.dashboard', [
            'users' => User::limit(5)->get(),
            'userCount' => User::count(),
            'examCount' => Exam::count(),
            'questionCount' => Question::count(),
            'examSessionCount' => ExamSession::count()
        ]);
    }
}
