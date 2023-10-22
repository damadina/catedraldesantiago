<x-editor-layout>
    <x-slot name="elemento">
        {{$elemento->slug}}
    </x-slot>

    <h1 class="text-2xl font-bold">Textos del elemento</h1>
                        <hr class="mt-2 mb-6">


        {!! Form::model($elemento, ['route' => ['editor.catedrals.update', $elemento], 'method' => 'put', 'files'  => true]) !!}
            @include('editor.catedral.partials.form')

            <div class="flex justify-end">
                {!! Form::submit('Actualizar información', ['class' => 'btn btn-primary cursor-pointer']) !!}
            </div>
        {!! Form::close() !!}


    <x-slot name="js">
        <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
        <script src="{{asset('js/editor/catedral/form.js')}}"></script>
    </x-slot>
</x-editor-layout>
