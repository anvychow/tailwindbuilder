<?php

namespace App\Http\Livewire;

use App\Element;
use League\Flysystem\Filesystem;
use League\Flysystem\Memory\MemoryAdapter;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Support\Str;

class PageBuilder extends Component
{

    public $includes = array();
    public $html = array();
    public $computed = '';
    public $config = array(
        'title' => 'Tailwind Builder',
        'meta' => '',
    );

    protected $listeners = [
        'componentUpdated' => 'storeUpdatedHTML',
        'componentRemoved' => 'removeComponent',
        'componentMoved' => 'componentMoved',
        'computeHTML' => 'computeHTML'
    ];

    public function removeComponent($uuid)
    {
        unset($this->includes[$uuid]);
        $this->emitSelf('computeHTML');
    }

    public function componentMoved($direction, $uuid)
    {
        $index = 0;
        $includes = $this->includes;
        $collect = collect($this->includes);
        $last = ($collect->count() - 1);
        $keys = $collect->keys();
        $newArray = $keys->all();
        $index = $keys->search($uuid);

        if ($direction == 'up' && $index > 0) {

            $out = array_splice($newArray, $index, 1);
            array_splice($newArray, ($index - 1), 0, $out);
            // dd($newArray);
            $collection = collect($newArray);
            $keyed = $collection->mapWithKeys(function ($item) use ($includes) {
                return [$item => $includes[$item]];
            });
            $this->includes = $keyed->all();
            // $this->emit('selfRefresh');
        }

        if ($direction == 'down' && $index < $last) {
            $out = array_splice($newArray, $index, 1);
            array_splice($newArray, ($index + 1), 0, $out);
            // dd($newArray);
            $collection = collect($newArray);
            $keyed = $collection->mapWithKeys(function ($item) use ($includes) {
                return [$item => $includes[$item]];
            });
            $this->includes = $keyed->all();
        }
        $this->emitSelf('computeHTML');
    }

    public function storeUpdatedHTML($uuid, $html)
    {
        $this->includes[$uuid]['html'] = $html;
        $this->emitSelf('computeHTML');
    }

    

    public function export()
    {
        // dd($this->html);
        
        // $html = $html->implode(',');
        // $flattened->all();
        // $filesystem = new Filesystem(new MemoryAdapter());
        // $filesystem->write('test.html', $html);
        // $contents = $filesystem->read('test.html');
        // dd($contents);
        // $resource = $filesystem->readStream('test.html');
        // dd($response);
        // return response()->streamDownload(function () {
        //     echo $html;
        // }, 'test.html');
    }

    public function addComponent($element)
    {
        $id = (string) Str::uuid();
        $elem = Element::find($element);
        $this->includes[$id] = array(
            'id' => $element, 
            'html' => $elem->html
        );
        $this->emitSelf('computeHTML');
    }

    public function mount()
    {
        session(['computed' => '']);
    }

    public function computeHTML()
    {
        $collection = collect($this->includes);
        $plucked = $collection->pluck('html');
        $flat = $plucked->flatten();
        $flattened = $flat->implode(',');
        $starter = '<!doctype html>

        <html lang="en">
        <head>
          <meta charset="utf-8">
        
          <title>'.$this->config['title'].'</title>
          <meta name="description" content="The HTML5 Herald">
          <meta name="author" content="SitePoint">
        
          <link href="output.css" rel="stylesheet">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/ui@latest/dist/tailwind-ui.min.css">
          <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
          <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        </head>
        
        <body>
          '.$flattened.'
        </body>
        </html>';
        $this->computed = $starter;
        session(['computed' => $this->computed]);
    }

    public function render()
    {
        return view('livewire.page-builder', [
            'elements' => Element::all()
        ]);
    }
}
