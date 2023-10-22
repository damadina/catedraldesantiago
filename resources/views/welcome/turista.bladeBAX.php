<x-app-layout>


     @slot('masHead')
         <title>Información útil para la visita a la Catedral</title>
         {{-- <meta name="description" content="{{$elemento->seoDescription}}"> --}}
         <meta name="description" content= <meta name="description" content="{{ Str::limit(strip_tags($infos[1]->respuesta),135),'...'}}">>


     @endslot

     @slot('social')
         <meta property="og:title" content="Información útil para la visita a la Catedral">
         <meta property="og:type"  content="article">
         <meta property="og:url"   content="{{ URL::current() }}">
         <meta property="og:image"         content="{{ asset('images/VisitasCatedralback.jpg')}}">
         <meta property="og:description" content="{{ Str::limit(strip_tags($infos[1]->respuesta),135),'...'}}">>
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

            <div class="relative">
                <div class="w-full h-screen">
                    <img loading="lazy"src="{{ asset('images/VisitasCatedralback.jpg')}}" class="object-cover object-center w-full h-full" alt="" >
                </div>
                <div class="container z-50 absolute  left-1/2 transform -translate-x-1/2 md:-translate-y-1/2 top-5 md:top-60">

                    <h1 class="bg-black bg-opacity-20 text-center text-white text-shadow-lg font-semibold text-base sm:text-xl  md:text-3xl lg:text-5xl tracking-[.15em]  italic">
                        INFORMACIÓN ÚTIL PARA EL TURISTA
                    </h1>




                    <div class="mt-2 md:mt-10 sm:container">
                        <div class=" grid grid-cols-1  md:grid-cols-4 gap-4">


                            <div class=" bg-black bg-opacity-20 text-center  border border-white rounded-lg hover:border-2 hover:bg-black">
                                <a href="#3" class="px-0.5 py-0.5 md:px-2 md:py-2 text-shadow-lg text-xs md:text-xl font-semibold text-white">
                                    Acceso
                                </a>
                            </div>
                            <div class="bg-black bg-opacity-20 text-center  border border-white rounded-lg hover:border-2 hover:bg-black">
                                <a href="#2" class="px-0.5 py-0.5 md:px-2 md:py-2 text-shadow-lg text-xs md:text-xl font-semibold text-white">
                                    Horarios
                                </a>
                            </div>
                            <div class="bg-black bg-opacity-20 text-center  border border-white rounded-lg hover:border-2 hover:bg-black">
                                <a href="#4" class="px-0.5 py-0.5 md:px-2 md:py-2 text-shadow-lg text-xs md:text-xl font-semibold text-white">
                                    Entradas
                                </a>
                            </div>
                            <div class="bg-black bg-opacity-20 text-center  border border-white rounded-lg hover:border-2 hover:bg-black">
                                <a href="#6" class="px-0.5 py-0.5 md:px-2 md:py-2 text-shadow-lg text-xs md:text-xl font-semibold text-white">
                                    Misas
                                </a>
                            </div>
                            <div class="bg-black bg-opacity-20 text-center  border border-white rounded-lg hover:border-2 hover:bg-black">
                                <a href="#5" class="px-0.5 py-0.5 md:px-2 md:py-2 text-shadow-lg text-xs md:text-xl font-semibold text-white">
                                    Visitas
                                </a>
                            </div>
                            <div class="bg-black bg-opacity-20 text-center  border border-white rounded-lg hover:border-2 hover:bg-black">
                                <a href="#8" class="px-0.5 py-0.5 md:px-2 md:py-2 text-shadow-lg text-xs md:text-xl font-semibold text-white">
                                    Consignas
                                </a>
                            </div>
                            <div class="bg-black bg-opacity-20 text-center  border border-white rounded-lg hover:border-2 hover:bg-black">
                                <a href="#7" class="px-0.5 py-0.5 md:px-2 md:py-2 text-shadow-lg text-xs md:text-xl font-semibold text-white">
                                Calendario litúrgico
                                </a>
                            </div>
                            <div class="bg-black bg-opacity-20 text-center  border border-white rounded-lg hover:border-2 hover:bg-black">
                                <a href="#planoCatedral" class="px-0.5 py-0.5 md:px-2 md:py-2 text-shadow-lg text-xs md:text-xl font-semibold text-white">
                                Plano
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="mt-10 mx-5 md:mx-40  hidden md:block">
                        @livewire('search')
                    </div> --}}


                </div>
                {{--Nav en la página--}}

                {{-- <div class="absolute top-60 md:top-2/3 left-1/2 transform -translate-x-1/2 min-w-[75%] md:min-w-[50%]">
                    @livewire('search')
                </div> --}}
            </div>
        </header>

        <div  class=" pt-6 indent-8 italic leading-10 text-sm md:text-xl md:leading-10 sm:text-xl">
            <div class="container ">
                {!! $infos[1]->respuesta !!}
            </div>
        </div>
        <hr class="h-1 mt-8 bg-gray-200">
        <div class="container">

            @foreach ($infos as $item)
                @if ($loop->index == 1 or $loop->index == 0)
                    @continue
                @endif
                <div class="">
                    <div class="pt-6  mx-auto  space-y-2">

                            <div id="{{ $loop->index }}"
                                class="text-sm leading-6 scroll-mt-24 hover:cursor-pointer ">
                                <h2 class="pt-4 pb-8 text-black text-center font-bold text-base md:text-2xl  tracking-[.15em]">
                                    {{ $item->titulo}}
                                </h2>
                            </div>
                            @if($loop->index == 8)
                                <div class="mt-3 grid grid-cols-1 md:grid-cols-2 text-base md:text-xl text-black font-normal">
                            @else
                                <div class="mt-3 text-base md:text-xl text-black font-normal">

                            @endif
                            <span class="text-base md:text-xl">{!! $item->respuesta !!}</span>
                            </div>

                    </div>
                </div>
                <hr class="h-1 mt-4 bg-gray-200">
            @endforeach
        </div>

        <div id="planoCatedral" class="container scroll-mt-24 ">
            <h2 id="900"
                class=" pt-4 pb-8 text-gray-600 text-center font-bold text-xs md:text-2xl  tracking-[.15em] ">PLANO
                DE LA CATEDRAL DE SANTIAGO DE COMPOSTELA</h2>


            <img loading="lazy" src="{{ asset('images/PlanoCatedral.jpg') }}"
                alt="Plano de la Catedral de Santiago de Compostela">


            {{-- <a href="{{ route('download') }}"
                class="mt-8 mb-6 bg-black hover:bg-catedral text-white font-bold py-2 px-4 border border-gray-700 rounded inline-flex items-center"
                title="Descárgate el plano de la Catedral de Santiago">
                <span class="text-xs md:text-base">Descárgate el plano de la Catedral</span>
            </a> --}}
        </div>


        <button id="btnScrollToTop" aria-label="Center Align" class="top">
        </button>

        <div id="fb-root"></div>

        <div class="fixed bottom-16 right-2  ">
        <!-- Your share button code -->
            <div class="fb-share-button"
            data-href="{{URL::current()}}"
            data-layout="button">
            </div>

            <div class="mt-2">
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button"
                    data-show-count="false"></a>
            </div>
        </div>


        <x-catedral-footer slug='turista' />
    </article>



    {{-- <script async src="https://platform.twitter.com/widgets.js"></script>

    <script async src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script> --}}
    <!-- Scripts -->
    {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
    @slot('js')


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
            // Retrasa la carga twiter 10 segundos
            /* var linkTwiter = document.createElement('link');
            linkTwiter.href ='https://platform.twitter.com/widgets.js';
            linkTwiter.as = 'script';
            linkTwiter.rel = 'preload';
            document.head.appendChild(linkTwiter); */
            setTimeout(loadScript,5000);
            function loadScript() {
                var scriptTwiter = document.createElement('script');
                scriptTwiter.src = 'https://platform.twitter.com/widgets.js';
                document.body.appendChild(scriptTwiter);
                /* console.log("crago twiter"); */

            }
        </script>
    @endslot
</x-app-layout>








