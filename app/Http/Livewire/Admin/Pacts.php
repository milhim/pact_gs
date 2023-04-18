<?php

namespace App\Http\Livewire\Admin;

use App\Models\Pact;
use Livewire\Component;
use Livewire\WithPagination;

class Pacts extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    protected $listeners = ['pactUpdated'];

    public $pacts;
    public Pact $pact;

    public $searchTerm="";


    public function delete(Pact $pact)
    {
        $pact->delete();
        $this->mount();
        session()->flash('pactDeleted', 'Pact successfully Deleted.');
    }


    public function pactUpdated()
    {
        $this->mount();
        session()->flash('pactUpdated', 'PAct successfully Added.');
    }
    public function mount()
    {
        $this->pacts = Pact::all();
    }
    public function render()
    {
        return view('livewire.admin.pacts', [
            'pactsPag' => Pact::where('serial_number','like','%'.$this->searchTerm.'%')->orderBy('created_at','desc')->paginate(4)
        ]);
    }
}
