<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar ticket</title>
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
                <!-- Buscar manera para hacerlo con un for -->
            </select>
            <label >Tipo de billete</label>
            <select name="typeTrain" id="">
                @php
                    if($tickets->type_ticket_id == 1){
                        echo "<option value='1' selected>Billete sencillo</option>";
                        echo "<option value='2' >Abono mensual</option>";
                        echo "<option value='3' >Abono trimestral</option>";
                    }else if($tickets->type_ticket_id == 2){
                        echo "<option value='1' >Billete sencillo</option>";
                        echo "<option value='2' selected>Abono mensual</option>";
                        echo "<option value='3' >Abono trimestral</option>";
                    }else if($tickets->type_ticket_id == 3){
                        echo "<option value='1' >Billete sencillo</option>";
                        echo "<option value='2' >Abono mensual</option>";
                        echo "<option value='3' selected>Abono trimestral</option>";
                    }
                @endphp
            </select>
            <input type="submit" value="editar">
        </form>
    </body>
</html>