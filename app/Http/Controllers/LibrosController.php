<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Libro;
use App\Models\Editorial;


class ProductosController extends Controller
{
    //
    public function listado()
    {
        $libros = DB::table('libros as lib')
            ->join('editoriales as edi', 'lib.editoriales', '=', 'edi.id')
            ->select('lib.id', 'lib.precio', 'lib.cantidad', 'lib.nombreProducto', 'lib.foto', 'edi.nombreEditorial', 'lib.editorial', 'lib.estado')
            ->orderby('lib.id', 'asc')
            ->get();
        return view('libro.listadoLibros', ['libros' => $libros]);
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
