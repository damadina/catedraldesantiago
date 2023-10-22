<x-app-layout>

    <div class="container py-8">
    <div class="card">
        <div class="card-body">
            <h1 class="text-2xl text-bold">Crear nuevo elemento</h1>
            <hr class="mt2 mb-6">
            {!! Form::open(['route' => 'editor.catedrals.store','files' => true, 'autocomplete' => 'off']) !!}
            @include('editor.catedral.partials.form')
            <div class="flex justify-end">
                <a class ="btn btn-danger mr-6" href="{{ route('editor.catedrals.index')}}">Cancelar</a>
                {!! Form::submit('Crear elemento', ['class' => 'btn btn-primary cursor-pointer']) !!}

            </div>
           {!! Form::close() !!}

        </div>
    </div>


</div>
<x-slot name="js">
    <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
    <script src="{{asset('js/editor/catedral/form.js')}}"></script>
</x-slot>
</x-app-layout>
