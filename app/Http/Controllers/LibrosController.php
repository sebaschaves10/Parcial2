<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Libro;
use App\Models\Editorial;


class LibrosController extends Controller


{
    //
    public function index()
    {
        $libros = DB::table('libros as lib')
            ->join('editoriales as edi', 'lib.editorial', '=', 'edi.id')
            ->select('lib.id', 'lib.isbn', 'lib.nombreLibro', 'lib.stock', 'lib.precio', 'edi.nombreEditorial')
            ->orderby('lib.id', 'asc')
            ->get();
        return view('libro.listado', ['editoriales' => $libros]);
    }


    public function formulario_registrar()
    {
        $editoriales = Editorial::all();
        return view('libro.form_registro', compact('editoriales'));
    }


    public function eliminar($id)
    {
        $producto = Libro::findOrFail($id);
        $producto->estado = '0';
        $producto->save();
        return redirect()->route('listadoLibros');
    }

    public function activar($id)
    {
        $producto = Libro::findOrFail($id);
        $producto->estado = '1';
        $producto->save();
        return redirect()->route('listadoLibros');
    }
}
