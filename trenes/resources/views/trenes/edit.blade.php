<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar tren</title>
        <style>
            body{
                background-color: #6B656E;
                color: white;
            }
        </style>
    </head>
    <body>
        <form action="{{route("trenes.update",["trene"=>$trenes->id])}}" method="post">
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
               @foreach ($tiposTrenes as $tipo)
                    @if ($tipo->id == $trenes->train_id)
                        <option value="{{$tipo->id}}" selected>{{$tipo->type}}</option> 
                    @else
                        <option value="{{$tipo->id}}">{{$tipo->type}}</option>    
                    @endif
                @endforeach
            </select>
            <input type="submit" value="editar">
        </form>
    </body>
</html>