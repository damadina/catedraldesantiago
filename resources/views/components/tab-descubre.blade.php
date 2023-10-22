{{-- Es la Home --}}

<div class="container pt-6">

    <div>
        <ul class="flex md:text-lg text-white">
            <li id="selected-tab1" class="mr-4 p-2 cursor-pointer text-catedral bg-gray-100 font-bold ">Exterior ({{$fachadas->count()}})</li>
            <li id="selected-tab2" class="text-gray-600 mr-4 p-2 cursor-pointer ">Interior ({{$otros->count()}})</li>
            <li id="selected-tab3" class="text-gray-600 mr-4 p-2 cursor-pointer ">Capillas ({{$capillas->count()}})</li>
            <li id="selected-tab4" class="text-gray-600 mr-4 p-2 cursor-pointer ">Arte ({{$museo->count()}})</li>
        </ul>
    </div>

    <div id="selected-content1" class="px-0  flex-grow w-full py-4  mx-auto bg-gray-100">
        <div class="mx-auto w-full px-4">
            <div class="container my-4">
                <p id="fachadas" class="pb-4 underline text-catedral text-center font-semibold  text-xl md:text-2xl  tracking-[.15em]">Exterior de la Catedral</p>
                <p class="text-base md:text-xl italic">En el exterior de la Catedral de Santiago podemos ver una fachada románica (Platerías), dos barrocas (Obradoiro y lienzo de la Puerta Santa en la Quintana) y una neoclásica (Azabachería). </p>

                <div  class="flex flex-no-wrap overflow-x-scroll scrolling-touch items-start mb-8 scrollbar  scrollbar-thumb-catedralbar scrollbar-track-catedral scrollbar-thumb-rounded-full scrollbar-track-rounded-full">

                    @foreach ($fachadas as $item )
                    <x-card-elemento :item="$item"/>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

    <div id="selected-content2" class="hidden px-0  flex-grow w-full py-4  mx-auto bg-white">
        <div id="interior" class="mx-auto w-full px-4">
            <div class="container my-4">
                <p  class="pb-4 underline text-catedral text-center font-semibold  text-xl md:text-2xl  tracking-[.15em]">Interior de la Catedral</p>
                <p class="text-base md:text-xl italic">El recorrido por el interior de la Catedral de Santiago nos permite admirar la arquitectura y piezas históricas de distintas epocas </p>
                <div class="flex flex-no-wrap overflow-x-scroll scrolling-touch items-start mb-8 scrollbar  scrollbar-thumb-catedralbar scrollbar-track-catedral scrollbar-thumb-rounded-full scrollbar-track-rounded-full ">

                    @foreach ($otros as $item )
                    <x-card-elemento :item="$item"/>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

    <div id="selected-content3" class="hidden px-0  flex-grow w-full py-4  mx-auto bg-gray-100">
        <div class="mx-auto w-full px-4">
            <div class="container my-4">
                <p class="pb-4 underline text-catedral text-center font-semibold  text-xl md:text-2xl  tracking-[.15em]">Capillas de la Catedral</p>
                <p class="text-base md:text-xl italic">En las capillas del interior de la Catedral de Santiago, peregrinos de todas las nacionalidades encontraban a los santos de su devoción.</p>
                <div  class="flex flex-no-wrap overflow-x-scroll scrolling-touch items-start mb-8 scrollbar  scrollbar-thumb-catedralbar scrollbar-track-catedral scrollbar-thumb-rounded-full scrollbar-track-rounded-full ">

                    @foreach ($capillas as $item )
                    <x-card-elemento :item="$item"/>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    <div id="selected-content4" class="hidden px-0  flex-grow w-full py-4  mx-auto bg-gray-100">
        <div class="mx-auto w-full px-4">
            <div class="container my-4">
                <p class="pb-4 underline text-catedral text-center font-semibold  text-xl md:text-2xl  tracking-[.15em]">Museo de la Catedral</p>
                <p class="text-base md:text-xl italic">El Museo Catedral de Santiago permite al visitante profundizar su conocimiento en la historia y el arte de la Catedral, a través de sus diferentes espacios y las exposiciones temporales que organiza.</p>


                <div  class="flex flex-no-wrap overflow-x-scroll scrolling-touch items-start mb-8 scrollbar  scrollbar-thumb-catedralbar scrollbar-track-catedral scrollbar-thumb-rounded-full scrollbar-track-rounded-full">

                    @foreach ($museo as $item )
                    <x-card-elemento :item="$item"/>
                    @endforeach
                </div>
            </div>

        </div>
    </div>


</div>




