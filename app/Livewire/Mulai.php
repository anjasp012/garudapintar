<?php

namespace App\Livewire;

use App\Models\Question;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Mulai extends Component
{
    public function render()
    {
        return view('livewire.mulai', [
            'questions' => Question::all(),
        ]);
    }
}
