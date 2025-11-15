<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{
    #[Rule('required', message: 'Nama wajib diisi!')]
    public string $name = '';

    #[Rule('required', message: 'Email wajib diisi!')]
    #[Rule('unique:users,email', message: 'Email sudah digunakan!')]
    public string $email = '';

    #[Rule('required', message: 'Password wajib diisi!')]
    public string $password = '';

    public function save()
    {
        $data = $this->validate();
        $data['password'] = bcrypt($this->password);
        User::create($data);
        $this->redirectRoute('admin.users.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.users.form');
    }
}
