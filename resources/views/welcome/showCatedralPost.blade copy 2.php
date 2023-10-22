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
    <meta name="facebook-domain-verification" content="xzqmzvdk6hm2gb4vtpj09qbsqjcmcz" />


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



    @include('welcome.includes.jsonCatedralPost')

    <link rel="preload" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
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



        .cabecera {
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ asset('storage/portadas') . '/' . $elemento->urlPortada }});
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 90vh;
        }

        .containerA {
            position: absolute;
            /* bottom: 5%; */
            top: 30%;
            width: 100%;
            /*  right: 20%; */
            /* transform: translate(-50%, -50%); */
            color: white;
            text-align: left;
        }

        h1 {
            /* text-transform: uppercase; */
            margin: 0;
            /* white-space: wrap; */
            text-align: center;
        }

        /* Para las card */
        .containerCard {
            position: relative;
            /* max-width: 800px; */
            /* margin: 0 auto; */
        }

        .containerCard img {
            vertical-align: middle;
        }

        .containerCard .content {
            position: absolute;
            bottom: 0;
            background: rgb(0, 0, 0);
            /* Fallback color */
            background: rgba(0, 0, 0, 0.3);
            /* Black background with 0.5 opacity */
            color: #f1f1f1;
            width: 100%;
            /* padding: 5px; */
        }




       /*  img {
            opacity: 1.0;
        }
 */
        /* img:hover {
                opacity: 0.7;
                z-index: 0;
            } */

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

        <button id="btnScrollToTop" aria-label="Center Align" class="top"></button>
        <div id="fb-root"></div>

        <div class="fixed bottom-16 right-2  ">
            <!-- Your share button code -->
            <div class="fb-share-button" data-href="{{ URL::current() }}" data-layout="button">
            </div>
            <div class="mt-2">
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button"
                    data-show-count="false">Tweet</a>
            </div>
        </div>

        @livewire('navigation-menu')
        <main>
            <header>
                @php
                    $item = $fotos[0];
                @endphp
                <div class="relative">
                    <img loading="lazy"
                    src="{{ asset('storage/fotos/' . $elemento->id . '/original/' . $item->url) }}"
                    class="object-cover w-full"
                    alt="{{ $item->piefoto }}">


                <div class="absolute top-10 left-1/2 transform -translate-x-1/2 hidden md:flex">
                    <div class="items-center justify-center">
                        <img class="text-white mx-auto" src="{{ asset('images/logoB.png') }}" loading="lazy"
                            alt="logo" width="30"
                            height="43">
                        <p class=" text-gray-100">catedraldesantiago.online</p>
                    </div>
                </div>





                        <div class="containerA">
                            <div>
                                <h1 class="pl-10 text-center text-shadow-lg font-semibold text-2xl md:text-6xl tracking-[.15em]  italic">
                                    {{ $elemento->name }}</h1>
                                <p class="bg-black bg-opacity-30 pt-2 mt-9 text-shadow-lg container text-gray-100 text-center italic  text-xs md:text-xl tracking-[.15em] md:leading-8">
                                    {{ $elemento->seoDescription }}</p>
                            </div>
                        </div>


                </div>
            </header>

            {{-- Nav en la página --}}
            <div class="bg-gray-200 z-50 top-0 sticky">
                <div class="mx-4 grid grid-cols-1 md:grid-cols-6 gap-2   pt-4 pb-4">
                    <div class="text-center">
                        <a href="#historia" class="btn-nav block w-full font-semibold text-gray-800  hover:underline">
                            Historia
                        </a>
                    </div>
                    <div class=" text-center">
                        <a href="#fotos" class="btn-nav block w-full font-semibold text-gray-800 hover:underline">
                            Fotografías
                        </a>
                    </div>
                    @if ($videos->count())
                        <div class=" text-center">
                            <a href="#videos" class="btn-nav block w-full font-semibold text-gray-800 hover:underline">
                                Videos
                            </a>
                        </div>
                    @endif



                    <div class=" text-center">
                        <a href="#planoCatedral" class="btn-nav block w-full font-semibold  hover:underline">
                            Plano de la Catedral
                        </a>
                    </div>
                    @if ($literal != 'SINLITERAL')
                        <div class=" text-center">
                            <a href="#otras" class="btn-nav block w-full font-semibold  hover:underline">
                                {{ ucfirst($literal) }}
                            </a>
                        </div>
                    @endif

                </div>
            </div>

            {{-- Historia --}}
            <div class="container indent-8 italic text-gray-700 text-lg mt-6 sm:text-xl tracking-wide">
                {!! $elemento->resumen !!}
            </div>



            {{-- fotos --}}
            <p id="fotos" class="container italic text-gray-500 scroll-mt-24">Fotografías</p>
            <div
                class=" container flex  mb-6 overflow-x-auto overflow-y-hidden scroll-px-2 snap-x scrollbar  scrollbar-thumb-catedralbar scrollbar-track-catedral scrollbar-thumb-rounded-full scrollbar-track-rounded-full">


                @foreach ($fotos as $item)
                    <div>

                        <figure class="flex-grow-0 flex-shrink-0 mr-6  w-80 h-80 snap-center object-center">


                            <img loading="lazy"
                                src="{{ asset('storage/fotos/' . $elemento->id . '/original/' . $item->url) }}"
                                class="object-cover w-full h-full hover:cursor-all-scroll " data-fancybox="gallery"
                                alt="{{ $item->piefoto }}" data-caption="{{ $item->piefoto }}">

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
                            <a data-fancybox href="{{ $item->url }}">
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
            <hr class="h-1 mt-4 bg-gray-200">

            {{-- Informes --}}
            <div class="container mb-24">

                @if ($reports->count() == 1)
                    <h2 id="historia"
                        class=" pt-8 pb-8 text-gray-600 text-center font-bold text-xs md:text-2xl  tracking-[.15em] ">
                        HISTORIA {{ strtoupper($elemento->prefijoH1) }} {{ strtoupper($elemento->name) }}</h2>
                    <div class="mt-3 indent-8 text-base md:text-xl text-gray-800 ">
                        {!! $reports[0]->respuesta !!}
                    </div>
                    @if($item->autor == 'Salvador Yzquierdo Peiró. Historiador')
                        <div class="mt-3">
                            <p class="text-right font-semibold">{{$item->autor}}</p>
                            <p  class="text-right italic"><a href="{{route('bibliografia')}}">Bibligrafía</a></p>
                        </div>
                    @endif



                    <div class="container">
                        @livewire('welcome.infos-reviews',['info' => $reports[0]])
                    </div>
                @else
                    <p id="historia"
                        class="pt-8 scroll-mt-24  pb-8 text-gray-600 text-center font-bold text-xs md:text-2xl  tracking-[.15em] ">
                        HISTORIA {{ strtoupper($elemento->prefijoH1) }} {{ strtoupper($elemento->name) }}</p>
                    @foreach ($reports as $item)
                        <div class="">
                            @php
                                $newIndex = $loop->index + 50;

                            @endphp
                            <div class="pt-6  mx-auto space-y-2">
                                <details class="p-2 md:p-4 w-full rounded-lg bg-gray-50 shadow-xl ">
                                    <summary id="{{ str_replace(' ', '_', $item->titulo) }}"
                                        class="text-sm leading-6 font-semibolds scroll-mt-16 hover:cursor-pointer ">

                                        <h2 class="inline text-gray-800 text-sm md:text-xl ">
                                            {{ $item->titulo }}</h2>


                                    </summary>

                                    <div class="mt-3 indent-8 text-base md:text-xl text-gray-800 ">
                                        {!! $item->respuesta !!}
                                    </div>
                                    @if($item->autor == 'Salvador Yzquierdo Peiró. Historiador')
                                        <div class="mt-3">
                                            <p class="text-right font-semibold">{{$item->autor}}</p>
                                            <p  class="text-right italic"><a href="{{route('bibliografia')}}">Bibligrafía</a></p>
                                        </div>
                                    @endif

                                    <div class="container">
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


            <hr class="h-1 mt-4 bg-gray-200">

            {{-- Plano --}}
            <div id="planoCatedral" class="container ">
                <h2 id="900"
                    class=" pt-16 pb-8 text-gray-600 text-center font-bold text-xs md:text-2xl  tracking-[.15em] scroll-mt-24">
                    SITUACIÓN DE LA {{ strtoupper($elemento->prefijoH1) }} {{ strtoupper($elemento->name) }}</h2>


                <img src="{{ asset('images/PlanoCatedral.jpg') }}"
                    alt="Plano de la Catedral de Santiago de Compostela">



            </div>
        </main>
        {{-- Tambien te puede interesar --}}
        @if ($literal != 'SINLITERAL')
            <hr class="h-1 mt-4 bg-gray-200">
            <div id="otras" class="scroll-mt-24">
                <div class="mx-auto w-full px-4 pb-8">
                    <h2 class="container py-4 font-semibold text-black  text-xl md:text-2xl  tracking-[.15em]">
                        Además {{ $elemento->prefijoH1 }} {{ $elemento->name }} te pueden interesar
                        {{ $literal }}</h2>
                    <div
                        class=" container py-6 flex flex-no-wrap overflow-x-scroll scrolling-touch items-start mb-8 scrollbar  scrollbar-thumb-catedralbar scrollbar-track-catedral scrollbar-thumb-rounded-full scrollbar-track-rounded-full">

                        @foreach ($interes as $item)
                            <x-card-elemento :item="$item" />
                        @endforeach
                    </div>
                    <p class=" container selection:py-4  text-black  text-xl md:text-2xl  tracking-[.15em]">No te
                        pierdas</p>
                    <div class="container grid grid-cols-1 gap-4 md:grid-cols-3">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
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

                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
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
                            <div class="max-w-sm rounded overflow-hidden shadow-lg">

                                <img loading="lazy" class="w-full"
                                    src="{{ asset('images') . '/CatedraldeSantiagoB.jpg' }}"
                                    alt="Catedral de Santiago">
                                <div class="px-6">
                                    <div class="font-bold text-xl mb-2">La Fachada del Obradoiro</div>
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








            </div>
        @endif

        <hr class="h-1 mt-4 bg-gray-200">
        <div id="comentarios">

            <div class="container">
                @livewire('welcome.catedral-likes',['elemento' => $elemento])
            </div>


           {{--  <div class="container">
                @livewire('welcome.catedral-reviews',['elemento' => $elemento])
            </div> --}}
        </div>
        <x-catedral-footer :slug='$elemento->slug' />





    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script async src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
     <script async src="https://platform.twitter.com/widgets.js"></script>

    <script>
        const btnScrollToTop = document.querySelector('#btnScrollToTop');
        btnScrollToTop.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                left: 0,
                behavior: "smooth"
            })
        });
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
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>


</body>

</html>
