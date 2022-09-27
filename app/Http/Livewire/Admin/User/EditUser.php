<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class EditUser extends Component
{

public User $user;

    public $name;
    public $email;
    public $password;
    public $username;
    public $city;
    public $company;
    public $location;
    public $phone;
    public $Emp_number;
    public $passwordConfirmation = '';

    public function edit()
    {

        $data = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|same:passwordConfirmation',
            'username' => 'required|unique:users',
            'phone' => 'required|unique:users',
            'company' => 'required',
            'city' => 'required',
            'location' => 'required',
            'Emp_number' => 'required|unique:users',


        ]);
        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'username' => $this->username,
            'phone' => $this->phone,
            'company' => $this->company,
            'city' => $this->city,
            'location' => $this->location,
            'Emp_number' => $this->Emp_number,
        ]);

        $this->emit('userUpdated');

    }

    public function mount(){
        $this->name=$this->user->name;
        $this->email=$this->user->email;
        $this->username=$this->user->username;
        $this->city=$this->user->city;
        $this->company=$this->user->company;
        $this->location=$this->user->location;
        $this->phone=$this->user->phone;
        $this->Emp_number=$this->user->Emp_number;
    }
    public function render()
    {
        return view('livewire.admin.user.edit-user');
    }
}
