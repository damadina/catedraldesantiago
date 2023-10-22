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
        "@context": "https://schema.org",
        "@type": "ItemList",
        "name": "Fotografías de la Catedral de Santiago de Compostela",
        "numberOfItems": "{{$fotos->count()}}",
        "itemListElement":
        [
            @foreach($fotos as $item)
            @if($loop->last)
            {
            "@context": "https://schema.org/",
            "@type": "ImageObject",
            "contentUrl": "{{asset('storage/fotos/'.$elemento->id.'/original/'.$item->url)}}",
            "caption": "{{$item->piefoto.'de la Catedral de Santiago de Compostela'}} ",
            "creditText": "Enrique Touriño",
            "copyrightNotice": "© CatedraldeSantiago.online",
            "license":"https://catedraldesantiago.online/legal",
            "acquireLicensePage" : "https://catedraldesantiago.online/legal",
            "creator": {
                "@type": "Person",
                "name": "Enrique Tounriño"
               }
            }
        @else
            {
            "@context": "https://schema.org/",
            "@type": "ImageObject",
            "contentUrl": "{{asset('storage/fotos/'.$elemento->id.'/original/'.$item->url)}}",
            "caption": "{{$item->piefoto.' de la Catedral de Santiago de Compostela'}} ",
            "creditText": "Enrique Touriño",
            "copyrightNotice": "© CatedraldeSantiago.online",
            "license":"https://catedraldesantiago.online/legal",
            "acquireLicensePage" : "https://catedraldesantiago.online/legal",
            "creator": {
                "@type": "Person",
                "name": "Enrique Tounriño"
               }
            },
        @endif

            @endforeach
        ]

    }

</script>



@if($fachadas->count())

    @foreach ($fachadas as $item )
            <script type = "application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Article",
                "headline": "{{$item->name}}",
                "name": "{{$item->name}}",
                "image": "{{asset('storage/portadascard/'.$item->urlPortada)}}",
                "articleSection": "Fachadas de la Catedral de Santiago",
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
                    "type": "Organization",
                    "name": "Catedral de Santiago de Compostela",
                    "url": "{{URL::to('/')}}",
                    "logo": "{{URL::to('/').'/images/logo.png'}}",
                    "sameAs": [ "https://www.facebook.com/mascompostela/","https://twitter.com/catedraldesant2","https://www.youtube.com/channel/UCKubKaAAfI1eepvE3FXrBog"]

                },
                "mainEntityOfPage": {
                    "@type": "WebPage",
                    "@id" : "{{route('catedral.show',$item)}}"

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
                "name": "{{$item->name}}",
                "image": "{{asset('storage/portadascard/'.$item->urlPortada)}}",
                "articleSection": "Interior de la Catedral de Santiago",
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
                    "type": "Organization",
                    "name": "Catedral de Santiago de Compostela",
                    "url": "{{URL::to('/')}}",
                    "logo": "{{URL::to('/').'/images/logo.png'}}",
                    "sameAs": [ "https://www.facebook.com/mascompostela/","https://twitter.com/catedraldesant2","https://www.youtube.com/channel/UCKubKaAAfI1eepvE3FXrBog"]

                },
                "mainEntityOfPage": {
                    "@type": "WebPage",
                    "@id" : "{{route('catedral.show',$item)}}"

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
                "name": "{{$item->name}}",
                "image": "{{asset('storage/portadascard/'.$item->urlPortada)}}",
                "articleSection": "Capillas de la Catedral de Santiago",
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
                    "type": "Organization",
                    "name": "Catedral de Santiago de Compostela",
                    "url": "{{URL::to('/')}}",
                    "logo": "{{URL::to('/').'/images/logo.png'}}",
                    "sameAs": [ "https://www.facebook.com/mascompostela/","https://twitter.com/catedraldesant2","https://www.youtube.com/channel/UCKubKaAAfI1eepvE3FXrBog"]

                },
                "mainEntityOfPage": {
                    "@type": "WebPage",
                    "@id" : "{{route('catedral.show',$item)}}"

                }

            }
        </script>
    @endforeach

@endif

@if($museo->count())

    @foreach ($capillas as $item )
            <script type = "application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Article",
                "headline": "{{$item->name}}",
                "name": "{{$item->name}}",
                "image": "{{asset('storage/portadascard/'.$item->urlPortada)}}",
                "articleSection": "Museo de la Catedral de Santiago",
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
                    "type": "Organization",
                    "name": "Catedral de Santiago de Compostela",
                    "url": "{{URL::to('/')}}",
                    "logo": "{{URL::to('/').'/images/logo.png'}}",
                    "sameAs": [ "https://www.facebook.com/mascompostela/","https://twitter.com/catedraldesant2","https://www.youtube.com/@catedraldesantiagodecompostela"]

                },
                "mainEntityOfPage": {
                    "@type": "WebPage",
                    "@id" : "{{route('catedral.show',$item)}}"

                }

            }
        </script>
    @endforeach

@endif









