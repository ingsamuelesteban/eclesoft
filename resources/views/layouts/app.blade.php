<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <title>{{ config('app.name', 'Eclesoft') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
        @stack('styles')

    </head>
    <body class="font-sans antialiased">
        @csrf
        @if (Auth::user()->departamento ==2)
        @include('layouts.navigation')
        @endif
      
        <!-- Page Heading -->
        <header class="bg-white shadow">
        
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

                {{ $header }}
            </div>
        </header>
        @if (Auth::user()->departamento ==1)
        @include('layouts.navigationobispado')
        @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <footer class="text-center p-5 text-gray-500 font-bold uppercase">Eclesoft {{now()->year}}, Todos los derechos reservados Ing. Samuel Esteban.</footer>
        </div>

        @livewireScripts
        @stack('scripts')
    </body>
</html>
