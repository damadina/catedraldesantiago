<div class="container py-8">

   <x-table-responsive>

        <div class="bg-gray-200 py-4">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
                <button class="bg-white shadow h-12 px-4 rounded-lg text-gray-700" wire:click="catedral">
                    Elementos de la Catedral
                </button>
                <button class="ml-6 bg-white shadow h-12 px-4 rounded-lg text-gray-700" wire:click="monumentos">
                    Monumentos
                </button>
            </div>
        </div>

        {{-- <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8"> --}}


        @if ($tipo=="catedral")
        <p class="mt-6 text-gray-600 text-xl text-center">ELEMENTOS DE LA CATEDRAL</p>
        @else
        <p class="mt-6 text-gray-600 text-xl text-center">MONUMENTOS DE SANTIAGO</p>
        @endif

        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

            <div class="px-6 py-4 flex">
                <input wire:model="search" wire:keydown="limpiar_page"  class=" form-input flex-1 shadow-sm" placeholder="Introduce el nombre de elemento ....">

                <a class="btn btn-danger ml-2" href="{{route('editor.catedrals.create',$tipo)}}">Crear nuevo elemento</a>
            </div>
            @if($elementos->count())
                <table class="min-w-full divide-y divide-gray-200">

                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Orden</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($elementos as $elemento )
                            <tr>

                                <td class="px-6 py-4 whitespace-nowrap ">
                                    <div class="flex items-center">

                                        <div class="flex-shrink-0 w-20  inline-block align-middle  ">
                                            @isset($elemento->urlPortada)
                                                <img class="object-cover object-center  " src="{{Storage::url('portadas/'.$elemento->urlPortada)}}" alt="">
                                            @else
                                                <img class="object-cover object-center " src="{{ asset('images/NoFoto.png')}}" alt="">
                                            @endisset
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-lg font-medium text-gray-900">
                                                {{$elemento->name}}
                                            </div>
                                            <div>
                                                <div class="text-sm text-gray-500">{{$elemento->categorianame}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">{{$elemento->orden}}</div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    @switch($elemento->status)
                                        @case(1)
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800"> Borrador </span>
                                            @break
                                        @case(2)
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800"> Revisión </span>
                                            @break
                                        @case(3)
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"> Publicado </span>
                                        @break

                                        @default

                                    @endswitch


                                </td>


                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    @php
                                        if($elemento->categoria == 6){
                                            $ruta = route('home') ;
                                        } else {
                                            $ruta = route('catedral.show',$elemento);
                                        }


                                    @endphp

                                    <a  href= "{{$ruta}}" class="btn btn-primary mr-4">
                                        <i class="fas fa-eye"></i>
                                    </a>


                                    <a  href="{{route('editor.catedrals.edit', $elemento)}}" class="btn btn-primary mr-4">

                                        <i class="fas fa-edit"></i>
                                    </a>



                                    {{-- <a class="btn btn-primary text-white" wire:click="edit({{ $item }})">
                                        <i class="fas fa-edit"></i>
                                    </a> --}}


                                    {{-- <a href="{{route('editor.catedrals.edit', $elemento)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a> --}}
                                </td>
                            </tr>
                        @endforeach

                    <!-- More people... -->
                    </tbody>
                </table>
                <div class="px-6 py-4">
                    {{$elementos->links()}}
                </div>
            @else
                <div class="px-6 py-4">
                    No hemos encontrado ningún elemento
                </div>
            @endif
        </div>
    </x-table-responsive>

</div>
