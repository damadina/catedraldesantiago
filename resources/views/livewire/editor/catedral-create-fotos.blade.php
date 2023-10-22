<div>
    <x-jet-danger-button wire:click="$set('open',true)">
        Nueva Foto
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name='title'>
            Añadir nueva foto Horizontal (1280X700) Vertical ()
        </x-slot>

        <x-slot name='content'>
            <div wire:loading wire:target="image" class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Cargando imagen</strong>
                <span class="block sm:inline">Aguarde un monmento</span>
            </div>

            @if($image)
                <img class="mb-4" src="{{$image->temporaryUrl()}}" alt="">
            @endif
            <div class="mb-4">
                <x-jet-label value="Pie de foto" />
                <textarea class="form-control w-full" rows="2" wire:model.defer="piefoto"></textarea>
                <x-jet-input-error for='piefoto'/>
            </div>

            <div class="mb-4">
                <x-jet-label value="Keywords" />
                <textarea class="form-control w-full" rows="2" wire:model.defer="keywords"></textarea>
                <x-jet-input-error for='keywords'/>
            </div>

            <div class="mb-4">
                <x-jet-label value="alt de imagen" />
                <x-jet-input type="text" class="w-full" wire:model.defer="alt" />
                <x-jet-input-error for='alt'/>
            </div>

            <div class="mb-4">
                <x-jet-label value="Orden" />
                <x-jet-input type="number" class="w-24" wire:model.defer="orden" />
                <x-jet-input-error for='orden'/>
            </div>

            {{-- <div class="mb-4">
                <x-jet-label value="Vertical" />
                <x-jet-input type="checkbox" class="" wire:model.defer="isvertical" />
                <x-jet-input-error for='isvertical'/>
            </div>
 --}}
            <div>
                <input type="file" wire:model='image' id="{{$identificador}}"/>
                <x-jet-input-error for='image'/>
            </div>
            @php
                $isPortico = false;
                if($elemento->name == "Pórtico de la Gloria") {
                    $isPortico = true;
                }
            @endphp

            @if($isPortico)
                <p class="pt-4">1-100 Cripta</p>
                <p>101-300 Pórtico</p>
                <p>301-xxx Tribuna</p>
            @endif

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
