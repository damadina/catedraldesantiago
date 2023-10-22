<x-app-layout>
    @slot('masHead')
        <title>Misas en Santiago de Compostela</title>

        <meta name="description" content="Horarios de misa en la ciudad de Santiago de Compostela.">
        <meta name="keywords" content="Horarios de misas en la ciudad de Santiago de Compostela"/>
        <link rel="icon" href="{{ asset('images/logo.png') }}">
    @endslot

   {{--  @slot('overMenu')
        <div class="bg-catedral mb-2">
            <p class="text-white font-bold py-2 text-center ">Catedral de Santiago de Compostela</p>
        </div>
    @endslot --}}

    {{-- <div class="bg-catedral h-60 mt-2 flex" style="background-image: url({{asset('images/BannerExterior.jpg')}})">
        <p class="m-auto text-center text-white uppercase textShadow3 font-semibold text-base sm:text-xl  md:text-3xl lg:text-4xl tracking-[.15em] ">
            VISITAS A LA CATEDRAL
        </p>
    </div> --}}

    <h1 class="w-full  mt-4 text-center text-catedral tracking-widest textShadow3 uppercase  font-semibold text-base sm:text-xl  md:text-2xl lg:text-3xl">
        MISAS EN SANTIAGO DE COMPOSTELA
     </h1>
    <div class="container ">
    <div class="mt-3 indent-8 text-base md:text-xl text-black ">

        {!! $misas[0]->respuesta !!}
        <div class="text-xs italic my-6">
            <a href="http://catedraldesantiago.es/liturgia/#horarios-misas"  target="_blank">Fuente: catedraldesantiago.es</a>
        </div>
    </div>

    </div>









    <x-catedral-footer/>
    </x-app-layout>

