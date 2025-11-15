<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

#[Layout('layouts.auth')]
class Login extends Component
{
    #[Rule('required')]
    public string $email = '';

    #[Rule('required')]
    public string $password = '';
    public function store()
    {
        if (!Auth::attempt($this->validate())) {
            $this->reset('password');
            throw ValidationException::withMessages([
                'email' => 'the provide credentials do not match our records'
            ]);
        }
        session()->regenerate();
        activity('login')
            ->causedBy(auth()->user())
            ->log(auth()->user()->name . ' telah login');

        if (auth()->user()->role == 'admin') {
            $this->redirectRoute('admin.dashboard', navigate: true);
        } else {
            $this->redirectRoute('participant.dashboard', navigate: true);
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
