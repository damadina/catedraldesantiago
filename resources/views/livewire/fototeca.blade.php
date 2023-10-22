<div>
    <div class="bg-gray-200 py-4">
        <div class="container ml-2 my-3">
                    <select wire:model="elementoSeleccionado"
                        wire:loading.class="animate-pulse cursor-wait"
                        wire:target="selectedTipoTrabajo"
                        class="select-nuevo cursor-pointer text-xl rounded-sm">
                            <option value="Todas las Fotografías">Todas las Fotografías</option>

                            @foreach ($elementos as $item)
                                <option value="{{ $item->id}}">{{ $item->name }}</option>
                            @endforeach
                    </select>
        </div>
    </div>

    <div class="container flex flex-wrap gap-2 justify-center max-w-1xl mx-auto pt-6 ">
        @forelse ($fotos as $item)
            <a data-fancybox="gallery" href="{{asset('storage/fotos/'.$item->catedral_id.'/original/'.$item->url)}}" data-caption="{{$item->piefoto}}">
                <img loading="lazy" class=" rounded" src="{{asset('storage/fotos/'.$item->catedral_id.'/thumbnail/'.$item->url)}}" alt="{{$item->piefoto}}" />

            </a>
        @empty
        <div class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
            No hemos encontardo ninguna fotografía

        </div>
        @endforelse
    </div>
    <div class="container px-auto py-16">
        {{$fotos->links()}}
    </div>

</div>
