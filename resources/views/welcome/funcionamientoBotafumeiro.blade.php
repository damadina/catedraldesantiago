<x-app-layout>
    @slot('masHead')
        <title>Horarios de la Catedral de Santiago de Compostela</title>

        <meta name="description" content="Horarios de apertura y cierre de las distintas partes de la Catedral de Santiago de Compostela. ** Descargate el plano de la Catedral **">
        <meta name="keywords" content="Horarios de la Catedral de Santiago"/>
        <link rel="icon" href="{{ asset('images/logo.png') }}">
    @endslot

    {{-- @slot('overMenu')
        <div class="bg-catedral mb-2">
            <p class="text-white font-bold py-2 text-center ">Catedral de Santiago de Compostela</p>
        </div>
    @endslot --}}

   {{--  <div class="bg-catedral h-60 mt-2 flex" style="background-image: url({{asset('images/BannerExterior.jpg')}})">
        <p class="m-auto text-center text-white uppercase textShadow3 font-semibold text-base sm:text-xl  md:text-3xl lg:text-4xl tracking-[.15em] ">
            VISITAS A LA CATEDRAL
        </p>
    </div> --}}

    <h1 class="w-full  mt-4 text-center text-catedral tracking-widest textShadow3 uppercase  font-semibold text-base sm:text-xl  md:text-2xl lg:text-3xl">
        FUNCIONAMIENTO DEL BOTAFUMEIRO
     </h1>
    <div class="container grid grid-1 md:grid-cols-2 gap-4">
    <div class="mt-3 indent-8 text-base md:text-xl text-black ">

        {!! $botafumeiro[0]->respuesta !!}
        <div class="text-xs italic my-6">
            <a href="http://catedraldesantiago.es/liturgia/#botafumeiro"  target="_blank">Fuente: catedraldesantiago.es</a>
        </div>
    </div>
    <div class="my-auto">
        <div>
            <img loading="lazy" src="{{ asset('images/PlanoCatedral.jpg') }}" alt="Plano de la Catedral de Santiago de Compostela">
        </div>
        <a href="{{ route('download') }}"
                    class="mt-8 mb-6 bg-black hover:bg-catedral text-white font-bold py-2 px-4 border border-gray-700 rounded inline-flex items-center"
                    title="Descárgate el plano de la Catedral de Santiago">

                    <span class="text-xs md:text-base">Descárgate el plano de la Catedral</span>
                </a>
    </div>
    </div>









    <x-catedral-footer/>
    </x-app-layout>

