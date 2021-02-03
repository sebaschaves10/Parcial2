@extends('layout.master')
@section('content')

<body background="{{url('img/fondo.jpg')}}">
    <div class="container">
        <!-- Card group -->
        <div class="card-group">

            <!-- Card -->
            <div class="card mb-4">
                <!--Google map-->
                <!--Google map-->
                <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 450px">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.6794345922453!2d-75.51986478588596!3d10.446992368046104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef6255c96679c1b%3A0x51cdcfcb009dbb8b!2sVaranasi%20Hotel%20Boutique%20Aeropuerto!5e0!3m2!1ses!2sus!4v1604723017983!5m2!1ses!2sus" width="600" height="450"></iframe>
                </div>

                <!--Google Maps-->
            </div>
            <!-- Card -->

            <!-- Card -->
            <div class="card mb-4">



                <!-- Card content -->
                <div class="card-body">
                    <!-- Title -->
                    <h4 class="card-title">Ubicado en Cartagena de Indias</h4>
                    <!-- Text -->
                    <p class="card-text"> Las instalaciones del Hotel la Rivera se encuentran localizadas en la zona urbana de Cartagena, en la calle 70 junto al Aeropuerto nternacional de Cartagena</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->

                </div>
                <!-- Card content -->

            </div>
            <!-- Card -->

            <!-- Card -->

        </div>
        <!-- Card group -->

    </div>
    <!--Google Maps-->
</body>
@stop