@extends('layout.master')
@section('content')


<body background="{{url('img/fondo.jpg')}}">
  <!--Carousel Wrapper-->
  <div class="container" align="center">
    <h1 style="color: white"> CLIENTES </h1>
    <h3 class="card-title font-weight-bold" align="center" style="color: white;"><a></a></h3>
    <div style="color: white; background: rgba(5, 5, 5, 0.349)">

      <!--/.Carousel Wrapper-->
      <h3 align="center" style="color: white;"> LISTADO </h3>
      <div class="form-row" style="color: white;">
        <table class="table" style="color: white;">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">DNI</th>
              <th scope="col">Nombres </th>
              <th scope="col">Genero </th>
              <th scope="col">Domilio </th>
              <th scope="col">Telefono </th>
              <th scope="col">Foto </th>
            </tr>
          </thead>
          <tbody>
            @foreach($clientes as $c)

            <tr>
              <td> {{ $c->id }} </td>
              <td> {{ $c->DNI }} </td>
              <td> {{ $c->nombres }} </td>
              <td> {{ $c->genero }}</td>
              <td> {{ $c->Domicilio }} </td>
              <td> {{ $c->Telefono }}</td>
              <td> <img src='{{url("/img/img/$c->foto")}}' height="50" width="50" alt="..."> </td>

            </tr>

            @endforeach
          </tbody>
        </table 
      </div>
    </div>
  </div>
</body>
@stop 