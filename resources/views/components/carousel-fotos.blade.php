<div>
    <div id="{{$idCarousel}}" class="carousel w-10/12 max-w-7xl mx-auto border-2 p-4 pb-8">
        @foreach ($fotos as $item )

            <div data-title="Catedral de Santiago: {{$item->name}}" class=" w-full max-h-80  object-cover  scrollbar-hide carousel__slide   my-auto mx-auto text-center" data-src="{{ asset('storage/fotos/' . $elementoId. '/original/' . $item->url) }}" data-fancybox="gallery" data-caption="{{$item->piefoto}}">
                <img loading="lazy"  class="object-cover w-full  mx-auto hover:opacity-75"   data-lazy-src="{{ asset('storage/fotos/' . $elementoId . '/thumbnail/' . $item->url) }}" alt="Catedral de Santiago: {{$item->name}}"/>
            </div>
        @endforeach

    </div>
</div>
