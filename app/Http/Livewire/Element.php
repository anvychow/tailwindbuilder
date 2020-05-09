<?php

namespace App\Http\Livewire;

use App\Element as PageElem;
use Livewire\Component;

class Element extends Component
{
    public $uuid = '';
    public $html = '';
    public $type = '';


    public function mount($uuid, $element)
    {
        $this->uuid = $uuid;
        $elem = PageElem::find($element);
        // dd($elem);
        // $this->type = $type;
        $this->html = $elem->html;
        
        $this->emitUp('componentUpdated', $this->uuid, $this->html);
    }

    public function delete()
    {
        $this->emitUp('componentRemoved', $this->uuid);
    }

    public function moveUp()
    {
        $this->emitUp('componentMoved', 'up', $this->uuid);
    }

    public function moveDown()
    {
        $this->emitUp('componentMoved', 'down', $this->uuid);
    }

    public function updatedHtml()
    {
        $this->emitUp('componentUpdated', $this->uuid, $this->html);
    }

    public function render()
    {
        return view('livewire.element');
    }
}
