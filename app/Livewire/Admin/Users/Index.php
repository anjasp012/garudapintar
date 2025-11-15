<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Url]
    public $search = '';

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    }


    public function search()
    {
        $this->resetPage();
    }

    public function render()
    {
        $data = [
            'users' => User::where('name', 'like', '%' . $this->search . '%')->orderByDesc('created_at')->paginate(10)
        ];
        return view('livewire.admin.users.index', $data);
    }
}
