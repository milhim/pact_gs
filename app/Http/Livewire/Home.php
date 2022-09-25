<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $pactsPage = false;

    public function showPactsPage()
    {
        $this->pactsPage = !$this->pactsPage;
    }
    public function render()
    {
        return view('livewire.home');
    }
}
