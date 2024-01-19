<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ver billete</title>
    </head>
    <body>
        <p>Fecha del billete: {{$tickets -> date}}</p>
        <p>Precio del billete: {{$tickets -> price }}</p>
        <p>Nombre del tren: {{$tickets -> train -> name}}</p>
        <p>Tipo de billete: {{$tickets -> ticketType -> type}}</p>
        <a href="{{route("tickets.index")}}"><button>Volver</button></a>
    </body>
</html>