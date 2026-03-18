<?php

namespace App\Http\Livewire\Inc;

use App\Enums\PageShortCodeEnum;
use App\Models\StaticPage;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class ViewMore extends Component
{
   public $sliders;
    public function mount()
    {
        $this->sliders = \App\Models\Slider::footerSlider();
    }
    public function render()
    {
        return view('livewire.inc.view-more');
    }
}
