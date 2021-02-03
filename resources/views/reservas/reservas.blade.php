@extends('layout.master')
@section('content')

<body background="{{url('img/fondo.jpg')}}">

    <form amethod="POST">
        <div class="container">
            <div class="card-body">
                <h3 class="card-title font-weight-bold" align="center" style="color: white;"><a></a></h3>
                <div style="color: white; background: rgba(5, 5, 5, 0.349)">


                    <!-- Material input -->
                    <h3 align="center" style="color: white;"> RESERVAS </h3>
                    <div class="form-row" style="color: white;">
                        <div class="col">
                            <div class="md-form">
                                <input type="text" id="nombreCliente" name="nombreCliente" class="form-control" style="color: white;" required>
                                <label for="nombreCliente" style="color: white;">Nombre... </label>
                            </div>
                        </div>

                        <div class="col">
                            <div class="md-form">
                                <input type="text" id="apellidoCliente" name="apellidoCliente" class="form-control" style="color: white;" required>
                                <label for="apellidoCliente" style="color: white;">Apellido... </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="md-form">
                                <input type="text" id="dirCliente" name="dirCliente" class="form-control" style="color: white;" required>
                                <label for="dirCliente" style="color: white;">Direccion... </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="md-form">
                                <input type="text" id="dirCliente" name="ciudadCliente" class="form-control" style="color: white;" required>
                                <label for="ciudadCliente" style="color: white;">Ciudad... </label>
                            </div>
                        </div>

                        <div class="col">
                            <div class="md-form">
                                <input type="number" id="telCliente" name="telCliente" class="form-control" style="color: white;" required>
                                <label for="telCliente" style="color: white;">Telefono...</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="md-form">
                                <input type="email" id="correoCliente" name="correoCliente" class="form-control" style="color: white;" required>
                                <label for="correoCliente" style="color: white;">Correo...</label>
                            </div>
                        </div>
                    </div>

                    <br>
                    <h5>Seleccione Genero</h5>
                    <br>
                    <div>
                        <input name="genero" type="radio" id="femenino" value="Femenino" style="color: white;" />
                        <label for="femenino" style="color: white;"> Femenino </label>

                        <input name="genero" type="radio" id="masculino" value="Masculino" style="color: white;" />
                        <label for="masculino" style="color: white;"> Masculino </label>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="md-form">
                                <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="form-control" style="color: white;" required>
                                <label for="fechaNacimiento" style="color: white;">Fecha de nacimiento...</label>
                            </div>
                        </div>

                        <div class="col">
                            <label>Seleccione su Habitación </label>
                            <select class="browser-default custom-select" name="habitacion">
                                <option value="" disabled selected>Habitación</option>
                                <option value="Estandar" id="estandar">Sencilla</option>
                                <option value="Doble" id="superior">Doble</option>
                                <option value="matrimoniañ" id="ejecutiva">Matrimonial</option>
                                <option value="Suite" id="suite">Suite</option>
                                <option value="Triple" id="suite">Triple</option>
                            </select>
                        </div>
                    </div>
                    <br><br>

                    <h5>Tipo de Pago</h5>

                    <div>
                        <input name="pago" type="radio" id="credito" value="Tarjeta de Credito" />
                        <label for="credito"> Tarjeta de Credito </label>

                        <input name="pago" type="radio" id="debito" value="Tarjeta Debito" />
                        <label for="debito"> Tarjeta Debito </label>
                    </div>
                    <br>
                    <h6>Estoy de acuerdo con los términos del servicio y los acepto sin reservas.</h6>
                    <div>
                        <input name="acuerdo" type="radio" id="acepto" value="Acepto" required>
                        <label for="acepto">Acepto terminos</label>
                    </div>

                    <br> <br>

                    <button class="btn btn-primary" id="Enviar">Enviar</button>
                    <button type="reset" class="btn btn-primary">Limpiar</button>

                </div>
            </div>
        </div>

    </form>
</body>


@stop