<x-app-layout>
    @slot('masHead')
        <title>Catedral de Santiago de Compostela</title>

        <meta name="description" content="La Catedral de Santiago de Compostela es la obra más sobresaliente del arte románico en España. Es, además, la meta final de todos los Caminos de Santiago, que durante siglos han llevado a los peregrinos de la Cristiandad hacia la tumba de un apóstol.">
        <meta name="keywords" content="Catedral de Santiago"/>
        <link rel="icon" href="{{ asset('images/logo.png') }}">
    @endslot

    @slot('social')
        <meta property="og:title" content="{{$elemento->name}}"/>
        <meta property="og:type"  content="article"/>
        <meta property="og:url"   content="{{ URL::current() }}"/>

        <meta property="og:image" content="{{asset('storage/portadas/'.$elemento->urlPortada)}}"/>
        <meta property="og:description" content="{{$elemento->seoDescription}}"/>
        <meta property="og:image:type" content="image/jpeg"/>
        <meta property="og:image:width" content="950" />
		<meta property="og:image:height" content="600" />

        <meta property="og:site_name" content="Catedral de Santiago de Compostela"/>
        <meta property="article:publisher" content="https://www.facebook.com/mascompostela/"/>

        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:title" content="{{ $elemento->visitante }}"/>
        <meta name="twitter:description" content="{{ $elemento->seoDescription }}"/>
        <meta name="twitter:image" content="{{asset('storage/portadas/'.$elemento->urlPortada)}}"/>

    @endslot
    <div itemscope itemtype="https://schema.org/WebSite">
        <meta itemprop="name" content="Catedral de Santiago de Compostela">
        <meta itemprop="url" content="{{ URL::to('/') }}">
    </div>
    <header>
            <meta itemprop="name" content="Catedral de Santiago de Compostela">
            <meta itemprop="abstract" content="{{$elemento->name}}" />

            <section class="bg-cover bg-center" style="background-image: url({{asset('/storage/fotos/' . $elemento->id .'/original/' . $fotoPagina)}})">
                <meta itemprop="primaryImageOfPage" content="{{asset('/storage/fotos/' . $elemento->id .'/original/' . $fotoPagina)}}" />
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                    <h1 itemprop="name" class="m-auto text-center text-white uppercase textShadow3 font-semibold text-base sm:text-xl  md:text-3xl lg:text-4xl tracking-[.15em] ">
                        CATEDRAL DE SANTIAGO DE COMPOSTELA
                    </h1>
                </div>
            </section>


            {{-- <div class="bg-catedral h-96 mt-2 flex object-cover object-bottom" style="background-image: url({{asset('/storage/portadas' . '/' . $elemento->urlPortada)}})">
                <h1 class="m-auto text-center text-white uppercase textShadow3 font-semibold text-base sm:text-xl  md:text-3xl lg:text-4xl tracking-[.15em] ">
                    EXTERIOR DE LA CATEDRAL DE SANTIAGO
                </h1>
            </div> --}}





            {{-- <div class="relative " >
                <figure >
                    <img itemprop="primaryImageOfPage"  alt="{{$elemento->name}}" title="{{$elemento->name}}" class="h-screen/2 w-full object-cover object-center"  src="{{asset('/storage/portadas' . '/' . $elemento->urlPortada)}}" loading="lazy">
                    <figcaption class="bg-gray-100 text-center pb-2 italic text-gray-600">
                    <span>Catedral de Santiago de Compostela</span>
                    </figcaption>
                </figure>

                <h1 class="w-full absolute top-20 pt-10 text-center text-white uppercase textShadow3 font-semibold text-base sm:text-xl  md:text-4xl lg:text-5xl tracking-[.15em]  italic">
                    {{ $elemento->name }}
                </h1>
            </div> --}}
            <div class="container">
                <div class="border-l-8 pl-4 border-catedral indent-8 text-gray-600 italic text-lg mt-6 sm:text-xl tracking-wide">
                    {!! $elemento->resumen !!}
                </div>
            </div>
    </header>



    <div class="container mb-10">
        <a  href="{{route('historia')}}" title="Historia de la Catedral de Santiago">
        <div class=" w-full relative mt-10 ">
            <div class=" hover:scale-110 cursor-pointer">
                <div class="w-full h-full bg-gray-800 top-0 left-0 absolute opacity-100"></div>
                <div class="w-full h-full flex flex-col absolute top-0 left-0 justify-center items-center z-30">

                    <div>
                        <p class="text-white text-xs md:text-xl lg:text-4xl"><span class="md:font-bold underline ">HISTORIA</span> de la Catedral de Santiago</p>
                    </div>
                    <div class="text-xs  sm:text-base md:text-xl lg:text-2xl text-white">
                        <p class="hidden sm:block mx-6 pt-4 italic">La historia de la Catedral de Santiago: El Apóstol Santiago, la construcción de las primeras iglesias, la construcción de la Catedral, transformaciones en el exterior e interior de la Catedral a lo largo del tiempo, Museo de la Catedral ...<p>
                    </div>

                </div>
                <img  class="opacity-60 w-full hover:cursor-wait"src="{{asset('images/BannerHistoriaM.jpg')}}" />
            </div>
        </div>
        </a>
    </div>

    <div class="container mb-10">
        <a  href="{{route('exterior')}}" title="Exterior de la Catedral de Santiago">
        <div class=" w-full relative mt-10 ">
            <div class=" hover:scale-110 cursor-pointer">
                <div class="w-full h-full bg-gray-800 top-0 left-0 absolute opacity-100"></div>
                <div class="w-full h-full flex flex-col absolute top-0 left-0 justify-center items-center z-30">

                    <div >
                        <h2 class="text-white text-xs md:text-xl lg:text-4xl"><span class="font-bold underline ">EXTERIOR</span> de la Catedral de Santiago</h2>
                    </div>
                    <div class="text-xs sm:text-base md:text-xl lg:text-2xl text-white">
                        <p class="hidden sm:block mx-6 pt-4 italic">Fachadas y torres de la Catedral de Santiago. La Fachada del Obradoiro, la de la Azabachería, Platerías, la Quintana y la Torre de Reloj.<p>
                    </div>

                </div>
                <img  class="opacity-60 w-full hover:cursor-wait"src="{{asset('images/BannerExteriorM.jpg')}}" />
            </div>
        </div>
        </a>
    </div>

    <div class="container mb-10">
        <a  href="{{route('interior')}}" title="Interior de la Catedral de Santiago">
        <div class=" w-full relative mt-10 ">
            <div class=" hover:scale-110 cursor-pointer">
                <div class="w-full h-full bg-gray-800 top-0 left-0 absolute opacity-100"></div>
                <div class="w-full h-full flex flex-col absolute top-0 left-0 justify-center items-center z-30">

                    <div>
                        <h2 class="text-white text-xs md:text-xl lg:text-4xl"><span class="font-bold underline ">INTERIOR</span> de la Catedral de Santiago</h2>
                    </div>
                    <div class="text-xs sm:text-base md:text-xl lg:text-2xl text-white">
                        <p class="hidden sm:block mx-6 pt-4 italic">Todos los espacios y elementos del interior de la Catedral de Santiago: Pórtico de la Gloria, Botafumeiro, Claustro, Cripta Apostólica, excavaciones arqueológicas …<p>
                    </div>

                </div>
                <img  class="opacity-60 w-full hover:cursor-wait"src="{{asset('images/BannerInteriorM.jpg')}}" />
            </div>
        </div>
        </a>
    </div>

    <div class="container mb-10">
        <a  href="{{route('capillas')}}" title="Capillas de la Catedral de Santiago">
        <div class=" w-full relative mt-10 ">
            <div class=" hover:scale-110 cursor-pointer">
                <div class="w-full h-full bg-gray-800 top-0 left-0 absolute opacity-100"></div>
                <div class="w-full h-full flex flex-col absolute top-0 left-0 justify-center items-center z-30">

                    <div >
                        <h2 class="text-white text-xs md:text-xl lg:text-4xl"><span class="font-bold underline ">CAPILLAS</span> de la Catedral de Santiago</h2>
                    </div>
                    <div class="text-xs sm:text-base md:text-xl lg:text-2xl text-white">
                        <p class="hidden sm:block mx-6 pt-4 italic">Todas las Capillas del interior de la Catedral de Santiago. Capilla Mayor, de la Corticela, del Pilar, Cristo de Burgos, Salvador, Camarín de Santiago Caballero …<p>
                    </div>

                </div>
                <img  class="opacity-60 w-full hover:cursor-wait"src="{{asset('images/BannerCapillasM.jpg')}}" />
            </div>
        </div>
        </a>
    </div>
    <div class="container mb-10">
        <a  href="{{route('museo')}}" title="Museo de la Catedral de Santiago">
        <div class=" w-full relative mt-10 ">
            <div class=" hover:scale-110 cursor-pointer">
                <div class="w-full h-full bg-gray-800 top-0 left-0 absolute opacity-100"></div>
                <div class="w-full h-full flex flex-col absolute top-0 left-0 justify-center items-center z-30">

                    <div >
                        <h2 class="text-white text-xs md:text-xl lg:text-4xl" ><span class="font-bold underline ">MUSEO</span> de la Catedral de Santiago</h2>
                    </div>
                    <div class="text-xs sm:text-base md:text-xl lg:text-2xl text-white">
                        <p class="hidden sm:block mx-6 pt-4 italic">Todas los espacios del Museo de la Catedral de Santiago. Pinturas, Tapices, Artes Textiles, Orfebrería y elementos arquitectónicos y esculturas<p>
                    </div>

                </div>
                <img  class="opacity-60 w-full hover:cursor-wait"src="{{asset('images/BannerMuseoM.jpg')}}" />
            </div>
        </div>
        </a>
    </div>

    <div class="container mb-10">
        <div class=" hover:scale-110" style="background-image: url({{asset('images/HomeMonumentos.jpg')}})">
            <h2 class="text-white text-xs md:text-xl lg:text-4xl text-center pt-4 font-semibold" ><span class="font-bold underline ">VISITAS</span> a la Catedral de Santiago</h2>
            <div class=" m-4 grid grid-1 sm:grid-2 md:grid-3 lg:grid-cols-4 gap-8 py-8">
                <a  href="{{route('horarios')}}" title="Horarios de apertura de la Catedral de Santiago" class="text-center bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                    <h3>Horarios y Acceso</h3>
                </a>
                <a  href="{{route('misasCatedral')}}" title="Misas en la Catedral de Santiago" class="text-center bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                    <h3>Misas en la Catedral</h3>
                </a>

                <a href="{{route('misasSantiago')}}" title="Misas en Santiago de Compostela" class="text-center bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                    <h3>Misas en Santiago</h3>
                </a>
                <a href="{{route('calendarioLiturgico')}}" title="Calendario litúrgico" class="text-center bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                    <h3>Calendario litúrgico 2.023</h3>
                </a>
                <a href="{{route('entradasVisitas')}}" title="Entradas de pago par ver la Catedral de Santiago" class="text-center bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                    <h3>Visitas con entrada</h3>
                </a>
                <a href="{{route('funcionamientoBotafumeiro')}}" title="Días en los que funciona el Botafumeiro de la  Catedral de Santiago" class="text-center bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                    <h3>Funcionamiento del Botafumeiro</h3>
                </a>
            </div>
        </div>
    </div>

    <hr class="h-2  bg-gray-200">
    <article itemscope itemtype="https://schema.org/Article">
    <h2 class="text-center text1 mt-4 text-base md:text-2xl lg:text-3xl font-semibold underline text-catedral" itemprop="abstract">HISTORIA DE LA CATEDRAL DE SANTIAGO</h2>

    <figure class=" mt-4 w-full ">
        <img alt="Catedral de Santiago de Compostela" class="w-full" src="/storage/fotos/2/original/XulioGil_0011_gvrmzAPeXB.jpg" loading="lazy">
        <figcaption class="bg-gray-100 text-center pb-2 italic text-gray-600">
        <span>Catedral de Santiago de Compostela</span>
        </figcaption>
    </figure>
    <div id="historia" class="container mb-24 mt-8">
        @foreach ($reports as $item)

                <h3 class="mt-4 text-base md:text-2xl font-semibold underline text-catedral" itemprop="headline">{{$item->titulo}}</h3>

            <div class="mt-3 indent-8 text-base md:text-xl text-black" itemprop="articleBody">

                {!! $item->respuesta !!}
            </div>

        @endforeach
    </div>
    </article>
    @slot('footer')
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

        <x-catedral-footer/>
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
