<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tipos de tickets disponibles</title>
        <style>
            td{
                text-align: center;
            }
            th,td{
                border: 1px solid black;
                padding: 5px;
            }
            tr:hover{
                background-color: grey;
                color: white;
            }
            tr{
                transition: all 0.3s;
            }
            input{
                transition: all 0.25s;
            }
            input[value="👁️‍🗨️"]:hover{
                background-color: aqua;
            }
            input[value="🗑️"]:hover{
                background-color: red;
            }
            input[value="📝"]:hover{
                background-color: orange;
            }
            input[value="♨️Crear"]:hover{
                background-color: green;
                color:white;
            }
        </style>
    </head>
    <body>
        <h1>Lista de tipos de billetes registrados</h1>
        <table>
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tipos as $tipo)
                    <tr>
                        <td>{{$tipo->type}}</td>
                        <td>
                            <form action="{{route("tipostickets.show",["tiposticket"=> $tipo->id])}}" method ="get">                                
                                <input type="submit" value="👁️‍🗨️">
                            </form>
                        </td>
                        <td>
                            <form action="{{route("tipostickets.edit",["tiposticket"=> $tipo->id])}}" method = "get">                                
                                <input type="submit" value="📝">
                            </form>
                        </td>
                        <td>
                            <form action="{{route("tipostickets.destroy",["tiposticket"=> $tipo->id])}}" method = "post">
                                @csrf
                                {{method_field("DELETE")}}
                                <input type="submit" value="🗑️">
                            </form>
                        </td>
                    </tr>
                @endforeach
                <form action="{{route("tipostickets.create")}}" method="get">
                    <input type="submit" value="♨️Crear">
                </form>
            </tbody>
        </table>
    </body>
</html>