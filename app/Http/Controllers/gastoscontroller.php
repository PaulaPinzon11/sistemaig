<?php

namespace App\Http\Controllers;
use App\Models\gasto;
use Illuminate\Http\Request;
use App\Models\transaccione;

class gastoscontroller extends Controller
{
    public function index()
{
    return view ('gastos.index');
}

public function create()
{
return view('gastos.create');
}
public function store(Request $request1)
 
{$gasto =new gasto();
    $gasto->categoria=$request1->categoria;
    $gasto->fecha=$request1->fecha;
    $gasto->descripcion = $request1->descripcion;
    $gasto->tipo= $request1->tipo;
    $gasto->valor = $request1->valor;
    $gasto->mediopago=$request1->mediopago;
    $gasto->numcomprobante=$request1->numcomprobante;
    $gasto->save();

    $transaccione=new transaccione();
        $transaccione->categoria=$request1->categoria;
        $transaccione->fecha = $request1->fecha;
        $transaccione->descripcion= $request1->descripcion;
        $transaccione->tipo= $request1->tipo;
        $transaccione->valor= $request1->valor;
        $transaccione->mediopago= $request1->mediopago;
        $transaccione->numcomprobante= $request1->numcomprobante;
        $transaccione->save();

   redirect()->route('gastos.show', $gasto);
   return view('transacciones.alerta');


}
public function show()
{
    $gastos= gasto::all();
   
   return view('gastos.show',compact('gastos'));    
}

}
