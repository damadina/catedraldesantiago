<x-editor-layout>
    <x-slot name="elemento">
        {{$elemento->slug}}
    </x-slot>
    @livewire('editor.catedral-index-videos', ['elemento' => $elemento])

    @push('js')
        {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
        <script>
            Livewire.on('deleteVideoSwalert', videoId => {
                Swal.fire({
                    title: 'Esta seguro?',
                    text: "Vas ha eliminar el video",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'SI'
                }).then((result) => {
                    if (result.isConfirmed) {
                        console.log("En live");
                        Livewire.emitTo('editor.catedral-index-videos', 'deleteVideo', videoId);
                        Swal.fire(
                            'Borrado!',
                            'El video ha sido borrada.',
                            'success'
                        )
                    }
                })
            })
        </script>
    @endpush

</x-editor-layout>


