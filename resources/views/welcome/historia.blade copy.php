<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{URL::current()}}" />

        <link rel="icon" href="{{ asset('images/logo.png') }}">

        <link rel="stylesheet" href="{{mix('css/app.css') }}">

        @php
            $descripcion = "Toda la historia de la Catedral de Santiago de Compostela";
            $title = "Historia de la Catedral de Santiago de Compostela";
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
        {{-- @include('welcome.includes.jsonCatedralPost') --}}
        @foreach ($reports as $item )
            @php
                $palabrasArticulo = str_word_count(strip_tags($item->respuesta, 0));
            @endphp

            <script type="application/ld+json">
                {
                "@context": "https://schema.org/",
                "@type": "Article",
                "wordCount": "{{$palabrasArticulo}}",
                "author": {
                    "@type": "Organization",
                    "name": "catedraldesantiago.online",
                    "url": "https://catedraldesantiago.online",
                    "logo": "https://catedraldesantiago.online/images/logo.png",
                    "sameAs": [
                        "https://www.facebook.com/mascompostela/",
                        "https://twitter.com/catedraldesant2"
                    ]
                },
                "headline": "{{$item->titulo}}",
                "articleBody": "{{strip_tags($item->respuesta)}}"
                }
            </script>

        @endforeach






       @livewireStyles
       @livewireScripts

    </head>
	<body class="bg-white">

        @php
            $tocHistoria = [];
            $tocInfos= [];
            foreach ($reports as $index=>$each) {
                $oneToc = '<a class="hover:font-bold" href="#'.$index.'">'.'<li class="ml-4 pt-4">'.$each->titulo.'</li></a>';
                array_push($tocHistoria,$oneToc);
            }
        @endphp

        @include('cookie-consent::index')

        @livewire('navigation-menu')
        <button id="btnScrollToTop" aria-label="Inicio de página" class="top"></button>

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
                        Historia de la Catedral de Santiago de Compostela
                    </h1>
                </div>
            </header>








            {{--TOC--}}
            <div class="container grid grid-cols-1 md:grid-cols-2 gap-8 list-decimal mb-6">
                <nav  class="container border-2 mb-6 mt-6 bg-gray-100">
                    <ol class="text-base px-4 list-decimal pb-4" >
                        <div class="text-gray-700 underline pl-6">
                            CONTENIDOS
                        </div>
                        @foreach ($tocHistoria as $each )
                            {!!$each!!}
                        @endforeach

                    </ol>
                </nav>
            </div>

            <hr class="h-1 mt-8 bg-gray-200">


                <div class="">

                    <div class="container pb-20">
                        <div class="pt-4 text-gray-900 text-base md:text-xl leading-loose text-justify ">
                            {{-- @if($elemento->categoria == 6 or $elemento->id == 44) --}}
                                @if($reports->count())
                                    <div >
                                        @foreach ($reports as $each )
                                            <div>

                                                <h2 id="{{$loop->index}}" class="font-semibold py-4">{{$each->titulo}}</h2>

                                                <div   class="text-base md:text-xl">
                                                    {!!$each->respuesta!!}
                                                <div>
                                                </div>


                                            <hr class="h-2 bg-gray-200">
                                        @endforeach
                                    </div>
                                @endif

                        </div>

                    </div>

                </div>




        </main>



        <section>

            <x-catedral-footer slug='historia-catedral-santiago'/>
        </section>

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



 {{-- <pre>
    @foreach ($allItems as $item)
        @php
            $cadena = $item->name;
            $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿ';
            $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyyby';
            $cadena = utf8_decode($cadena);
            $cadena = strtr($cadena, utf8_decode($originales), $modificadas);
            $cadena = utf8_encode($cadena);

        @endphp

        [
        "slug" => "{{$item->slug}}",
        "name" => "{{$item->name}}",
        "nameSinAcentos" => "{{$cadena}}",
        ],
    @endforeach

</pre> --}}




