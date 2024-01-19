<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Billetes</title>
        <style>
            body{
                background-color: #6B656E;
                color: white;
            }
            td{
                text-align: center;
            }
            th,td{
                border: 1px solid white;
                padding: 5px;
            }
            tr:hover{
                background-color: black;
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

            ul{
                display: flex;
                flex-flow: row wrap;
                border: 1px solid white;
                border-radius: 15px;
                justify-content: center;
                width: fit-content
                
            }
            a{
                margin: 10px;
                text-decoration: none;
                list-style: none;
                color: white;
                border: 1px solid white;
                padding: 10px;
                border-radius: 5px;
                transition: all 0.3s;
            }
            a:hover{
                background-color: #a399a8;
            }
        </style>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <a href="{{route("trenes.index")}}"><li>Trenes registrados</li></a>
                    <a href="{{route("tickets.index")}}"><li>Billetes registrados</li></a>
                    <a href="{{route("tipostrenes.index")}}"><li>Tipos de trenes registrados</li></a>
                    <a href="{{route("tipostickets.index")}}"><li>Tipos de billetes registrados</li></a>
                </ul>
            </nav>
        </header>
        <h1>Lista de billetes registrados</h1>
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