<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="canonical" href="{{URL::current()}}" /> --}}
        <meta name='robots' content='noindex, nofollow' />

        <link rel="icon" href="{{ asset('images/logo.png') }}">

        <link rel="stylesheet" href="{{mix('css/app.css') }}">

        @php
            $descripcion = "Fotografías comentadas  de la Catedral de Santiago de Compostela";
            $title = "Fototeca de la Catedral de Santiago de Compostela";
        @endphp
        <title>{{$title}}</title>

        <meta name="description" content="{{$descripcion}}" />

	    <meta property="og:locale" content="es_ES" />

        <meta property="og:title" content="{{$title}}" />
        <meta property="og:description" content="{{$descripcion}}" />
        <meta property="og:locale" 	content="es_ES"/>
        <meta property="og:type" 	content="article"/>
        <meta property="og:url" content="{{URL::current()}}" />
        <meta property="og:site_name" content="catedraldesantiago.online" />
        {{-- <meta property="og:image" content="{{asset('storage/portadas/'.$elemento->urlPortada)}}" / --}}
        <meta property="og:image:width" content="950" />
	    <meta property="og:image:height" content="600" />



        <meta name="twitter:title" 				content="{{$title}}"/>
        <meta name="twitter:description" 		content="{{$descripcion}}"/>
        {{-- <meta name="twitter:image" 				content="{{asset('storage/portadas/'.$elemento->urlPortada)}}"/> --}}
        <meta name="twitter:site" 				content="@catedraldesant2"/>
        <meta name="twitter:creator" 			content="@catedraldesant2"/>
        <meta name="twitter:via" 				content="catedraldesant2"/>
        <meta name="twitter:url" 				content="{{URL::current()}}"/>
        <meta name="twitter:card" content="summary_large_image">


        <link rel="preload" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

       @livewireStyles
       @livewireScripts

    </head>
	<body class="bg-white">
        @include('cookie-consent::index')
        @livewire('navigation-menu')

        <main>
            {{--ENCABEZADO--}}
            <header>
                <div class="bg-black h-48 min-h-full pt-1 ">
                    <div class="pt-6" >
                        <a href="{{route('home')}}" >
                            <img class="text-white mx-auto" src="{{ asset('images/logoB.png') }}"  loading="lazy" alt="Logo Catedradesantiago.online" title="logo Catedraldesantiago.online" width="30" height="43">
                            <p class="text-center text-gray-300">catedraldesantiago.online</p>
                        </a>
                    </div>
                    <h1 class="text-xl md:text-3xl text-center font-semibold text-white ml-1 mr-1 mb-4 pt-4 "  >
                        Fototeca de la Catedral de Santiago de Compostela
                    </h1>
                </div>
            </header>
            @livewire('fototeca')





        </main>




        <section>
            <x-catedral-footer slug='fototeca-catedral-de-santiago'/>
        </section>

        <script async src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>










        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <script>
            const btnScrollToTop = document.querySelector('#btnScrollToTop');
            btnScrollToTop.addEventListener('click', function() {
                window.scrollTo({
                    top:0,
                    left:0,
                    behavior: "smooth"
                })
            });
        </script>


    </body>

 </html>




