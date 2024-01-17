<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trenes disponibles</title>
    </head>
    <body>
        <h1>Lista de trenes registrados</h1>
        <ul>
            @foreach ($trenes as $tren)
                <li> {{$tren->name}} </li>
            @endforeach
        </ul>
    </body>
</html>