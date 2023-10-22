<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <form action="/show" method="POST">
    @csrf
    <div class="container pt-20 border-r-red-400">
        <textarea id="editor">This is some sample content.</textarea>
    </div>
    </form>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                ckfinder:{
                    uploadUrl: '{{route('uploadImage'). '?_token='.csrf_token()}}'
                }
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>

</body>
</html>
