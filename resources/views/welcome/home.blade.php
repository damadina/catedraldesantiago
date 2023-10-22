<x-app-layout>
    {{-- @slot('schema')
        @include('welcome.includes.jsonCatedralHome')
    @endslot --}}

    @slot('masHead')
        <title>{{$elemento->visitante}}</title>
        {{-- <meta name="description" content="{{$elemento->seoDescription}}"> --}}
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

    <article>
        @php
            $value = url()->current();
            session(['REDIRECT' => $value]);
        @endphp

        <header>


            @php
                $item = $fotos[0];
            @endphp
            <div class="relative ">
                {{-- <div class="w-full h-screen"> --}}
                    <figure class="w-full h-screen">
                        <img src="{{ asset('storage/portadas' . '/' . $elemento->urlPortada) }}" class="object-cover object-center w-full h-full" alt="{{ $elemento->name }}" >
                        <figcaption class="text-center pb-2">
                            <span class="text-center text-gray-600 italic">Catedral de Santiago. Fachada del Obradoiro</span>
                        </figcaption>
                    </figure>

                 {{-- </div>
 --}}
                <div class="container  absolute  left-1/2 transform -translate-x-1/2  top-10 sm:top-20 md:top-30 lg:top-40">

                    <h1 class=" text-center text-white text-shadow-lg font-semibold text-base sm:text-xl  md:text-3xl lg:text-5xl tracking-[.15em]  italic">
                        {{ $elemento->name }}
                    </h1>

                    <p class="mt-6 bg-black bg-opacity-30 hidden md:block pt-4 px-2 md:px-4 text-shadow-lg  text-gray-100 text-center italic  text-xs md:text-xl tracking-[.15em] md:leading-8">
                        {{ $elemento->seoDescription }}
                    </p>

XXXX

                    <nav class="mt-6 md:mt-10 container ">
                        <div class="grid grid-cols-2 md:grid-cols-6 gap-2 md:px-0 md:gap-2 lg:px-20">
                            <a href="#exterior" class="px-0.5 py-0.5 text-shadow-lg text-xs sm:text-base md:text-xl font-semibold text-white">
                                <div class=" bg-black bg-opacity-20 text-center  border border-white rounded-lg hover:border-2 hover:bg-black">
                                        Exterior
                                </div>
                            </a>

                            <a href="#interior" class="px-0.5 py-0.5 text-shadow-lg text-xs sm:text-base md:text-xl font-semibold text-white">
                                <div class="bg-black bg-opacity-20 text-center  border border-white rounded-lg hover:border-2 hover:bg-black">
                                    Interior
                                </div>
                            </a>
                            <a href="#capillas" class="px-0.5 py-0.5 text-shadow-lg text-xs sm:text-base md:text-xl font-semibold text-white">
                                <div class="bg-black bg-opacity-20 text-center  border border-white rounded-lg hover:border-2 hover:bg-black">
                                    Capillas
                                </div>
                            </a>

                            <a href="#museo" class="px-0.5 py-0.5 text-shadow-lg text-xs sm:text-base md:text-xl font-semibold text-white">
                                <div class="bg-black bg-opacity-20 text-center  border border-white rounded-lg hover:border-2 hover:bg-black">
                                    Museo
                                </div>
                            </a>
                            <a href="#historia" class="px-0.5 py-0.5 text-shadow-lg text-xs sm:text-base md:text-xl font-semibold text-white">
                                <div class="bg-black bg-opacity-20 text-center  border border-white rounded-lg hover:border-2 hover:bg-black">
                                    Historia
                                </div>
                            </a>
                            <a href="#turismo" class="px-0.5 py-0.5 text-shadow-lg text-xs sm:text-base md:text-xl font-semibold text-white">
                                <div class="bg-black bg-opacity-20 text-center  border border-white rounded-lg hover:border-2 hover:bg-black">
                                    <i class="fa-solid fa-circle-info"></i>
                                    {{-- <i class="fas fa-info mr-4 text-xs md:text-base"></i> --}}
                                    Turistas
                                </div>
                            </a>



                        </div>



                    </nav>

                    <div class="mt-2 mx-5 md:mx-40 md:mt-10">
                        @livewire('search')
                    </div>

                </div>

            </div>
        </header>

        <div id="introduccion" class=" pt-10 indent-8  text-sm md:text-xl sm:text-xl">
            <div class="container ">
                {!! $elemento->resumen !!}
            </div>
        </div>

        {{-- fotos --}}
        <div class="py-10">
            <x-carousel-fotos :fotos="$fotos" :elementoId="$elemento->id" idCarousel="fotosCarousel"/>
        </div>

        <hr class="h-1 mt-10 bg-gray-200">
        {{-- <div class="bg-gray-100 pb-6">
            <div id="historia" class="container">
                <p class="text-catedral font-bold pt-4 pb-8 text-center  text-xs md:text-2xl  tracking-[.15em]">TODA LA HISTORIA DE LA CATEDRAL DE SANTIAGO</p>
                <x-carousel-historia :historia="$reports"  idCarousel="historiaCarousel"/>
            </div>

        </div> --}}
        <hr class="h-1  bg-gray-200">

        <div id="exterior" class="py-6">
            <p class="pt-4 pb-8  text-catedral font-bold text-center text-xs md:text-2xl  tracking-[.15em]">RECORRIDO POR LA CATEDRAL</p>
           {{--  <p class="text-catedral font-bold pt-4 pb-8 text-center  text-xs md:text-2xl  tracking-[.15em]">EXTERIOR DE LA CATEDRAL DE SANTIAGO</p> --}}
            <p  class="container text-center  bg-gray-400 bg-clip-content italic text-white font-bold">Exterior de la Catedral</p>
            <p class="container text-base md:text-xl italic">En el exterior de la Catedral de Santiago podemos ver una fachada románica (Platerías), dos barrocas (Obradoiro y lienzo de la Puerta Santa en la Quintana) y una neoclásica (Azabachería). </p>

            <x-carousel-card :cards="$fachadas"  idCarousel="fachadasCarousel"/>


        </div>



        <div id="interior" class="py-6">


            <p  class="container text-center  bg-gray-400 bg-clip-content italic text-white font-bold">Espacios del interior de la Catedral</p>

            <p class="container text-base md:text-xl text-center italic">El recorrido por el interior de la Catedral de Santiago nos permite admirar la arquitectura y piezas históricas de distintas epocas </p>
            <x-carousel-card :cards="$otros" idCarousel="otrosCarousel"/>

        </div>
        <div id="capillas">
            <p  class="mt-10 container text-center  bg-gray-400 bg-clip-content italic text-white font-bold">Capillas del interior de la Catedral</p>
            <p class="container text-base md:text-xl italic text-center">En las capillas del interior de la Catedral de Santiago, peregrinos de todas las nacionalidades encontraban a los santos de su devoción.</p>
            <x-carousel-card :cards="$capillas" idCarousel="capillasCarousel"/>



        </div>



        <div id="museo" class="py-6">
            <p  class="container text-center  bg-gray-400 bg-clip-content italic text-white font-bold">Museo de la Catedral</p>
            {{-- <p class="pt-4 pb-8  text-catedral font-bold text-center text-xs md:text-2xl  tracking-[.15em]">MUSEO DE LA CATEDRAL</p> --}}
            <p class="container text-center text-base md:text-xl italic">El Museo Catedral de Santiago permite al visitante profundizar su conocimiento en la historia y el arte de la Catedral, a través de sus diferentes espacios y las exposiciones temporales que organiza.</p>

            <x-carousel-card :cards="$museo" idCarousel="museoCarousel"/>

        </div>


        <hr class="h-1 mt-12 bg-gray-200">

        <div class="bg-gray-100 pb-10">
            <div id="turismo" class="container">
                <h2 class="text-catedral font-bold pt-4 pb-8 text-center  text-xs md:text-2xl  tracking-[.15em]">INFORMACIÓN UTÍL PARA EL TURISTA</h2>
                <x-carousel-turismo :turismo="$infos"  idCarousel="turismoCarousel"/>
            </div>

            {{-- Plano --}}
            <div id="planoCatedral" class="container scroll-mt-24 ">
                <h3 id="900"
                    class=" p-2 text-catedral bg-gray-200 text-center font-bold text-xs md:text-2xl">Plano
                    de la Catedral</h3>


                <img loading="lazy" src="{{ asset('images/PlanoCatedral.jpg') }}"
                    alt="Plano de la Catedral de Santiago de Compostela">


                {{-- <a href="{{ route('download') }}"
                    class="mt-8 mb-6 bg-black hover:bg-catedral text-white font-bold py-2 px-4 border border-gray-700 rounded inline-flex items-center"
                    title="Descárgate el plano de la Catedral de Santiago">

                    <span class="text-xs md:text-base">Descárgate el plano de la Catedral</span>
                </a> --}}
            </div>
        </div>
        <hr class="h-1  bg-gray-200">

        <div class="py-6">
            <h2 class="pt-4 pb-8  text-catedral font-bold text-center text-xs md:text-2xl  tracking-[.15em]">VIDEOS PUBLICADOS DE LA CATEDRAL DE SANTIAGO</h2>
            <x-carousel-videos :videos="$videos" :elementoId="$elemento->id" idCarousel="videosCarousel"/>

        </div>




        {{-- <div class="container">
            @livewire('welcome.catedral-likes',['elemento' => $elemento])
        </div> --}}
        <hr class="h-1 mt-4 bg-gray-200">
        <x-catedral-footer :slug='$elemento->slug' />
    </article>

    {{---Boton Scroll Top--}}
    <button id="btnScrollToTop" aria-label="Center Align" class="top">
    </button>
    {{-- <div id="fb-root">OOOOOOOOOOOO</div> --}}

    {{--Botón Facebook--}}
    <div class="fixed bottom-16 right-2  ">
        <div class="fb-share-button"
        data-href="{{URL::current()}}"
        data-layout="button">
        </div>

        <div class="mt-2">
            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button"
                data-show-count="false"></a>
        </div>
    </div>



    @slot('js')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

    <script>
Fancybox.bind('[data-fancybox="gallery"]', {
  Carousel: {
    Navigation: {
      prevTpl:
        '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M11 5l-7 7 7 7"/><path d="M4 12h16"/></svg>',
      nextTpl:
        '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M4 12h16"/><path d="M13 5l7 7-7 7"/></svg>',
    },
  },
});

    </script>

    <script>
        setTimeout(btnTop,3000);
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
        setTimeout(loadFacebook,3000);

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
           /*  console.log("crago Fancy"); */

        }
    </script>

    <script>
        // Retrasa la carga twiter 10 segundos
        /* var linkTwiter = document.createElement('link');
        linkTwiter.href ='https://platform.twitter.com/widgets.js';
        linkTwiter.as = 'script';
        linkTwiter.rel = 'preload';
        document.head.appendChild(linkTwiter); */
        setTimeout(loadScript,3000);
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
        Dots: false,
        Navigation: true,
        });
    };
    // Initialise Carousel VIDEOS
    var exist = document.querySelector("#videosCarousel");
    if(exist !== null ) {
        const videosCarousel = new Carousel(document.querySelector("#videosCarousel"), {
        preload: 2,
        slidesPerPage:'auto',
        Dots: false,
        Navigation: true,
        });
    };



    // Initialise Carousel Fachadas
    var exist = document.querySelector("#fachadasCarousel");
    if(exist !== null ) {
        const fachadasCarousel = new Carousel(document.querySelector("#fachadasCarousel"), {
        preload: 2,
        slidesPerPage:'auto',
        Dots: false,
        Navigation: true,
        });
    };
    // Initialise Carousel Otros
    var exist = document.querySelector("#otrosCarousel");
    if(exist !== null ) {
        const otrosCarousel = new Carousel(document.querySelector("#otrosCarousel"), {
        preload: 2,
        slidesPerPage:'auto',
        Dots: false,
        Navigation: true,
        });
    };

    // Initialise Carousel Capillas
    var exist = document.querySelector("#capillasCarousel");
    if(exist !== null ) {
        const capillasCarousel = new Carousel(document.querySelector("#capillasCarousel"), {
        preload: 2,
        slidesPerPage:'auto',
        Dots: false,
        Navigation: true,
        });
    };

    // Initialise Carousel Museo
    var exist = document.querySelector("#museoCarousel");
        if(exist !== null ) {
            const museoCarousel = new Carousel(document.querySelector("#museoCarousel"), {
            preload: 2,
            slidesPerPage:'auto',
            Dots: false,
            Navigation: true,
            });
        };

      // Initialise Carousel historia
      var exist = document.querySelector("#historiaCarousel");
        if(exist !== null ) {
            const museoCarousel = new Carousel(document.querySelector("#historiaCarousel"), {
            preload: 2,
            slidesPerPage:'auto',
            Dots: false,
            Navigation: true,
            });
        };

        // Initialise Carousel turismo
      var exist = document.querySelector("#turismoCarousel");
        if(exist !== null ) {
            const museoCarousel = new Carousel(document.querySelector("#turismoCarousel"), {
            preload: 2,
            slidesPerPage:'auto',
            Dots: false,
            Navigation: true,
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

</x-app-layout>





