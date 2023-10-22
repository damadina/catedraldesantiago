<div>
    {{-- <div id="{{$idCarousel}}" class="carousel w-10/12 max-w-6xl mx-auto bg-gray-200 ">
        @foreach ($videos as $item )
            @php
                $finalUrl = basename($item->url);;
                $urlImag = "https://img.youtube.com/vi/".$finalUrl."/sddefault.jpg";
            @endphp
            <a data-fancybox href="{{$item->url}}">
                <img  loading="lazy" src="{{$urlImag}}" alt="">
            </a>
            <i class="text-white font-bold text-2xl absolute top-1/2 left-1/2 fa-solid fa-play"></i>

            <p class="text-center">{{$item->titulo}}</p>
        @endforeach

    </div> --}}

    <div id="{{$idCarousel}}" class="carousel mb-6 max-w-4xl mx-auto border-2 border-2 p-4 pb-8">
        <div class="carousel__viewport">

            @foreach ($videos as $item)
                @php
                    $finalUrl = basename($item->url);;
                    $urlImag = "https://img.youtube.com/vi/".$finalUrl."/sddefault.jpg";
                @endphp
                <figure class="carousel__slide  border-2 mb-8  ">
                    <div class="relative">
                        <a data-fancybox href="{{$item->url}}">
                            <img loading="lazy"  class="mb-4 w-full rounded-lg" src="{{$urlImag}}"/>
                            <i class="text-white font-bold text-2xl absolute top-1/2 left-1/2 fa-solid fa-play"></i>
                        </a>

                    </div>
                    <figcaption>
                        <h3 class="text-center text-catedral">{{$item->titulo}}</h3>
                        <p class="pt-2">{{$item->videohtml}}</p>
                    </figcaption>
                </figure>

            @endforeach
        </div>
    </div>






</div>

