@extends('adminlte::page')
@section('title', 'Catedral de Santiago')

@section('content_header')
    <h1>Documentos legales<h1>
@stop

@section('content')

    @if( session('info'))
        <div class="alert alert-primary" role="alert">
            <strong>OK. </strong> {{session('info')}}
        </div>

    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($documentos as $documento)
                        <tr>
                            <td>{{$documento->id}}</td>
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
                            <td>{{$literal}}</td>

                            <td width="10px">
                                <a class="btn btn-primary" href="{{route('admin.documentos.edit',$documento)}}">Edit</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">
                                    No hay ningun rol registrado
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

