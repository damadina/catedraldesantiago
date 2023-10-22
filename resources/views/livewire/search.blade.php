<div>
    <form class="flex flex-col w-full px-8 md:px-0 md:w-1/2 pt-2 relative mx-auto text-gray-600" autocomplete="off" >
        {{-- <label for="siteSearch" class="hidden">Search</label> --}}
        <input id="siteSearch" wire:model="buscar"  class="w-full border-2 border-gray-300 bg-white h-8 md:h-10 px-5  rounded-lg text-xs md:text-sm focus:outline-none"
        type="search" name="buscar" placeholder="¿Qúe buscas de la Catedral de Santiago?">

        {{-- <button type="submit" class=" right-0 top-0 mt-5 mr-8 hidden text-white" aria-label="buscar">
            <svg class="text-ray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                width="512px" height="512px">
                <path
                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
            </svg>
        </button>
 --}}



        @if($buscar)
            <ul class="left-0 bg-gray-100 mt-1 rounded-lg overflow-auto h-72 w-full z-50">
                @forelse ($this->results as $result)
                    <li class="leading-10 text-left ml-2 text-xs sm:text-sm cursor-pointer hover:bg-gray-300">
                       <a href="{{env('APP_URL')}}/{{$result['slug']}}" wire:click="clickBuscar()">{{$result['name']}}</a>
                    </li>
                @empty
                <li class="leading-10 px-5 text-xs cursor-pointer hover:bg-gray-300">
                    No hemos encontardo ninguna coincidencia

                </li>
                @endforelse

            </ul>
        @endif

    </form>
</div>


{{-- <div itemscope itemtype="https://schema.org/WebSite">
    <link itemprop="url" href="http://www.example.com/"/>
    <form itemprop="potentialAction" itemscope itemtype="https://schema.org/SearchAction">
          <meta itemprop="target" content="http://example.com/search?q={query}"/>
      <input itemprop="query" type="text" name="query"/>
      <input type="submit"/>
    </form>
</div>
 --}}
