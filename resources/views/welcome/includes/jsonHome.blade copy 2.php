<script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "catedraldesantiago.online",
    "url": "{{URL::to('/')}}",
    "logo": "https://catedraldesantiago.online/images/logo.png",
    "sameAs": [
        "https://www.facebook.com/mascompostela/",
        "https://twitter.com/catedraldesant2"
    ]

    }
</script>


<script type="application/ld+json">
    {
    "@context": "https://schema.org/",
    "@type": "WebSite",
    "name": "Catedral de Santiago de Compostela",
    "alternativeHeadline": "La historia fotografías e información sobre toda la Catedral de Santiago de Compostela",
    "url": "https://catedraldesantiago.online/",
    "thumbnailUrl": "https://catedraldesantiago.online/storage/portadascard/{{$elemento->urlPortada}}",
    "potentialAction": {
        "@type": "SearchAction",
        "target": "https://catedraldesantiago.online/search/?q={buscar}",
        "query-input": "required name=buscar"
        }
    }
</script>

<script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "numberOfItems": "{{$allItems->count()}}",
            "itemListElement":
            [
                @foreach($allItems as $item)
                    @if($loop->last)
                        {
                            "@type": "ListItem",
                            "position": {{$loop->index + 1}},
                                "item": {
                                "@id": "https://catedraldesantiago.online/{{$item->slug}}",
                                "name": "{{$item->name}}",
                                "description" : "{{strip_tags($item->resumen)}}",
                                "image" : "https://catedraldesantiago.online/storage/portadascard/{{$item->urlPortada}}"
                                }
                        }
                    @else
                        {
                            "@type": "ListItem",
                            "position": {{$loop->index + 1}},
                                "item": {
                                "@id": "https://catedraldesantiago.online/{{$item->slug}}",
                                "name": "{{$item->name}}",
                                "description" : "{{strip_tags($item->resumen)}}",
                                "image" : "https://catedraldesantiago.online/storage/portadascard/{{$item->urlPortada}}"
                                }
                        },
                    @endif

                @endforeach

            ]
        }
    </script>

    {{-- <script type="application/ld+json">
        @php
            $textoBody = strip_tags($elemento->resumen);
            $palabrasArticulo = str_word_count($textoBody, 0);
            @endphp


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
        "headline": "LA CATEDRAL DE SANTIAGO DE COMPOSTELA",
        "articleBody": "{{$textoBody}}"
        }
    </script>
 --}}
    <script type="application/ld+json">
        [
            @foreach ($reports as $info)

                @php
                    $texto = strip_tags($info->respuesta);
                    $palabrasArticulo = str_word_count($texto, 0);
                @endphp

                @if($loop->last)
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
                        "wordCount": "{{$palabrasArticulo}}",
                        "headline": "{{$info->titulo}}",
                        "articleBody": "{{$texto}}"
                    }
                @else
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
                        "wordCount": "{{$palabrasArticulo}}",
                        "headline": "{{$info->titulo}}",
                        "articleBody": "{{$texto}}"
                    },

                @endif

            @endforeach
        ]
    </script>










    <script type="application/ld+json">
        [
            @foreach($fotos as $item)
                @if($loop->last)
                    {
                    "@context": "https://schema.org/",
                    "@type": "ImageObject",
                    "contentUrl": "{{asset('storage/fotos/'.$elemento->id.'/original/'.$item->url)}}",
                    "thumbnail":"{{asset('storage/fotos/'.$elemento->id.'/thumbnail/'.$item->url)}}",
                    "caption": "{{$item->piefoto}}"
                    }
                @else
                    {
                    "@context": "https://schema.org/",
                    "@type": "ImageObject",
                    "contentUrl": "{{asset('storage/fotos/'.$elemento->id.'/original/'.$item->url)}}",
                    "thumbnail":"{{asset('storage/fotos/'.$elemento->id.'/thumbnail/'.$item->url)}}",
                    "caption": "{{$item->piefoto}}"
                    },
                @endif
            @endforeach
        ]
        </script>




    {{-- <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "numberOfItems": "{{$allItems->count()}}",
            "itemListElement":
            [
                @foreach($allItems as $item)
                    @if($loop->last)
                        {
                            "@type": "ListItem",
                            "position": {{$loop->index + 1}},
                                "item": {
                                "@id": "https://catedraldesantiago.online/{{$item->slug}}",
                                "name": "{{$item->name}}",
                                "description" : "{{strip_tags($item->resumen)}}",
                                "image" : "https://catedraldesantiago.online/storage/portadascard/{{$item->urlPortada}}"
                                }
                        }

                    @else
                        {
                            "@type": "ListItem",
                            "position": {{$loop->index + 1}},
                                "item": {
                                "@id": "https://catedraldesantiago.online/{{$item->slug}}",
                                "name": "{{$item->name}}",
                                "description" : "{{strip_tags($item->resumen)}}",
                                "image" : "https://catedraldesantiago.online/storage/portadascard/{{$item->urlPortada}}"
                                }
                        },

                     @endif

                @endforeach
            ]
        }
    </script>
 --}}








    {{--<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "TouristDestination",
        "name": "Catedral de Santiago de Compostela",
        "description": "La Catedral de Santiago de Compostela acoge el sepulcro del Apóstol Santiago, lo cual convirtió al templo en uno de los principales destinos de peregrinación de Europa durante la Edad Media a través del llamado Camino de Santiago, una ruta religiosa que comunicaba la península ibérica con el resto del continente. Es la obra más sobresaliente del arte románico en España declarada Bien de Interés Cultural en 1896 y la ciudad que se concentra en torno a la Catedral de Santiago, fue declarada bien cultural Patrimonio de la Humanidad por la Unesco en 1985.",
        "url": "https://catedraldesantiago.online/",
        "touristType": {
          "@type": "Audience",
          "audienceType": [
            "Turista cultural"
          ]
        },
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": "42.880556",
          "longitude": "-8.543889"
        }
      }
    </script> --}}






{{-- <script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "WebPage",
        "name": "Catedral de Santiago de Compostela",
        "alternativeHeadline": "La historia fotografías e información sobre toda la Catedral de Santiago de Compostela",
        "url": "https://catedraldesantiago.online",
        "breadcrumb": {
            "@type": "BreadcrumbList",
            "numberOfItems": "{{$allItems->count()}}",
            "itemListElement":
            [
                @foreach($allItems as $item)
                    @if($loop->last)
                        {
                            "@type": "ListItem",
                            "position": {{$loop->index + 1}},
                                "item": {
                                "@id": "https://catedraldesantiago.online/{{$item->slug}}",
                                "name": "{{$item->name}}",
                                "description" : "{{$item->seoDescription}}",
                                "image" : "https://catedraldesantiago.online/storage/portadascard/{{$item->urlPortada}}"
                                }
                        }

                    @else
                        {
                            "@type": "ListItem",
                            "position": {{$loop->index + 1}},
                                "item": {
                                "@id": "https://catedraldesantiago.online/{{$item->slug}}",
                                "name": "{{$item->name}}",
                                "description" : "{{$item->seoDescription}}",
                                "image" : "https://catedraldesantiago.online/storage/portadascard/{{$item->urlPortada}}"
                                }
                        },

                     @endif

                @endforeach
            ]

        },
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://catedraldesantiago.online/search/?q={buscar}",
            "query-input": "required name=buscar"
        },
        "image": [
            @foreach ($fotos as $item)
                @if($loop->last)
                    {
                        "@type": "ImageObject",
                        "url": "https://catedraldesantiago.online/storage/fotos/{{$elemento->id}}/original/{{$item->url}}",
                        "name": "{{$item->alt}}",
                        "description": "{{$item->piefoto}}"
                    }
                @else
                {
                    "@type": "ImageObject",
                    "url": "https://catedraldesantiago.online/storage/fotos/{{$elemento->id}}/original/{{$item->url}}",
                    "name": "{{$item->alt}}",
                    "description": "{{$item->piefoto}}"
                },
                @endif

            @endforeach

        ]

    }
</script> --}}




{{-- @foreach ($allItems as $item )


    <script type="application/ld+json">
        {
        "@context": "https://schema.org/",
        "@type": "Article",
        "sameAS":"{{'https://catedraldesantiago.online'.'/'.$item->slug}}",

        "image": "https://catedraldesantiago.online/storage/portadascard/{{$item->urlPortada}}",

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
        "description": "{{$item->seoDescription}}",
        "headline": "{{$item->name}}",
        "articleBody": "{{strip_tags(Str::limit($item->resumen,200))}}"
        }
    </script>

@endforeach


@php
    $texto = str_replace('<h3>El Apóstol Santiago y la Catedral de Santiago</h3>', '', $item->respuesta) ;
    $texto = Str::limit($texto,200);
@endphp
<script type="application/ld+json">
    {
    "@context": "https://schema.org/",
    "@type": "Article",
    "sameAS":"{{route('historia')}}",

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
    "description": "DES",
    "headline": "HEAD",
    "articleBody": "BODY"
    }
</script>
 --}}





{{-- @foreach ($reports as $item )
    @php
        $palabrasArticulo = str_word_count(strip_tags($item->respuesta, 0));
    @endphp

    <script type="application/ld+json">
        {
        "@context": "https://schema.org/",
        "@type": "Article",
        "image": "https://catedraldesantiago.online/storage/portadascard/{{$elemento->urlPortada}}",
        "wordCount": "{{$palabrasArticulo}}",
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
        "headline": "{{$item->titulo}}",
        "articleBody": "{{strip_tags($item->respuesta)}}"
        }
    </script>

@endforeach



 --}}








  {{--  <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "numberOfItems": "{{$allItems->count()}}",
            "itemListElement":
            [
                @foreach($allItems as $item)
                    @if($loop->last)
                        {
                            "@type": "ListItem",
                            "position": {{$loop->index + 1}},
                                "item": {
                                "@id": "https://catedraldesantiago.online/{{$item->slug}}",
                                "name": "{{$item->name}}",
                                "description" : "{{strip_tags($item->resumen)}}",
                                "image" : "https://catedraldesantiago.online/storage/portadascard/{{$item->urlPortada}}"
                                }
                        }

                    @else
                        {
                            "@type": "ListItem",
                            "position": {{$loop->index + 1}},
                                "item": {
                                "@id": "https://catedraldesantiago.online/{{$item->slug}}",
                                "name": "{{$item->name}}",
                                "description" : "{{strip_tags($item->resumen)}}",
                                "image" : "https://catedraldesantiago.online/storage/portadascard/{{$item->urlPortada}}"
                                }
                        },

                     @endif

                @endforeach
            ]
        }
    </script> --}}




    {{--<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "TouristDestination",
        "name": "Catedral de Santiago de Compostela",
        "description": "La Catedral de Santiago de Compostela acoge el sepulcro del Apóstol Santiago, lo cual convirtió al templo en uno de los principales destinos de peregrinación de Europa durante la Edad Media a través del llamado Camino de Santiago, una ruta religiosa que comunicaba la península ibérica con el resto del continente. Es la obra más sobresaliente del arte románico en España declarada Bien de Interés Cultural en 1896 y la ciudad que se concentra en torno a la Catedral de Santiago, fue declarada bien cultural Patrimonio de la Humanidad por la Unesco en 1985.",
        "url": "https://catedraldesantiago.online/",
        "touristType": {
          "@type": "Audience",
          "audienceType": [
            "Turista cultural"
          ]
        },
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": "42.880556",
          "longitude": "-8.543889"
        }
      }
    </script> --}}










       {{--  "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://catedraldesantiago.online/"},
            "headline": "Catedral de Santiago de Compostela",
            "description": "{{$elemento->resumen}}",
            "image": "https://catedraldesantiago.online/storage/portadas/{{$elemento->urlPortada}}",
            "author": {
            "@type": "Organization",
            "name": "Umbraco"
        },
 --}}
