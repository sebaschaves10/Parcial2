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
                    <img class="card-img-top" src="{{ url('/imagenes/5.jpg') }}" alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body">

                    <!--Title-->
                    <h4 class="card-title">Misión</h4>
                    <!--Text-->
                    <p class="card-text">Somos una empresa privada, líder en la prestación de servicios hoteleros, orientada principalmente a los sectores comercial y empresarial, que ofrece una atención personalizada y amable con calidad, desarrollando productos y servicios que garantizan la satisfacción y las expectativas del cliente. Contamos con un talento humano comprometido, en permanente desarrollo y mejoramiento continuo, que nos permite ampliar y mantener el mercado brindando total seguridad a empleados, clientes, proveedores, socios y comunidad en general.</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->

                </div>

            </div>
            <!-- Card -->

            <!-- Card -->
            <div class="card mb-4">

                <!--Card image-->
                <div class="view overlay">
                    <img class="card-img-top" src="{{ url('/imagenes/6.jpg') }}" height="320" alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body">

                    <!--Title-->
                    <h4 class="card-title">Visión</h4>
                    <!--Text-->
                    <p class="card-text">Ser en el año 2021 el hotel más reconocido en Pasto, tanto por su infraestructura como sus servicios. Brindando atención de excelente calidad, con unas instalaciones modernas dirigidas a clientes del sector comercial y empresarial que visitan la ciudad, contando con una alta ocupación a nivel nacional e internacional</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->

                </div>

            </div>
        </div>
    </div>
    <!-- Card deck -->
</body>

@stop