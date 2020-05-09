<?php

namespace App\Http\Livewire;

use League\Flysystem\Filesystem;
use League\Flysystem\Memory\MemoryAdapter;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class PageBuilder extends Component
{
    public $addedMessageVisible = '';

    public $html = array();
    public $computed = '';
    public $config = '';

    public $includes = array();

    protected $listeners = [
        'postAdded' => 'showPostAddedMessage',
        'componentUpdated' => 'storeUpdatedHTML'
    ];

    public function showPostAddedMessage($param)
    {
        array_push($this->includes, $param);
        // array_push($this->html, $param);
    }

    public function storeUpdatedHTML($key, $html)
    {
        $this->html[$key] = $html;
        $collection = collect($this->html);
        $flat = $collection->flatten();
        $flattened = $flat->implode(',');
        $starter = '<!doctype html>

        <html lang="en">
        <head>
          <meta charset="utf-8">
        
          <title>The HTML5 Herald</title>
          <meta name="description" content="The HTML5 Herald">
          <meta name="author" content="SitePoint">
        
          <link href="output.css" rel="stylesheet">
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

    public function render()
    {
        return view('livewire.page-builder', [
            'includes' => $this->includes
        ]);
    }
}
