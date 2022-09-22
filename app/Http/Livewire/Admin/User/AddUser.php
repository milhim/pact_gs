<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AddUser extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';
    public $username = '';
    public $city = '';
    public $company = '';
    public $location = '';
    public $phone = '';
    public $Emp_number;
    public $passwordConfirmation = '';




    public function register()
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
            'Emp_number' => 'required',


        ]);
        User::create([
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
        $this->emit('reRenderParent');

        return redirect()->route('admin.dashboard');
        $this->emit('reRenderParent');
    }
    public function updatedEmail()
    {
        return $this->validate(['email' => 'unique:users']);
    }
    public function updatedPhone()
    {
        return $this->validate(['phone' => 'unique:users']);
    }
    public function updatedUsername()
    {
        return $this->validate(['username' => 'unique:users']);
    }
    public function render()
    {
        return view('livewire.admin.user.add-user');
    }
}
