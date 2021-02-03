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
                        <p>El Hotel la Rivera fue concebido por el Señor José Plutarco Cuéllar Zambrano, fundado el 9 de noviembre de 1983, donde el proyecto original era construir un edificio con una bolera y un bloque de oficinas.</p>
                        <p>En el transcurso de la construcción se decidió el cambio de las oficinas por el de habitaciones para hacer un hotel.</p>
                        <p>Inicialmente se contaba con 19 habitaciones standar, prestando los servicios básicos hoteleros y adicionalmente los de restaurante y parqueadero.</p>
                        <p>Hasta el año 1990 se atendía los eventos sociales en el área del restaurante, fue por esto que a partir de la venta de la bolera se amplió el número de habitaciones a 40; se reubicaron las oficinas administrativas, se construyeron tres salones (Salones San Francisco, San Carlos y San Andrés) a nivel del primer piso y uno pequeño aledaño al restaurante y se ubicó en la entrada principal del edificio la recepción.</p>
                        <p>Durante el año 2001 se fueron ampliando las áreas de salones, lavandería y bodegas, construyendo en el área de parqueadero las bodegas de alimentos y aseo, así como la nueva lavandería y mantenimiento y donde se ubicaban las bodegas anteriormente mencionadas se instalaron los nuevos salones (Salón San José y San Felipe). Se adecuó una Junior Suite en el tercer piso uniendo dos habitaciones lo que redujo la capacidad de habitaciones a 38 standar y una Junior Suite.</p>
                        <p>A inicios del año 2003, se cerraron las instalaciones del hotel durante un mes, para llevar a cabo diferentes remodelaciones tanto en recepción como en restaurante y habitaciones. Igualmente se acondicionaron tres nuevos salones (Salón San Sebastián, Salón Fernando y Salón San Alejandro) en una casa aledaña al hotel, las anteriores oficinas de Gerencia y Secretaría dieron origen a un nuevo lobby frente a recepción, donde funcionaba la oficina de Contabilidad se hicieron las oficinas de Administración y la sala de Internet y la oficina de Contabilidad pasó a una casa aledaña. Se cambiaron pisos tanto de recepción como de restaurante y se instaló hierro forjado a todas las estructuras metálicas de escaleras y pasamanos que tenía el Hotel.</p>
                        <p>A mediados de junio del año 2007 se inicia la adecuación de terreno para una nueva ampliación del hotel, la cual generaron un nuevo salón con capacidad para 600 personas, parqueadero cubierto para 22 vehículos y 16 nuevas habitaciones tipo Superior, Junior Suite y Suite, adicionalmente se eliminaron cuatro habitaciones para dar lugar a la nueva zona húmeda y el gimnasio, así como el acceso a la nueva ala de construcción, igualmente se remodelaron dos habitaciones familiares las cuales dieron origen a cuatro habitaciones standar, con lo cual el hotel queda con una capacidad total de 53 habitaciones.</p>
                        <p>En el mes de noviembre de 2016, se amplia el servicio de alojamiento con 40 nuevas habitaciones, 2 nuevos salones, 22 parqueaderos, nuevo gimnasio y ampliación de la cocina, quedando el hotel con un total de 93 habitaciones.</p>
                        <p>El Hotel la Rivera brinda alojamiento, servicio de restaurante, bar, cafetería, adicionalmente cuenta con trece salones de conferencias debidamente equipados, todo lo anterior incluye el servicio de parqueadero, ofrece igualmente telefonía local y larga distancia, telefonía celular, fax, Internet, y un business center.</p>
                    </div>
                </main>
            </div>
        </article>
    </div>
</body>

@stop