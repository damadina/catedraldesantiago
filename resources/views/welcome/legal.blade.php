<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex">

        @php
        $literal = '';
        switch ($documento->tipo) {
            case 1:
                $literal = 'INFORMACIÓN LEGAL';
                $slugFooter = "legal";
                break;
            case 2:
                $literal = 'POLÍTICA DE PRIVACIDAD';
                $slugFooter = "privacidad";
                break;
            case 3:
                $literal = 'POLÍTICA DE COOKIES';
                $slugFooter = "cookies";
                break;
        }
        @endphp

        <title>{{$literal}}</title>


        <link rel="icon" href="{{ asset('images/logo.png') }}">

       {{--  <link rel="stylesheet" href="{{mix('css/app.css') }}"> --}}

       @vite(['resources/css/app.css', 'resources/js/app.js'])



       {{--  @livewireStyles --}}
        <!-- Global site tag (gtag.js) - Google Analytics -->
        {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZJDWZKPEHZ"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-ZJDWZKPEHZ');
        </script> --}}



    </head>
    @livewire('navigation-menu')
    <body>
    <section class="container">


        <h1 class="text-xl md:text-3xl font-semibold my-6 text-catedral text-center">{{$literal}}</h1>

        <div class="text-base md:text-xl pb-4">
            {!! $documento->texto !!}
        </div>



    </section>



    <section>
        <x-catedral-footer :slug='$slugFooter'/>
    </section>
    </body>
</html>
