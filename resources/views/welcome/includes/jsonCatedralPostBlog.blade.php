@php
    $palabrasArticulo = str_word_count(strip_tags($elemento->resumen, 0));
    $bodyArticulo = strip_tags($elemento->resumen);
    foreach ($reports as $item) {
        $palabrasArticulo = $palabrasArticulo + str_word_count(strip_tags($item->titulo, 0));
        $palabrasArticulo = $palabrasArticulo + str_word_count(strip_tags($item->respuesta, 0));
        $bodyArticulo = $bodyArticulo.strip_tags($item->respuesta);
    }
    $imagenArticulo = $fotos[0]->url;

@endphp

<script type = "application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "{{url()->current()}}"
        },
        "headline": "{{$h1}}",
        "articleBody": "{{$bodyArticulo}}",
        "wordCount": "{{$palabrasArticulo}}",
        "thumbnailUrl": "{{asset('storage/fotos/'.$elemento->id.'/thumbnail/'.$imagenArticulo)}}",
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
        "publisher": {
            "@type": "Organization",
            "name": "CatedraldeSantiago.online",
            "email": "https://catedraldesantiago.online@gmail.com",
            "url": "https://catedraldesantiago.online/",
            "logo": {
                "@type": "imageObject",
                "url": "{{ asset('images/logo.png') }}"
            }
        },

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
        "dateModified": "{{$elemento->updated_at}}"
    }

</script>

