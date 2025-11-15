<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class Delete extends Component
{
    public ?int $id;

    #[On('confirmDelete')]
    public function confirmDelete(int $id)
    {
        $this->id = $id;
    }

    public function destroy()
    {
        $user = User::findOrFail($this->id);
        $user->delete();
        $this->dispatch('userDeleted', $user);
    }

    public function render()
    {
        return view('livewire.admin.users.delete');
    }
}
