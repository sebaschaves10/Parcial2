<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibreriaController extends Controller
{
    //
    public function getIndex()
    {
        return view('principal');
    }
    public function showHistoria()
    {
        return view('libreria.historia');
    }
    public function showMision()
    {
        return view('libreria.vision');;
    }
    public function showUbicacion()
    {
        return view('libreria.ubicacion');;
    }

    public function showContactos()
    {
        return view('contacto');
    }
}
