<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    //
    public function showConsultas()
    {

        $facturas = DB::table('factura as fac')
            ->join('habitacion as hab', 'fac.Numero', '=', 'hab.numero')
            ->join('precio as pre', 'hab.precio_id', '=', 'pre.id')
            ->where('fac.Salida', '=', null)
            ->select('fac.CodigoF', 'hab.Numero', 'hab.descripcion', 'hab.numCamas', 'hab.foto', 'pre.Tipo', 'pre.id', 'pre.precio')
            ->orderBy('fac.CodigoF', 'ASC')
            ->get();
        return view('consultas.consulta1', ['facturas' => $facturas]);
    }

    public function ConsultasCantidad()
    {
        // $habitacion= DB::SELECT(' SELECT habitacion.Numero,descripcion,COUNT(precio_id)AS Numero_de_habitaciones,precio.id,Tipo FROM habitacion,precio WHERE habitacion.precio_id=precio.id GROUP BY habitacion.precio_id')
        $habitacion = DB::table('precio as pre')
            ->select('pre.id', DB::raw('count(*) as cant'))
            ->join('habitacion as hab', 'pre.id', '=', 'hab.precio_id')


            ->groupBy('pre.id')
            ->get();
        return view('consultas.consulta2', ['habitacion' => $habitacion]);
    }
}
