



@foreach ($reports as $item )
    @php
        $palabrasArticulo = str_word_count(strip_tags($item->respuesta, 0));
    @endphp

    <script type="application/ld+json">
        {
        "@context": "https://schema.org/",
        "@type": "Article",
        "author": {
            "@type": "Organization",
            "name": "catedraldesantiago.online",
            "url": "https://catedraldesantiago.online",
            "logo": "https://catedraldesantiago.online/images/logo.png",
            "sameAs": [
                "https://www.facebook.com/mascompostela/",
                "https://twitter.com/catedraldesant2"
            ]
        },
        "image": "https://catedraldesantiago.online/storage/portadascard/{{$elemento->urlPortada}}",
        "wordCount": "{{$palabrasArticulo}}",
        "headline": "{{$item->titulo}}",
        "articleBody": "{{strip_tags($item->respuesta)}}"
        }
    </script>
@endforeach

@foreach ($allItems as $item )
        @php
            $palabrasArticulo = str_word_count(strip_tags($item->seoDescription, 0));
            $url = asset('/'.$item->slug)
        @endphp

    <script type="application/ld+json">
        {
        "@context": "https://schema.org/",
        "@type": "Article",
        "author": {
            "@type": "Organization",
            "name": "catedraldesantiago.online",
            "url": "https://catedraldesantiago.online",
            "logo": "https://catedraldesantiago.online/images/logo.png"
        },
        "sameAs": "{{$url}}",
        "image": "https://catedraldesantiago.online/storage/portadascard/{{$item->urlPortada}}",
        "wordCount": "{{$palabrasArticulo}}",
        "headline": "{{$item->name}}",
        "articleBody": "{{strip_tags($item->seoDescription)}}"
        }
    </script>


@endforeach


