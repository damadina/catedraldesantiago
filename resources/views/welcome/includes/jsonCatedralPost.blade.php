<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "Webpage",
        "url": "{{URL::current()}}",
        "name": "$elemento->name",
        "description": "{{'Toda la historia '.$elemento->prefijoH1.' '.$elemento->name }}",
        "inLanguage" :"es",
        "isPartOf": {
            "@type": "WebSite",
            "url": "{{URL::to('/')}}",
            "name": "Catedral de Santiago de Compostela",
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
            "url": "{{ asset('storage/portadas' . '/' . $elemento->urlPortada) }}",
            "caption" : "{{$elemento->name}}"
        },

        "mainEntity": {
            "@type": "Article",
            "headline": "{{$elemento->name}}",
            "description": "{{strip_tags($elemento->resumen, 0)}}",
            "thumbnailUrl": "{{ asset('storage/portadascard' . '/' . $elemento->urlPortada) }}",

            "image": [
                @foreach ($fotos as $item )
                    "{{ asset('storage/portadas' . '/' . $elemento->urlPortada) }}",
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
                "@type": "Organization",
                "name": "Catedral de Santiago de Compostela",
                "url": "{{URL::to('/')}}",
                "logo": "{{URL::to('/').'/images/logo.png'}}",
                "sameAs": [ "https://www.facebook.com/mascompostela/","https://twitter.com/catedraldesant2","https://www.youtube.com/channel/UCKubKaAAfI1eepvE3FXrBog"]

            },
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id" : "{{URL::current()}}"

            }
        }
    }
</script>





