<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="noindex,nofollow">
        <title>{{ config('app.name', 'Laravel') }}</title>


        <!-- Fonts -->
        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

        <!-- Styles -->
       {{--  <link rel="stylesheet" href="{{mix('css/app.css') }}"> --}}

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
        {{-- <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" /> --}}
        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.7.3/tailwind.min.css" rel="stylesheet" /> --}}
        <link rel="icon" href="{{ asset('images/logo.png') }}">

        @livewireStyles

        <style>
            h2 {

            color: #aa3b54;
            font-size: 24px;
            }
            h3 {
                font-weight: bold;
                color: #941431;
                font-size: 20px;
            }
            h4 {
                color: #941431;
                font-size: 18px;
                margin-left: 2em;
            }
            b, strong, a {
                color: #941431;
            }


        </style>



        <!-- Scripts -->
        {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}

    </head>
    <body class="font-sans antialiased">


        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-gray-100 shadow">
                    <div class="max-w-7xl text-2xl text-center mx-auto py-2 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <div class="container py-8 grid grid-cols-5">
                <aside>

                    <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
                     href="{{ route('editor.catedrals.index')}}">Volver</a>
                    <h1 class="pt-8 font-bold text-lg mb-4">Edicción elemento </h1>
                    <ul class="text-sm text-gray-600">
                        <li class="leading-7 mb-1 border-l-4 @routeIs('editor.catedrals.edit',$elemento) border-indigo-400 @else border-transparent  @endif  pl-2">
                            <a href="{{route('editor.catedrals.edit',$elemento)}}">Texto</a>
                        </li>
                        <li class="leading-7 mb-1 border-l-4 @routeIs('editor.fotos.index',$elemento) border-indigo-400 @else border-transparent  @endif  pl-2">
                            <a href="{{route('editor.fotos.index',$elemento)}}">Fotos</a>

                        </li>
                        <li class="leading-7 mb-1 border-l-4 @routeIs('editor.videos.index',$elemento) border-indigo-400 @else border-transparent  @endif  pl-2">
                            <a href="{{route('editor.videos.index',$elemento)}}">Videos</a>
                        </li>
                        <li class="leading-7 mb-1 border-l-4 @routeIs('editor.informations.index',$elemento) border-indigo-400 @else border-transparent  @endif  pl-2">
                            <a href="{{route('editor.informations.index',$elemento)}}">Informaciones</a>
                        </li>

                        <li class="leading-7 mb-1 border-l-4 @routeIs('editor.questions.index',$elemento) border-indigo-400 @else border-transparent  @endif  pl-2">
                            <a href="{{route('editor.questions.index',$elemento)}}">Preguntas frecuentes</a>
                        </li>
                        <li class="leading-7 mb-1 border-l-4 @routeIs('editor.planos.index',$elemento) border-indigo-400 @else border-transparent  @endif  pl-2">
                            <a href="{{route('editor.planos.index',$elemento)}}">Ubicación</a>
                        </li>


                    </ul>
                </aside>

                <div class="col-span-4 card">
                    <main class="card-body text-gray-600">
                        {{$slot}}
                    </main>

                </div>

            </div>
        </div>

        @stack('modals')
        @livewireScripts
        @stack('js')

        @isset($js)
             {{$js}}
        @endisset

    </body>
</html>
