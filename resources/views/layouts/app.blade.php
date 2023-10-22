<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @if (env('APP_ENV') == 'production')
        <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZJDWZKPEHZ"></script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-ZJDWZKPEHZ');
            </script>
        @else
            <meta name="robots" content="index">
        @endif


        @isset($masHead)
            {{$masHead}}
        @endisset

        @isset($schema)
            {{$schema}}
        @endisset
        @isset($social)
            {{$social}}
        @endisset
    {{--     @livewireStyles --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <div itemscope itemtype="https://schema.org/WebSite">
        <meta itemprop="name" content="Catedral de Santiago de Compostela">
        <meta itemprop="url" content="{{ URL::to('/') }}">
    </div>


    <body class="font-sans antialiased"  >


        @include('cookie-consent::index')

        @isset($overMenu)
            {{$overMenu}}
        @endisset
       {{--  <div class="md:sticky top-0 z-50 w-full"> --}}
        <div class="flex justify-center items-center py-1 sticky top-0 z-50 bg-catedral">
            <a  href="{{ route('home') }}">
                <x-jet-application-mark class="block h-9 " />
            </a>
            <div class="ml-2 text-center text-white tracking-widest font-semibold text-xs sm:text-xl">
                Catedral de Santiago de Compostela
            </div>
        </div>

        <div class="w-full">
        {{-- <div class=" top-0 z-50 w-full"> --}}
            @livewire('navigation-menu')
        </div>

        <!-- Page Heading -->
        <main>
            <!-- Page Content -->
            {{ $slot }}
        </main>

        @isset($footer)
            {{$footer}}
        @endisset





        @stack('js')


        @isset($js)
             {{$js}}
        @endisset
        @livewireScripts
    </body>
</html>

