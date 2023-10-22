@php
    $palabrasArticulo = str_word_count(strip_tags($elemento->resumen, 0));
    $fechaMayor = $elemento->updated_at;
    foreach ($reports as $item) {
        $palabrasArticulo = $palabrasArticulo + str_word_count(strip_tags($item->titulo, 0));
        $palabrasArticulo = $palabrasArticulo + str_word_count(strip_tags($item->respuesta, 0));
        if($item->updated_at > $fechaMayor) {
            $fechaMayor = $item->updated_at;
        };

    }
    $imagenArticulo = $fotos[0]->url;
@endphp

<script type = "application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "wordCount": "{{$palabrasArticulo}}",
        "thumbnailUrl": "{{asset('storage/fotos/'.$elemento->id.'/thumbnail/'.$imagenArticulo)}}",
        "headline": [
            "{{$h1}}",
            @foreach($reports as $item)
                @if($loop->last)
                    "{{$item->titulo}}"
                @else
                    "{{$item->titulo}}",
                @endif
            @endforeach
        ],

        "author": [
            {
                "@type": "Person",
                "name": "Ramón Yzquierdo Peiró",
                "url": "https://es.linkedin.com/in/ram%C3%B3n-yzquierdo-peir%C3%B3-4a750913a"
            },
            {
                "@type": "Person",
                "name": "Salvador Yzquierdo Peiró",
                "url": "https://es.linkedin.com/in/salvador-yzquierdo-peir%C3%B3-8a248765"
            },
            {
                "@type": "Person",
                "name": "Enrique Touriño Marcén",
                "url" : "https://www.etourino.com/"
            }
        ],


        "image":
        [
            @foreach ($fotos as $item)
                @if($loop->last)
                    {
                        "@type" : "ImageObject",
                        "caption" : "{{$item->piefoto}}}",
                        "inLanguage": "es",
                        "url": "{{asset('storage/fotos/'.$elemento->id.'/original/'.$item->url)}}",
                        "contentUrl": "{{asset('storage/fotos/'.$elemento->id.'/original/'.$item->url)}}",
                        "thumbnail": "{{asset('storage/fotos/'.$elemento->id.'/thumbnail/'.$item->url)}}"
                    }
                @else
                    {
                        "@type" : "ImageObject",
                        "caption" : "{{$item->piefoto}}}",
                        "inLanguage": "es",
                        "url": "{{asset('storage/fotos/'.$elemento->id.'/original/'.$item->url)}}",
                        "contentUrl": "{{asset('storage/fotos/'.$elemento->id.'/original/'.$item->url)}}",
                        "thumbnail": "{{asset('storage/fotos/'.$elemento->id.'/thumbnail/'.$item->url)}}"
                    },
                @endif
            @endforeach
        ],

        "datePublished": "2018-08-03T08:00:00+08:00",
        "dateModified": "{{$fechaMayor}}"
    }

</script>

