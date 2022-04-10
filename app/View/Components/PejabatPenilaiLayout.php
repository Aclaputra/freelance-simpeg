<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PejabatPenilaiLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('pejabat_penilai.layouts.app');
    }
}
