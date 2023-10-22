<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/panzoom.css"/>


 {{--    <style>
        .carousel {
  --carousel-button-color: #fff;
  --carousel-button-bg: #941431;
  --carousel-button-shadow: 0 2px 1px -1px rgb(0 0 0 / 20%),
    0 1px 1px 0 rgb(0 0 0 / 14%), 0 1px 3px 0 rgb(0 0 0 / 12%);

  --carousel-button-svg-width: 20px;
  --carousel-button-svg-height: 20px;
  --carousel-button-svg-stroke-width: 2.5;
}

.carousel .carousel__slide {
  width: 25%;
  padding: 5px;
}

/* @media only screen and (max-width: 600px) {
    .carousel .carousel__slide {
    width: 90%;
    padding: 5px;
}
} */




.carousel .carousel__button.is-prev {
  left: -1.5rem;
}

.carousel .carousel__button.is-next {
  right: -1.5rem;
}

.carousel .carousel__button:focus {
  outline: none;
  box-shadow: 0 0 0 4px #A78BFA;
}

.fancybox__container {
  --fancybox-bg: #fff;
  --fancybox-color: #4B5563;

  --carousel-button-width: 50px;
  --carousel-button-height: 50px;
  --carousel-button-bg: rgba(255, 255, 255, 0.9);

  --carousel-button-svg-stroke-width: 1.8;
  --carousel-button-svg-filter: none;
}

.fancybox__caption {
  padding: 1rem 4rem 0 4rem;
  font-size: 1rem;
  line-height: 1.5rem;
}




#cardSlider {
  --carousel-button-bg: #fff;

  --carousel-button-width: 38px;
  --carousel-button-height: 38px;

  --carousel-button-svg-width: 17px;
  --carousel-button-svg-height: 17px;

  --carousel-button-svg-stroke-width: 3;
  --carousel-button-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px,
    rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 4px 6px -1px,
    rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;
}

.carousel__button.is-prev {
  left: 70px;
}

.carousel__button.is-next {
  right: 70px;
}



    </style> --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

    {{-- <div>
        <x-carousel-Card :cards="$capillas"/>
    </div>
    <div>
        <x-carousel-Card :cards="$capillas"/>
    </div>
 --}}

    {{-- <div id="fotosCarousel" class="carousel w-10/12 max-w-6xl mx-auto bg-gray-200 ">
        @foreach ($fotos as $item )

            <div data-title="Catedral de Santiago: {{$item->name}}" class="flex flex-wrap max-h-80  object-cover  overflow-hidden carousel__slide   my-auto mx-auto text-center" data-src="{{ asset('storage/fotos/' . $elemento->id . '/original/' . $item->url) }}" data-fancybox="gallery" data-caption="{{$item->piefoto}}">
                <img   class=" bg-red-500 object-none overflow-hidden mx-auto" data-lazy-src="{{ asset('storage/fotos/' . $elemento->id . '/thumbnail/' . $item->url) }}" alt="Catedral de Santiago: {{$item->name}}"/>
            </div>
        @endforeach

    </div> --}}


{{-- <div class="mx-auto max-w-4xl">
    <div id="controls-carousel" class="relative mx-auto" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            @foreach ($fotos as $item )
            <img class="mb-4 w-full rounded-lg" src="{{ asset('storage/fotos/' . $elemento->id . '/thumbnail/' . $item->url) }}"/>
            @endforeach

        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</div> --}}





            <div class="py-10">
            <x-carousel-fotos :fotos="$fotos" :elementoId="$elemento->id" idCarousel="fotosCarousel"/>
            </div>
            <div class="container">
                <x-carousel-videos :videos="$videos" :elementoId="$elemento->id" idCarousel="videosCarousel"/>
            </div>
            <x-carousel-Card :cards="$fachadas"  idCarousel="fachadasCarousel"/>

            <x-carousel-Card :cards="$otros" idCarousel="otrosCarousel"/>

            <x-carousel-Card :cards="$capillas" idCarousel="capillasCarousel"/>

            <x-carousel-Card :cards="$museo" idCarousel="museoCarousel"/>









{{-- <div id="myCarousel" class="carousel w-10/12 max-w-5xl mx-auto">
        <div class="carousel__viewport px-12">

            @foreach ($fachadas as $item)

                <figure class="carousel__slide py-0 px-4 w-1/3 border-2">
                <img class="mb-4 w-full rounded-lg" src="{{asset('storage/portadascard/'.$item->urlPortada)}}"/>
                <figcaption>
                    <a href="{{route('catedral.show',$item)}}" title="{{$item->name}}" class="text-lg font-semibold"><h2>{{$item->name}}</h2></a>
                    <p>{{Str::limit(strip_tags($item->resumen),100)}}</p>
                </figcaption>
                </figure>

            @endforeach
        </div>
</div> --}}
{{-- <div id="carouselFachadas" class="carousel w-10/12 max-w-5xl mx-auto">
    <div class="carousel__viewport px-12">

        @foreach ($fachadas as $item)

            <figure class="carousel__slide py-0 px-4 w-1/3 border-2">
            <img class="mb-4 w-full rounded-lg" src="{{asset('storage/portadascard/'.$item->urlPortada)}}"/>
            <figcaption>
                <a href="{{route('catedral.show',$item)}}" title="{{$item->name}}" class="text-lg font-semibold"><h2>{{$item->name}}</h2></a>
                <p>{{Str::limit(strip_tags($item->resumen),100)}}</p>
            </figcaption>
            </figure>

        @endforeach
    </div>
</div> --}}




{{-- <div id="cardSlider2" class="carousel w-10/12 max-w-5xl mx-auto">
    <div class="carousel__viewport px-12">

        @foreach ($fachadas as $item)

            <figure class="carousel__slide py-0 px-4 w-1/3 border-2">
            <img class="mb-4 w-full rounded-lg" src="{{asset('storage/portadascard/'.$item->urlPortada)}}"/>
            <figcaption>
                <a href="{{route('catedral.show',$item)}}" title="{{$item->name}}" class="text-lg font-semibold"><h2>{{$item->name}}</h2></a>
                <p>{{Str::limit(strip_tags($item->resumen),100)}}</p>
            </figcaption>
            </figure>

        @endforeach
    </div>
</div> --}}








<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script>

    // Initialise Carousel Fotos
    var exist = document.querySelector("#fotosCarousel");
    if(exist !== null ) {
        const myCarousel = new Carousel(document.querySelector("#fotosCarousel"), {
        preload: 2,
        slidesPerPage:1,
        Dots: false,
        });
    };
    // Initialise Carousel Fotos
    var exist = document.querySelector("#videosCarousel");
    if(exist !== null ) {
        const videosCarousel = new Carousel(document.querySelector("#videosCarousel"), {
        preload: 2,
        slidesPerPage:'auto',
        Dots: false,
        });
    };



    // Initialise Carousel Fachadas
    var exist = document.querySelector("#fachadasCarousel");
    if(exist !== null ) {
        const fachadasCarousel = new Carousel(document.querySelector("#fachadasCarousel"), {
        preload: 2,
        slidesPerPage:'auto',
        Dots: false,
        });
    };
    // Initialise Carousel Otros
    var exist = document.querySelector("#otrosCarousel");
    if(exist !== null ) {
        const otrosCarousel = new Carousel(document.querySelector("#otrosCarousel"), {
        preload: 2,
        slidesPerPage:'auto',
        Dots: false,
        });
    };

    // Initialise Carousel Museo
    var exist = document.querySelector("#capillasCarousel");
    if(exist !== null ) {
        const capillasCarousel = new Carousel(document.querySelector("#capillasCarousel"), {
        preload: 2,
        slidesPerPage:'auto',
        Dots: false,
        });
    };

    // Initialise Carousel Museo
    var exist = document.querySelector("#museoCarousel");
        if(exist !== null ) {
            const museoCarousel = new Carousel(document.querySelector("#museoCarousel"), {
            preload: 2,
            slidesPerPage:'auto',
            Dots: false,
            });
        };

</script>
</body>
</html>
