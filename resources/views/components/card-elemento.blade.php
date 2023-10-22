<article class="flex-none w-full mr-8   border-4 rounded-lg hover:border-catedral">
    {{-- <div class="flex-none w-3/6 md:w-1/5 mr-8 md:pb-4 border rounded-lg">  --}}
    @php
        $url = 'https://catedraldesantiago.online/'.$item->slug;
        $descripcion =  Str::limit(strip_tags($item->resumen),100);

    @endphp

    <a  class="cursor-zoom-in" href="{{route('catedral.show',$item)}}" title="{{$item->name}}">
        <div class="px-1 bg-white ">
            <header>
                <figure>
                    <img loading="lazy" class="pt-1 object-cover w-full hadow-md  rounded-lg" width="227" height="143" src="{{asset('storage/portadascard/'.$item->urlPortada)}}" title="{{$item->name}}" alt="{{$item->name}}">
                </figure>
                <h2 class="text-base text-center text-catedral font-bold truncate"> {{$item->name}}</h2>
            </header>
            <p class="mt-2 text-gray-700 ">{{$descripcion}}</p>
        </div>
    </a>
</article>



