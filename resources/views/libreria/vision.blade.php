@extends('layout.master')
@section('content')

<body background="{{url('img/fondo.jpg')}}">
    <div class="container">
        <!-- Card deck -->
        <div class="card-deck">

            <!-- Card -->
            <div class="card mb-4">

                <!--Card image-->
                <div class="view overlay">
                    <img class="card-img-top" src="{{ url('/imagenes/1.png') }}" alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body">

                    <!--Title-->
                    <h4 class="card-title">Misión</h4>
                    <!--Text-->
                    <p class="card-text">Trama es una empresa dedicada a la venta de libros. Abrimos en el año 1997 y desde el primer momento tuvimos claro que en Lugo había espacio para una librería de fondo; un lugar en el que el lector pudiese buscar y, sobre todo, encontrar esos libros que deben estar en las estanterías. Además en nuestra intención está hacer la vida más agradable a las personas que entran en Trama, tratando de atenderlas lo mejor posible y de darles el mejor servicio.

                        La librería está ubicada muy cerca de la Muralla romana de Lugo, en el número 21 de la Avenida de A Coruña, dentro de unas galerías comerciales; estamos algo escondidos pero así acercarse hasta aquí tiene su aquel.</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->

                </div>

            </div>
            <!-- Card -->

            <!-- Card -->
            <div class="card mb-4">

                <!--Card image-->
                <div class="view overlay">
                    <img class="card-img-top" src="{{ url('/imagenes/2.jpg') }}" height="320" alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body">

                    <!--Title-->
                    <h4 class="card-title">Visión</h4>
                    <!--Text-->
                    <p class="card-text">Nuestro proyecto busca consolidarse como una librería de referencia en Lugo y, desde aquí, abrirnos al resto del mundo aprovechando las herramientas de las que disponemos (redes sociales, página web, etc…). En el futuro queremos seguir realizando las mismas actividades culturales alrededor del libro que hasta ahora y ampliarlas con otras como clubes de lectura, talleres, etc.</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->

                </div>

            </div>
        </div>
    </div>
    <!-- Card deck -->
</body>

@stop