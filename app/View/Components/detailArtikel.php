<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class detailArtikel extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        
        public $picture = "/assets/images/yoga.png",
        public $like = 0,
        public $saved = 0,
        public $description = "Manfaat yoga di pagi hari untuk Hipertensi, bisa kontrol tekanan darah? Apa benar?")
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.detail-artikel');
    }
}
