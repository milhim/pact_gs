<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    //users variable

    public $showUsers = false;
    public $showPacts = false;

    public function showUsers()
    {
        $this->showUsers = !$this->showUsers;
        $this->showPacts= false;
    }

    public function showPacts()
    {
        $this->showPacts = !$this->showPacts;
        $this->showUsers= false;
    }

    
    public function render()
    {

        return view(
            'livewire.admin.dashboard'
        );
    }
}
