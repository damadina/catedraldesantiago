<x-app-layout>
@slot('masHead')
    <title>{{$info->titulo}}</title>
    {{-- <meta name="description" content="{{$elemento->seoDescription}}"> --}}
    <meta name="description" content="{{ Str::limit(strip_tags($info->seoDescription),135),'...'}}">
    <meta name="keywords" content="{{$info->titulo}}"/>
    <link rel="icon" href="{{ asset('images/logo.png') }}">
@endslot



<div>
    <h1 class="py-10 text-center text-gray-800 text-shadow-lg font-semibold text-base sm:text-xl  md:text-3xl lg:text-3xl tracking-[.15em]  italic">{{$info->titulo}}</h1>
</div>
<div class="container mt-3 indent-8 text-base sm:text-xl md:text-xl text-black ">
    {!!$info->respuesta!!}

</div>

<x-catedral-footer :slug='$info->slug' />
</x-app-layout>
