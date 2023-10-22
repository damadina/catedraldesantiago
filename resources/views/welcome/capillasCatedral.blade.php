<x-app-layout>
    @slot('masHead')
        <title>Capillas de la Catedral de Santiago de Compostela</title>


        <meta name="description" content="Todas las Capillas del interior de la Catedral de Santiago. Capilla Mayor, de la Corticela, del Pilar, Cristo de Burgos, Salvador, Camarín de Santiago Caballero …">
        <meta name="keywords" content="Capillas de la Catedral de Santiago"/>
        <link rel="icon" href="{{ asset('images/logo.png') }}">
    @endslot
    {{-- @slot('overMenu')
        <div class="bg-catedral mb-2">
            <p class="text-white font-bold py-2 text-center ">Catedral de Santiago de Compostela</p>
        </div>
    @endslot
 --}}
    <h1 class="w-full  mt-4 text-center text-catedral tracking-widest textShadow3 uppercase  font-semibold text-base sm:text-xl  md:text-2xl lg:text-3xl">
        CAPILLAS DE LA CATEDRAL DE SANTIAGO
    </h1>


    {{-- <div class="bg-catedral h-60 mt-2 flex" style="background-image: url({{asset('images/BannerCapillas.jpg')}})">
        <h1 class="m-auto text-center text-white uppercase textShadow3 font-semibold text-base sm:text-xl  md:text-3xl lg:text-4xl tracking-[.15em] ">
           CAPILLAS DE LA CATEDRAL DE SANTIAGO
        </h1>
    </div> --}}


    <x-partes-catedral :elementos="$capillas"/>

    <x-catedral-footer/>
    </x-app-layout>

