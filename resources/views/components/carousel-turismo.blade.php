
<div>
    <div id="{{$idCarousel}}" class="carousel mb-6 max-w-6xl mx-auto  border-2 p-4 pb-8">
        <div class="carousel__viewport px-12">

            @foreach ($turismo as $item)
                @if ($loop->index == 1 or $loop->index == 0)
                @continue
                @endif


                <a href="{{route('turismo.show',$item->slug)}}" title="{{$item->name}}" class="carousel__slide py-0 px-4 w-1/3 border-2 ml-4 mb-8 hover:shadow-xl">
                    <figure class="relative">
                        <img loading="lazy" class="mb-4 w-full rounded-lg" src="{{asset('images/Historia de la Catedral.png')}}"/>
                        <figcaption>
                            <h2 class="text-xs md:text-lg absolute top-1/2 left-1/4 transform -translate-x-1/4 -translate-y-1/2 text-white  text-center font-semibold">{{$item->titulo}}</h2>
                        </figcaption>
                        <div class=" absolute left-1 top-2 flex">
                            <i class="fa fa-suitcase text-gray-200" aria-hidden="true"></i>
                            <span class="pl-2 text-xs text-gray-200">Información para el turista</span>
                        </div>
                    </figure>
                    <p class="text-gray-700 font-normal">{{Str::limit(strip_tags($item->seoDescription),100)}}</p>

                </a>
            @endforeach
        </div>
    </div>

</div>


{{-- <div>
    <div>


        <div id="{{$idCarousel}}" class="carousel mb-6 max-w-8xl mx-auto  border-2 p-4 pb-8" >
            <div class="carousel__viewport px-12">

                @foreach ($turismo as $item)
                    @if ($loop->index == 1 or $loop->index == 0)
                        @continue
                    @endif

                    <a href="{{route('turismo.show',$item->slug)}}" title="{{$item->name}}" class="carousel__slide py-0 px-4 w-1/3 border-2 ml-4 mb-8 hover:bg-gray-50">
                        <div class="border-2 hover:shadow-xl relative ">
                            <h3 class="text-xs md:text-lg text-center h-10 bg-gray-200 py-2 font-semibold">{{$item->titulo}}</h3>
                            <p class=" text-xs md:text-lg px-2 text-gray-700 font-normal">{{Str::limit(strip_tags($item->seoDescription),200)}}</p>
                            <div class="absolute -left-1 -top-2">
                                <i class="fa fa-suitcase text-gray-700" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>

                @endforeach
            </div>
        </div>

    </div>
</div> --}}
