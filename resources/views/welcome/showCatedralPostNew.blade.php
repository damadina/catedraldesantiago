<x-app-layout>


     @slot('masHead')
         <title>{{$elemento->visitante}}</title>

        <meta name="description" content="{{ Str::limit(strip_tags($elemento->resumen),135),'...'}}">
        <meta name="keywords" content="{{$elemento->name}}"/>
        <link rel="icon" href="{{ asset('images/logo.png') }}">

     @endslot

     @slot('social')
         <meta property="og:title" content="{{$elemento->visitante}}"/>
         <meta property="og:type"  content="article"/>
         <meta property="og:url"   content="{{ URL::current() }}"/>
         <meta property="og:image" content="{{asset('storage/portadas/'.$elemento->urlPortada)}}"/>
         <meta property="og:description" content="{{$elemento->seoDescription}}"/>
         <meta property="og:image:type" content="image/jpeg"/>
         <meta property="og:site_name" content="Catedral de Santiago de Compostela"/>
         <meta property="article:publisher" content="https://www.facebook.com/mascompostela/"/>

        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:title" content="{{ $elemento->visitante }}"/>
        <meta name="twitter:description" content="{{ $elemento->seoDescription }}"/>
        <meta name="twitter:image" content="{{asset('storage/portadas/'.$elemento->urlPortada)}}"/>
     @endslot

     {{-- @slot('overMenu')
        <div class="bg-catedral mb-2">
            <p class="text-white font-bold py-2 text-center ">Catedral de Santiago de Compostela</p>
            <div class="w-2/3 mx-auto">
                @livewire('search')
            </div>
        </div>
    @endslot
 --}}



    {{-- @php

        $value = url()->current();
        session(['REDIRECT' => $value]);

    @endphp --}}

    <article itemscope itemtype="https://schema.org/Article">
        <meta itemprop="abstract" content="{{'Historia '.$elemento->prefijoH1.' '.$elemento->name}}" />
        <meta itemprop="image" content="{{asset('/storage/portadas' . '/' . $elemento->urlPortada)}}" />
        <meta itemprop="thumbnailUrl" content="{{asset('/storage/fotos/' . $elemento->id .'/thumbnail/' . $fotoPagina)}}" />



    <header>
        <meta itemprop="name" content="Catedral de Santiago de Compostela" />
        <meta itemprop="abstract" content="{{$elemento->name}}" />


        <div class="relative " >
            <figure >
                <img  alt="Catedral de Santiago de Compostela: {{$elemento->name}}" title="{{$elemento->name}}" class="h-3/4 w-full object-cover object-center"  src="{{asset('/storage/portadas' . '/' . $elemento->urlPortada)}}">
                <figcaption class="bg-gray-100 text-center pb-2 italic text-gray-600">
                <span class="font-semibold">{{$elemento->name}}</span><span> de la Catedral de Santiago</span>
                </figcaption>
            </figure>

           {{--  <h1 class="w-full absolute top-20 pt-10 text-center text-white uppercase textShadow3 font-semibold text-base sm:text-xl  md:text-4xl lg:text-5xl tracking-[.15em]  italic">
                {{ $elemento->name }}
            </h1> --}}
            <h1 class="w-full  mt-4 text-center text-catedral tracking-widest textShadow3 uppercase  font-semibold text-base sm:text-xl  md:text-2xl lg:text-3xl">
                <span>Toda la historia {{$elemento->prefijoH1}}  {{$elemento->name}}</span>
            </h1>

        </div>
        <div class="container">
            <div class="border-l-4 pl-4 border-catedral indent-8 text-gray-600 italic text-lg mt-6 sm:text-xl tracking-wide">
                {!! $elemento->resumen !!}
            </div>
        </div>
    </header>
    <hr class="h-1 mt-4  bg-gray-200">

    @php

            function eliminar_tildes($cadena){

                //Codificamos la cadena en formato utf8 en caso de que nos de errores
                /* $cadena = utf8_encode($cadena); */

                //Ahora reemplazamos las letras
                $cadena = str_replace(
                    array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
                    array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
                    $cadena
                );

                $cadena = str_replace(
                    array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
                    array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
                    $cadena );

                $cadena = str_replace(
                    array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
                    array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
                    $cadena );

                $cadena = str_replace(
                    array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
                    array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
                    $cadena );

                $cadena = str_replace(
                    array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
                    array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
                    $cadena );

                $cadena = str_replace(
                    array('ñ', 'Ñ', 'ç', 'Ç'),
                    array('n', 'N', 'c', 'C'),
                    $cadena
                );

                return $cadena;
            }
        @endphp

        {{-- Informes --}}
        <div id="historia" class="container mb-24">
            @foreach ($reports as $item)
                @if($loop->index !=0 || $elemento->id ==2 || $elemento->id ==44)

                    @php
                        $id = eliminar_tildes($item->titulo);
                        $id = str_replace(" ","_",$id);

                    @endphp

                    <h2 id="{{$id}}" class="mt-4 text-base md:text-xl font-semibold text-catedral scroll-mt-56 lg:scroll-mt-44" itemprop="headline" >{{$item->titulo}}</h2>
                @else
                <meta itemprop="headline" content="{{$elemento->name}}" />
                @endif
                <div class="mt-3 indent-8 text-base md:text-xl text-black" itemprop="articleBody" >
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

    </article>
   {{--  @if ($literal != 'SINLITERAL')
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
    @endif --}}


    <hr class="h-1 mt-4 bg-gray-200">
    @slot('footer')
        <x-catedral-footer :slug='$elemento->slug' />



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
    @endslot



    @slot('js')


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

    @endslot


</x-app-layout>
