<div>


    <div id="{{$idCarousel}}" class="carousel mb-6 max-w-6xl mx-auto  border-2 p-4 pb-8">
        <div class="carousel__viewport px-12">

            @foreach ($cards as $item)
                <a href="{{route('catedral.show',$item)}}" title="{{$item->name}}" class="carousel__slide py-0 px-4 w-1/3 border-2 ml-4 mb-8 hover:shadow-xl">
                    <figure class="">
                        <img loading="lazy" class="mb-4 w-full rounded-lg" src="{{asset('storage/portadascard/'.$item->urlPortada)}}"/>
                        <figcaption>
                            <h2 class="text-catedral text-center text-lg font-semibold">{{$item->name}}</h2>
                            <p class="text-gray-700 font-normal">{{Str::limit(strip_tags($item->resumen),100)}}</p>
                        </figcaption>
                    </figure>
                </a>
            @endforeach
        </div>
    </div>

</div>
