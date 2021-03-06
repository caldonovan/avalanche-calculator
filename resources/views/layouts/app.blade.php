<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} | {{ ucwords(str_replace('.', ' - ', str_replace('-', ' ', str_replace('.show', '', Route::currentRouteName())))) }}</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        
        @stack('styles')

        @stack('scripts')

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">

        <livewire:sidebar/>

        <livewire:navigation-menu/>

        <div class="min-h-screen bg-gray-100">
            <main class="md:pl-72">
                <div class="md:py-8">
                    <div class="flex-col max-w-7xl mx-auto sm:px-8 space-y-8">
                        {{ $slot }}
                    </div>
                </div>
            </main>
        </div>

        @stack('modals')

        @stack('finalscripts')

        @livewireScripts
    </body>
</html>