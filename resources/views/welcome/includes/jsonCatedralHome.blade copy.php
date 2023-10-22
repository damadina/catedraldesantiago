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
    </script>


<script type="application/ld+json">
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
</script>


<script type="application/ld+json">
    {
    "@context": "https://schema.org/",
    "@type": "WebSite",
    "name": "Catedral de Santiago de Compostela",
    "headline": "Catedral de Santiago de Compostela",
    "about": "Catedral de Santiago de Compostela",
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

<script type = "application/ld+json">
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
        "publisher": "catedraldesantiago.online",

        "image": {
                "@type" : "ImageObject",
                "caption" : "{{$fotos[0]->piefoto}}}",
                "inLanguage": "es",
                "url": "{{asset('storage/fotos/'.$elemento->id.'/original/'.$fotos[0]->url)}}",
                "contentUrl": "{{asset('storage/fotos/'.$elemento->id.'/original/'.$fotos[0]->url)}}",
                "thumbnail": "{{asset('storage/fotos/'.$elemento->id.'/thumbnail/'.$fotos[0]->url)}}"
        },
        "datePublished": "2018-08-03T08:00:00+08:00",
        "dateModified": "{{$fechaMayor}}"
    }

</script>
