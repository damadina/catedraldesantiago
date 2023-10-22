<x-app-layout>
    @slot('masHead')
        <title>Entradas Catedral de Santiago</title>

        <meta name="description" content="Entradas a las zonas NO grtauitas de la Catedral de Santiago de Compostela">
        <meta name="keywords" content="Horarios de la Catedral de Santiago"/>
        <link rel="icon" href="{{ asset('images/logo.png') }}">
    @endslot

    {{-- @slot('overMenu')
        <div class="bg-catedral mb-2">
            <p class="text-white font-bold py-2 text-center ">Catedral de Santiago de Compostela</p>
        </div>
    @endslot --}}

    {{-- <div class="bg-catedral h-60 mt-2 flex" style="background-image: url({{asset('images/BannerExterior.jpg')}})">
        <p class="m-auto text-center text-white uppercase textShadow3 font-semibold text-base sm:text-xl  md:text-3xl lg:text-4xl tracking-[.15em] ">
            VISITAS A LA CATEDRAL
        </p>
    </div>
 --}}
     <h1 class="w-full  mt-4 text-center text-catedral tracking-widest textShadow3 uppercase  font-semibold text-base sm:text-xl  md:text-2xl lg:text-3xl">
        ENTRADAS PARA VISITAS
     </h1>
    <div class="container ">
    <div class="mt-3 text-base md:text-xl text-black ">

        {!! $entradas[0]->respuesta !!}
        <div class="text-xs italic my-6">
            <a href="https://visitas.catedraldesantiago.es/es-ES/venta-de-entradas"  target="_blank">Fuente: catedraldesantiago.es</a>
        </div>
    </div>

    </div>









    <x-catedral-footer/>
    </x-app-layout>

