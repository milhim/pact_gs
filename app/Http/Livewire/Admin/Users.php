<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['reRenderParent', 'userUpdated', 'userAdded'];

    public $users;
    public User $user;

    public $addUserForm = false;
    public $usersTable = true;
    public $editForm = false;


    public function back()
    {
        $this->editForm = !$this->editForm;
        $this->usersTable = true;
    }
    public function showEditForm(User $user)
    {
        $this->user = $user;
        $this->editForm = !$this->editForm;
        $this->usersTable = false;
        $this->addUserForm = false;
    }
    public function  showAddUserForm()
    {
        $this->addUserForm = !$this->addUserForm;
        $this->editForm = false;
        $this->usersTable = false;
    }

    public function delete(User $user)
    {
        $this->mount();

        $user->delete();
        session()->flash('userDeleted', 'User successfully Deleted.');
    }
    public function userAdded()
    {
        $this->mount();

        $this->addUserForm = !$this->addUserForm;
        $this->usersTable = true;
        session()->flash('userAdded', 'User successfully Added.');

    }

    public function userUpdated()
    {
        $this->mount();
        $this->editForm = !$this->editForm;
        $this->usersTable = true;
        session()->flash('userUpdated', 'User successfully updated.');
    }


    public function mount()
    {


        $this->users = User::all();
    }
    public function render()
    {
        return view(
            'livewire.admin.users',
            ['usersPaginate' => User::orderBy('created_at','desc')->paginate(4),]
        );
    }
}
