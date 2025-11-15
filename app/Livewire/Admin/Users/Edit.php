<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Edit extends Component
{
    public function mount(User $user)
    {
        $this->id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public ?int $id;
    #[Rule('required', message: 'Nama wajib diisi!')]
    public string $name = '';

    #[Rule('required', message: 'Email wajib diisi!')]
    public string $email = '';
    public string $password = '';

    public function save()
    {
        $data = $this->validate();
        $user = User::findOrFail($this->id);
        if (!empty($this->password)) {
            $data['password'] = bcrypt($this->password);
        }
        $user->update($data);
        $this->redirectRoute('admin.users.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.users.form');
    }
}
