<?php

namespace App\Http\Controllers;
use App\Models\ingreso;
use App\Models\transaccione;
use Illuminate\Http\Request;
use Psy\CodeCleaner\ReturnTypePass;

class ingresoscontroller extends Controller
{
    public function index()
    {
        return view('ingresos.index');
    }
    
    public function create()
    {
        return view('ingresos.create');
    }

    public function store(Request $request){
        // return $request ->all();
        $ingreso=new ingreso();
        $ingreso->categoria= $request->categoria;
        $ingreso->fecha = $request->fecha;
        $ingreso->descripcion= $request->descripcion;
        $ingreso->tipo= $request->tipo;
        $ingreso->valor= $request->valor;
        $ingreso->mediopago= $request->mediopago;
        $ingreso->numcomprobante= $request->numcomprobante;
        $ingreso->save();


        $transaccione=new transaccione();
        $transaccione->categoria=$request->categoria;
        $transaccione->fecha = $request->fecha;
        $transaccione->descripcion= $request->descripcion;
        $transaccione->tipo= $request->tipo;
        $transaccione->valor= $request->valor;
        $transaccione->mediopago= $request->mediopago;
        $transaccione->numcomprobante= $request->numcomprobante;
        $transaccione->save();
        redirect()->route('ingresos.show', $ingreso);
        return view('transacciones.alerta');
    
         }

    public function show()
    {
        
        $ingresos= ingreso::all();
        return view('ingresos.show', compact('ingresos'));
          
}
        
    }

