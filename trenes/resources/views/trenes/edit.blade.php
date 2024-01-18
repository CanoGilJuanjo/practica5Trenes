<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar tren</title>
    </head>
    <body>
        <form action="{{route("trenes.update",["tren"=>$trenes->id])}}" method="post">
            @csrf
            {{method_field("PUT")}}
            <label>Nombre del tren:</label>
            <input type="text" name="name" id="" value="{{$trenes -> name}}"><br><br>
            <label >Numero pasajeros</label>
            <input type="number" name="passengers" id="" value="{{$trenes -> passengers}}"><br><br>
            <label for="">Año</label>
            <input type="number" name="year" value="{{$trenes -> year}}"><br><br>
            <label >Tipo de tren</label>
            <select name="typeTrain" id="">
                @php
                    if($trenes->type_train_id == 1){
                        echo "<option value='1' selected>Cercanias</option>";
                        echo "<option value='2' >Media Distancia</option>";
                        echo "<option value='3' >Alta Velocidad</option>";
                    }else if($trenes->type_train_id == 2){
                        echo "<option value='1' >Cercanias</option>";
                        echo "<option value='2' selected>Media Distancia</option>";
                        echo "<option value='3' >Alta Velocidad</option>";
                    }else if($trenes->type_train_id == 3){
                        echo "<option value='1' >Cercanias</option>";
                        echo "<option value='2' >Media Distancia</option>";
                        echo "<option value='3' selected>Alta Velocidad</option>";
                    }
                @endphp
            </select>
            <input type="submit" value="editar">
        </form>
    </body>
</html>