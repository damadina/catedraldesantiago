{{-- <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "catedraldesantiago.online",
    "url": "https://catedraldesantiago.online",
    "logo": "https://catedraldesantiago.online/images/logo.png",
    "sameAs": [
        "https://www.facebook.com/mascompostela/",
        "https://twitter.com/catedraldesant2"
    ]
    }
</script> --}}


{{-- <script type="application/ld+json">
    {
    "@context": "https://schema.org/",
    "@type": "WebSite",
    "name": "Catedral de Santiago de Compostela",
    "url": "https://catedraldesantiago.online/"

    }
</script> --}}

<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "WebPage",
        "name": "Catedral de Santiago de Compostela",
        "url": "https://catedraldesantiago.online",
        "datePublished": "2019-08-10",
        "dateModified": "{{$dateModif}}",
        "inLanguage": "es",
        "primaryImageOfPage":"https://catedraldesantiago.online/storage/portadas/{{$elemento->urlPortada}}",
        "isPartOf":
        {
            "@type":"WebSite",
            "@id":"https://catedraldesantiago.online/#website",
            "url":"https://catedraldesantiago.online/",
            "name": "Catedral de Santiago de Compostela",
            "description": "La Catedral de Santiago de Compostela acoge el sepulcro del Apóstol Santiago, lo cual convirtió al templo en uno de los principales destinos de peregrinación de Europa durante la Edad Media a través del llamado Camino de Santiago, una ruta religiosa que comunicaba la península ibérica con el resto del continente. Es la obra más sobresaliente del arte románico en España declarada Bien de Interés Cultural en 1896 y la ciudad que se concentra en torno a la Catedral de Santiago, fue declarada bien cultural Patrimonio de la Humanidad por la Unesco en 1985.",
            "inLanguage": "es",
            "publisher": {
                "@type": "Organization",
                "@id" : "https://catedraldesantiago.online/#organization",
                "name": "Catedral de Santiago de Compostela",
                "url": "https://catedraldesantiago.online",
                "sameAs": [
                    "https://www.facebook.com/mascompostela/",
                    "https://twitter.com/catedraldesant2"
                ],
                "logo": {
                    "@type": "ImageObject",
                    "@id" : "https://catedraldesantiago.online/#logo",
                    "url" : "https://catedraldesantiago.online/images/logo.png"	,
                    "caption": "Logo Cateddral de Santiago de Compostela"
                }
            }
        },
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
        "mainEntity":{
            "@type": "Article",
            "abstract": "La Catedral de Santiago de Compostela acoge el sepulcro del Apóstol Santiago, lo cual convirtió al templo en uno de los principales destinos de peregrinación de Europa durante la Edad Media a través del llamado Camino de Santiago, una ruta religiosa que comunicaba la península ibérica con el resto del continente. Es la obra más sobresaliente del arte románico en España declarada Bien de Interés Cultural en 1896 y la ciudad que se concentra en torno a la Catedral de Santiago, fue declarada bien cultural Patrimonio de la Humanidad por la Unesco en 1985.",
            "image": "https://catedraldesantiago.online/storage/portadascard/{{$elemento->urlPortada}}",
            "wordCount": "{{$palabrasArticulo}}",
            "headline": "Toda la historia de la Catedral de Santiago de Compostela",
            "articleBody": "{{$todoelArticulo}}",
            "author": {
                "@type": "Organization",
                "name": "catedraldesantiago.online",
                "url": "https://catedraldesantiago.online",
                "logo": "https://catedraldesantiago.online/images/logo.png",
                "sameAs": [
                    "https://www.facebook.com/mascompostela/",
                    "https://twitter.com/catedraldesant2"
                ]
            }
        },
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://catedraldesantiago.online/search/?q={buscar}",
            "query-input": "required name=buscar"
        }




    }
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
        }
    </script>
    <script type="application/ld+json">
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
