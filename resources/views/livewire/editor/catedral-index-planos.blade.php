<div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <div class="flex justify-end">
                        @livewire('editor.catedral-create-planos', ['elemento' => $elemento])
                    </div>
                    <h1 class="text-2xl font-bold mt-2 ml-2 mb-6">Planos de {{ $elemento->name }} </h1>
                    @if($planos->count())

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
                                @foreach ($planos as $item)
                                    <tr>
                                        <td class="px-6 py-4 ">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-20 w-20">

                                                    <img class="h-20 w-20 " src="{{ asset('storage/planos/'.$item->url) }}" alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">{{ $item->piePlano }}
                                                    </div>

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
                            No hemos encontrado ningún plano
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <x-jet-dialog-modal wire:model="open_edit">
        <x-slot name='title'>
            Modificar Plano
        </x-slot>

        <x-slot name='content'>
            <div wire:loading wire:target="image"
                class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Cargando imagen</strong>
                <span class="block sm:inline">Aguarde un monmento</span>
            </div>

            @if($plano)
                @if ($image)
                    <img class="mb-4" src="{{ $image->temporaryUrl() }}" alt="">
                @else
                    <img src="{{ asset('storage/planos/'.$plano->url) }}" alt="">
                @endif
            @endif

            <div class="mb-4">
                <x-jet-label value="Nombre  del Plano" />
                <x-jet-input disabled=true type="text" class="w-full" wire:model.defer="plano.url" />
                <x-jet-input-error for='plano.url' />
            </div>


            <div class="mb-4">
                <x-jet-label value="Pie de foto" />
                <textarea class="form-control w-full" rows="2" wire:model.defer="plano.piePlano"></textarea>
                <x-jet-input-error for='plano.piePlano' />
            </div>


            <div class="mb-4">
                <x-jet-label value="Orden" />
                <x-jet-input type="number" class="w-full" wire:model.defer="plano.orden" />
                <x-jet-input-error for='plano.orden' />
            </div>




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
                    Modificar plano
                </x-jet-danger-button>


        </x-slot>

    </x-jet-dialog-modal>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</div>

