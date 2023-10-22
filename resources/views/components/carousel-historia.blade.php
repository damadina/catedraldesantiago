<div>
    <div id="{{$idCarousel}}" class="carousel mb-6 max-w-6xl mx-auto  border-2 p-4 pb-8">
        <div class="carousel__viewport px-12">

            @foreach ($historia as $item)
                <a href="{{route('historia.show',$item->slug)}}" title="{{$item->name}}" class="carousel__slide py-0 px-4 w-1/3 border-2 ml-4 mb-8 hover:shadow-xl">
                    <figure class="relative">
                        <img loading="lazy" class="mb-4 w-full rounded-lg" src="{{asset('images/Historia de la Catedral.png')}}" alt="historia de la Catedral"/>
                        <figcaption>
                            <h2 class="text-xs md:text-lg absolute top-1/2 left-1/4 transform -translate-x-1/4 -translate-y-1/2 text-white  text-center font-semibold">{{$item->titulo}}</h2>
                        </figcaption>
                        <div class=" absolute left-1 top-2 flex">
                            <i class="fa fa-book text-gray-200" aria-hidden="true"></i>
                            <span class="pl-2 text-xs text-gray-200">Historia de la Catedral</span>
                        </div>
                    </figure>
                    {{-- <p class="text-xs md:text-lg text-gray-700 font-normal">{{Str::limit(strip_tags($item->seoDescription),100)}}</p> --}}
                    <p class="text-gray-700 font-normal">{{Str::limit(strip_tags($item->seoDescription),100)}}</p>
                </a>
            @endforeach
        </div>
    </div>

</div>


{{-- <div>


    <div id="{{$idCarousel}}" class="carousel mb-6 mx-auto  border-2 p-4 pb-8">
        <div class="carousel__viewport px-12">

            @foreach ($historia as $item)
                <a href="{{route('historia.show',$item->slug)}}" title="{{$item->name}}" class="carousel__slide py-0 px-4  md:w-1/3 border-2 ml-4 mb-8 hover:shadow-xl">
                    <div class="relative">
                        <h2 class="mb-4 w-full text-xs md:text-lg text-center rounded-lg bg-gray-300">{{$item->titulo}}</h2>
                        <p class="text-xs md:text-lg px-2 text-gray-700 font-normal">{{Str::limit(strip_tags($item->seoDescription),200)}}</p>
                        <div class="absolute -left-1 -top-2">
                            <i class="fa fa-book text-gray-700" aria-hidden="true"></i>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

</div>
 --}}



