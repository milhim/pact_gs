<?php

namespace App\Http\Livewire\Admin;

use App\Models\Pact;
use Livewire\Component;

class Pacts extends Component
{
    protected $listeners = ['pactUpdated'];

    public $pacts;
    public Pact $pact;

    public $editForm = false;
    
    public function showEditForm(Pact $pact)
    {
        $this->pact = $pact;
        $this->editForm = !$this->editForm;
    }

    public function delete(Pact $pact)
    {
        $pact->delete();
        $this->mount();
    }

   
    public function pactUpdated()
    {
        $this->mount();
        $this->editForm = !$this->editForm;
    }
    public function mount()
    {
        $this->pacts = Pact::all();
    }
    public function render()
    {

       
        return view('livewire.admin.pacts');
    }
}
