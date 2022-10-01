<?php

namespace App\Http\Livewire\Admin\Pact;

use App\Models\Pact;
use Livewire\Component;
use Livewire\WithPagination;

class AllPacts extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public Pact $pact;
    public function mount(Pact $pact){
        $this->pact=$pact;
    }

    public function render()
    {
        return view('livewire.admin.pact.all-pacts',[
            'pact'=>$this->pact
        ]);
    }
}
