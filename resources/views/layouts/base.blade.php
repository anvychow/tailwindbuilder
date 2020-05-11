<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @hasSection('title')
            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
    </head>

    <body>
        @yield('body')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.11/ace.min.js" integrity="sha256-qCCcAHv/Z0u7K344shsZKUF2NR+59ooA3XWRj0LPGIQ=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.11/theme-monokai.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.11/mode-html.min.js" integrity="sha256-8aEDsT3fJnCq8IGSLFXY8cU/KxmWhTZ9IZuRT9cQx64=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.11/worker-javascript.js" integrity="sha256-MymZwo0XsvYAXCXxxEnd6swiDgTJUfx3ilvZ5gIG9Eo=" crossorigin="anonymous"></script>
        <script src="{{ mix('js/app.js') }}"></script>
        @livewireScripts
    </body>
</html>
