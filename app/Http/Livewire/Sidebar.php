<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Sidebar extends Component
{

    public $css = '
    @tailwind base;

    @tailwind components;

    @tailwind utilities;
    ';

    public $config = "
    const defaultTheme = require('tailwindcss/defaultTheme')

    module.exports = {
        theme: {
            extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            },
        },
        plugins: [
            require('@tailwindcss/ui'),
        ]
    }";

    public $title = 'Tailwind Builder';

    public function mount()
    {
        $this->save();
    }

    public function save() 
    {
        $response = Http::post('https://adoring-jones-e91857.netlify.app/.netlify/functions/index', [
            'css' => $this->css,
            'config' => $this->config
        ]);
        
        // dd($response->body());
        session(['css' => $response->body()]);
    }

    public function render()
    {
        return view('livewire.sidebar');
    }
}
