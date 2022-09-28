<?php

namespace App\Http\Livewire\Admin\Pact;

use App\Models\Pact;
use App\Models\User;
use Livewire\Component;

class EditPact extends Component
{
    public $englishForm = true;
    public $arabicForm = false;

    public function showEnglishForm()
    {
        app()->setlocale('en');
        $this->englishForm = true;
        $this->arabicForm = false;
    }

    public function showArabicForm()
    {
        app()->setlocale('ar');
        $this->arabicForm = true;
        $this->englishForm = false;
    }

    public $serialNumber = '';
    //english pars
    public $en_type = '';
    public $en_model = '';
    public $en_noteOne = '';
    public $en_noteTwo = '';
    public $en_accessoar = '';
    public $en_status = '';

    //arabic pars
    public $ar_type = '';
    public $ar_model = '';
    public $ar_noteOne = '';
    public $ar_noteTwo = '';
    public $ar_accessoar = '';
    public $ar_status = '';
    //
    public Pact $pact;
    public  $selectedUsers = [];

    public  $users;


    public function update()
    {
        $data = $this->validate([
            'serialNumber' => 'required',
            'selectedUsers' => 'required',

            'en_type' => 'required',
            'en_model' => 'required',
            'en_noteOne' => 'required',
            'en_noteTwo' => 'required',
            'en_accessoar' => 'required',
            'en_status' => 'required',
            //
            'ar_type' => 'required',
            'ar_model' => 'required',
            'ar_noteOne' => 'required',
            'ar_noteTwo' => 'required',
            'ar_accessoar' => 'required',
            'ar_status' => 'required',
        ]);


        $this->pact->update([
            'serial_number' => $this->serialNumber,

            'en' => [
                'type' => $this->en_type,
                'model' => $this->en_model,
                'noteOne' => $this->en_noteOne,
                'noteTwo' => $this->en_noteTwo,
                'accessoar' => $this->en_accessoar,
                'status' => $this->en_status,
            ],
            'ar' => [
                'type' => $this->ar_type,
                'model' => $this->ar_model,
                'noteOne' => $this->ar_noteOne,
                'noteTwo' => $this->ar_noteTwo,
                'accessoar' => $this->ar_accessoar,
                'status' => $this->ar_status,
            ],
        ]);
        $this->pact->users()->detach();
        foreach ($this->selectedUsers as $user) {
        
            $this->pact->users()->attach($user);
        }
        return redirect()->route('admin.dashboard')->with( ['pactUpdated' =>true] );


    }

    public function mount(Pact $pact)
    {
        $this->users = User::all();
        $this->pact=$pact;
        $this->serialNumber = $this->pact->serial_number;

        //en
        $this->en_type = $this->pact->translate('en')->type;
        $this->en_model = $this->pact->translate('en')->model;
        $this->en_noteOne = $this->pact->translate('en')->noteOne;
        $this->en_noteTwo = $this->pact->translate('en')->noteTwo;
        $this->en_accessoar = $this->pact->translate('en')->accessoar;
        $this->en_status = $this->pact->translate('en')->status;

        //ar
        $this->ar_type = $this->pact->translate('ar')->type;
        $this->ar_model = $this->pact->translate('ar')->model;
        $this->ar_noteOne = $this->pact->translate('ar')->noteOne;
        $this->ar_noteTwo = $this->pact->translate('ar')->noteTwo;
        $this->ar_accessoar = $this->pact->translate('ar')->accessoar;
        $this->ar_status = $this->pact->translate('ar')->status;
    }
    public function render()
    {

        return view('livewire.admin.pact.edit-pact');
    }
}
