<x-app-layout>
@slot('masHead')
    <title>Historia de la Catedral de Santiago de Compostela</title>

    <meta name="description" content="  ">
    <meta name="keywords" content="Historia de la Catedral de Santiago"/>
    <link rel="icon" href="{{ asset('images/logo.png') }}">
    <link rel=“canonical” href=”https://catedraldesantiago.online/”/>
@endslot
@slot('overMenu')
    <div class="bg-catedral mb-2">
        <p class="text-white font-bold py-2 text-center ">Catedral de Santiago de Compostela</p>
    </div>
@endslot


<article itemscope itemtype="https://schema.org/Article">

    <header class="bg-catedral h-60 mt-2 flex" style="background-image: url({{asset('images/BannerHistoria.jpg')}})">
        <h1 class="m-auto text-center text-white uppercase textShadow3 font-semibold text-base sm:text-xl  md:text-3xl lg:text-4xl tracking-[.15em] " itemprop="abstract">
            HISTORIA DE LA CATEDRAL DE SANTIAGO
        </h1>
    </header>

    <div id="historia" class="container mb-24 mt-8">
        @foreach ($reports as $item)

                <h2 class="mt-4 text-base md:text-2xl font-semibold underline text-catedral" itemprop="headline">{{$item->titulo}}</h2>

            <div class="mt-3 indent-8 text-base md:text-xl text-black " itemprop="articleBody">

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

{{-- <x-catedral-footer :slug='$info->slug' /> --}}
</x-app-layout>
