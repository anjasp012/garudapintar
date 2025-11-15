<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Request;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.auth')]
class Register extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.auth.register');
    }

    public function store()
    {
        $this->validate([
            'email'   => 'required',
            'password' => 'required',
        ]);

        session()->flash('message', 'Data Berhasil Disimpan.');

        return redirect()->route('auth.login');
    }
}
