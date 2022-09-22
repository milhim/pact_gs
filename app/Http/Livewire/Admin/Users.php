<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    protected $listeners = ['reRenderParent','userUpdated'];

    public $users;
    public User $user;

    public $userForm = false;
    public $editForm = false;

    public function showAddUserForm()
    {
        
        $this->userForm = !$this->userForm;
        $this->editForm = false;

    }
    public function showEditForm(User $user)
    {
        $this->user=$user;
        $this->editForm = !$this->editForm;
        $this->userForm = false;

    }
    
public function delete(User $user){
    $user->delete();
    $this->mount();

}
    public function userUpdated()
    {
        $this->mount();
        $this->editForm = !$this->editForm;

    }
    public function reRenderParent()
    {
        $this->mount();
        $this->userForm = !$this->userForm;

    }

    public function mount()
    {
        $this->users = User::all();
    }
    public function render()
    {
        return view(
            'livewire.admin.users'
        );
    }
}
