<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Correo electrónico</h1>
    <p><strong>Nombre: </strong>{{$correo['name']}}</p>
    <p><strong>Correo: </strong>{{$correo['email']}}</p>
    <hr>
    <p><strong>Mensaje</strong></p>
    <p>{{$correo['mensaje']}}</p>

</body>
</html>
