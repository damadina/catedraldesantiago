@php
$totalFotos= count($fotos);
$totalPlanos = count($planos);
@endphp
<div >

{{-- <meta itemprop="collectionSize" content="{{$totalFotos}}">
<meta itemprop="abstract" content="{{'Fotografías de '.$elemento->name }}"> --}}

@foreach ($fotos as $item )
    <div >
        <a href="{{asset('storage/fotos/'.$elemento->id.'/original/'.$item->url)}}"
        data-fancybox="gallery"
        data-caption="{{$item->piefoto}}">
        </a>

    </div>
@endforeach

</div>
{{--Planos--}}
<div>

{{-- <meta itemprop="collectionSize" content="{{$totalPlanos}}">
<meta itemprop="abstract" content="Planos de la Catedral de Santiago de Compostela">
 --}}
@foreach ($planos as $item )

    <div >
        <a href="{{asset('storage/planos/'.$item->url)}}"
        data-fancybox="map"
        data-caption="{{$item->piePlano}}">
        </a>

        {{-- <meta itemprop="url" content="{{asset('storage/planos/'.$item->url)}}">
        <meta itemprop="caption" content="{{$item->piePlano}}"> --}}

    </div>
@endforeach

</div>
