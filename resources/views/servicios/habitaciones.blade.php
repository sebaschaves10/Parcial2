@extends('layout.master')
@section('content')

<body background="{{url('img/fondo.jpg')}}">
    <!--Carousel Wrapper-->
    <div class="container" align="center">
        <h1 style="color: white"> HABITACIONES </h1>
        <h5 style="color: white"><br>Encuentra los mejores destinos turísticos en Colombia y en el mundo con una variedad de hoteles y resorts todo incluido</h5>
        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">

            <div style="color: white; background: rgba(5, 5, 5, 0.349)">
                <div class="container" name="buscar" style="color: black">
                    <h3 align="center" style="color: white;"> LISTADO </h3>
                    <div class="row">
                        @foreach($habitacion as $p)
                        <div class="col-md-4">
                            <div class="card" style="width: 15rem;">
                                <img src='{{url("/img/img/$p->foto")}}' class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"> {{ $p->Tipo}} </h5>
                                    <p class="card-text" align="justify"> Número de Habitación: {{$p->Numero}} </p>
                                    <p class="card-text" align="justify"> Descripción: {{$p->descripcion}} </p>
                                    <p class="card-text" align="justify">Número de camas: {{$p->numCamas}} </p>
                                    <p class="card-text" align="justify">Precio: {{$p->precio}} </p>
                                    <a href="{{url('/reservas')}}" class="btn btn-primary">Reservar</a><br><br>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <br><br>
                        <div class="col-md-12" align="center">
                            <a href="{{url('/')}}" class="btn btn-secondary">Regresar</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.Carousel Wrapper-->
        </div>
</body>
@stop