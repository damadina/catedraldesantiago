<div>
    <x-jet-danger-button wire:click="$set('open',true)">
        Nueva Question
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name='title'>
            Añadir nueva Question
        </x-slot>

        <x-slot name='content'>

            <div class="mb-4">
                <x-jet-label value="Titulo" />
                <textarea class="form-control w-full" rows="2" wire:model.defer="titulo"></textarea>
                <x-jet-input-error for='titulo'/>
            </div>

            <div class="mb-4">
                <x-jet-label value="Respuesta" />
                <textarea class="form-control w-full" rows="2" wire:model.defer="respuesta"></textarea>
                <x-jet-input-error for='respuesta'/>
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
                Añadir Question
            </x-jet-danger-button>


        </x-slot>

    </x-jet-dialog-modal>

</div>
