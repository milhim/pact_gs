<?php

namespace App\Http\Livewire\Admin;

use App\Models\Banner as ModelsBanner;
use Livewire\Component;

class Banner extends Component
{
    public $englishForm = true;
    public $arabicForm = false;
    public $addBanner = false;
    public $bannerTable = true;


    public $en_bannerTitle = '';
    public $en_bannerBody = '';

    public $ar_bannerTitle = '';
    public $ar_bannerBody = '';


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
    public $banner;

    public function showForms()
    {
        $this->addBanner = !$this->addBanner;
        $this->bannerTable = !$this->bannerTable;

    }


    public function saveBanner()
    {
        $data = $this->validate([
            'ar_bannerTitle' => 'required',
            'ar_bannerBody' => 'required',
            'en_bannerTitle' => 'required',
            'en_bannerBody' => 'required',
        ]);
        $banner = ModelsBanner::first();
        if ($banner) {
            $banner->update([
                'en' => [
                    'bannerTitle' => $this->en_bannerTitle,
                    'bannerBody' => $this->en_bannerBody,
                ],
                'ar' => [
                    'bannerTitle' => $this->ar_bannerTitle,
                    'bannerBody' => $this->ar_bannerBody,
                ],
            ]);
            session()->flash('bannerUpdated','Banner has been updated');

        } else {
            ModelsBanner::create([
                'en' => [
                    'bannerTitle' => $this->en_bannerTitle,
                    'bannerBody' => $this->en_bannerBody,
                ],
                'ar' => [
                    'bannerTitle' => $this->ar_bannerTitle,
                    'bannerBody' => $this->ar_bannerBody,
                ],
            ]);
            session()->flash('bannerCreated','Banner has been Created');

        }

        $this->mount();
    }

    public function mount()
    {
        $this->addBanner = false;
        $this->bannerTable = true;

        $this->banner = ModelsBanner::first();
        if($this->banner){
            $this->en_bannerBody=$this->banner->translate('en')->bannerBody;
            $this->en_bannerTitle=$this->banner->translate('en')->bannerTitle;

            $this->ar_bannerBody=$this->banner->translate('ar')->bannerBody;
            $this->ar_bannerTitle=$this->banner->translate('ar')->bannerTitle;

        }
    }
    public function render()
    {
        return view('livewire.admin.banner');
    }
}
