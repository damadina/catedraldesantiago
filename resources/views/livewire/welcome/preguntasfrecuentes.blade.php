<div>
    {{-- <x-jet-danger-button class="bg-transparent font-bold text-catedral hover:bg-catedral hover:text-white" wire:click="$set('open',true)">
        Preguntas Frecuentes
    </x-jet-danger-button>
 --}}

    <div class="shadow-md mt-5">
        <div class="tab w-full overflow-hidden border-t">
           <button class="block text-base font-semibold md:text-xl p-2 leading-normal cursor-pointer" wire:click="$set('open',true)" >Preguntas frecuentes</button>

         </div>
     </div>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name='title'>
            Preguntas frecuentes
        </x-slot>

        <x-slot name='content'>
            @foreach ($questions as $item )
                @php
                    $newindex = $loop->index + 200;
                @endphp
            <x-question-modal :question='$item' :idquestion='$newindex' />
            @endforeach
        </x-slot>
        <x-slot name='footer'>
            <x-jet-secondary-button wire:click="cancelar"  >
                Cancelar
            </x-jet-secondary-button>

        </x-slot>

    </x-jet-dialog-modal>


</div>

