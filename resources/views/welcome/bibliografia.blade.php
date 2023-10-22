<x-app-layout>
    @php
        $libros = [
            [
            'titulo' => 'Guía artística de la Catedral de Santiago',
            'autor' => 'BARRAL IGLESIAS, A, e YZQUIERO PERRÍN',
            'ano' => 'León, 2004',
            ],
            [
            'titulo' => 'La arquitectura en Galicia durante el siglo XVII',
            'autor' => 'BONET CORREA, A',
            'ano' => 'Madrid, 1966',
            ],

            [
            'titulo' => 'Contribución al estudio del gótico en Galicia',
            'autor' => 'CAAMAÑO MARTÍNEZ, J Mª',
            'ano' => 'Valladolid. 1962',
            ],
            [
            'titulo' => 'Arquitectura románica de la Catedral de Santiago de Compostela.',
            'autor' => 'CONANT, K. J',
            'ano' => '',
            ],
            [
            'titulo' => 'Santiago de Compostela. Guía de sus monumentos e itinerarios. 2ª Edición, 1950.',
            'autor' => 'FILGUEIRA VALVERDE, J.',
            'ano' => '',
            ],
            [
            'titulo' => 'Catedral de Santiago e o Barroco.',
            'autor' => 'GARCÍA IGLESIAS, J. M.',
            'ano' => 'Santiago, 1990',
            ],
            [
            'titulo' => 'La Catedral de Santiago de Compostela.',
            'autor' => 'GARCÍA IGLESIAS, J. M.',
            'ano' => 'Caracha, 1993',
            ],
            [
            'titulo' => 'El arte románico español. Esquema de un libro.',
            'autor' => 'GÓMEZ MORENO, M.',
            'ano' => 'Madrid, 1934',
            ],
            [
            'titulo' => 'Exploraciones en torno al sepulcro del Apóstol Santiago. ',
            'autor' => 'GUERRA CAMPOS, J.',
            'ano' => 'Santiago, 1982',
            ],
            [
            'titulo' => 'Domingo de Andrade, maestro de obras de la catedral de Santiago.(1639-1712).',
            'autor' => 'TAÍN GUZMÁN, M.',
            'ano' => '',
            ],
            [
            'titulo' => 'Santiago, camino de Europa. Catálogo de exposición.',
            'autor' => 'VVAA',
            'ano' => 'Santiago, 1991',
            ],
            [
            'titulo' => 'Pórtico da Gloria e o arte do seu tempo. Catálogo de exposición.',
            'autor' => 'VVAA',
            'ano' => 'Santiago, 1988',
            ],
            [
            'titulo' => 'Pórtico da Gloria e o arte do seu tempo. Catálogo de exposición.',
            'autor' => 'VVAA',
            'ano' => 'Santiago, 1988',
            ],
            [
            'titulo' => 'Historia de la Santa A. M. Igelesia de Santiago. Tomos I al XI.',
            'autor' => 'LÓPEZ FERREIRO, A.',
            'ano' => 'Santiago, 1898-1911',
            ],
            [
            'titulo' => 'Notas para una revisión de la obra de K. J. Conant.',
            'autor' => 'MORALEJO ÁLVAREZ, S.',
            'ano' => 'Santiago, 1982',
            ],
            [
            'titulo' => 'Liber Sancti Jacob. Codex Calixtinus.',
            'autor' => 'MORALEJO, TORRES y FEO (traductores)',
            'ano' => 'Santiago, 1941',
            ],
            [
            'titulo' => 'Viaje por orden del rey Felipe II a los reinos de Castilla, León, Galicia y Principado de Asturias',
            'autor' => 'MORALES, A',
            'ano' => 'Madrid, 1765',
            ],
            [
            'titulo' => 'Santiago, la Catedral y la memoria del arte',
            'autor' => 'NÚÑEZ RODRÍGUEZ, M',
            'ano' => 'Santiago, 2000',
            ],
            [
            'titulo' => 'Guía de Galicia.',
            'autor' => 'OTERO PEDRAYO, R.',
            'ano' => 'Vigo, 1991',
            ],
            [
            'titulo' => 'Rastreando los orígenes de mi Universidad.',
            'autor' => 'OTERO TÚÑEZ, R.',
            'ano' => 'Santiago, 1985',
            ],
            [
            'titulo' => 'Sugerencias sobre la fachada exterior del Pórtico de la Gloria',
            'autor' => 'OTERO TÚÑEZ, R.',
            'ano' => 'Abrente',
            ],
            [
            'titulo' => 'El coro del Maestro Mateo.',
            'autor' => 'OTERO TÚÑEZ, R.',
            'ano' => 'OTERO TÚNEZ, R, e YZQUIERO PERRÍN, R.',
            ],
            [
            'titulo' => 'La meta del Camino de Santiago. La transformación de la Catedral a través de los tiempos.',
            'autor' => 'SINGUL LORENZO, F.',
            'ano' => 'Santiago, 1995',
            ],
            [
            'titulo' => 'Galicia no tempo. Catálogo de exposición. ',
            'autor' => 'VVAA',
            'ano' => 'Santiago, 1991',
            ],
            [
            'titulo' => 'Compostela, una historia entretenida. Atlas ilustrado de la ciudad de Santiago.',
            'autor' => 'VICENTE LÓPEZ, S.',
            'ano' => 'Santiago, 2010',
            ],
            [
            'titulo' => 'El Maestro Mateo y el Pórtico de la Gloria en la Catedral de Santiago. ',
            'autor' => 'YZQUIERDO PERRÍN, R.',
            'ano' => 'León, 2010',
            ],
            [
            'titulo' => 'Catedral de Santiago de Compostela” en YZQUIERDO PERRÍN ',
            'autor' => 'YZQUIERDO PERRÍN, R',
            'ano' => 'Madrid, 2002',
            ],

            [
            'titulo' => 'Reconstrucción del Coro del Maestro Mateo.',
            'autor' => 'YZQUIERDO PERRÍN',
            'ano' => 'La Coruña, 1999',
            ],
            [
            'titulo' => 'Las colecciones de arte de la Catedral de Santiago de Compostela”. En Santiago, punto de encuentro. ',
            'autor' => 'YZQUIERDO PEIRÓ, R',
            'ano' => 'Santiago 2010',
            ],
            [
            'titulo' => 'Museo de la Catedral de Santiago”, en VVAA: Gran Enciclopedia del Camino de Santiago. Tomo XII',
            'autor' => 'YZQUIERDO PEIRÓ, R',
            'ano' => 'Santiago 2010',
            ],
            [
            'titulo' => 'Museo Catedral de Santiago',
            'autor' => 'YZQUIERDO PEIRÓ, R',
            'ano' => 'Santiago, 2011',
            ],
        ];



    @endphp
    <x-slot name="head">
        <title>Bibliografía</title>
        <meta name="description" content="Bibliografía utilizada en la web catedraldesantiago.online">
        <meta name="keywords" content="Bibliografía"/>

    </x-slot>

    <section class="container">
        <h1 class="text-4xl font-semibold my-6 text-catedral text-center">BLIBIOGRAFÍA UTILIZADA</h1>
        {{-- {{count($libros)}} --}}
        @foreach ($libros as $libro )
            <div class="w-full py-2 px-8 bg-white shadow-lg rounded-lg my-8">
                <h2 class="text-gray-800 text-xl font-semibold">{{$libro['titulo']}}</h2>
                <div class="flex items-center ">
                    <p class="mt-2 text-gray-600 flex-1">{{$libro['autor']}}</p>
                    <p class="justify-end text-lg font-medium text-gray-800">{{$libro['ano']}}</p>
                </div>
            </div>
        @endforeach












    </section>
    <section>
        <x-catedral-footer slug='bibliografia'/>
    </section>


</x-app-layout>
