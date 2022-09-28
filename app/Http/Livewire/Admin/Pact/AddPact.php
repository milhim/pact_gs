<?php

namespace App\Http\Livewire\Admin\Pact;

use App\Models\Pact;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AddPact extends Component
{
    public $englishForm=true;
    public $arabicForm=false;

    public function showEnglishForm(){
        app()->setlocale('en');
        $this->englishForm=true;
        $this->arabicForm=false;
 
    }

    public function showArabicForm(){
        app()->setlocale('ar');
        $this->arabicForm=true;
        $this->englishForm=false;
 
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
    public User $user ;
    public  $selectedUsers=[] ;

    public  $users ;


    public function register()
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
      $pact=  Pact::create([
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
        foreach($this->selectedUsers as $user){
            $pact->users()->attach($user);
        }

        return redirect()->route('admin.dashboard')->with( ['showP' =>true] );
    }

    public function mount()
    {
        $this->users = User::all();
    }
    public function render()
    {
        return view('livewire.admin.pact.add-pact');
    }
}
