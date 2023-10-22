<div>
    <h1 class="text-xl md:text-3xl text-center font-semibold text-catedral underline mb-4 pt-4  ">
        Fototeca de la Catedral de Santiago
    </h1>

    <form class=" container flex flex-col w-full pt-2 relative mx-auto text-gray-600" autocomplete="off" >

        <input wire:model="buscar"  class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
        type="search" name="buscar" placeholder="¿Qúe estás buscando?"
        itemprop="query-input">
        <button type="submit" class="absolute right-0 top-0 mt-5 mr-4" aria-label="buscar">
            <svg class="text-ray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                width="512px" height="512px">
                <path
                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
            </svg>
        </button>


        @if($buscar)
            <ul class="left-0 w-full bg-gray-100 mt-1 rounded-lg overflow-hidden">
                @forelse ($this->results as $result)
                    <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
                      {{$result['name']}}
                    </li>
                @empty
                <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
                    No hemos encontardo ninguna coincidencia

                </li>
                @endforelse

            </ul>
        @endif

    </form>
    <ul class="container flex flex-wrap gap-2 justify-center max-w-1xl mx-auto "">
        @forelse ($fotos as $item)
            <a data-fancybox="gallery" href="{{asset('storage/fotos/'.$item->catedral_id.'/original/'.$item->url)}}" data-caption="{{$item->piefoto}}">
                <img loading="lazy" class=" rounded" src="{{asset('storage/fotos/'.$item->catedral_id.'/thumbnail/'.$item->url)}}" alt="{{$item->piefoto}}" />

            </a>
        @empty
        <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
            No hemos encontardo ninguna coincidencia

        </li>
        @endforelse
    </ul>



    {{-- <div class="container flex flex-wrap gap-2 justify-center max-w-1xl mx-auto ">


            @foreach ($fotos as $item)

                <a data-fancybox="gallery" href="{{asset('storage/fotos/'.$elemento->id.'/original/'.$item->url)}}" data-caption="{{$item->piefoto}}">
                    <img loading="lazy" class=" rounded" src="{{asset('storage/fotos/'.$elemento->id.'/thumbnail/'.$item->url)}}" alt="{{$item->piefoto}}" />

                </a>
            @endforeach


   </div> --}}
   <div class="px-6 py-4">
    {{$fotos->links()}}
    </div>
</div>

