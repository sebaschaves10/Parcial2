@extends('layout.master')
@section('content')

<body background="{{url('img/fondo.jpg')}}">
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" src="{{ url('/imagenes/4.jpg') }}" height="250" alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">HISTORIA</h3>
                </div>
            </div>
        </div>
    </div>

    <div>

        <article align="center">
            <div class="wrapper row3" style="background-color: #ded3d39c;">

                <main class="hoc container clear">
                    <div class="container">
                        <p>La Libreria Nacional es en la actualidad una de las librerías más antiguas y tradicionales de Bogotá. 
                        Fue en sus orígenes la Librería Jurídica, un local ubicado en la calle 14, empresa adquirida en 1958 por Salomón Lerner, gestor y fundador de la Librería Lerner. Desde entonces se ha consolidado como un referente cultural con énfasis en el libro académico y universitario, y se ha fortalecido a través de los años con una vasta oferta bibliográfica en el campo de las ciencias sociales y humanas y los libros colombianos. .

Desde 1958, la Librería Lerner ha crecido para atender a los lectores colombianos con la más amplia diversidad libresca, un catálogo en el que pueden contarse cerca de 80.000 títulos en todas las ramas del saber. Desde las aperturas del local de la avenida Jiménez a finales de la década del sesenta y el de la calle 92 en la década de los noventa, los espacios ofrecidos por la Lerner se han convertido en focos de fomento de la lectura y el amor por los libros.

A mediados de 2016, la sede Norte se trasladó a un nuevo local en la carrera 11 con calle 93 con el propósito de convertirse
                        </p>
                    </div>
                </main>
            </div>
        </article>
    </div>
</body>

@stop