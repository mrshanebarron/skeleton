<?php

namespace MrShaneBarron\skeleton\View\Components;

use Illuminate\View\Component;

class skeleton extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('ld-skeleton::components.skeleton');
    }
}
