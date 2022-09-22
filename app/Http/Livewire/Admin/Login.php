<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
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
        $success = auth('webadmin')->attempt([
            'email' => $this->email,
            'password' => $this->password,
        ], request()->has('remember'));
        if ($success) {
            return redirect()->route('admin.dashboard');
        }
        redirect()->route('admin.login');
    }
    public function render()
    {
        return view('livewire.admin.login');
    }
}
