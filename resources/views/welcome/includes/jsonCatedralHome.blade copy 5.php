<script type="application/ld+json">
    {
    "@context": "https://schema.org/",
    "@type": "Webpage",
    "url": "{{URL::to('/')}}",
    "name": "Catedral de Santiago de Compostela",
    "description": "Toda la información sobre la Catedral de Santiago de Compostela - Historia, fotografías, planos, horarios ... ",
    "inLanguage" :"es",
    "isPartOf": {
        "@type": "WebSite",
        "url": "{{URL::to('/')}}",
        "name": "Catedral de Santiago de Compostela",
        "description": "Toda la información sobre la Catedral de Santiago de Compostela - Historia, fotografías, planos, horarios ... ",
        "inLanguage": "es",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://catedraldesantiago.online/search/?q={buscar}",
            "query-input": "required name=buscar"
            }
    },
    "primaryImageOfPage": {
        "@type" : "ImageObject",
        "inLanguage": "es",
        "url": "{{asset('images/CatedraldeSantiagoA.jpg')}}",
        "width" : "960",
        "height": "540",
        "caption" : "Fachada del Obradoiro de la Catedral de Santiago de Compostela"
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
                        "name": "{{$item->name}}",
                        "item":  "{{URL::to('/').'/'.$item->slug}}"

                    }
                @else
                    {
                        "@type": "ListItem",
                        "position": {{$loop->index + 1}},
                        "name": "{{$item->name}}",
                        "item":  "{{URL::to('/').'/'.$item->slug}}"
                    },

                    @endif

            @endforeach
        ]

    }

    }

    }
</script>

    @foreach ($reports as $item )
            <script type = "application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Article",
                "headline": "{{$item->titulo}}",
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
                    "name": "Catedral de Santiago de Compostela",
                    "url": "{{URL::to('/')}}",
                    "logo": "{{URL::to('/').'/images/logo.png'}}",
                    "sameAs": [ "https://www.facebook.com/mascompostela/","https://twitter.com/catedraldesant2","https://www.youtube.com/channel/UCKubKaAAfI1eepvE3FXrBog"]

                },
                "mainEntityOfPage": {
                    "@type": "WebPage",
                    "@id" : "{{URL::to('/')}}"

                }


            }
        </script>
    @endforeach

    @if($opiniones->count())

        @foreach ($opiniones as $item )
                <script type = "application/ld+json">
                {
                    "@context": "https://schema.org",
                    "@type": "Article",
                    "headline": "{{$item->titulo}}",
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

                    }


                }
            </script>
        @endforeach

    @endif


