<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ver tren</title>
    </head>
    <body>
        <p>Tipo de tren: {{$tipos -> type}}</p>
        <a href="{{route("tipostrenes.index")}}"><button>Volver</button></a>
    </body>
</html>