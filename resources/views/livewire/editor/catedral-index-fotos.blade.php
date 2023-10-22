<div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <div class="flex justify-end">
                        @livewire('editor.catedral-create-fotos', ['elemento' => $elemento])
                    </div>
                    <h1 class="text-2xl font-bold mt-2 ml-2 mb-6">Fotos de {{ $elemento->name }} </h1>
                    @if($fotos->count())

                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Elemento
                                    </th>

                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Orden</th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($fotos as $item)
                                    <tr>
                                        <td class="px-6 py-4 ">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 w-20  inline-block align-middle ">
                                                    <img class="objet-cover object-center " src="{{asset('storage/fotos/'.$elemento->id.'/thumbnail/'. $item->url)}}" alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">{{ $item->piefoto }}
                                                    </div>
                                                    <div class="text-sm text-gray-500">{{ $item->nombreFoto }}</div>
                                                </div>
                                            </div>
                                        </td>


                                        <td class="px-6 py-4 whitespace-nowrap text-xl text-gray-800">{{ $item->orden }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">

                                            <a class="btn btn-danger mr-4" wire:click="$emit('deleteFotoSwalert',{{$item->id}})">
                                                <i class="fas fa-trash text-white"></i>
                                            </a>
                                            <a class="btn btn-primary text-white" wire:click="edit({{ $item }})">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                                <!-- More people... -->
                            </tbody>
                        </table>
                    @else
                        <div class="px-6 py-4">
                            No hemos encontrado ningúna foto
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <x-jet-dialog-modal wire:model="open_edit">
        <x-slot name='title'>
            Modificar foto (1280X700)
        </x-slot>

        <x-slot name='content'>
            <div wire:loading wire:target="image"
                class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Cargando imagen</strong>
                <span class="block sm:inline">Aguarde un monmento</span>
            </div>

            @if ($image)
                <img class="mb-4" src="{{ $image->temporaryUrl() }}" alt="">
            @else

                <img src="{{ asset('storage/fotos/'.$elemento->id.'/original/'.$foto->url) }}" alt="">
            @endif
            <div class="mb-4">
                <x-jet-label value="Nombre original de la foto" />
                <x-jet-input disabled=true type="text" class="w-full" wire:model.defer="foto.url" />
                <x-jet-input-error for='foto.nombreFoto' />
            </div>


            <div class="mb-4">
                <x-jet-label value="Pie de foto" />
                <textarea class="form-control w-full" rows="2" wire:model.defer="foto.piefoto"></textarea>
                <x-jet-input-error for='foto.piefoto' />
            </div>
            <div class="mb-4">
                <x-jet-label value="Keywords" />
                <textarea class="form-control w-full" rows="2" wire:model.defer="foto.keywords"></textarea>
                <x-jet-input-error for='foto.keywords' />
            </div>

            <div class="mb-4">
                <x-jet-label value="alt de imagen" />
                <x-jet-input type="text" class="w-full" wire:model.defer="foto.alt" />
                <x-jet-input-error for='foto.alt' />
            </div>
            <div class="mb-4">
                <x-jet-label value="Orden" />
                <x-jet-input type="number" class="w-full" wire:model.defer="foto.orden" />
                <x-jet-input-error for='foto.orden' />
            </div>
            {{-- <div class="mb-4">
                <x-jet-label value="Vertical" />
                <x-jet-input type="checkbox" class="" wire:model.defer="foto.isvertical" />
                <x-jet-input-error for='isvertical'/>
            </div>
 --}}


            <div>
                <input type="file" wire:model='image' id="{{ $identificador }}""  >
                <x-jet-input-error for='image'/>
            </div>

        </x-slot>
        <x-slot name='footer'>
            <x-jet-secondary-button wire:click=" cancelar">
                Cancelar
                </x-jet-secondary-button>

                <x-jet-danger-button wire:click="update" wire:loading.attr="disabled" wire:target="save, image">
                    Modificar foto
                </x-jet-danger-button>


        </x-slot>

    </x-jet-dialog-modal>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</div>
