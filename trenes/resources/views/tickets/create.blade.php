<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Nuevo billete</title>
    </head>
    <body>
        <form action="{{route("tickets.store")}}" method="post">
            @csrf
            <label>Fecha</label>
            <input type="date" name="date" id=""><br><br>
            <label >Precio</label>
            <input type="number" name="price" id=""><br><br>
            <label for="">Tipo de billete</label>
            <select name="ticket_type_id" id="">
                @foreach ($ticketType as $tipo)
                    <option value="{{$tipo->id}}">{{$tipo->type}}</option>
                @endforeach
            </select>
            <br>
            <label for="">Nombre del tren al que pertenece</label>
            <select name="train_id" id="">
                @foreach ($trenes as $tren)
                    <option value="{{$tren->id}}">{{$tren->name}}</option>
                @endforeach
            </select>
            <input type="submit" value="crear">
        </form>
    </body>
</html>