<x-app-layout>
    @php
        $autores = [
            [
                'nombre' => 'Ramón Yzquierdo Peiró',
                'foto' => 'Ramon.jpg',
                'funcion' => 'Contenidos',
                'curri' => 'Doctor en Historia del Arte por la Universidad de Santiago de Compostela y Licenciado en Geografía e Historia por la misma Universidad; Máster en Gestión de Patrimonio y Bienes Culturales por la Universidad de La Coruña y, también, en Interpretación del Patrimonio Cultural por la Universidad Oberta de Cataluña y la Universidad de las Islas Baleares; varios cursos de postgrado sobre museología, organización de exposiciones y conservación y gestión de bienes culturales.',
            ],
            [
                'nombre' => 'Salvador Yzquierdo Peiró',
                'foto' => 'Salvador.jpg',
                'funcion' => 'Contenidos',
                'curri' => 'Licenciado en Historia del Arte por la Universidad de Santiago, máster en Gestión Cultural y Patrimonio, y Diploma de Estudios Avanzados de Arte en Galicia, en el que obtuvo la calificación de sobresaliente. Trabajó en Roma, en el estudio del prestigioso fotógrafo Araldo de Luca, en un proyecto de digitalización y catalogación de su extenso catálogo de fotografías de obras de arte.',
            ],

            [
                'nombre' => 'Enrique Toriño Marcén',
                'foto' => 'Enrique.jpg',
                'funcion' => 'Fotografía',
                'curri' => 'Fotógrafo profesional especializado en el área técnica, industrial, publicitaria, patrimonio y bellas artes. Desarrolla gran parte de su actividad en disciplinas relacionadas con el patrimonio artístico y cultural tanto en archivos y bibliotecas históricas como en centros de arte, restauración y arqueología. Ha sido fotógrafo distinguido de sellos comerciales como Apple, Canon y Sony.',
            ],

        ];

    @endphp
    <x-slot name="head">
        <title>Autores</title>
        <meta name="description" content="Autores del contenido y fotografías de la web catedraldesantiago.online">
        <meta name="keywords" content="autores"/>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </x-slot>


    <section class="container">
        <h1 class="text-4xl font-semibold my-6 text-catedral text-center">AUTORES</h1>
        @foreach ($autores as $autor)
            <div class="my-10  flex justify-center items-center">
                <!-- Start of component -->
                <div class="w-full md:w-2/3 bg-white border-2 border-gray-300 p-6 rounded-md tracking-wide shadow-lg">
                    <div id="header" class="flex items-center mb-4">
                        <img alt="avatar" class="w-20 rounded-full border-2 border-gray-300"
                            src="{{ asset('images/' . $autor['foto']) }}" />
                        <div id="header-text" class="leading-5 ml-6 sm">
                            <h4 id="name" class="text-xl font-semibold">{{ $autor['nombre'] }}</h4>
                            <h5 id="job" class="font-semibold text-blue-600">{{ $autor['funcion'] }}</h5>
                        </div>
                    </div>
                    <div id="quote">
                        <q class="italic text-gray-600">{{ $autor['curri'] }}</q>
                    </div>
                </div>
                <!-- End of component -->
            </div>
        @endforeach




    </section>

    <section>
        <x-catedral-footer slug='autores'/>
    </section>


</x-app-layout>
