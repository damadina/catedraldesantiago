@extends('adminlte::page')
@section('title', 'Catedral de Santiago')

@section('content_header')
@php
$literal="";
switch ($documento->tipo) {
    case 1:
        $literal= "INFORMACIÓN LEGAL";
        break;
    case 2:
        $literal= "POLÍTICA DE PRIVACIDAD";
        break;
    case 3:
        $literal= "POLÍTICA DE COOKIES";
        break;
}
@endphp


<h1>{{$literal}}</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($documento,['route' => ['admin.documentos.update',$documento], 'method' => 'put'])!!}

        <div class="from-group mb-4">
            {!! Form::label('texto', 'Texto: ') !!}

            {!! Form::textarea('texto', null, ['class' => 'form-control  w-full mt-1' . ($errors->has('texto') ? ' is-invalid':''), 'placeholder' => 'Introduce la introducción del elemento'  ]) !!}

            @error('name')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror

        </div>




        {!! Form::submit('Actualizar documento', ['class' => 'btn btn-primary mt-2'])!!}

        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
    <script src="{{asset('js/editor/catedral/admin.js')}}"></script>
@stop
