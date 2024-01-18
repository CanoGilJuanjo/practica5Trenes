<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ver tren</title>
    </head>
    <body>
        <p>Nombre del tren: {{$trenes -> name}}</p>
        <p>Numero pasajeros: {{$trenes -> passengers }}</p>
        <p>Año: {{$trenes -> year}}</p>
        <p>Tipo de tren: {{$trenes -> trainType -> type}}</p>
    </body>
</html>