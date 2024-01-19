<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar tren</title>
    </head>
    <body>
        <form action="{{route("tipostrenes.update",["tipostrene"=>$tipos->id])}}" method="post">
            @csrf
            {{method_field("PUT")}}
            <label>Tipo de tren:</label>
            <input type="text" name="type" id="" value="{{$tipos -> type}}"><br><br>
            <input type="submit" value="editar">
        </form>
    </body>
</html>