@extends('layout.master')
@section('content')
<script type="text/javascript">
    function activarLib() {
        var respuesta = confirm("Desea activar libro??");
        if (respuesta == true) {
            return true;
        } else {
            return false;
        }

    }

    function desactivarLib() {
        var respuesta = confirm("Desea desactivar libro??");
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
                

                <div class="main-box-body clearfix">
                    <div class="table-responsive">
                        <table class="table" align="center">
                            <thead class="black white-text">
                                <tr>
                                    <th>Op</th>
                                    <th>#</th>
                                    <th>ISBN</th>
                                    <th>Titulo</th>
                                    <th>Stock</th>
                                    <th>Editorial</th>
                                    <th>Precio</th>
                                    <th>Descuento</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($editoriales as $c)
                                <tr>

                                    <td>
                                        @if($c->estado==1)
                                        <a href="{{route('form_actualizaEditorial', $c->id)}}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                        <a href="{{route('eliminarEditorial', $c->id)}}" class="btn btn-danger" onclick="return desactivarEdi()"><i class="fa fa-close"></i></a>
                                        @else

                                        <a href="{{route('activarEditorial', $c->id)}}" class="btn btn-primary" onclick="return activarEdi()"><i class="fa fa-check"></i></a>
                                        @endif
                                    </td>
                                    <td> {{ $c->id }} </td>
                                    <td> {{ $c->isbn }} </td>
                                    <td> {{ $c->nombreLibro }} </td>
                                    <td> {{ $c->stock }} </td>
                                    <td> {{ $c->Editorial }} </td>
                                    <td> {{ $c->precio }} </td>
                                    <td> {{ $c->descuento }} </td>

                                    <td>
                                        @if($c->estado==1)
                                        <span class="label bg-primary">Activado</span>
                                        @else
                                        <span class="label bg-warning">Desactivado</span>
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