
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "url": "https://catedraldesantiago.online/",
      "logo": "https://catedraldesantiago.online/images/logo.png"
    }
</script>
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "url": "https://catedraldesantiago.online/",
      "potentialAction": {
        "@type": "SearchAction",
        "target": {
          "@type": "EntryPoint",
          "urlTemplate": "https://catedraldesantiago.online/search/?q={buscar}"
        },
        "query-input": "required name=buscar"
      }
    }
</script>

<script type="application/ld+json">
    {
    "@context": "https://schema.org/",
    "@type": "Webpage",
    "url": "{{URL::to('/')}}",
    "name": "Catedral de Santiago de Compostela",
    "description": "Toda la información sobre la Catedral de Santiago de Compostela - Historia, fotografías, planos, horarios ... ",
    "inLanguage" :"es",

    "primaryImageOfPage": {
        "@type" : "ImageObject",
        "inLanguage": "es",
        "url": "{{ asset('storage/portadas' . '/' . $elemento->urlPortada) }}",
        "caption" : "Catedral de Santiago de Compostela"
        },
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "numberOfItems": "{{$allItems->count() + 1}}",
        "itemListElement":
        [
            @foreach($allItems as $item)
                {
                    "@type": "ListItem",
                    "position": {{$loop->index + 1}},
                    "name": "{{$item->name}}",
                    "description": "{{$item->name}} de la Catedral de Santiago",
                    "item":  "{{URL::to('/').'/'.$item->slug}}"
                },
            @endforeach
            {
                "@type": "ListItem",
                "position": {{$allItems->count() + 1}},
                "name": "Catedral de Santiago",
                "description": "Toda la información sobre la Catedral de Santiago de Compostela - Historia, fotografías,",
                "item":  "{{URL::to('/')}}"
            }
        ]

    },
    "mainEntity": {
        "@type": "Article",
        "headline": "Catedral de Santiafgo de Compostela",
        "description": "Toda la información sobre la Catedral de Santiago de Compostela - Historia, fotografías, planos, horarios ... ",
        "url": "https://catedraldesantiago.online",
        "thumbnailUrl": "{{ asset('storage/portadascard' . '/' . $elemento->urlPortada) }}",
        "image": [
            "{{ asset('storage/portadas' . '/' . $elemento->urlPortada) }}",
          @foreach ($fotos as $item )
            "{{asset('storage/fotos/'.$elemento->id.'/original/'.$item->url)}}"
            @if(!$loop->last)
            ,
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
                "url" : "http://blog.tourino.com/"
            }
        ],
        "publisher": {
            "@id": "{{URL::to('/').'/#Organization'}}"
        }
      }
      }

    }

    }
</script>


@if($fachadas->count())

    @foreach ($fachadas as $item )
            <script type = "application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Article",
                "headline": "{{$item->name}}",
                "description": "{{'Toda la historia '.$item->prefijoH1.' '.$item->name }}",
                "thumbnailUrl": "{{ asset('storage/portadascard' . '/' . $item->urlPortada) }}",
                "image": "{{ asset('storage/portadas' . '/' . $item->urlPortada) }}",
                "articleSection": "Fachadas de la Catedral de Santiago",
                "mainEntityOfPage": "{{route('catedral.show',$item)}}",
                "author": [
                    {
                        "@type": "Person",
                        "name": "Ramón Yzquierdo Peiró",
                        "jobTitle": "Historiador",
                        "url": "https://es.linkedin.com/in/ram%C3%B3n-yzquierdo-peir%C3%B3-4a750913a"
                    },
                    {
                        "@type": "Person",
                        "name": "Salvador Yzquierdo Peiró",
                        "jobTitle": "Historiador",
                        "url": "https://es.linkedin.com/in/salvador-yzquierdo-peir%C3%B3-8a248765"
                    },
                    {
                        "@type": "Person",
                        "name": "Enrique Touriño Marcén",
                        "jobTitle": "Fotógrafo",
                        "url" : "https://www.etourino.com/"
                    }
                ],
                "publisher": {
                    "@id": "{{URL::to('/').'/#Organization'}}"
                }
            }
        </script>
    @endforeach

@endif

@if($otros->count())

    @foreach ($otros as $item )
            <script type = "application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Article",
                "headline": "{{$item->name}}",
                "description": "{{'Toda la historia '.$item->prefijoH1.' '.$item->name }}",
                "thumbnailUrl": "{{ asset('storage/portadascard' . '/' . $item->urlPortada) }}",
                "image": "{{ asset('storage/portadas' . '/' . $item->urlPortada) }}",
                "articleSection": "Interior de la Catedral de Santiago",
                "mainEntityOfPage": "{{route('catedral.show',$item)}}",
                "author": [
                    {
                        "@type": "Person",
                        "name": "Ramón Yzquierdo Peiró",
                        "jobTitle": "Historiador",
                        "url": "https://es.linkedin.com/in/ram%C3%B3n-yzquierdo-peir%C3%B3-4a750913a"
                    },
                    {
                        "@type": "Person",
                        "name": "Salvador Yzquierdo Peiró",
                        "jobTitle": "Historiador",
                        "url": "https://es.linkedin.com/in/salvador-yzquierdo-peir%C3%B3-8a248765"
                    },
                    {
                        "@type": "Person",
                        "name": "Enrique Touriño Marcén",
                        "jobTitle": "Fotógrafo",
                        "url" : "https://www.etourino.com/"
                    }
                ],
                "publisher": {
                    "@id": "{{URL::to('/').'/#Organization'}}"
                }
            }
        </script>
    @endforeach

@endif

@if($capillas->count())

    @foreach ($capillas as $item )
            <script type = "application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Article",
                "headline": "{{$item->name}}",
                "description": "{{'Toda la historia '.$item->prefijoH1.' '.$item->name }}",
                "thumbnailUrl": "{{ asset('storage/portadascard' . '/' . $item->urlPortada) }}",
                "image": "{{ asset('storage/portadas' . '/' . $item->urlPortada) }}",
                "articleSection": "Capillas de la Catedral de Santiago",
                "mainEntityOfPage": "{{route('catedral.show',$item)}}",
                "author": [
                    {
                        "@type": "Person",
                        "name": "Ramón Yzquierdo Peiró",
                        "jobTitle": "Historiador",
                        "url": "https://es.linkedin.com/in/ram%C3%B3n-yzquierdo-peir%C3%B3-4a750913a"
                    },
                    {
                        "@type": "Person",
                        "name": "Salvador Yzquierdo Peiró",
                        "jobTitle": "Historiador",
                        "url": "https://es.linkedin.com/in/salvador-yzquierdo-peir%C3%B3-8a248765"
                    },
                    {
                        "@type": "Person",
                        "name": "Enrique Touriño Marcén",
                        "jobTitle": "Fotógrafo",
                        "url" : "https://www.etourino.com/"
                    }
                ],
                "publisher": {
                    "@id": "{{URL::to('/').'/#Organization'}}"
                }
            }
        </script>
    @endforeach

@endif
@if($museo->count())

    @foreach ($museo as $item )
            <script type = "application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Article",
                "headline": "{{$item->name}}",
                "description": "{{'Toda la historia '.$item->prefijoH1.' '.$item->name }}",
                "thumbnailUrl": "{{ asset('storage/portadascard' . '/' . $item->urlPortada) }}",
                "image": "{{ asset('storage/portadas' . '/' . $item->urlPortada) }}",
                "articleSection": "Museo de la Catedral de Santiago",
                "mainEntityOfPage": "{{route('catedral.show',$item)}}",
                "author": [
                    {
                        "@type": "Person",
                        "name": "Ramón Yzquierdo Peiró",
                        "jobTitle": "Historiador",
                        "url": "https://es.linkedin.com/in/ram%C3%B3n-yzquierdo-peir%C3%B3-4a750913a"
                    },
                    {
                        "@type": "Person",
                        "name": "Salvador Yzquierdo Peiró",
                        "jobTitle": "Historiador",
                        "url": "https://es.linkedin.com/in/salvador-yzquierdo-peir%C3%B3-8a248765"
                    },
                    {
                        "@type": "Person",
                        "name": "Enrique Touriño Marcén",
                        "jobTitle": "Fotógrafo",
                        "url" : "https://www.etourino.com/"
                    }
                ],
                "publisher": {
                    "@id": "{{URL::to('/').'/#Organization'}}"
                }
            }
        </script>
    @endforeach

@endif











