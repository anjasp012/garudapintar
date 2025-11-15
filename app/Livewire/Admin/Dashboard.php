<?php

namespace App\Livewire\Admin;

use App\Models\Exam;
use App\Models\ExamSession;
use App\Models\Question;
use App\Models\User;
use Livewire\Component;
use Spatie\Activitylog\Models\Activity;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard', [
            'users' => User::limit(5)->get(),
            'userCount' => User::count(),
            'examCount' => Exam::count(),
            'questionCount' => Question::count(),
            'examSessionCount' => ExamSession::count(),
            'activities' => Activity::latest()->get()
        ]);
    }
}
