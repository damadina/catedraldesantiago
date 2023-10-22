<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if(App::environment('production'))
        {{-- <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'> --}}
        <meta name='robots' content='index, follow'>
    @else
        <meta name="robots" content="noindex">
@endif

    <style>
    a {
            display: block;
            margin-bottom: 1em;
        }
    </style>


    <link rel="icon" href="{{ asset('images/logo.png') }}">
    <title>Mapa del sitio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    @livewire('navigation-menu')

    <p class=" pt-16 pb-8 text-gray-600 text-center font-bold text-xs md:text-2xl  tracking-[.15em] ">
                    MAPA DEL SITIO catedraldesantiago.online</p>
    <div class="container">

        <div class="ml-4 mt-6">

            <div class="ml-4">
                <a class="text-catedral text-xl font-semibold underline" href="{{ route('exterior') }}">Exterior de la Catedral</a>

                <a href="{{URL::to('/').'/fachada-del-obradoiro' }}">La fachada del Obradoiro</a>
                <a href="{{URL::to('/').'/fachada-de-la-quintana' }}">La fachada de la Quintana</a>
                <a href="{{URL::to('/').'/fachada-de-platerias' }}">La fachada de Platerias</a>
                <a href="{{URL::to('/').'/fachada-de-azabacheria' }}">La fachada del Azabacheria</a>
                <a href="{{URL::to('/').'/torre-del-reloj' }}">Torre del Reloj o la Berenguela</a>
            </div>

            <div class="ml-4">
                <a class="text-catedral text-xl font-semibold underline" href="{{ route('interior') }}">Interior de la Catedral</a>
                <a href="{{URL::to('/').'/portico-de-la-gloria'}}">El Pórtico de la Gloria</a>
                <a href="{{URL::to('/').'/la-puerta-santa' }}">La Puerta Santa</a>
                <a href="{{URL::to('/').'/el-botafumeiro' }}">El Botafumeiro</a>
                <a href="{{URL::to('/').'/cripta-apostolica' }}">La Cripta Apostólica</a>
                <a href="{{URL::to('/').'/el-claustro' }}">El Claustro</a>
                <a href="{{URL::to('/').'/la-sacristia' }}">La Sacristía</a>
                <a href="{{URL::to('/').'/las-naves-y-el-crucero' }}">Las Naves y el crucero</a>
                <a href="{{URL::to('/').'/biblioteca-y-la-sala-capitular' }}">La Biblioteca y la Sala Capitular</a>
                <a href="{{URL::to('/').'/tribuna-y-las-cubiertas' }}">La tribuna y las cubiertas</a>
                <a href="{{URL::to('/').'/el-trasaltar' }}">El trasaltar</a>
                <a href="{{URL::to('/').'/el-baptisterio' }}">El Baptisterio</a>
                <a href="{{URL::to('/').'/excavaciones-arqueologicas' }}">Excavaciones arqueológicas</a>
                <a class="text-catedral text-xl font-semibold underline" href="{{ route('capillas') }}">Capillas de la Catedral</a>
                <a href="{{URL::to('/').'/iglesia-de-la-corticela' }}">Iglesia de la Corticela</a>
                <a href="{{URL::to('/').'/capilla-mayor' }}">La Capilla Mayor</a>
                <a href="{{URL::to('/').'/capilla-de-san-fernando' }}">Capilla de San Fernando</a>
                <a href="{{URL::to('/').'/capilla-de-las-reliquias' }}">Capilla de las Reliquias</a>
                <a href="{{URL::to('/').'/capilla-del-pilar' }}">Capilla del Pilar</a>
                <a href="{{URL::to('/').'/capilla-del-cristo-de-burgos' }}">Capilla del Cristo de Burgos</a>
                <a href="{{URL::to('/').'/capilla-del-espiritu-santo' }}">Capilla del Espíritu Santo</a>
                <a href="{{URL::to('/').'/capilla-del-salvador' }}">Capilla del Salvador</a>
                <a href="{{URL::to('/').'/capilla-de-santa-catalina' }}">Capilla de Santa Catalina</a>
                <a href="{{URL::to('/').'/capilla-de-san-juan' }}">Capilla de San Juan</a>
                <a href="{{URL::to('/').'/capilla-de-san-antonio' }}">Capilla de San Antonio</a>
                <a href="{{URL::to('/').'/capilla-de-san-bartolome-o-santa-fe' }}">Capilla de San Bartolomé o Santa Fe</a>
                <a href="{{URL::to('/').'/capilla-de-nuestra-senora-la-blanca' }}">Capilla de Nuestra Señora la Blanca</a>
                <a href="{{URL::to('/').'/capilla-de-san-andres' }}">Capilla de San Andrés</a>
                <a href="{{URL::to('/').'/capilla-de-mondragon' }}">Capilla de Mondragón</a>
                <a href="{{URL::to('/').'/capilla-de-la-concepcion-o-de-prima' }}">Capilla de la Concepción o de Prima</a>
                <a href="{{URL::to('/').'/capilla-de-la-comunion' }}">Capilla de la Comunión</a>
                <a href="{{URL::to('/').'/capilla-de-la-azucena-o-san-pedro' }}">Capilla de la Azucena o San Pedro</a>
                <a href="{{URL::to('/').'/capilla-de-alba' }}">Capilla de Alba</a>
                <a href="{{URL::to('/').'/camarin-de-santiago-caballero' }}">Camarín de Santiago Caballero</a>
                <a href="{{URL::to('/').'/el-palacio-de-gelmirez' }}">Palacio de Gelmírez</a>

            </div>

            <div class="ml-4 mb-8">
                <a class="text-catedral text-xl font-semibold underline" href="{{ route('museo') }}">Museo de la Catedral</a>
                <a href="{{URL::to('/').'/tapices' }}">Colecciones de Tapices</a>
                <a href="{{URL::to('/').'/pintura' }}">Colecciones de Pintura</a>
                <a href="{{URL::to('/').'/orfebreria' }}">Colecciones de Orfebrería</a>
                <a href="{{URL::to('/').'/artes-textiles' }}">Colecciones de Artes Textiles</a>
                <a href="{{URL::to('/').'/elementos-arquitectonicos-y-escultura' }}">Elementos Arquitectónicos y Escultura</a>

            </div>

        </div>
    </div>
    <x-catedral-footer slug='mapasitio' />


</body>
</html>
