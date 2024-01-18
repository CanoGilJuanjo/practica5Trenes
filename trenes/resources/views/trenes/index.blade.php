<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trenes disponibles</title>
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
        </style>
    </head>
    <body>
        <h1>Lista de trenes registrados</h1>
        <table>
            <thead>
                <tr>
                    <th>Nombre del tren</th>
                    <th>Numero pasajeros</th>
                    <th>Año</th>
                    <th>Tipo de tren</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trenes as $tren)
                    <tr>
                        <td>{{$tren->name}}</td>
                        <td>{{$tren->passengers}}</td>
                        <td>{{$tren->year}}</td>
                        <td>{{$tren->trainType->type}}</td>
                        <td>
                            <form action="{{route("trenes.show",["trenes"=> $tren->id])}}" method ="get">
                                <input type="submit" value="🧿">
                            </form>
                        </td>
                        <td>
                            <form action="{{route("trenes.edit",["trenes"=> $tren->id])}}" method = "get">
                                <input type="submit" value="📝">
                            </form>
                        </td>
                        <td>
                            <form action="{{route("trenes.destroy",["trenes"=> $tren->id])}}" method = "post">
                                @csrf
                                {{method_field("DELETE")}}
                                <input type="submit" value="🗑️">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>