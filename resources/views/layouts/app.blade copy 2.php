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




    <body class="font-sans antialiased" itemscope = "" itemtype = "https://schema.org/WebPage" >

        @include('cookie-consent::index')

        @isset($overMenu)
            {{$overMenu}}
        @endisset
        @livewire('navigation-menu')
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

