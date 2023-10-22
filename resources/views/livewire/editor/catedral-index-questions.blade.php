<div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <div class="flex justify-end">
                        @livewire('editor.catedral-create-questions', ['elemento' => $elemento])
                    </div>
                    <h1 class="text-2xl font-bold mt-2 ml-2 mb-6">Questions de {{ $elemento->name }} </h1>
                    @if($questions->count())

                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Pregunta
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
                                @foreach ($questions as $item)
                                    <tr>
                                        <td class="px-6 py-4 ">
                                            <div class="flex items-center">

                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">{{ $item->titulo }}
                                                    </div>

                                                </div>
                                            </div>
                                        </td>


                                        <td class="px-6 py-4 whitespace-nowrap text-xl text-gray-800">{{ $item->orden }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">

                                            <a class="btn btn-danger mr-4" wire:click="$emit('deleteQuestionSwalert',{{$item->id}})">
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
                            No hemos encontrado ninguna question
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <x-jet-dialog-modal wire:model="open_edit">
        <x-slot name='title'>
            Modificar Question
        </x-slot>

        <x-slot name='content'>


            <div class="mb-4">
                <x-jet-label value="Titulo  de la question" />
                <x-jet-input  type="text" class="w-full" wire:model.defer="question.titulo" />
                <x-jet-input-error for='question.titulo' />
            </div>


            <div class="mb-4">
                <x-jet-label value="Pregunta" />
                <textarea id="respuesta" class="form-control w-full" rows="2" wire:model.defer="question.respuesta"></textarea>
                <x-jet-input-error for='question.respuesta' />
            </div>


            <div class="mb-4">
                <x-jet-label value="Orden" />
                <x-jet-input type="number" class="w-full" wire:model.defer="question.orden" />
                <x-jet-input-error for='question.orden' />
            </div>


        </x-slot>
        <x-slot name='footer'>
            <x-jet-secondary-button wire:click=" cancelar">
                Cancelar
                </x-jet-secondary-button>

                <x-jet-danger-button wire:click="update" wire:loading.attr="disabled" wire:target="save, image">
                    Modificar question
                </x-jet-danger-button>


        </x-slot>

    </x-jet-dialog-modal>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</div>



