<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Editorial;



class EditorialesController extends Controller
{
    //
    public function index(){
        $editoriales = Editorial::all();
        return view('editorial.listado_editorial', ['editoriales' => $editoriales]);   
    }
    public function formularioReg()
    {
        //Mostrar el formulario de registro y la captura de datos
        return view('editorial.form_registro');
    }


    public function registrar(Request $request)
    {
       
        $editory = new Editorial();
        $editory->nombreEditorial = $request->input('nombreEdi');
        $editory->direccion = $request->input('direccionEdi');
        $editory->ciudad = $request->input('ciudadEdi');
        $editory->telefono = $request->input('telefonoEdi');
        $editory->save();
        return redirect()->route('listadoEditoriales');
    }
    public function formularioAct($id){
        $editorial = Editorial::findOrFail($id);
        return view('editorial.form_actualiza', compact('editorial'));
    }

    public function actualizar(Request $request, $id){
        // Realizar la actualizacion en la base de datos
        $editory= Editorial::findOrFail($id);
        $editory->nombreEditorial = $request->input('nombreEdi');
        $editory->direccion = $request->input('direccionEdi');
        $editory->ciudad = $request->input('ciudadEdi');
        $editory->telefono = $request->input('telefonoEdi');

        $editory->save();
        return redirect()->route('listadoEditoriales');
    }
    public function eliminar($id){
        $editory = Editorial::findOrFail($id);
        $editory->estado = '0';
        $editory->save();
        return redirect()->route('listadoEditoriales');
    }
    public function activar($id){
        $editory = Editorial::findOrFail($id);
        $editory->estado = '1';
        $editory->save();
        return redirect()->route('listadoEditoriales');
    }
}

