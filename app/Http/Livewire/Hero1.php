<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Hero1 extends Component
{
    public $index;
    public $html = '';


    public function mount($index)
    {
        $this->index = $index;
    }

    public function updatedHtml()
    {
        $this->emitUp('componentUpdated', 'hero1', $this->html);
    }

    public function render()
    {
        return view('livewire.hero1');
    }
}
