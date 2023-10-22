<section class="mt-4">

    @auth
        <article class="mb-4">
                @can('valued', $elemento)
                    <textarea wire:model='comment' class="form-input mb-2"  rows="3" placeholder="Escriba un comentario"></textarea>
                    <div class="flex items-center">
                        <button wire:click="store" class="btn btn-primary mr-2">Guardar</button>

                        <ul class="flex">
                            <li class="mr-1 cursor-pointer" wire:click="$set('rating',1)">
                                <i class="fas fa-star text-{{$rating >=1 ? 'yellow' : 'gray'}}-400"></i>
                            </li>
                            <li class="mr-1 cursor-pointer" wire:click="$set('rating',2)">
                                <i class="fas fa-star text-{{$rating >=2 ? 'yellow' : 'gray'}}-400"></i>
                            </li>
                            <li class="mr-1 cursor-pointer" wire:click="$set('rating',3)">
                                <i class="fas fa-star text-{{$rating >=3 ? 'yellow' : 'gray'}}-400"></i>
                            </li>
                            <li class="mr-1 cursor-pointer" wire:click="$set('rating',4)">
                                <i class="fas fa-star text-{{$rating >=4 ? 'yellow' : 'gray'}}-400"></i>
                            </li>
                            <li class="mr-1 cursor-pointer" wire:click="$set('rating',5)">
                                <i class="fas fa-star text-{{$rating >=5 ? 'yellow' : 'gray'}}-400"></i>
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="flex p-4 mb-4 text-sm text-white bg-pink-800 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                        <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <div>
                        <span class="font-medium">Usted ya ha realizado una valoración</span>
                        </div>
                    </div>
                @endcan

        </article>
    @else
        <div class="flex p-4 mb-4 text-sm text-gray-700 bg-gray-200 rounded-lg dark:bg-red-200 dark:text-red-800"
        role="alert">
            <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <div>
                <span class="font-medium">Para comentar debes registrate</span>
            </div>
        </div>
    @endauth



    <div class="card">
        <div class="card-body">
            <p class="text-gray-800 text-xl">{{$elemento->comentarios->count()}} comentarios</p>
            @foreach ($elemento->comentarios->reverse() as $comentario)
                <article class="flex mb-4 text-gray-800">
                    <figure class="mr-4">
                        <img class="h-12 w-12 object-cover rounded-full shadow-lg" src="{{$comentario->user->profile_photo_url}}" alt="">
                    </figure>
                    <div class="card flex-1">
                        <div class="card-body bg-gray-100">
                            <p class="p-2"><b>{{$comentario->user->name}}</b><i class="fas fa-star text-yellow-300"></i>({{$comentario->rating}})</p>
                            <div class="flex">
                               <p class="flex-1 px-2">{{$comentario->comment}}</p>
                                @auth
                                    @if(Auth::user()->id == $comentario->user_id)
                                            <button wire:click="$emit('deleteComentario',{{$comentario->id}})" class="btn btn-danger">Eliminar</button>
                                        @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
