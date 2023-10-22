<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if (App::environment('production'))
        <meta name='robots' content='index, follow'>
    @else
        <meta name="robots" content="noindex">
    @endif

    <title>{{ $elemento->visitante }}</title>

    <meta name="description" content="{{ $elemento->seoDescription }}">
    <meta name="facebook-domain-verification" content="xzqmzvdk6hm2gb4vtpj09qbsqjcmcz">


    <link rel="canonical" href="{{ URL::current() }}">



    <link rel="icon" href="{{ asset('images/logo.png') }}">


    <meta property="og:locale" content="es_ES">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ URL::current() }}">
    <meta property="og:title" content="{{ $elemento->name . '- Catedral de Santiago' }}">
    <meta property="og:description" content="{{ $elemento->seoDescription }}">
    <meta property="og:image" content="{{ URL::to('/') }}/storage/portadascard/{{ $elemento->urlPortada }}">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:site_name" content="Catedral de Santiago">
    <meta property="article:publisher" content="https://catedraldesantiago.online">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $elemento->visitante }}">
    <meta name="twitter:description" content="{{ $elemento->seoDescription }}">
    <meta name="twitter:image" content="{{ URL::to('/') }}/storage/portadascard/{{ $elemento->urlPortada }}">


    {{-- @php
        $urlfotos = [];
        $urlfotosfull = [];
        $urlcomen = [];
        $urlalt = [];
        foreach ($fotos as $item) {
            array_push($urlfotos, asset('storage/fotos/' . $elemento->id . '/thumbnail/' . $item->url));
            array_push($urlfotosfull, asset('storage/fotos/' . $elemento->id . '/original/' . $item->url));
            array_push($urlcomen, $item->piefoto);
            array_push($urlalt, $item->alt);
        }

        $h1 = $elemento->name;
        $h1 = str_replace('- Santiago de Compostela', ' ', $h1);

        $fondo = 'bg-gray-50';
        $palabrasArticulo = str_word_count(strip_tags($elemento->resumen, 0));
        foreach ($reports as $item) {
            $palabrasArticulo = $palabrasArticulo + str_word_count(strip_tags($item->titulo, 0));
            $palabrasArticulo = $palabrasArticulo + str_word_count(strip_tags($item->respuesta, 0));
        }
        $imagenArticulo = $fotos[0]->url;

    @endphp --}}

    {{-- <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}"> --}}

    @include('welcome.includes.jsonCatedralPost')

    {{-- <link rel="preload" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'"> --}}

    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts
    <style>
        .fancybox__container {
            --fancybox-thumbs-border-radius: 50%;
            --fancybox-thumbs-ratio: 1;

            --fancybox-thumbs-width: 50px;
            --fancybox-thumbs-height: 50px;

            --fancybox-accent-color: #f472b6;
        }


        .text-shadow-lg {
                text-shadow: 2px 2px #000000;
         }
    </style>

    @if (App::environment('production'))
    <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZJDWZKPEHZ"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-ZJDWZKPEHZ');
        </script>
    @endif






</head>



<body>
    @include('cookie-consent::index')

    @php

        $value = url()->current();
        session(['REDIRECT' => $value]);
    @endphp

        @livewire('navigation-menu')
        <main>
            <article>

                    <header>


                        @php
                            $item = $fotos[0];
                        @endphp
                        <div class="relative">
                            <div class="w-full h-screen">
                                <img
                                src="{{ asset('storage/portadas' . '/' . $elemento->urlPortada) }}"
                                class="object-cover object-center w-full h-full"
                                alt="{{ $elemento->name }}" >
                            </div>
                            <div class="container  absolute  left-1/2 transform -translate-x-1/2  top-10 md:top-30 lg:top-40">

                                <h1 class=" text-center text-white text-shadow-lg font-semibold text-base sm:text-xl  md:text-3xl lg:text-5xl tracking-[.15em]  italic">
                                    {{ $elemento->name }}
                                </h1>

                                <p class="mt-6 bg-black bg-opacity-30 hidden md:block pt-4 px-2 md:px-4 text-shadow-lg  text-gray-100 text-center italic  text-xs md:text-xl tracking-[.15em] md:leading-8">
                                    {{ $elemento->seoDescription }}
                                </p>

                                <nav class="mt-6 md:mt-10 container ">
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:px-0 md:gap-2 lg:px-20">
                                        <a href="#historia" class="px-0.5 py-0.5 text-shadow-lg text-xs sm:text-base md:text-xl font-semibold text-white">
                                            <div class=" bg-black bg-opacity-20 text-center  border border-white rounded-lg hover:border-2 hover:bg-black">
                                                    Historia
                                            </div>
                                        </a>
                                        <a href="#fotos" class="px-0.5 py-0.5 text-shadow-lg text-xs sm:text-base md:text-xl font-semibold text-white">
                                            <div class=" bg-black bg-opacity-20 text-center  border border-white rounded-lg hover:border-2 hover:bg-black">
                                                    Fotografías
                                            </div>
                                        </a>

                                        <a href="#planoCatedral" class="px-0.5 py-0.5 text-shadow-lg text-xs sm:text-base md:text-xl font-semibold text-white">
                                            <div class="bg-black bg-opacity-20 text-center  border border-white rounded-lg hover:border-2 hover:bg-black">
                                                Situación
                                            </div>
                                        </a>

                                        <a href="{{route('turismo')}}" class="px-0.5 py-0.5 text-shadow-lg text-xs sm:text-base md:text-xl font-semibold text-white">
                                            <div class="bg-black bg-opacity-20 text-center  border border-white rounded-lg hover:border-2 hover:bg-black">
                                                <i class="fas fa-info mr-4 text-xs md:text-base"></i>
                                                Turistas
                                            </div>
                                        </a>


                                    </div>

                                </nav>
                                <div class="mt-4 mx-5 md:mx-40 md:mt-10">
                                    @livewire('search')
                                </div>
                            </div>

                        </div>
                    </header>







                    <div class="container indent-8 text-gray-700 text-lg mt-6 sm:text-xl tracking-wide">
                        {!! $elemento->resumen !!}
                    </div>
                    <div class="container">
                        {{-- fotos --}}
                        <p id="fotos" class="container italic text-gray-500 scroll-mt-24">Fotografías</p>
                        <div
                            class=" container flex  mb-6 overflow-x-auto overflow-y-hidden scroll-px-2 snap-x scrollbar  scrollbar-thumb-catedralbar scrollbar-track-catedral scrollbar-thumb-rounded-full scrollbar-track-rounded-full">


                            @foreach ($fotos as $item)
                                <div>

                                    <figure class="flex-grow-0 flex-shrink-0 mr-6  w-80 h-80 snap-center object-center">

                                        <img loading="lazy" src="{{ asset('storage/fotos/' . $elemento->id . '/original/' . $item->url) }}" data-fancybox="gallery" data-caption="{{ $item->piefoto }}"
                                            class="object-cover w-full h-full hover:cursor-all-scroll "
                                            alt="{{ Str::limit($item->piefoto,80) }}">

                                    </figure>



                                    <p class="p-2 w-80 mb-6 text-xs bg-gray-800 text-white text-left h-16">{{ $item->piefoto }}</p>
                                </div>
                            @endforeach
                        </div>
                        {{-- Videos --}}
                        @if ($videos->count())
                            <p id="videos" class="container italic text-gray-500 scroll-mt-24">Videos</p>
                            <div
                                class=" container flex  mb-6 overflow-y-hidden scroll-px-2 snap-x scrollbar  scrollbar-thumb-catedralbar scrollbar-track-catedral scrollbar-thumb-rounded-full scrollbar-track-rounded-full">
                                @foreach ($videos as $item)
                                    @php
                                        $finalUrl = basename($item->url);
                                        $urlImag = 'https://img.youtube.com/vi/' . $finalUrl . '/sddefault.jpg';
                                    @endphp


                                    <div class="flex-grow-0 flex-shrink-0 mr-6  w-80 h-80 snap-center object-center relative">
                                        <a data-fancybox href="{{ $item->url }}" rel="nofollow">
                                            <img loading="lazy" src="{{ $urlImag }}" alt="{{ $item->titulo }}">
                                        </a>
                                        <i class="text-white font-bold text-2xl absolute top-1/2 left-1/2 fas fa-play"></i>
                                        <div class="">
                                            <p class="">{{ $item->titulo }}</p>
                                        </div>
                                    </div>
                                    {{-- <p class="p-2 w-80 mb-6 text-xs bg-gray-800 text-white text-left h-16">{{ $item->piefoto }}</p> --}}
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <hr class="h-1 mt-10 bg-gray-200">




                    {{-- Informes --}}
                    <div id="historia" class="container mb-24">

                        @if($reports->count() ==1)
                            <h2 class="text-catedral font-semibold pt-16 pb-8 text-center  text-xs md:text-2xl  tracking-[.15em]">HISTORIA {{strtoupper($elemento->prefijoH1.' '.$elemento->name)}}</h2>
                            <div class="mt-3 indent-8 text-base md:text-xl text-black ">
                                {!! $reports[0]->respuesta !!}
                            </div><div class="">
                                @livewire('welcome.infos-reviews',['info' => $reports[0]])
                            </div>

                        @else
                            <h2 class="text-catedral font-semibold pt-16 pb-8 text-center  text-xs md:text-2xl  tracking-[.15em]">HISTORIA {{strtoupper($elemento->prefijoH1.' '.$elemento->name)}}</h2>
                            @foreach ($reports as $item)
                                <div class="">
                                    @php
                                        $newIndex = $loop->index + 50;

                                    @endphp

                                    <div class="pt-6  mx-auto space-y-2">
                                        <details class="p-2 md:p-4 w-full rounded-lg bg-gray-50 shadow-lg ">
                                            <summary id="{{ str_replace(' ', '_', $item->titulo) }}"
                                                class="text-sm leading-6 font-semibolds scroll-mt-16 hover:cursor-pointer ">

                                                <h3 class="text-catedral inline ml-2  text-sm sm:text-xl md:text-xl">{{ $item->titulo}}</h3>



                                            </summary>

                                            <div class="mt-3 indent-8 text-base md:text-xl text-black ">
                                                {!! $item->respuesta !!}
                                            </div>
                                            @if($item->autor == 'Salvador Yzquierdo Peiró. Historiador')
                                                <div class="mt-3">
                                                    <p class="text-right font-semibold">{{$item->autor}}</p>
                                                    <p  class="text-right italic"><a href="{{route('bibliografia')}}">Bibligrafía</a></p>
                                                </div>
                                            @endif

                                            <div class="">
                                                @livewire('welcome.infos-reviews',['info' => $reports[0]])
                                            </div>
                                        </details>
                                    </div>

                                </div>
                            @endforeach

                        @endif

                        @if ($elemento->id == 44)

                            <div
                                class="max-w-7xl mx-auto px-4  pb-4 sm:px-6 lg:px-8 grid grid-cols-1  md:grid-cols-3  gap-x-6 gap-y-8 pt-8">
                                @foreach ($planos as $item)
                                    <div class="mx-auto">
                                        <a href="{{ asset('storage/planos/' . $item->url) }}" data-fancybox="group"
                                            data-caption="{{ $item->piePlano }}">
                                            <img loading="lazy" class="rounded" width="150" height="100"
                                                src="{{ asset('storage/planos/' . $item->url) }}" alt="{{ $item->piePlano }}">
                                        </a>
                                        <p class="text-center text-black font-semibold">{{ $item->piePlano }}</p>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <hr class="h-1 mt-10 bg-gray-200">

                    {{-- Plano --}}
                    <div id="planoCatedral" class="container ">
                        <h2 id="900"
                            class=" text-catedral font-semibold pt-16 pb-8  text-center  text-xs md:text-2xl  tracking-[.15em] scroll-mt-24">
                            SITUACIÓN DE LA {{ strtoupper($elemento->prefijoH1) }} {{ strtoupper($elemento->name) }}</h2>


                        <img src="{{ asset('images/PlanoCatedral.jpg') }}"
                            alt="Plano de la Catedral de Santiago de Compostela">



                    </div>

                    {{-- Tambien te puede interesar --}}
                    @if ($literal != 'SINLITERAL')
                        <hr class="h-1 mt-4 bg-gray-200">
                        <div id="otras" class="scroll-mt-24">
                            <div class="mx-auto w-full px-4 pb-8">
                                <h2 class="container py-4 font-semibold text-black  text-xl md:text-2xl  tracking-[.15em]">
                                    Además {{ $elemento->prefijoH1 }} {{ $elemento->name }} te pueden interesar
                                    {{ $literal }}</h2>
                                    <div class="container grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-x-3 gap-y-3">
                                        @foreach ($interes as $item )
                                            <x-card-elemento :item="$item"/>
                                        @endforeach
                                    </div>
                            </div>
                            <p class=" container selection:py-4  text-black  text-xl md:text-2xl  tracking-[.15em]">No te pierdas</p>
                            <div class="container grid grid-cols-1 gap-4 md:grid-cols-3">
                                <div class="max-w-sm rounded overflow-hidden shadow-lg hover:border-4 hover:border-catedral">
                                    <a href="{{ Route('home') }}">
                                        <img loading="lazy" class="w-full"
                                            src="{{ asset('images') . '/CatedraldeSantiagoA.jpg' }}"
                                            alt="Catedral de Santiago">
                                    </a>
                                    <div class="px-6">
                                        <div class="font-bold text-xl mb-2">Catedral de Santiago</div>
                                        <p class="text-gray-700 text-base">
                                            La razón de ser de la Catedral de Santiago, Santiago de Compostela y
                                            probablemente Galicia está muy ligada al apóstol Santiago el Mayor.
                                        </p>
                                    </div>

                                    <div class="px-6  pb-2">
                                        @foreach ($ReportsCatedral as $item)
                                            @php
                                                $newa = str_replace('Catedral de Santiago', 'Catedral', $item->titulo);
                                            @endphp
                                            <a href="{{ URL::to('/') . '/#' . str_replace(' ', '_', $item->titulo) }}"
                                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $newa }}</a>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="max-w-sm rounded overflow-hidden shadow-lg hover:border-4 hover:border-catedral">
                                    <a href="{{ URL::to('/') . '/portico-de-la-gloria' }}">
                                        <img loading="lazy" class="w-full"
                                            src="{{ asset('images') . '/PorticoGloria.jpg' }}"
                                            alt="Catedral de Santiago">
                                    </a>
                                    <div class="px-6">
                                        <div class="font-bold text-xl mb-2">El Pórtico de la Gloria</div>
                                        <p class="text-gray-700 text-base">
                                            El Pórtico de la Gloria es una obra cumbre de la escultura medieval europea, una
                                            obra maestra tanto en lo técnico cómo en lo iconográfico, apuntando soluciones
                                            desconocidas en España.
                                        </p>
                                    </div>
                                    <div class="px-6 pt-4 pb-2">
                                        @foreach ($ReportsPortico as $item)
                                            <a href="{{ URL::to('/') . '/portico-de-la-gloria/#' . str_replace(' ', '_', $item->titulo) }}"
                                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $item->titulo }}</a>
                                        @endforeach
                                    </div>
                                </div>

                                @if ($elemento->slug != 'fachada-del-obradoiro')
                                    <div class="max-w-sm rounded overflow-hidden shadow-lg hover:border-4 hover:border-catedral">

                                        <img loading="lazy" class="w-full"
                                            src="{{ asset('images') . '/CatedraldeSantiagoB.jpg' }}"
                                            alt="Catedral de Santiago">
                                        <div class="px-6">
                                            <p class="font-bold text-xl mb-2">La Fachada del Obradoiro</p>
                                            <p class="text-gray-700 text-base">
                                                La Fachada del Obradoiro, de estilo barroco, consta de un cuerpo central
                                                envuelto por dos torres de 74 metros de altura, la de la Carraca a la
                                                izquierda y la de las Campanas a la derecha.
                                            </p>
                                        </div>
                                        <div class="px-6 pt-4 pb-2">
                                            @foreach ($ReportsObradoiro as $item)
                                                <a href="{{ URL::to('/') . '/fachada-del-obradoiro/#' . str_replace(' ', '_', $item->titulo) }}"
                                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $item->titulo }}</a>
                                            @endforeach
                                        </div>



                                    </div>
                                @endif
                            </div>


                        </div>
                    @endif

                    <hr class="h-1 mt-4 bg-gray-200">
                    <div id="likes">

                        <div class="container">
                            @livewire('welcome.catedral-likes',['elemento' => $elemento])
                        </div>
                    </div>
                    <x-catedral-footer :slug='$elemento->slug' />

            </article>
        </main>
        <button id="btnScrollToTop" aria-label="Center Align" class="top"></button>
        <div id="fb-root"></div>

        <div class="fixed bottom-16 right-2  ">
            <!-- Your share button code -->
            <div class="fb-share-button" data-href="{{ URL::current() }}" data-layout="button">
            </div>
            <div class="mt-2">
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button"
                    data-show-count="false"></a>
            </div>
        </div>



    <!-- Scripts -->
    {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
    {{-- <script async src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script async src="https://platform.twitter.com/widgets.js"></script>
     --}}
    <script>
        setTimeout(btnTop,5000);
        function btnTop() {
            const btnScrollToTop = document.querySelector('#btnScrollToTop');
            btnScrollToTop.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    left: 0,
                    behavior: "smooth"
                })
            });
        }
    </script>


    <script>
        // Fetch all the details element.
        const details = document.querySelectorAll("details");

        // Add the onclick listeners.
        details.forEach((targetDetail) => {
            targetDetail.addEventListener("click", () => {
                // Close all the details that are not targetDetail.
                details.forEach((detail) => {
                    if (detail !== targetDetail) {
                        detail.removeAttribute("open");
                    }
                });
            });
        });
    </script>

    <script>
        setTimeout(loadFacebook,10000);

        function loadFacebook() {
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.0";
                fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
                /* console.log("crago facebook"); */
        }
    </script>

    <script>
        // Retrasa la carga script Fancy 3 segundos
        var linkFancy = document.createElement('link');
        linkFancy.href ='https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js';
        linkFancy.as = 'script';
        linkFancy.rel = 'preload';
        document.head.appendChild(linkFancy);
        setTimeout(loadScript,3000);
        function loadScript() {
            var scriptFancy = document.createElement('script');
            scriptFancy.src = 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js';
            document.body.appendChild(scriptFancy);
         console.log("crago Fancy");

        }
    </script>
    {{-- <script async src="https://platform.twitter.com/widgets.js"></script> --}}
    <script>
        // Retrasa la carga twiter 10 segundos
        var linkTwiter = document.createElement('link');
        linkTwiter.href ='https://platform.twitter.com/widgets.js';
        linkTwiter.as = 'script';
        linkTwiter.rel = 'preload';
        document.head.appendChild(linkTwiter);
        setTimeout(loadScript,10000);
        function loadScript() {
            var scriptTwiter = document.createElement('script');
            scriptTwiter.src = 'https://platform.twitter.com/widgets.js';
            document.body.appendChild(scriptTwiter);
            /* console.log("crago twiter"); */

        }
    </script>

</body>

</html>
