<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $username = '';
    public $password = '';
    public function login()
    {
        $data = $this->validate([
            'username' => 'required',
            'password' => 'required',

        ]);
        $success = auth('web')->attempt([
            'username' => $this->username,
            'password' => $this->password,
        ], request()->has('remember'));
        if ($success) {
            return redirect()->route('user.home');
        }
        $this->addError('wrongUserInfo', 'Wrong username or password');
        return redirect()->back();
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
