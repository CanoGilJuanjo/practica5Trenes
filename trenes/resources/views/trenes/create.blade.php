<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Nuevo tren</title>
    </head>
    <body>
        <form action="{{route("trenes.store")}}" method="post">
            @csrf
            <label>Nombre del tren:</label>
            <input type="text" name="name" id=""><br><br>
            <label >Numero pasajeros</label>
            <input type="text" name="passengers" id=""><br><br>
            <label for="">Año</label>
            <input type="number" name="year"><br><br>
            <select name="typeTrain" id="">
                <option value="1" selected>Cercanias</option>
                <option value="2">Media Distancia</option>
                <option value="3">Alta Velocidad</option>
            </select>
            <input type="submit" value="crear">
        </form>
    </body>
</html>