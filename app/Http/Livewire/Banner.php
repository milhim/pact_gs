<?php

namespace App\Http\Livewire;

use App\Models\Banner as ModelsBanner;
use Livewire\Component;

class Banner extends Component
{
    public ModelsBanner $banner;

    public function mount(){
        $this->banner=ModelsBanner::first();
    }
    public function render()
    {
        return view('livewire.banner');
    }
}
