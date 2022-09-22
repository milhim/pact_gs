<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    //users variable

    public $showUsers = false;
    public function showUsers()
    {
        $this->showUsers = !$this->showUsers;
    }


    public function render()
    {

        return view(
            'livewire.admin.dashboard'
        );
    }
}
