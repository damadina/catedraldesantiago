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
      "@type": "Organization",
      "url": "{{URL::to('/')}}",
      "logo": "{{URL::to('/').'/images/logo.png'}}"
    }
</script>
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "url": "{{URL::to('/')}}",
      "potentialAction": {
        "@type": "SearchAction",
        "target": {
            "@type": "EntryPoint",
            "urlTemplate": "{{URL::to('/').'/search/?q={buscar}'}}"
        },
        "query-input": "required name=buscar"
        }
    }
</script>


<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ItemList",
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

</script>










