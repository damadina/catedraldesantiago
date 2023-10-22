<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="noindex">



        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
        @isset($head)
            {{$head}}
        @endisset

       {{--  @if (env('APP_ENV') == 'production')
        <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZJDWZKPEHZ"></script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-ZJDWZKPEHZ');
            </script>
        @endif
 --}}

        {{-- {!! htmlScriptTagJsApi(['action' => 'homepage',]) !!} --}}


        <!-- Fonts -->{{--
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
 --}}
        <!-- Styles -->

        {{-- <link rel="stylesheet" href="{{mix('css/app.css') }}"> --}}

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
        {{-- <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" /> --}}
        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.7.3/tailwind.min.css" rel="stylesheet" /> --}}
        <link rel="icon" href="{{ asset('images/logo.png') }}">
        {{-- <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/> --}}
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
        {{-- <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" /> --}}


        @livewireStyles




        <style>



            h2 {
                font-weight: normal;
                color: #941431;
                font-size: 24px;
                /* padding-top: 25px;
                padding-bottom: 25px;
                margin-bottom: 25px; */
                text-align: center;

            }
            b, strong, a {
                color: #393838;
            }
            .max-h-0 {
                max-height: 0;
            }

            h3 {

                color: #941431;
                font-size: 20px;
                margin-bottom: 1em;
           -
            }
            h4 {
                color: #941431;
                font-size: 18px;
                margin-left: 2em;
            }

            @media only screen and (max-width: 600px) {
                h2 {
                    font-size: 18px;

                }
                h3 {
                    font-size: 14px;
                }
                blockquote {
                    font-size: 1rem ;
                }
            }
           /*  blockquote {
                font: 14px/22px normal helvetica, sans-serif;
                margin-top: 10px;
                margin-bottom: 10px;
                margin-left: 50px;
                padding-left: 15px;
                border-left: 3px solid #ccc;
            } */
            blockquote {
                font: 18px ;
                margin-top: 10px;
                margin-bottom: 10px;
                margin-left: 30px;
                padding-left: 15px;
                border-left: 3px solid #ccc;
            }
            /* Tab content - closed */
            .tab-content {
             max-height: 0;
             -webkit-transition: max-height .35s;
             -o-transition: max-height .35s;
             transition: max-height .35s;
             }
             /* :checked - resize to full height */
             .tab input:checked ~ .tab-content {
             max-height: 100vh;
             }
             /* Label formatting when open */
             .tab input:checked + label{
             /*@apply text-xl p-5 border-l-2 border-indigo-500 bg-gray-100 text-indigo*/
             font-size: 1.25rem; /*.text-xl*/
             padding: 1.25rem; /*.p-5*/
             border-left-width: 2px; /*.border-l-2*/
             border-color: #941431; /*.border-indigo*/
             background-color: #f8fafc; /*.bg-gray-100 */
             color:#941431cd; /*.text-indigo*/
             }
             /* Icon */
             .tab label::after {
             float:right;
             right: 0;
             top: 0;
             display: block;
             width: 1.5em;
             height: 1.5em;
             line-height: 1.5;
             font-size: 1.25rem;
             text-align: center;
             -webkit-transition: all .35s;
             -o-transition: all .35s;
             transition: all .35s;
             }
             /* Icon formatting - closed */
             .tab input[type=checkbox] + label::after {
             content: "+";
             font-weight:bold; /*.font-bold*/
             border-width: 1px; /*.border*/
             border-radius: 9999px; /*.rounded-full */
             border-color: #b8c2cc; /*.border-grey*/
             }
             .tab input[type=radio] + label::after {
             content: "\25BE";
             font-weight:bold; /*.font-bold*/
             border-width: 1px; /*.border*/
             border-radius: 9999px; /*.rounded-full */
             border-color: #b8c2cc; /*.border-grey*/
             }
             /* Icon formatting - open */
             .tab input[type=checkbox]:checked + label::after {
             transform: rotate(315deg);
             background-color: #941431; /*.bg-indigo*/
             color: #f8fafc; /*.text-grey-lightest*/
             }
             .tab input[type=radio]:checked + label::after {
             transform: rotateX(180deg);
             background-color: #941431; /*.bg-indigo*/
             color: #f8fafc; /*.text-grey-lightest*/
             }

        </style>



        <!-- Scripts -->
        {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}





    </head>
    <body class="font-sans antialiased">
        {{-- <x-jet-banner /> --}}

        <div class="min-h-screen bg-white">

            @livewire('navigation-menu')
            <!-- Page Heading -->
            <main>
                @if (isset($header))
                    {{$header}}
                @endif

                <!-- Page Content -->

                    {{ $slot }}

            </main>
        </div>

        @stack('modals')

        @livewireScripts


        {{-- <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>


        {{-- <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script> --}}

       {{--  <script>
            /* Optional Javascript to close the radio button version by clicking it again */
            var myRadios = document.getElementsByName('tabs2');
            var setCheck;
            var x = 0;
            for(x = 0; x < myRadios.length; x++){
                myRadios[x].onclick = function(){
                    if(setCheck != this){
                         setCheck = this;
                    }else{
                        this.checked = false;
                        setCheck = null;
                }
                };
            }
        </script> --}}



        @stack('js')


       @isset($js)
             {{$js}}
        @endisset

    </body>
</html>

