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

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [{
                "@type": "Organization",
                "@id": "{{URL::to('/').'/#organization'}}",
                "name": "Catedral de Santiago de Compostela",
                "url": "{{URL::to('/')}}",
                "logo": "{{URL::to('/').'/images/logo.png'}}",
                "sameAs": [ "https://www.facebook.com/mascompostela/","https://twitter.com/catedraldesant2","https://www.youtube.com/channel/UCKubKaAAfI1eepvE3FXrBog"]

            },

            {
                "@type": "WebSite",
                "@id": "{{URL::to('/').'/#website'}}",
                "url": "{{URL::to('/')}}",
                "name": "Catedral de Santiago de Compostela",
                "description": "Catedral de Santiago de Compostela toda la historia y fotografías",
                "publisher": {
                    "@id": "{{URL::to('/').'/#organization'}}"
                },
                "potentialAction": [{
                        "@type": "SearchAction",
                        "target": {
                            "@type": "EntryPoint",
                            "urlTemplate": "{{URL::to('/').'/search/?q={buscar}'}}"
                        },
                        "query-input": "required name=buscar"
                    }
                ],
                "inLanguage": "es"
            },

            {
                "@type": "ImageObject",
                "@id": "{{URL::to('/').'/#primaryimage'}}",
                "inLanguage": "es",
                "url": "{{asset('storage/fotos/'.$elemento->id.'/original/'.$fotos[0]->url)}}",
                "contentUrl": "{{asset('storage/fotos/'.$elemento->id.'/original/'.$fotos[0]->url)}}",
                "caption": "Catedral de Santiago de Compostela"
            },

            {
                "@type": "WebPage",
                "@id": "{{URL::to('/').'/#webpage'}}",
                "url":  "{{URL::to('/')}}",
                "name": "Catedral de Santiago - Historia, fotografías, planos, horarios ...",
                "isPartOf": {
                    "@id": "{{URL::to('/').'/#website'}}"
                },
                "primaryImageOfPage": {
                    "@id": "{{URL::to('/').'/#primaryimage'}}"
                },
                "speakable":
                {
                "@type": "SpeakableSpecification",
                "xPath": [
                    "/html/head/title",
                    "/html/head/meta[@name='description']/@content"
                    ]
                },
                "description": "La Catedral de Santiago es una de las mayores obras del arte románico, además de ser uno de los mayores símbolos de la peregrinación y el cristianismo."
            },
            {
                "@context": "https://schema.org",
                "@type": "Article",
                "wordCount": "{{$palabrasArticulo}}",
                "thumbnailUrl": "{{asset('storage/fotos/'.$elemento->id.'/thumbnail/'.$imagenArticulo)}}",
                "headline": "{{$h1}}",

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
            },
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

        ]
    }


</script>
