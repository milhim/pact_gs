<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    //users variable

    
    public $showUsers = true;
    public $showPacts = false;
    public $showBanner = false;


    public function showUsers()
    {
        $this->showUsers = !$this->showUsers;
        $this->showPacts= false;
        $this->showBanner= false;

    }

    public function showPacts()
    {
        $this->showPacts = !$this->showPacts;
        $this->showUsers= false;
        $this->showBanner= false;

    }
    public function showBanner()
    {
        $this->showBanner = !$this->showBanner;
        $this->showUsers= false;
        $this->showPacts= false;

    }
    
    public function render()
    {

        return view(
            'livewire.admin.dashboard'
        );
    }
}
