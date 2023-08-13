<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        @vite('resources/css/app.css')
        @livewireStyles
    </head>

    <body class="bg-gray-900 text-gray-400">
        @include('layouts.includes.header')
        @yield('content')

        @vite('resources/js/app.js')
        @livewireScripts
        @stack('scripts')
    </body>
</html>