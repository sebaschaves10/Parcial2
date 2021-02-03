<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    //
    public function showClientes(){

        $clientes = DB::table('cliente')->orderBy('nombres')->get();

        return view('clientes.clientes', ['clientes' => $clientes]);   
        
    }
}
