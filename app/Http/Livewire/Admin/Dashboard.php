<?php

namespace App\Http\Livewire\Admin;

use App\Models\Pact;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Dashboard extends Component
{
    //users variable

    public $showP;
  
    public function mount(){
        Session::get('showP');
        Session::get('pactUpdated');
    }
    
    public function render()
    {

        return view(
            'livewire.admin.dashboard',[
                'usersCount'=>User::all()->count(),
                'pactsCount'=>Pact::all()->count(),

            ]
        );
    }
}
