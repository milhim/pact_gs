<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Profile extends Component
{

    public $name;
    public $email;
    public $saved = false;

    public function mount()
    {
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
        $this->saved=false;
    }
    public function update()
    {
        $data = $this->validate([
            'email' => 'required|email',
            'name' => 'required',

        ]);
        auth()->user()->update($data);
        $this->saved = true;
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
