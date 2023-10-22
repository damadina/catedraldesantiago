<x-app-layout>

    <x-slot name="header">
        {{$elemento->name}}
    </x-slot>

    <section class="container py-6 ">
        @if ($elemento->mensaje)
            <div class="flex p-4 mb-4 text-sm text-white bg-pink-800 rounded-lg dark:bg-red-200 dark:text-red-800"
                role="alert">
                <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <div>
                    <span class="font-medium">{{ $elemento->mensaje }}</span>
                </div>
            </div>
        @endif


        <div class=" w-full mt-6 flex justify-center items-start mb-6 ">
            <x-home-post :fotos=$fotos />


            <div class="w-1/2  self-stretch overflow-hidden border-t-4 border-r-4 border-b-4 rounded-r-lg">
                <div class="p-6 text-gray-800 text-xl leading-loose text-justify">
                    {!! $elemento->resumen !!}
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">

            <div class="relative" x-data="{open:false}">
                <button class=" px-4 text-gray-700 block h-12 rounded-lg overflow-hidden focus:outline-none bg-white shadow" x-on:click='open = true'>
                    <i class="fas fa-building text-sm mr-2"></i>
                    Fachadas
                    <i class="fas fa-chevron-down text-sm ml-2"></i>
                </button>
                <!-- Dropdown Fachadas -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show='open' x-on:click.away="open=false">
                    @foreach ($fachadas as $item)
                        <a href="{{route('catedral.show',$item)}}" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-gray-500 hover:text-white">{{$item->name}}</a>

                    @endforeach

                </div>
            </div>
        </div>

        <div class="flex justify-center py-6" id="contenidos">
            <div class="" x-data="{open: false}">
                <button x-on:click="open = !open" class="px-4 text-white block h-12 w-48 rounded-lg overflow-hidden focus:outline-none bg-catedral shadow">
                   <span class="font-semibold"> Contenidos</span>
                    <i class="fas fa-chevron-down text-sm ml-2"></i>
                </button>
                    <div class="overflow-hidden" x-show='open' x-on:click.away='open = false'>
                        <span id="submenu" >Loading...</span>
                    </div>
            </div>

            <div class="text-center flex-1 text-catedral">
                <span class="text-4xl font-semibold">{{ $elemento->prefijoH1 }}</span>
                <h1 class="inline-block text-4xl font-semibold pl-2">{{ $elemento->name }}</h1>
            </div>


        </div>


        <div class="text-2xl pb-4">
            {!! $elemento->historia !!}
        </div>
        <hr class="h-1 bg-pink-800">

    </section>
    <section class="container py-4">
        @livewire('welcome.catedral-reviews',['elemento' => $elemento])
    </section>
    <section>
        <x-catedral-footer />
    </section>



    @push('js')
        {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}


        <script>
            Livewire.on('deleteComentario', comentarioId => {
                Swal.fire({
                    title: 'Esta seguro?',
                    text: "Vas ha eliminar tu comentario",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'SI'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emitTo('welcome.catedral-reviews', 'delete', comentarioId);
                        Swal.fire(
                            'Borrado!',
                            'Tu comentario ha sido borrado.',
                            'success'
                        )
                    }
                })
            })
        </script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                (function(targetId) {
                    var headingtags = ["h2"];
                    var all_el = document.getElementsByTagName('*');
                    var target = document.getElementById(targetId);
                    var arr = [];
                    for (var i = 0, n = all_el.length; i < n; i++) {
                        if (headingtags.indexOf(all_el[i].nodeName.toLowerCase()) > -1) {
                            arr.push(all_el[i]);
                        }
                    }
                    var headings = arr;
                    console.log(headings);
                    if (headings.length > 1) {
                        var menuList = document.createElement("ul");

                        menuList.classList.add("bg-white","absolute","mt-2","shadow","rounded","w-96","py-1","text-catedral");

                        for (var i = 0; i < headings.length; i++) {
                            var anchorName = "";
                            if (headings[i].id) {
                                anchorName = headings[i].id;
                            } else {
                                anchorName = "section_" + i;
                                headings[i].id = anchorName;
                            }
                            var headingTag = headings[i].nodeName.replace("H", "");;
                            var level = "";
                            var levelcount = 0;
                            for (var a = 0; a < headingTag - 2; a++) {
                                level = level + "- ";
                                levelcount = levelcount + 1;
                            }
                            var headingText = level + " " + headings[i].innerText;
                            var menuLink = document.createElement("a");
                            menuLink.setAttribute("href", "#" + anchorName);
                            menuLink.appendChild(document.createTextNode(headingText));
                            var listItem = document.createElement("li");
                            listItem.classList.add("p-2","text-catedral");
                            listItem.appendChild(menuLink);
                            menuList.appendChild(listItem);
                        }
                        while (target.hasChildNodes()) target.removeChild(target.firstChild);
                        target.appendChild(menuList);
                    }
                })
                ("submenu");
            });
        </script>
    @endpush
</x-app-layout>

