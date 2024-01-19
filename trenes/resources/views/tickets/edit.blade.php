<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar ticket</title>
        <style>
            body{
                background-color: #6B656E;
                color: white;
            }
        </style>
    </head>
    <body>
        <form action="{{route("tickets.update",["ticket"=>$tickets->id])}}" method="post">
            @csrf
            {{method_field("PUT")}}
            <label>Fecha del billete</label>
            <input type="text" name="date" id="" value="{{$tickets -> date}}"><br><br>
            <label >Precio</label>
            <input type="number" name="price" id="" value="{{$tickets -> price}}"><br><br>
            <label for="">Nombre del tren</label>
            <select name="train_id" id="">
                @foreach ($trenes as $tren)
                    @if ($tickets->train_id == $tren->id)
                        <option value="{{$tren->id}}" selected>{{$tren->name}}</option>
                    @else
                        <option value="{{$tren->id}}">{{$tren->name}}</option>    
                    @endif
                @endforeach
            </select>
            <br>
            <br>
            <label >Tipo de billete</label>
            <select name="ticket_type_id" id="">
                @foreach ($ticketType as $tipo)
                    @if ($tipo->id == $tickets->ticket_type_id)
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