<div class="mb-4">
    {!! Form::label('name','nombre del elemento') !!}
    {!! Form::text('name', null, ['class' =>'form-input block w-full mt-1'. ($errors->has('name') ? ' border-red-600' : '')]) !!}
    @error('name')
       <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>
<div class="mb-4">
    {!! Form::label('slug','slug del elemento') !!}
    {!! Form::text('slug', null, ['readonly'=>'readonly','class' =>'form-input block w-full mt-1'. ($errors->has('slug') ? ' border-red-600' : '') ]) !!}
    @error('slug')
       <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>
@isset($elemento->categoria)
    @php
        if($elemento->categoria == 21 or $elemento->categoria ==20) {
            $tipo ="monumento";
        } else {
            $tipo = "catedral";
        }
    @endphp
@endisset


<div class="form-group mb-4"> {{ Form::label('categoria' , 'Categoria') }}
    <br>

    @if ($tipo=='catedral')
        <div class="flex border border-gray-600 py-4 pl-4">
            <div class ="mr-4">
                <label> {{ Form::radio('categoria', '1', true, ['class'=>'with-gap']) }} <span>Fachadas</span> </label>
            </div>
            <div class="mr-4">
                <label> {{ Form::radio('categoria', '2', false, ['class'=>'with-gap']) }} <span>Capilla del interior</span> </label>
            </div>
            <div class="mr-4">
                <label> {{ Form::radio('categoria', '3', false, ['class'=>'with-gap']) }} <span>Otros elementos</span> </label>
            </div>
            <div class="mr-4">
                <label> {{ Form::radio('categoria', '4', false, ['class'=>'with-gap']) }} <span>Pórtico de la Gloria</span> </label>
            </div>
            <div class="mr-4">
                <label> {{ Form::radio('categoria', '5', false, ['class'=>'with-gap']) }} <span>Museo de la Catedral</span> </label>
            </div>
            <div class="mr-4 text-red-800 font-bold">
                <label> {{ Form::radio('categoria', '6', false, ['class'=>'with-gap']) }} <span>HOME</span> </label>
            </div>
            {{-- <div class="">
                <label> {{ Form::radio('categoria', '7', false, ['class'=>'with-gap']) }} <span>MOMUMENTO</span> </label>
            </div> --}}
        </div>
    @else
        <div class="flex border border-gray-600 py-4 pl-4">
            <div class ="mr-4">
                <label> {{ Form::radio('categoria', '21', true, ['class'=>'with-gap']) }} <span>Monumento</span> </label>
            </div>
            <div class ="mr-4">
                <label> {{ Form::radio('categoria', '20', true, ['class'=>'with-gap']) }} <span>HOME</span> </label>
            </div>
        </div>
    @endif
</div>

<div class="form-group mb-4"> {{ Form::label('status' , 'Estado post') }}
    <br>
    <div class="flex border border-gray-600 py-4 pl-4">
        <div class ="mr-4">
            <label> {{ Form::radio('status', '1', true, ['class'=>'with-gap']) }} <span>Borrador</span> </label>
        </div>
        <div class="mr-4">
            <label> {{ Form::radio('status', '2', false, ['class'=>'with-gap']) }} <span>Revision</span> </label>
        </div>
        <div class="mr-4">
            <label> {{ Form::radio('status', '3', false, ['class'=>'with-gap']) }} <span>Publicado</span> </label>
        </div>
    </div>
</div>

<div class="mb-4">
    {!! Form::label('orden','Orden') !!}
    {!! Form::number('orden', null, ['class' =>'block mt-1'. ($errors->has('orden') ? ' border-red-600' : '') ]) !!}
    @error('orden')
       <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>

<div class="mb-4">

    {!! Form::label('prefijoH1','Antes h1 / Coordenadas') !!}
    {!! Form::text('prefijoH1', null, ['class' =>'form-input block w-full mt-1'. ($errors->has('prefijoH1') ? ' border-red-600' : '') ]) !!}
    @error('prefijoH1')
       <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror

</div>



<div class="mb-4">
    {!! Form::label('mensaje','Mensaje de información') !!}
    {!! Form::textarea('mensaje', null, ['class' =>'form-input block w-full mt-1'. ($errors->has('mensaje') ? ' border-red-600' : '') ]) !!}
    @error('mensaje')
       <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror

</div>

<div class="mb-4">
    {!! Form::label('resumen','Resumen') !!}
    {!! Form::textarea('resumen', null, ['class' =>'form-input block w-full mt-1'. ($errors->has('resumen') ? ' border-red-600' : '') ]) !!}
    @error('resumen')
       <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror

</div>

<div class="mb-4">
    {!! Form::label('historia','Historia') !!}
    {!! Form::textarea('historia', null, ['class' =>'form-input block w-full mt-1'. ($errors->has('historia') ? ' border-red-600' : '') ]) !!}
    @error('historia')
       <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror

</div>



<h1 class="text-2xl font-bold mt-8 mb-2">Imagen de portada (950 x 600)</h1>
<div class="grid grid-cols-2 gap-4">
    <figure>
        @isset($elemento->urlPortada)
            <img id="picture" class="object-cover object-center" src="{{Storage::url('portadas/'.$elemento->urlPortada)}}" alt="">
        @else
            <img id="picture" class="object-cover object-center" src="{{ asset('images/NoFoto.png')}}" alt="">
        @endisset
    </figure>
    <div>
        {!! Form::file('file', ['class' => 'form-input w-full', 'id' => 'file']) !!}
    </div>
</div>


<div class="mb-4 mt-4">
    {!! Form::label('visitante','SEO Titulo') !!}
    {!! Form::textarea('visitante', null, ['class' =>'form-input block w-full mt-1 '. ($errors->has('visitante') ? ' border-red-600' : '') ]) !!}
    @error('visitante')
       <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror

</div>


<div class="mb-4">
    {!! Form::label('seoDescription','SEO Descripción') !!}
    {!! Form::textarea('seoDescription', null, ['class' =>'form-input block w-full mt-1'. ($errors->has('seoDescription') ? ' border-red-600' : '') ]) !!}
    @error('seoDescription')
       <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>



