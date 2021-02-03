@extends('layout.master')
@section('content')
<script type="text/javascript">
    function activarEdi() {
        var respuesta = confirm("Desea activar la categoria??");
        if (respuesta == true) {
            return true;
        } else {
            return false;
        }

    }

    function desactivarEdi() {
        var respuesta = confirm("Desea desactivar la categoria??");
        if (respuesta == true) {
            return true;
        } else {
            return false;
        }

    }
</script>

<body>
    <div class="row">
        <div class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        <div class="col-lg-12">
            <div class="main-box clearfix">
                <header class="main-box-header clearfix">

                    <div class="form-row mb-4">
                        <div class="col">
                            <h2 class="box-title">Editoriales
                                <a href="{{ url('/editoriales/registro') }}" class="btn btn-success"> <i class="fa fa-plus-circle"></i> Nuevo </a>
                            </h2>
                        </div>
                        <div class="col"> </div>
                        <div class="col"></div>
                    </div>
                </header>

                <div class="main-box-body clearfix">
                    <div class="table-responsive">
                        <table class="table" align="center">
                            <thead class="black white-text">
                                <tr>
                                    <th>Op</th>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Direccion</th>
                                    <th>Ciudad</th>
                                    <th>Telefono</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($editoriales as $c)
                                <tr>

                                    <td>
                                       
                                        <a href="{{route('form_actualizaEditorial', $c->id)}}" class="btn btn-warning"><i>Actu</i></a>
                                        
                                    </td>
                                    <td> {{ $c->id }} </td>
                                    <td> {{ $c->nombreEditorial }} </td>
                                    <td> {{ $c->direccion }} </td>
                                    <td> {{ $c->ciudad }} </td>
                                    <td> {{ $c->telefono }} </td>

                                    <td>
                                        @if($c->estado==1)
                                        <span class="label bg-primary">Disponible</span>
                                        @else
                                        <span class="label bg-warning">Pocas unidades</span>
                                        @endif

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
@stop