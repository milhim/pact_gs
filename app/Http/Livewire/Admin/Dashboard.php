<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Dashboard extends Component
{
    //users variable

    public $showP;
  
    public function mount(){
        $showP=Session::get('showP');
        if($showP){
            $this->showPacts();
        }
        $pactUpdated=Session::get('pactUpdated');
        if($pactUpdated){
            $this->showPacts();
        }

    }
    
    public function render()
    {

        return view(
            'livewire.admin.dashboard'
        );
    }
}
