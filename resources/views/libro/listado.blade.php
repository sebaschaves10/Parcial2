@extends('layout.master')
@section('content')


<body>
    <div class="row">
        <div class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        <div class="col-lg-12">
            <div class="main-box clearfix">
                <header class="main-box-header clearfix">

                    <div class="form-row mb-4">
                        <div class="col">
                            <h2 class="box-title">Listado de Libros

                            </h2>
                        </div>
                    </div>
                </header>

                <div class="main-box-body clearfix">
                    <div class="table-responsive">
                        <table class="table" align="center">
                            <thead class="blue white-text">
                                <tr>
                                    <th></th>
                                    <th>#</th>
                                    <th>ISBN</th>
                                    <th>Titulo</th>
                                    <th>Stock</th>
                                    <th>Estado</th>
                                    <th>Editorial</th>
                                    <th>Precio</th>
                                    <th>Descuento</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($editoriales as $c)
                                <tr>

                                    <td>

                                    </td>
                                    <td> {{ $c->id }} </td>
                                    <td> {{ $c->isbn }} </td>
                                    <td> {{ $c->nombreLibro }} </td>
                                    <td> {{ $c->stock }} </td>
                                    @if($c->stock==0)
                                    <td> agotado </td>
                                    @else
                                    @if($c->stock<=1 || $c->stock<=10) <td> Ultimas Unidades </td>
                                            @else
                                            <td> Disponible</td>
                                            @endif
                                            @endif
                                    <td> {{ $c->nombreEditorial }} </td>
                                    <td> {{ $c->precio }} </td>
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