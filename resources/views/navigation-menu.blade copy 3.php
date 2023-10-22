@php

$nav_links = [
        [
            'name' => 'Historia',
            'route' => route('historia'),
            'active' => request()->routeIs('historia'),
            'descripcion' => 'Historia de la Catedral de Santiago',
        ],
        [
            'name' => 'Exterior',
            'route' => route('exterior'),
            'active' => request()->routeIs('exterior'),
            'descripcion' => 'Exterior de la Catedral de Santiago',
        ],
        [
            'name' => 'Interior',
            'route' => route('interior'),
            'active' => request()->routeIs('interior'),
            'descripcion' => 'Interior de la Catedral de Santiago',
        ],
        [
            'name' => 'Capillas',
            'route' => route('capillas'),
            'active' => request()->routeIs('capillas'),
            'descripcion' => 'Capillas de la Catedral de Santiago',
        ],
        [
            'name' => 'Museo',
            'route' => route('museo'),
            'active' => request()->routeIs('museo'),
            'descripcion' => 'Museo de la Catedral de Santiago',
        ],


        /*[
            'name' => 'Información para la visita',
            'route' => route('turismo'),
            'active' => request()->routeIs('turismo'),
        ], */
    ];


if(Auth::user()) {
    if(Auth::user()->email=="carla@gmail.com" or Auth::user()->email=="carlos.marti.mallen@gmail.com") {
        $nav_links = [
        [
            'name' => '',
            'route' => route('home'),
            'active' => request()->routeIs('home'),
            'descripcion' => 'Museo de la Catedral de Santiago',
        ],


    ];

    }
}

$nav_links_auth = [
    [

    ],
]
@endphp



<nav


x-data="{ open: false }" class="bg-white border-b border-gray-100  shadow">
    <!-- Primary Navigation Menu -->

    {{-- @if(isset($isHome))
    <div class="bg-catedral mb-2">
        <h1 class="text-white font-bold py-2 text-center ">Catedral de Santiago de Compostela</h1>
    </div>
    @else
    <div class="bg-catedral mb-2">
        <p class="text-white font-bold py-2 text-center ">Catedral de Santiago de Compostela</p>
    </div>
    @endif
 --}}

    <div class="container">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center my-4">
                    <a  href="{{ route('home') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                        <span class="mb-2 text-center text-catedral text-xs">catedraldesantiago.<strong>online</strong></span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

                    <x-jet-dropdown  align="right" width="48">

                        <x-slot name="trigger">
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-4 border border-transparent text-lg leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-catedral focus:outline-none transition">
                                   Historia
                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>

                        </x-slot>

                        <x-slot name="content">

                            <ol itemscope itemtype="https://schema.org/BreadcrumbList"class="overflow-auto h-72" >
                                <meta itemprop="description" content="Historia de la Catedral de Santiago de Compostela">
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{URL::to('/').'/#0'}}" class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">El Apóstol Santiago y la Catedral de Santiago</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{URL::to('/').'/#1'}}" class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Construcción de las primeras iglesias</span>
                                    </x-jet-dropdown-link>
                                     <meta itemprop="position" content="2" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{URL::to('/').'/#2'}}" class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Construcción de la Catedral</span>
                                    </x-jet-dropdown-link>
                                     <meta itemprop="position" content="3" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{URL::to('/').'/#3'}}" class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Transformaciones en el exterior de la Catedral</span>
                                    </x-jet-dropdown-link>
                                     <meta itemprop="position" content="4" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{URL::to('/').'/#4'}}" class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Transformaciones en el interior de la Catedral</span>
                                    </x-jet-dropdown-link>
                                     <meta itemprop="position" content="5" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{URL::to('/').'/#5'}}" class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Museo de la Catedral</span>
                                    </x-jet-dropdown-link>
                                     <meta itemprop="position" content="6" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{URL::to('/').'/#6'}}" class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Orígenes del camino a Santiago</span>
                                    </x-jet-dropdown-link>
                                     <meta itemprop="position" content="7" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{URL::to('/').'/#7'}}" class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Las peregrinaciones a la Catedral de Santiago</span>
                                    </x-jet-dropdown-link>
                                     <meta itemprop="position" content="8" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{URL::to('/').'/#8'}}" class="hover:bg-catedral hover:text-white -scroll-mt-6 snap-start ">
                                        <span itemprop="name">El Códice Calixtino</span>
                                    </x-jet-dropdown-link>
                                     <meta itemprop="position" content="9" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{URL::to('/').'/#9'}}" class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">El Tumbo A</span>
                                    </x-jet-dropdown-link>
                                     <meta itemprop="position" content="10" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{URL::to('/').'/#10'}}" class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">El Tumbo B</span>
                                    </x-jet-dropdown-link>
                                     <meta itemprop="position" content="11" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{URL::to('/').'/#11'}}" class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Breviario de Miranda</span>
                                    </x-jet-dropdown-link>
                                     <meta itemprop="position" content="12" />
                                </li>

                            </ol>

                        </x-slot>
                    </x-jet-dropdown>


                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-4 border border-transparent text-lg leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-catedral focus:outline-none transition">
                                   Exterior
                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>

                        </x-slot>

                        <x-slot name="content">

                            <ol itemscope itemtype="https://schema.org/BreadcrumbList"class="overflow-auto h-72" >
                                <meta itemprop="description" content="Exterior de la Catedral de Santiago de Compostela">
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link  itemprop="item" href="{{URL('fachada-del-obradoiro') }}"   class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name" >Fachada del Obradoiro</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="1" />
                                </li>

                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{ URL('fachada-de-azabacheria') }}"   class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Fachada de Azabachería</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="2" />
                                 </li>

                                 <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('fachada-de-la-quintana') }}"   class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name" >Fachada de la Quintana</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="3" />
                                </li>

                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('fachada-de-platerias') }}"   class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name" >Fachada de Platerías</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="4" />
                                </li>

                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('torre-del-reloj') }}"   class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name" >Torre del Reloj</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="5" />
                                </li>
                            </ol>

                        </x-slot>
                    </x-jet-dropdown>

                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-4 border border-transparent text-lg leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-catedral focus:outline-none transition">
                                   Interior
                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>

                        </x-slot>

                        <x-slot name="content">
                            <ol itemscope itemtype="https://schema.org/BreadcrumbList" class="overflow-auto h-72">
                                <meta itemprop="description" content="Interior de la Catedral de Santiago de Compostela">

                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{URL('portico-de-la-gloria') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">El Pórtico de la Gloria</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="1" />
                                </li>

                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{URL('las-naves-y-el-crucero') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Las naves y el crucero</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="2" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{ URL('la-sacristia') }}"  class="hover:bg-catedral hover:text-white">
                                    <span itemprop="name">La Sacristía</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="3" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('biblioteca-y-la-sala-capitular') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Biblioteca y Sala Capitular</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="4" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('el-palacio-de-gelmirez') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Palacio de Gelmírez</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="5" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('la-puerta-santa') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">La Puerta Santa</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="6" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('el-claustro') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">El Claustro</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="7" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('el-trasaltar') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">El Trasaltar</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="8" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('tribuna-y-las-cubiertas') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">La Tribuna y las Cubiertas</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="9" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('el-organo-de-la-catedral') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">El Órgano</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="10" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('el-botafumeiro') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">El Botafumeiro</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="11" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('el-baptisterio') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">El Baptisterio</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="12" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('cripta-apostolica') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">La Cripta Apostólica</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="13" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('excavaciones-arqueologicas') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Las Excavaciones Arqueológicas</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="14" />
                                </li>
                            </ol>


                        </x-slot>
                    </x-jet-dropdown>


                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-4 border border-transparent text-lg leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-catedral focus:outline-none transition">
                                   Capillas del interior
                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>

                        </x-slot>

                        <x-slot name="content">

                            <ol itemscope itemtype="https://schema.org/BreadcrumbList" class="overflow-auto h-72">
                                <meta itemprop="description" content="Capillas de la Catedral de Santiago de Compostela">
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{URL('iglesia-de-la-corticela') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Iglesia de la Corticela</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{ URL('capilla-mayor') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Capilla Mayor</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="2" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('capilla-de-san-fernando') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Capilla de San Fernando</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="3" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('capilla-de-las-reliquias') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Capilla de las Reliquias</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="4" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('capilla-del-pilar') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Capilla del Pilar</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="5" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('capilla-del-cristo-de-burgos') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Capilla del Cristp de Burgos</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="6" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('capilla-del-espiritu-santo') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Capilla de Espíritu Santo</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="7" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('capilla-del-salvador') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Capilla del Salvador</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="8" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('capilla-de-santa-catalina') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Capilla de Santa Catalina</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="9" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('capilla-de-san-juan') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Capilla de San Juan</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="10" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('capilla-de-san-antonio') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Capilla de San Antonio</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="11" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('capilla-de-san-bartolome-o-santa-fe') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Capilla de San Bartolomé</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="12" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('capilla-de-nuestra-senora-la-blanca') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Capilla de Nuestra Señora la Blanca</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="13" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('capilla-de-san-andres') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Capilla de San Andrés</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="14" />
                                </li>

                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('capilla-de-mondragon') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Capilla de Mondragón</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="15" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('capilla-de-la-concepcion-o-de-prima') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Capilla de la Concepción o de Prima</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="16" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('capilla-de-la-comunion') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Capilla de la Comunión</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="17" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('capilla-de-la-azucena-o-san-pedro') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Capilla de la Azucena</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="18" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('capilla-de-alba') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Capilla de Alba</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="19" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('camarin-de-santiago-caballero') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name">Camarín de Santiago Caballero</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="20" />
                                </li>
                            </ol>
                        </x-slot>
                    </x-jet-dropdown>


                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-4 border border-transparent text-lg leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-catedral focus:outline-none transition">
                                   Museo
                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>

                        </x-slot>

                        <x-slot name="content">

                            <ol itemscope itemtype="https://schema.org/BreadcrumbList" class="overflow-auto h-72">
                                <meta itemprop="description" content="Museo de la Catedral de Santiago de Compostela">
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{URL('tapices') }}"  class="hover:bg-catedral hover:text-white">
                                    <span itemprop="name" >Colecciones de Tapices</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{ URL('pintura') }}"  class="hover:bg-catedral hover:text-white">
                                    <span itemprop="name" >Pintura</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="2" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('orfebreria') }}"  class="hover:bg-catedral hover:text-white">
                                    <span itemprop="name" >Orfebrería</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="3" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('elementos-arquitectonicos-y-escultura') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name" >Elementos arquitectónicos</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="4" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('artes-textiles') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name" >Artes Textiles</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="5" />
                                </li>
                            </ol>

                        </x-slot>
                    </x-jet-dropdown>

                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-4 border border-transparent text-lg leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-catedral focus:outline-none transition">
                                   Visitas
                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>

                        </x-slot>

                        <x-slot name="content">

                            <ol itemscope itemtype="https://schema.org/BreadcrumbList" class="overflow-auto h-72">
                                <meta itemprop="description" content="Horarios de aperura, misas,entradas ....">
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{URL('horarios') }}"  class="hover:bg-catedral hover:text-white">
                                    <span itemprop="name"  >Horarios y acceso</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{ URL('misasCatedral') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name"  >Misas en la Catedral</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="2" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('misasSantiago') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name"  >Misas en Santiago</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="3" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('calendarioLiturgico') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name"  >Calendario Litúrgico</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="4" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('entradasVisitas') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name"  >Visitas con entrada</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="5" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <x-jet-dropdown-link itemprop="item" href="{{  URL('funcionamientoBotafumeiro') }}"  class="hover:bg-catedral hover:text-white">
                                        <span itemprop="name"  >Funcionamiento del Botafumeiro</span>
                                    </x-jet-dropdown-link>
                                    <meta itemprop="position" content="6" />
                                </li>
                            </ol>



                        </x-slot>
                    </x-jet-dropdown>


                </div>
            </div>



                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <!-- Teams Dropdown -->
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="ml-3 relative">

                            <x-jet-dropdown align="right" width="60">
                                <x-slot name="trigger">
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                            {{ Auth::user()->currentTeam->name }}

                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </span>
                                </x-slot>

                                <x-slot name="content">
                                    <div class="w-60">
                                        <!-- Team Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Manage Team') }}
                                        </div>

                                        <!-- Team Settings -->
                                        <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                            {{ __('Team Settings') }}
                                        </x-jet-dropdown-link>

                                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                            <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                                {{ __('Create New Team') }}
                                            </x-jet-dropdown-link>
                                        @endcan

                                        <div class="border-t border-gray-100"></div>

                                        <!-- Team Switcher -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>

                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-jet-switchable-team :team="$team" />
                                        @endforeach
                                    </div>
                                </x-slot>
                            </x-jet-dropdown>
                        </div>
                    @endif



                    <!-- Settings Dropdown -->
                    <div class="ml-3 relative">
                    @auth
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">

                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>

                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Account') }}
                                </div>

                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    Perfil
                                </x-jet-dropdown-link>
                                @can('Leer Catedral')
                                    <x-jet-dropdown-link href="{{ route('editor.catedrals.index') }}">
                                        Editor
                                    </x-jet-dropdown-link>

                                @endcan



                                @can('Listar rol')
                                    <x-jet-dropdown-link href="{{ route('admin.home') }}">
                                        Administrador
                                    </x-jet-dropdown-link>

                                @endcan

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-jet-dropdown-link>
                                @endif

                                <div class="border-t border-gray-100"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    @else
                       {{--  <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrarse</a> --}}

                    @endauth
                    </div>
                </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition" aria-label="Opciones">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-dropdown  align="right" width="48">

                <x-slot name="trigger">
                    <span class="inline-flex rounded-md">
                        <button type="button" class="inline-flex items-center px-3 py-4 border border-transparent text-lg leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-catedral focus:outline-none transition">
                           Historia
                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </span>

                </x-slot>

                <x-slot name="content">

                    <ol class="overflow-auto h-72" >

                        <li>
                            <x-jet-dropdown-link itemprop="item" href="{{URL::to('/').'/#0'}}" class="hover:bg-catedral hover:text-white">
                                <span>El Apóstol Santiago y la Catedral de Santiago</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link itemprop="item" href="{{URL::to('/').'/#1'}}" class="hover:bg-catedral hover:text-white">
                                <span>Construcción de las primeras iglesias</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link  href="{{URL::to('/').'/#2'}}" class="hover:bg-catedral hover:text-white">
                                <span>Construcción de la Catedral</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link  href="{{URL::to('/').'/#3'}}" class="hover:bg-catedral hover:text-white">
                                <span>Transformaciones en el exterior de la Catedral</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link  href="{{URL::to('/').'/#4'}}" class="hover:bg-catedral hover:text-white">
                                <span>Transformaciones en el interior de la Catedral</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link  href="{{URL::to('/').'/#5'}}" class="hover:bg-catedral hover:text-white">
                                <span>Museo de la Catedral</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link  href="{{URL::to('/').'/#6'}}" class="hover:bg-catedral hover:text-white">
                                <span>Orígenes del camino a Santiago</span>
                            </x-jet-dropdown-link>
                             <meta itemprop="position" content="7" />
                        </li>
                        <li>
                            <x-jet-dropdown-link  href="{{URL::to('/').'/#7'}}" class="hover:bg-catedral hover:text-white">
                                <span>Las peregrinaciones a la Catedral de Santiago</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link  href="{{URL::to('/').'/#8'}}" class="hover:bg-catedral hover:text-white -scroll-mt-6 snap-start ">
                                <span>El Códice Calixtino</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{URL::to('/').'/#9'}}" class="hover:bg-catedral hover:text-white">
                                <span>El Tumbo A</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{URL::to('/').'/#10'}}" class="hover:bg-catedral hover:text-white">
                                <span>El Tumbo B</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{URL::to('/').'/#11'}}" class="hover:bg-catedral hover:text-white">
                                <span>Breviario de Miranda</span>
                            </x-jet-dropdown-link>

                        </li>

                    </ol>

                </x-slot>
            </x-jet-dropdown>


            <x-jet-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <span class="inline-flex rounded-md">
                        <button type="button" class="inline-flex items-center px-3 py-4 border border-transparent text-lg leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-catedral focus:outline-none transition">
                           Exterior
                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </span>

                </x-slot>

                <x-slot name="content">

                    <ol class="overflow-auto h-72" >

                        <li>
                            <x-jet-dropdown-link   href="{{URL('fachada-del-obradoiro') }}"   class="hover:bg-catedral hover:text-white">
                                <span>Fachada del Obradoiro</span>
                            </x-jet-dropdown-link>

                        </li>

                        <li>
                            <x-jet-dropdown-link  href="{{ URL('fachada-de-azabacheria') }}"   class="hover:bg-catedral hover:text-white">
                                <span>Fachada de Azabachería</span>
                            </x-jet-dropdown-link>

                         </li>

                         <li>
                            <x-jet-dropdown-link  href="{{  URL('fachada-de-la-quintana') }}"   class="hover:bg-catedral hover:text-white">
                                <span >Fachada de la Quintana</span>
                            </x-jet-dropdown-link>

                        </li>

                        <li>
                            <x-jet-dropdown-link  href="{{  URL('fachada-de-platerias') }}"   class="hover:bg-catedral hover:text-white">
                                <span >Fachada de Platerías</span>
                            </x-jet-dropdown-link>

                        </li>

                        <li>
                            <x-jet-dropdown-link  href="{{  URL('torre-del-reloj') }}"   class="hover:bg-catedral hover:text-white">
                                <span >Torre del Reloj</span>
                            </x-jet-dropdown-link>

                        </li>
                    </ol>

                </x-slot>
            </x-jet-dropdown>

            <x-jet-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <span class="inline-flex rounded-md">
                        <button type="button" class="inline-flex items-center px-3 py-4 border border-transparent text-lg leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-catedral focus:outline-none transition">
                           Interior
                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </span>

                </x-slot>

                <x-slot name="content">
                    <ol class="overflow-auto h-72">


                        <li>
                            <x-jet-dropdown-link href="{{URL('portico-de-la-gloria') }}"  class="hover:bg-catedral hover:text-white">
                                <span>El Pórtico de la Gloria</span>
                            </x-jet-dropdown-link>

                        </li>

                        <li>
                            <x-jet-dropdown-link href="{{URL('las-naves-y-el-crucero') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Las naves y el crucero</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{ URL('la-sacristia') }}"  class="hover:bg-catedral hover:text-white">
                            <span>La Sacristía</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('biblioteca-y-la-sala-capitular') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Biblioteca y Sala Capitular</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('el-palacio-de-gelmirez') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Palacio de Gelmírez</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('la-puerta-santa') }}"  class="hover:bg-catedral hover:text-white">
                                <span>La Puerta Santa</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('el-claustro') }}"  class="hover:bg-catedral hover:text-white">
                                <span>El Claustro</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('el-trasaltar') }}"  class="hover:bg-catedral hover:text-white">
                                <span>El Trasaltar</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('tribuna-y-las-cubiertas') }}"  class="hover:bg-catedral hover:text-white">
                                <span>La Tribuna y las Cubiertas</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('el-organo-de-la-catedral') }}"  class="hover:bg-catedral hover:text-white">
                                <span>El Órgano</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('el-botafumeiro') }}"  class="hover:bg-catedral hover:text-white">
                                <span>El Botafumeiro</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('el-baptisterio') }}"  class="hover:bg-catedral hover:text-white">
                                <span>El Baptisterio</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('cripta-apostolica') }}"  class="hover:bg-catedral hover:text-white">
                                <span>La Cripta Apostólica</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('excavaciones-arqueologicas') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Las Excavaciones Arqueológicas</span>
                            </x-jet-dropdown-link>

                        </li>
                    </ol>


                </x-slot>
            </x-jet-dropdown>


            <x-jet-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <span class="inline-flex rounded-md">
                        <button type="button" class="inline-flex items-center px-3 py-4 border border-transparent text-lg leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-catedral focus:outline-none transition">
                           Capillas del interior
                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </span>

                </x-slot>

                <x-slot name="content">

                    <ol class="overflow-auto h-72">

                        <li>
                            <x-jet-dropdown-link href="{{URL('iglesia-de-la-corticela') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Iglesia de la Corticela</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{ URL('capilla-mayor') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Capilla Mayor</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('capilla-de-san-fernando') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Capilla de San Fernando</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('capilla-de-las-reliquias') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Capilla de las Reliquias</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('capilla-del-pilar') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Capilla del Pilar</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('capilla-del-cristo-de-burgos') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Capilla del Cristp de Burgos</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('capilla-del-espiritu-santo') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Capilla de Espíritu Santo</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('capilla-del-salvador') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Capilla del Salvador</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('capilla-de-santa-catalina') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Capilla de Santa Catalina</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('capilla-de-san-juan') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Capilla de San Juan</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('capilla-de-san-antonio') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Capilla de San Antonio</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('capilla-de-san-bartolome-o-santa-fe') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Capilla de San Bartolomé</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('capilla-de-nuestra-senora-la-blanca') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Capilla de Nuestra Señora la Blanca</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('capilla-de-san-andres') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Capilla de San Andrés</span>
                            </x-jet-dropdown-link>

                        </li>

                        <li>
                            <x-jet-dropdown-link href="{{  URL('capilla-de-mondragon') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Capilla de Mondragón</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('capilla-de-la-concepcion-o-de-prima') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Capilla de la Concepción o de Prima</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('capilla-de-la-comunion') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Capilla de la Comunión</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('capilla-de-la-azucena-o-san-pedro') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Capilla de la Azucena</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('capilla-de-alba') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Capilla de Alba</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('camarin-de-santiago-caballero') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Camarín de Santiago Caballero</span>
                            </x-jet-dropdown-link>

                        </li>
                    </ol>
                </x-slot>
            </x-jet-dropdown>


            <x-jet-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <span class="inline-flex rounded-md">
                        <button type="button" class="inline-flex items-center px-3 py-4 border border-transparent text-lg leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-catedral focus:outline-none transition">
                           Museo
                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </span>

                </x-slot>

                <x-slot name="content">

                    <ol  class="overflow-auto h-72">

                        <li>
                            <x-jet-dropdown-link href="{{URL('tapices') }}"  class="hover:bg-catedral hover:text-white">
                            <span >Colecciones de Tapices</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{ URL('pintura') }}"  class="hover:bg-catedral hover:text-white">
                            <span >Pintura</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('orfebreria') }}"  class="hover:bg-catedral hover:text-white">
                            <span >Orfebrería</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('elementos-arquitectonicos-y-escultura') }}"  class="hover:bg-catedral hover:text-white">
                                <span >Elementos arquitectónicos</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('artes-textiles') }}"  class="hover:bg-catedral hover:text-white">
                                <span >Artes Textiles</span>
                            </x-jet-dropdown-link>

                        </li>
                    </ol>

                </x-slot>
            </x-jet-dropdown>

            <x-jet-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <span class="inline-flex rounded-md">
                        <button type="button" class="inline-flex items-center px-3 py-4 border border-transparent text-lg leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-catedral focus:outline-none transition">
                           Visitas
                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </span>

                </x-slot>

                <x-slot name="content">

                    <ol class="overflow-auto h-72">

                        <li>
                            <x-jet-dropdown-link href="{{URL('horarios') }}"  class="hover:bg-catedral hover:text-white">
                            <span>Horarios y acceso</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{ URL('misasCatedral') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Misas en la Catedral</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('misasSantiago') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Misas en Santiago</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('calendarioLiturgico') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Calendario Litúrgico</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('entradasVisitas') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Visitas con entrada</span>
                            </x-jet-dropdown-link>

                        </li>
                        <li>
                            <x-jet-dropdown-link href="{{  URL('funcionamientoBotafumeiro') }}"  class="hover:bg-catedral hover:text-white">
                                <span>Funcionamiento del Botafumeiro</span>
                            </x-jet-dropdown-link>

                        </li>
                    </ol>



                </x-slot>
            </x-jet-dropdown>







            {{-- @foreach ($nav_links as $nav_link)
                <x-jet-responsive-nav-link href="{{$nav_link['route']}}" :active="$nav_link['active']">
                    {{$nav_link['name']}}
                </x-jet-responsive-nav-link>
            @endforeach
 --}}
            {{-- <div class="pl-4 share-buttons-row">
                <!--Facebook's Button -->
                <div class="share-fb" onclick="press_facebook('{{url()->current()}}')"></div>
                <!--Twitter's Button -->
                <div class="share-twitter" onclick="press_twiter('{{url()->current()}}')" ></div>
                <!--Linkedin's Button -->
                <div class="share-linkedin" onclick="press_linkedin('{{url()->current()}}')"></div>
            </div> --}}


        </div>



        <!-- Responsive Settings Options -->
        @auth

            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <div class="shrink-0 mr-3">
                            <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                        </div>
                    @endif

                    <div>
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Account Management -->
                    <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                        {{ __('Profile') }}
                    </x-jet-responsive-nav-link>

                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                            {{ __('API Tokens') }}
                        </x-jet-responsive-nav-link>
                    @endif

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-jet-responsive-nav-link>
                    </form>

                    <!-- Team Management -->
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="border-t border-gray-200"></div>

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Team') }}
                        </div>

                        <!-- Team Settings -->
                        <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                            {{ __('Team Settings') }}
                        </x-jet-responsive-nav-link>

                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                            <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                                {{ __('Create New Team') }}
                            </x-jet-responsive-nav-link>
                        @endcan

                        <div class="border-t border-gray-200"></div>

                        <!-- Team Switcher -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Switch Teams') }}
                        </div>

                        @foreach (Auth::user()->allTeams() as $team)
                            <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                        @endforeach
                    @endif
                </div>
            </div>
        @else
            {{-- <div class="py-1 border-t border-gray-200">
                <x-jet-responsive-nav-link href="{{route('login')}}" :active="request()->routeIs('login')">
                    Login
                </x-jet-responsive-nav-link>
                <x-jet-responsive-nav-link href="{{route('register')}}" :active="request()->routeIs('register')">
                    Register
                </x-jet-responsive-nav-link>
            </div> --}}
        @endauth

    </div>
</nav>
