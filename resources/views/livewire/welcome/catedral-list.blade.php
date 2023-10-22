<div>
    <x-jet-danger-button wire:click="$set('open',true)">
        Fachadas
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name='title'>
            Exterior de la Catedral de Santiago
        </x-slot>

        <x-slot name='content'>
            @foreach ($elementos as $item )
            <p>{!!$item->name!!}</p>
            @endforeach
        </x-slot>
        <x-slot name='footer'>
            <x-jet-secondary-button wire:click="cancelar"  >
                Cancelar
            </x-jet-secondary-button>

            <x-jet-danger-button wire:click="save" wire:loading.attr="disabled" wire:target="save, image">
                Añadir foto
            </x-jet-danger-button>


        </x-slot>

    </x-jet-dialog-modal>


</div>

