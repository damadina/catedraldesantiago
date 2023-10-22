<div>
    <x-jet-danger-button wire:click="$set('open',true)">
        Nuevo video
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name='title'>
            Añadir nuevo video
        </x-slot>

        <x-slot name='content'>


            <div class="mb-4">
                <x-jet-label value="Titulo" />
                <textarea class="form-control w-full" rows="2" wire:model.defer="titulo"></textarea>
                <x-jet-input-error for='titulo'/>
            </div>

            <div class="mb-4">
                <x-jet-label value="Url" />
                <textarea class="form-control w-full" rows="2" wire:model.defer="url"></textarea>
                <x-jet-input-error for='url'/>
            </div>

            <div class="mb-4">
                <x-jet-label value="HTML" />
                <textarea class="form-control w-full" rows="2" wire:model.defer="videohtml"></textarea>
                <x-jet-input-error for='videohtml'/>
            </div>

            <div class="mb-4">
                <x-jet-label value="Orden" />
                <x-jet-input type="number" class="w-24" wire:model.defer="orden" />
                <x-jet-input-error for='orden'/>
            </div>



        </x-slot>
        <x-slot name='footer'>
            <x-jet-secondary-button wire:click="cancelar"  >
                Cancelar
            </x-jet-secondary-button>

            <x-jet-danger-button wire:click="save" wire:loading.attr="disabled" wire:target="save">
                Añadir video
            </x-jet-danger-button>


        </x-slot>

    </x-jet-dialog-modal>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</div>
