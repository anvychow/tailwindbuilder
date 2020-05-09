<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sidebar extends Component
{

    public $css = '
    @tailwind base;

    @tailwind components;

    @tailwind utilities;
    ';

    public function updatedCss()
    {
        session(['css' => $this->css]);
    }

    public function render()
    {
        return view('livewire.sidebar');
    }
}
