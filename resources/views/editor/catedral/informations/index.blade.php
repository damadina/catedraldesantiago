<x-editor-layout>
    <x-slot name="elemento">
        {{$elemento->slug}}
    </x-slot>
    @livewire('editor.catedral-index-informations', ['elemento' => $elemento])

    @push('js')
        {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
        <script>
            Livewire.on('deleteQuestionSwalert', informationId => {
                Swal.fire({
                    title: 'Esta seguro?',
                    text: "Vas ha eliminar el Question",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'SI'
                }).then((result) => {
                    if (result.isConfirmed) {
                        console.log("En live");
                        Livewire.emitTo('editor.catedral-index-informations', 'deleteInformation', informationId);
                        Swal.fire(
                            'Borrado!',
                            'La información ha sido borrada.',
                            'success'
                        )
                    }
                })
            })
        </script>






    @endpush


</x-editor-layout>


