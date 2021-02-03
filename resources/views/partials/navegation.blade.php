<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark special-color-dark">
    <a class="navbar-brand" href="{{url('/')}}">


        <span style="font-size:15pt"></span> BookStore </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item dropdown">


                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    Libreria
                </a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="{{url('/libreria/historia')}}">Historia</a>
                    <a class="dropdown-item" href="{{url('/libreria/mision-vision')}}">Misión y Visión</a>
                    <a class="dropdown-item" href="{{url('/libreria/ubicacion')}}">Ubicación</a>
                </div>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Editoriales
                </a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                    <a href="{{ url('/editoriales') }}"><i class="dropdown-item"></i><span>Listado</span></a>
                </div>
            </li>

            <li>
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Libros
                </a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                    <a href="{{ url('/libros') }}"><i class="dropdown-item"></i><span>Listado</span></a>
                </div>
            </li>



        </ul>
    </div>
</nav>
<!--/.Navbar -->