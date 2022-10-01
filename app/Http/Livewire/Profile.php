<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Profile extends Component
{

    public $phone ;
    public $email ;
    public $password;
    public $passwordConfirmation;


    public $saved = false;


  
    public function updateInfo()
    {
        $data = $this->validate([
            'email' => 'required|email',
            'phone' => 'required',
        ]);
        auth('web')->user()->update([
            'email'=>$this->email,
            'phone'=>$this->phone,
        ]);
        $this->saved = true;
        $this->emit('closeModal');
    }
    public function updatePass()
{
    $data = $this->validate([
        'password' => 'required|min:5|same:passwordConfirmation',
    ]);
    auth('web')->user()->update([
        'password'=>Hash::make($this->password),
    ]);
    $this->saved = true;
    $this->emit('closeModal');
}
    public function mount()
    {
        $this->phone = auth()->user()->phone;
        $this->email = auth()->user()->email;
        $this->saved = false;
    }
    public function render()
    {
        
        return view('livewire.profile');
    }
}
