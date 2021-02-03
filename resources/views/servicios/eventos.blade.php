@extends('layout.master')
@section('content')

<body background="{{url('img/fondo.jpg')}}">
    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" src="{{ url('/imagenes/13.jpg') }}" height="250" alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">EVENTOS: {{ $id }}</h3>
                </div>
            </div>
        </div>
        <div class="container" align="center" align="center">
            <h5 style="color: white;"><br>Programa tus eventos mas importantes y haz que sean inolvidables</h5>
            <img src="{{url('img/calendario.png')}}" height="100">
        </div>
    </div>
    <br>
    <!--/.Carousel Wrapper-->
</body>
@stop