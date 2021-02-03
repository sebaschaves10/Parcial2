@extends('layout.master')
@section('content')

<div class="container" align="center">
    <div class="row">
        <div class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
        <div class="col-lg-12">
            <div class="main-box clearfix">
                <form action="{{route('actualizarEditorial', $editorial->id )}}" method="POST">
                    @csrf
                    <!-- Etiquetas de tipo text con un value asignado -->
                    <p class="h4 mb-4">Formulario de Actualizacion</p>
                    <div class="form-group">
                        <label for="nombrePro">Nombre </label>
                        <input type="text" id="nombreEdi" name="nombreEdi" value="{{$editorial->nombreEditorial}}" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>

                    <!-- Etiquetas de tipo number -->
                    <div class="form-group">
                        <label for="direccionPro">Direccion </label>
                        <input type="text" id="direccionEdi" name="direccionEdi" value="{{$editorial->direccion}}" min='1' max='1000' class="form-control" placeholder="Direccion">
                    </div>

                    <div class="form-group">
                        <label for="ciudadPro">Direccion </label>
                        <input type="text" id="ciudadEdi" name="ciudadEdi" value="{{$editorial->direccion}}" min='1' max='1000' class="form-control" placeholder="Ciudad">
                    </div>

                    <div class="form-group">
                        <label for="telefonoPro">Direccion </label>
                        <input type="text" id="telefonoEdi" name="telefonoEdi" value="{{$editorial->telefono}}" min='1' max='1000' class="form-control" placeholder="Telefono">
                    </div>

                    <br> <br>
                    <!-- Etiquetas de tipo button -->
                    <button type="submit" class="boton_personalizado">Actualizar</button>
                    <button type="reset" class="boton_personalizado">Restablecer</button><br>
                    <a href="javascript: history.go(-1)" role="button" class="boton_personalizado_1">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@stop