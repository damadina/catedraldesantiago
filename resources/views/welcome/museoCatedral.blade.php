<x-app-layout>
    @slot('masHead')
        <title>Museo de la Catedral de Santiago de Compostela</title>

        <meta name="description" content="Todas los espacios del Museo de la Catedral de Santiago. Pinturas, Tapices, Artes Textiles, Orfebrería y elementos arquitectónicos y esculturas">
        <meta name="keywords" content="Museo de la Catedral de Santiago"/>
        <link rel="icon" href="{{ asset('images/logo.png') }}">
    @endslot
    {{-- @slot('overMenu')
        <div class="bg-catedral mb-2">
            <p class="text-white font-bold py-2 text-center ">Catedral de Santiago de Compostela</p>
        </div>
    @endslot --}}
    <h1 class="w-full  mt-4 text-center text-catedral tracking-widest textShadow3 uppercase  font-semibold text-base sm:text-xl  md:text-2xl lg:text-3xl">
        MUSEO DE LA CATEDRAL DE SANTIAGO
    </h1>






    <x-partes-catedral :elementos="$museo"/>


    <x-catedral-footer />
    </x-app-layout>

