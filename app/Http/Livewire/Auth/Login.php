<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $email = '';
    public $password = '';
    public function login()
    {
        $data = $this->validate([
            'email' => 'required|email',
            'password' => 'required',

        ]);
        $success = auth('web')->attempt([
            'email' => $this->email,
            'password' => $this->password,
        ], request()->has('remember'));
        if ($success) {
            return redirect()->route('user.home');
        }
        redirect()->back();
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
