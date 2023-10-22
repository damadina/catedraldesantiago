<!-- component -->
<!-- Foooter -->
<footer class="bg-gray-100">
    <div class="px-4  mx-auto sm:px-6 lg:px-8">
        <nav class="flex flex-wrap justify-center pt-4">
            {{-- <a href="{{route('home')}}" class="py-auto"> --}}
                <img src="{{ asset('images/logo.png') }}" alt="Logo Catedral de Santiago" width="30" height="43">
            {{-- </a> --}}
        </nav>
        <nav class="md:flex justify-center pt-2">
            @if($slug != 'catedral-de-santiago')
                <div class="">
                    <a href="{{route('home')}}" class="text-base leading-6 text-gray-800 hover:text-gray-900">
                        Catedral de Santiago
                    </a>
                </div>
            @endif


            @if($slug != 'autores')
                <div class="px-5">
                    <a href="{{route('autores')}}" class="text-base leading-6 text-gray-800 hover:text-gray-900">
                        Autores
                    </a>
                </div>
            @endif
            @if($slug != 'bibliografia')
                <div class="px-5">
                    <a href="{{route('bibliografia')}}" class="text-base leading-6 text-gray-800 hover:text-gray-900">
                        Bibliografía
                    </a>
                </div>
            @endif
            @if($slug != 'mapasitio')
                <div class="px-5">
                    <a href="{{route('mapa')}}" class="text-base leading-6 text-gray-800 hover:text-gray-900">
                        Mapa del sitio
                    </a>
                </div>
            @endif
            @if($slug != 'contactanos')
                <div class="px-5">
                    <a href="{{route('contactanos.index')}}" class="text-base leading-6 text-gray-800 hover:text-gray-900">
                        Contacto
                    </a>
                </div>
            @endif
            @if($slug != 'legal')
                <div class="px-5">
                    <a href="{{route('legal')}}" class="text-base leading-6 text-gray-800 hover:text-gray-900">
                        Aviso legal
                    </a>
                </div>
                @endif
            @if($slug != 'privacidad')
                <div class="px-5">
                    <a href="{{route('privacidad')}}" class="text-base leading-6 text-gray-800 hover:text-gray-900">
                        Política de privacidad
                    </a>
                </div>
            @endif
            @if($slug != 'cookies')
                <div class="px-5">
                    <a href="{{route('cookies')}}" class="text-base leading-6 text-gray-800 hover:text-gray-900">
                        Política de Cookies
                    </a>
                </div>
            @endif
        </nav>
    </div>
    <div class="flex justify-center mt-4 px-0 items-center bg-gray-600">
        <span class=" text-base leading-6 text-center text-white  py-auto">
            © 2021 catedraldeSantiago.online
        </span>
    </div>
</footer>
