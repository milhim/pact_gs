<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';


    public function register()
    {
        $data = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:5|same:passwordConfirmation',

        ]);
        Admin::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        return redirect()->route('admin.login');
    }
    public function updatedEmail(){
        return $this->validate(['email'=>'unique:admins']);
    }
    public function render()
    {
        return view('livewire.admin.register');
    }
}
