@extends('layout.master')
@section('content')



<body background="{{url('img/fondo.jpg')}}">
    <div class="container" align="center">
        <h1 style="color: white"> CONSULTA (a) </h1>
        <h3 class="card-title font-weight-bold" align="center" style="color: white;"><a></a></h3>
        <div style="color: white; background: rgba(5, 5, 5, 0.349)">
            <h3 align="center" style="color: white;"> LISTADO </h3>
            <div class="form-row" style="color: white;">
                <table class="table" style="color: white;">
                    <thead>
                        <tr>
                            <th scope="col"># Factura</th>
                            <th scope="col">Numero Habitacion</th>
                            <th scope="col">id precio </th>
                            <th scope="col">Tipo </th>
                            <th scope="col">Precio</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($facturas as $c)

                        <tr>
                            <td> {{ $c->CodigoF }} </td>
                            <td> {{ $c->Numero }} </td>
                            <td> {{ $c->id }} </td>
                            <td> {{ $c->Tipo }}</td>

                            <td> {{ $c->precio }} </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table 
            </div>
        </div>
    </div>
    <br><br>
    <br><br>
</body>
@stop