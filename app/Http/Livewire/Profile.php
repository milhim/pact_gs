<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Profile extends Component
{

    public $phone = '';
    public $email = '';
    public $password='';
    public $passwordConfirmation='';


    public $saved = false;
    public $editForm = false;


    public function showEditForm()
    {
        $this->editForm = !$this->editForm;
    }
  
    public function update()
    {
        $data = $this->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required|min:5|same:passwordConfirmation',
        ]);
        auth('web')->user()->update([
            'email'=>$this->email,
            'phone'=>$this->phone,
            'password'=>Hash::make($this->password),
        ]);
        $this->saved = true;
        $this->editForm = !$this->editForm;
        $this->render();
    }
    public function mount()
    {
        $this->phone = auth()->user()->phone;
        $this->email = auth()->user()->email;
        $this->reset('password');
        $this->reset('passwordConfirmation');

        $this->saved = false;
    }
    public function render()
    {
        return view('livewire.profile');
    }
}
