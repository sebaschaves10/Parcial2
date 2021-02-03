@extends('layout.master')
@section('content')
<body >
<div class="row">
        </div>
<div class="row">
<div class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
        <div class="col-lg-12">
            <div class="main-box clearfix">

                <form class="text-center border border-light p-5" action ="{{url('editoriales/registro')}}" method="POST">
                    @csrf
                    <p class="h4 mb-4">Registro de Editoriales</p>
                    <div class="form-row mb-4">
                            <div class="col">
                                    <!-- First name -->
                                <div class="md-form">
                                    <input type="text" class="form-control" placeholder="" aria-label="nombre" aria-describedby="basic-addon1" id="nombreEdi" name="nombreEdi" required>
                                    <label for="materialRegisterFormFirstName">Nombre Editorial</label>
                                </div>
                            </div>

                            <div class="col">
                                    <!-- First name -->
                                <div class="md-form">
                                <input type="text" class="form-control" placeholder="" aria-label="direccion" aria-describedby="basic-addon1" id="direccionEdi" name="direccionEdi" required>
                                    <label for="materialRegisterFormFirstName">Direccion</label>
                                </div>
                            </div>
                    </div>

                    <div class="form-row mb-4">
                            <div class="col">
                                    <!-- First name -->
                                <div class="md-form">
                                <input type="text" class="form-control" placeholder="" aria-label="ciudad" aria-describedby="basic-addon1" id="ciudadEdi" name="ciudadEdi" required>
                                    <label for="materialRegisterFormFirstName">Ciudad</label>
                                </div>
                            </div>

                            <div class="col">
                                    <!-- First name -->
                                <div class="md-form">
                                <input type="text" class="form-control" placeholder="" aria-label="telefono" aria-describedby="basic-addon1" id="telefonoEdi" name="telefonoEdi" required>
                                    <label for="materialRegisterFormFirstName">Telefono</label>
                                </div>
                            </div>
                    </div>

                    <button type="submit" class="boton_personalizado">Registrar</button>
                    <button type="reset" class="boton_personalizado">Limpiar</button><br>
                    <a href='{{url()->previous()}}' role="button" class="boton_personalizado_1">Cancelar</a>

                </form>

                                       
            </div>
        </div>
    </div>
</body>
@stop