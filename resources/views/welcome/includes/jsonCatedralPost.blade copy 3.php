@php
    $palabrasArticulo = str_word_count(strip_tags($elemento->resumen, 0));
    foreach ($reports as $item) {
        $palabrasArticulo = $palabrasArticulo + str_word_count(strip_tags($item->titulo, 0));
        $palabrasArticulo = $palabrasArticulo + str_word_count(strip_tags($item->respuesta, 0));
    }
@endphp

<script type = "application/ld+json"> {
  "@context": "https://schema.org",
  "@graph": [{
    "@type": "Article",
    "@id": "https://catedraldesantiago.online/{{$elemento->slug}}/#article",
    "isPartOf": {
      "@id": "https://catedraldesantiago.online/{{$elemento->slug}}"
    },
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
    "headline": "{{$textoFinalH1}}",
    "image": [
        @foreach ($fotos as $item)
            @if($loop->last)
                {
                    "@type" : "ImageObject",
                    "caption" : "Soy la Caption"
                }
            @else
                {
                    "@type" : "ImageObject",
                    "caption" : "Soy la Caption"
                }
            @endif
        @endforeach

   ],

    "mainEntityOfPage": {
        "@id": "https://catedraldesantiago.online/{{$elemento->slug}}"
    },
    "wordCount": {{$palabrasArticulo}},
    "publisher": {
      "@id": "https://catedraldesantiago.online/#organization"
    },
    "image": {
      "@id": "https://neilpatel.com/es/blog/la-guia-paso-a-paso-para-escribir-titulos-poderosos/#primaryimage"
    },


    "thumbnailUrl": "https://neilpatel.com/wp-content/uploads/2015/06/writing.jpg",
    "articleSection": ["Marketing de Contenidos"],
    "inLanguage": "es",
    "potentialAction": [{
      "@type": "CommentAction",
      "name": "Comment",
      "target": ["https://neilpatel.com/es/blog/la-guia-paso-a-paso-para-escribir-titulos-poderosos/#respond"]
    }]
  }, {
    "@type": "WebPage",
    "@id": "https://neilpatel.com/es/blog/la-guia-paso-a-paso-para-escribir-titulos-poderosos/",
    "url": "https://neilpatel.com/es/blog/la-guia-paso-a-paso-para-escribir-titulos-poderosos/",
    "name": "La Guía Paso a Paso Para Escribir Títulos Poderosos",
    "isPartOf": {
      "@id": "https://neilpatel.com/es/#website"
    },
    "primaryImageOfPage": {
      "@id": "https://neilpatel.com/es/blog/la-guia-paso-a-paso-para-escribir-titulos-poderosos/#primaryimage"
    },
    "image": {
      "@id": "https://neilpatel.com/es/blog/la-guia-paso-a-paso-para-escribir-titulos-poderosos/#primaryimage"
    },
    "thumbnailUrl": "https://neilpatel.com/wp-content/uploads/2015/06/writing.jpg",
    "datePublished": "2016-07-30T11:47:27+00:00",
    "dateModified": "2019-02-15T14:44:51+00:00",
    "breadcrumb": {
      "@id": "https://neilpatel.com/es/blog/la-guia-paso-a-paso-para-escribir-titulos-poderosos/#breadcrumb"
    },
    "inLanguage": "es",
    "potentialAction": [{
      "@type": "ReadAction",
      "target": ["https://neilpatel.com/es/blog/la-guia-paso-a-paso-para-escribir-titulos-poderosos/"]
    }]
  }, {
    "@type": "ImageObject",
    "inLanguage": "es",
    "@id": "https://neilpatel.com/es/blog/la-guia-paso-a-paso-para-escribir-titulos-poderosos/#primaryimage",
    "url": "https://neilpatel.com/wp-content/uploads/2015/06/writing.jpg",
    "contentUrl": "https://neilpatel.com/wp-content/uploads/2015/06/writing.jpg",
    "width": 1688,
    "height": 1125,
    "caption": "Making notes on coffee break, female hand with pen"
  }, {
    "@type": "BreadcrumbList",
    "@id": "https://neilpatel.com/es/blog/la-guia-paso-a-paso-para-escribir-titulos-poderosos/#breadcrumb",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "name": "Blog",
      "item": "https://neilpatel.com/es/blog/"
    }, {
      "@type": "ListItem",
      "position": 2,
      "name": "La Guía Paso a Paso Para Escribir Títulos Poderosos"
    }]
  }, {
    "@type": "WebSite",
    "@id": "https://neilpatel.com/es/#website",
    "url": "https://neilpatel.com/es/",
    "name": "Neil Patel",
    "description": "",
    "publisher": {
      "@id": "https://neilpatel.com/es/#organization"
    },
    "potentialAction": [{
      "@type": "SearchAction",
      "target": {
        "@type": "EntryPoint",
        "urlTemplate": "https://neilpatel.com/es/?s={search_term_string}"
      },
      "query-input": "required name=search_term_string"
    }],
    "inLanguage": "es"
  }, {
    "@type": "Organization",
    "@id": "https://neilpatel.com/es/#organization",
    "name": "Neil Patel",
    "url": "https://neilpatel.com/es/",
    "sameAs": [],
    "logo": {
      "@type": "ImageObject",
      "inLanguage": "es",
      "@id": "https://neilpatel.com/es/#/schema/logo/image/",
      "url": "https://neilpatel.com/wp-content/uploads/2022/07/neilpatel.png",
      "contentUrl": "https://neilpatel.com/wp-content/uploads/2022/07/neilpatel.png",
      "width": 570,
      "height": 63,
      "caption": "Neil Patel"
    },
    "image": {
      "@id": "https://neilpatel.com/es/#/schema/logo/image/"
    }
  }, {
    "@type": "Person",
    "@id": "https://neilpatel.com/es/#/schema/person/e7a5abcc264fa19a6915317f7dea15d3",
    "name": "Neil Patel",
    "sameAs": ["https://neilpatel.com"]
  }]
} < /script>






































<script type="application/ld+json">
    {
    "@context": "https://schema.org/",
    "@type": "Article",
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
    "image": "https://catedraldesantiago.online/storage/portadascard/{{$elemento->urlPortada}}",
    "wordCount": "{{$palabrasArticulo}}",
    "headline": "{{$h1}}",
    "articleBody": "{{strip_tags($elemento->resumen)}}"
    }
</script>


@foreach ($reports as $item )
    @php
        $palabrasArticulo = str_word_count(strip_tags($item->respuesta, 0));
    @endphp

    <script type="application/ld+json">
        {
        "@context": "https://schema.org/",
        "@type": "Article",
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
        "image": "https://catedraldesantiago.online/storage/portadascard/{{$elemento->urlPortada}}",
        "wordCount": "{{$palabrasArticulo}}",
        "headline": "{{$item->titulo}}",
        "articleBody": "{{strip_tags($item->respuesta)}}"
        }
    </script>
@endforeach

<script type="application/ld+json">
    [
        @foreach($fotos as $item)
            @if($loop->last)
                {
                "@context": "https://schema.org/",
                "@type": "ImageObject",
                "contentUrl": "{{asset('storage/fotos/'.$elemento->id.'/original/'.$item->url)}}",
                "thumbnail":"{{asset('storage/fotos/'.$elemento->id.'/thumbnail/'.$item->url)}}",
                "caption": "{{$item->piefoto}}",
                "headline" : "{{$h1}}"
                }
            @else
                {
                "@context": "https://schema.org/",
                "@type": "ImageObject",
                "contentUrl": "{{asset('storage/fotos/'.$elemento->id.'/original/'.$item->url)}}",
                "thumbnail":"{{asset('storage/fotos/'.$elemento->id.'/thumbnail/'.$item->url)}}",
                "caption": "{{$item->piefoto}}",
                "headline" : "{{$h1}}"
                },
            @endif
        @endforeach
    ]
    </script>




