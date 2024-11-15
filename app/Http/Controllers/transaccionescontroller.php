<?php

namespace App\Http\Controllers;

use App\Models\transaccione;
use App\Models\gasto;
use App\Models\ingreso;
use Illuminate\Http\Request;

class transaccionescontroller extends Controller
{
    public function index()
{
    $transacciones= transaccione::all();
    return view('transacciones.index', compact('transacciones'));


}


public function store(Request $request2){
    // return $request ->all();
    $transaccione=new transaccione();
    $transaccione->categoria=$request2->categoria;
    $transaccione->fecha = $request2->fecha;
    $transaccione->descripcion= $request2->descripcion;
    $transaccione->tipo= $request2->tipo;
    $transaccione->valor= $request2->valor;
    $transaccione->mediopago= $request2->mediopago;
    $transaccione->numcomprobante= $request2->numcomprobante;
    $transaccione->save();
    
    redirect()->route('transacciones.index', $transaccione);

     }
    public function create(){

    }
    
    public function show(){
        return view('trasacciones.alerta');
        }

}

