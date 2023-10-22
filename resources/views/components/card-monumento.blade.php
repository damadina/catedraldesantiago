<div class="mt-8 w-full lg:max-w-full lg:flex">

    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('{{asset('storage/portadascard').'/'.$item->urlPortada}}'); background-position: center; " title="Woman holding a mug">
    </div>
    <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
      <div class="mb-8">
        @php
            $texto = $item->resumen;
            $texto = str_replace('<p>', '', $texto);
            $texto = str_replace('</p>', '<br />' , $texto);
            $coordenadas=explode("#", $item->prefijoH1);

        @endphp
        <h2 class="text-gray-900 text-left font-bold text-xl mb-2">{{$item->name}}</h2>

        <div class="pt-2">
            <a href="https://www.google.com/maps/search/?api=1&query={{$coordenadas[0]}},{{$coordenadas[1]}}" target="_blank" class="inline-block bg-gray-200 rounded-full px-3 text-sm font-semibold text-gray-700 mr-2 mb-2">
                Ver en Google Maps
            </a>
            <span class="inline-block bg-gray-200 rounded-full px-3 text-sm font-semibold text-gray-700 mr-2 mb-2">Fotografías</span>
            </div>


        <div class="text-gray-700 text-xl line-clamp-2 hover:line-clamp-none leading-relaxed">{!!$texto!!}</div>

      </div>

    </div>
  </div>

