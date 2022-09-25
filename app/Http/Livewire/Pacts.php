<?php

namespace App\Http\Livewire;

use App\Models\Pact;
use App\Models\User;
use Livewire\Component;

class Pacts extends Component
{
    public User $user;
    public $pacts;

    public function mount(){
        $this->user=auth()->user();
        $this->pacts=$this->user->pacts;
    }

    public function render()
    {
        return view('livewire.pacts');
    }
}
