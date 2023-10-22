<!-- component -->
<!-- Foooter -->
<footer class="bg-gray-100">
    <div class="px-4  mx-auto sm:px-6 lg:px-8">
        <nav class="flex flex-wrap justify-center pt-4">
            {{-- <a href="{{route('home')}}" class="py-auto"> --}}
                <img src="{{ asset('images/logo.png') }}" alt="Logo Catedral de Santiago" width="30" height="43">
            {{-- </a> --}}
        </nav>
        <nav class="  pt-2">
            <div class="md:flex justify-center">
            <div class="px-5">
                <a href="{{route('autores')}}" class="text-base leading-6 text-gray-800 hover:text-gray-900">
                    Autores
                </a>
            </div>

            <div class="px-5">
                <a href="{{route('bibliografia')}}" class="text-base leading-6 text-gray-800 hover:text-gray-900">
                    Bibliografía
                </a>
            </div>


            <div class="px-5">
                <a href="{{route('mapa')}}" class="text-base leading-6 text-gray-800 hover:text-gray-900">
                    Mapa del sitio
                </a>
            </div>

            <div class="px-5">
                <a href="{{route('legal')}}" class="text-base leading-6 text-gray-800 hover:text-gray-900">
                    Aviso legal
                </a>
            </div>


            <div class="px-5">
                <a href="{{route('privacidad')}}" class="text-base leading-6 text-gray-800 hover:text-gray-900">
                    Política de privacidad
                </a>
            </div>


            <div class="px-5">
                <a href="{{route('cookies')}}" class="text-base leading-6 text-gray-800 hover:text-gray-900">
                    Política de Cookies
                </a>
            </div>

            </div>
            <div class="px-5 mt-2 flex md:justify-center ">
                <p class="text-base leading-6 text-catedral font-semibold hover:text-gray-900">
                    Contacto:
                </p>
                <p class="text-base ml-2 leading-6 text-gray-800 hover:text-gray-900">
                    catedraldesantiago.online@gmail.com
                </p>
            </div>
        </nav>
    </div>
    <div class="flex justify-center mt-4 px-0 items-center bg-catedral">
        <span class=" text-base leading-6 text-center text-white  py-auto">
            © 2021 catedraldeSantiago.online
        </span>
    </div>
</footer>
