<x-editor-layout>
    <x-slot name="elemento">
        {{$elemento->slug}}
    </x-slot>
    @livewire('editor.catedral-index-fotos', ['elemento' => $elemento])

    @push('js')
        {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
        <script>
            Livewire.on('deleteFotoSwalert', fotoId => {
                Swal.fire({
                    title: 'Esta seguro?',
                    text: "Vas ha eliminar la foto",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'SI'
                }).then((result) => {
                    if (result.isConfirmed) {
                        console.log("En live");
                        Livewire.emitTo('editor.catedral-index-fotos', 'deleteFoto', fotoId);
                        Swal.fire(
                            'Borrado!',
                            'La foto ha sido borrada.',
                            'success'
                        )
                    }
                })
            })
        </script>
    @endpush

</x-editor-layout>

