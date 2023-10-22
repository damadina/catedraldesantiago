<div class="container grid grid-1 md:grid-cols-4 gap-4 mt-8 mb-8" itemscope itemtype="https://schema.org/BreadcrumbList">
    @foreach ($elementos as $item )
        <a itemprop="url" href="{{route('catedral.show',$item)}}" title="{{$item->name}}" class=" py-0 px-4  border-2  hover:shadow-xl">
            <figure class="">
                <img loading="lazy" class="m-2 w-full rounded-lg" src="{{asset('storage/portadas/'.$item->urlPortada)}}"/>
                <figcaption>
                    <h2 itemprop="name"   class="text-catedral text-center text-lg font-semibold">{{$item->name}}</h2>
                    <p class="text-gray-700 font-normal">{{Str::limit(strip_tags($item->resumen),200)}}</p>
                </figcaption>
            </figure>
        </a>
    @endforeach
</div>
