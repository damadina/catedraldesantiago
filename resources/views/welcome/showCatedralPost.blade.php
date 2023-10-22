<x-app-layout>
     {{-- @slot('schema')
         @include('welcome.includes.jsonCatedralPost')
     @endslot --}}

     @slot('masHead')
         <title>{{$elemento->visitante}}</title>
        {{--  <meta name="description" content="{{$elemento->seoDescription}}"> --}}
        <meta name="description" content="{{ Str::limit(strip_tags($elemento->resumen),135),'...'}}">
        <meta name="keywords" content="{{$elemento->name}}"/>
        <link rel="icon" href="{{ asset('images/logo.png') }}">

     @endslot

     @slot('social')
         <meta property="og:title" content="{{$elemento->visitante}}">
         <meta property="og:type"  content="article">
         <meta property="og:url"   content="{{ URL::current() }}">
         <meta property="og:image"         content="{{URL::current()}}/storage/portadascard/{{$elemento->urlPortada}}">
         <meta property="og:description" content="{{$elemento->seoDescription}}">
         <meta property="og:image:type" content="image/jpeg">
         <meta property="og:site_name" content="Catedral de Santiago de Compostela">
         <meta property="article:publisher" content="https://www.facebook.com/mascompostela/">
     @endslot






    @php

        $value = url()->current();
        session(['REDIRECT' => $value]);

    @endphp



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
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-2 md:px-0 md:gap-2 lg:px-20">
                                <a href="#historia" class="px-0.5 py-0.5 text-shadow-lg text-xs sm:text-base md:text-xl font-semibold text-white">
                                    <div class=" bg-black bg-opacity-20 text-center  border border-white rounded-lg hover:border-2 hover:bg-black">
                                            Historia
                                    </div>
                                </a>
                                <a href="#fotografias" class="px-0.5 py-0.5 text-shadow-lg text-xs sm:text-base md:text-xl font-semibold text-white">
                                    <div class=" bg-black bg-opacity-20 text-center  border border-white rounded-lg hover:border-2 hover:bg-black">
                                            Fotografías
                                    </div>
                                </a>

                                <a href="#planoCatedral" class="px-0.5 py-0.5 text-shadow-lg text-xs sm:text-base md:text-xl font-semibold text-white">
                                    <div class="bg-black bg-opacity-20 text-center  border border-white rounded-lg hover:border-2 hover:bg-black">
                                        Situación
                                    </div>
                                </a>
                            </div>

                        </nav>

                        {{-- <div class="mt-4 mx-5 md:mx-40 md:mt-10">
                            @livewire('search')
                        </div> --}}
                    </div>

                </div>
            </header>





            <div class="container indent-8 text-gray-600 italic text-lg mt-6 sm:text-xl tracking-wide">
                {!! $elemento->resumen !!}
            </div>
            <hr class="h-0.5 my-5 bg-gray-200">



            <div id="fotografias" class="container">
                <x-carousel-fotos :fotos="$fotos" :elementoId="$elemento->id" idCarousel="fotosCarousel"/>
            </div>
            <hr class="h-1 mt-10 bg-gray-200">




            {{-- Informes --}}
            <div id="historia" class="container mb-24">
                @foreach ($reports as $item)
                    @if($loop->index !=0 || $elemento->id ==2 || $elemento->id ==44)
                        <h2 class="mt-4 text-base md:text-xl font-semibold text-catedral">{{$item->titulo}}</h2>
                    @endif
                    <div class="mt-3 indent-8 text-base md:text-xl text-black ">

                        {!! $item->respuesta !!}
                    </div>

                @endforeach







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
                    SITUACIÓN {{ strtoupper($elemento->prefijoH1) }} {{ strtoupper($elemento->name) }}</h2>


                <img src="{{ asset('images/PlanoCatedral.jpg') }}"
                    alt="Plano de la Catedral de Santiago de Compostela">



            </div>
            <hr class="h-1 mt-10 bg-gray-200">
            <div>
                <h2 class="pt-4 pb-8  text-catedral font-semibold text-center text-xs md:text-2xl  tracking-[.15em]">VIDEOS PUBLICADOS {{ strtoupper($elemento->prefijoH1) }} {{ strtoupper($elemento->name) }}</h2>
                <x-carousel-videos :videos="$videos" :elementoId="$elemento->id" idCarousel="videosCarousel"/>

            </div>





            {{-- Tambien te puede interesar --}}
            {{-- @if ($literal != 'SINLITERAL')
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
            @endif --}}

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

            </div>
        @endif




            <hr class="h-1 mt-4 bg-gray-200">
            {{-- <div id="likes">

                <div class="container">
                    @livewire('welcome.catedral-likes',['elemento' => $elemento])
                </div>
            </div> --}}
            <x-catedral-footer :slug='$elemento->slug' />

    </article>

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



    @slot('js')

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
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

        <script>

            // Initialise Carousel Fotos
            var exist = document.querySelector("#fotosCarousel");
            if(exist !== null ) {
                const myCarousel = new Carousel(document.querySelector("#fotosCarousel"), {
                preload: 2,
                slidesPerPage:'auto',
                Dots: true,
                });
            };
            // Initialise Carousel videos
            var exist = document.querySelector("#videosCarousel");
            if(exist !== null ) {
                const videosCarousel = new Carousel(document.querySelector("#videosCarousel"), {
                preload: 2,
                slidesPerPage:'auto',
                Dots: true,
                });
            };



            // Initialise Carousel Fachadas
            var exist = document.querySelector("#fachadasCarousel");
            if(exist !== null ) {
                const fachadasCarousel = new Carousel(document.querySelector("#fachadasCarousel"), {
                preload: 2,
                slidesPerPage:'auto',
                Dots: true,
                });
            };
            // Initialise Carousel Otros
            var exist = document.querySelector("#otrosCarousel");
            if(exist !== null ) {
                const otrosCarousel = new Carousel(document.querySelector("#otrosCarousel"), {
                preload: 2,
                slidesPerPage:'auto',
                Dots: true,
                });
            };

            // Initialise Carousel Museo
            var exist = document.querySelector("#capillasCarousel");
            if(exist !== null ) {
                const capillasCarousel = new Carousel(document.querySelector("#capillasCarousel"), {
                preload: 2,
                slidesPerPage:'auto',
                Dots: true,
                });
            };

            // Initialise Carousel Museo
            var exist = document.querySelector("#museoCarousel");
                if(exist !== null ) {
                    const museoCarousel = new Carousel(document.querySelector("#museoCarousel"), {
                    preload: 2,
                    slidesPerPage:'auto',
                    Dots: true,
                    });
                };



            Fancybox.bind('[data-fancybox="gallery"]', {
                Toolbar: {
                    centerOnScroll: true,
                    display: [
                    { id: "prev", position: "center" },
                    { id: "counter", position: "center" },
                    { id: "next", position: "center" },
                    "zoom",
                    "slideshow",
                    "fullscreen",
                    "download",
                    "thumbs",
                    "close",
                    ],
                },
            });
        </script>



    @endslot
{{-- @if($reports->count() ==1)
                    <h2 class="text-catedral font-semibold pt-16 pb-8 text-center  text-xs md:text-2xl  tracking-[.15em]">HISTORIA {{strtoupper($elemento->prefijoH1.' '.$elemento->name)}}</h2>
                    <div class="mt-3 indent-8 text-base md:text-xl text-black ">

                        {!! $reports[0]->respuesta !!}
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
                                </details>
                            </div>

                        </div>
                    @endforeach

                @endif --}}

</x-app-layout>
