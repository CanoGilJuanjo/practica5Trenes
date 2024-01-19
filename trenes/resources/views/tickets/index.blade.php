<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Billetes</title>
        <style>
            table{
                text-align: center;
            }
            td,th{
                border: 1px solid black;
                padding: 5px;
            }
            tr{
                transition: all 0.3s;
            }
            tr:hover{
                background-color: grey;
                color: white;
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
        <h1>Billetes registrados</h1>
        <table>
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Precio</th>
                    <th>Nombre del tren</th>
                    <th>Tipo de billete</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tickets as $ticket)
                    <tr>
                        <td>{{$ticket->date}}</td>
                        <td>{{$ticket->price}}</td>
                        <td>{{$ticket->train->name}}</td>
                        <td>{{$ticket->ticketType->type}}</td>
                        <td>
                            <form action="{{route("tickets.show",["ticket"=> $ticket->id])}}" method ="get">
                                <input type="submit" value="👁️‍🗨️">
                            </form>
                        </td>
                        <td>
                            <form action="{{route("tickets.edit",["ticket"=> $ticket->id])}}" method = "get">
                                <input type="submit" value="📝">
                            </form>
                        </td>
                        <td>
                            <form action="{{route("tickets.destroy",["ticket"=> $ticket->id])}}" method = "post">
                                @csrf
                                {{method_field("DELETE")}}
                                <input type="submit" value="🗑️">
                            </form>
                        </td>
                    </tr>
                @endforeach
                <form action="{{route("tickets.create")}}" method="get">
                    <input type="submit" value="♨️Crear">
                </form>
            </tbody>
        </table>
    </body>
</html>