
<div class="bg-white shadow-xl rounded overflow-hidden ">
    @php
        $finUrl = basename(parse_url($item->url, PHP_URL_PATH));

    @endphp

    <a class="relative" data-fancybox href="{{$item->url}}">

        <img loading="lazy" class="image" src="{{'https://img.youtube.com/vi/'.$finUrl.'/mqdefault.jpg'}}"  />
        <div class="overlay">
            <button href="#" class="play-icon" title="Video Play">
                <i class="fa fa-play"></i>
            </button>
        </div>
    </a>

    <p class="px-2 pt-1 text-xs sm:text-sm text-gray-600 leading-6">{{$item->titulo}}</p>


</div>
