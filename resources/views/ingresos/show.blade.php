@extends('layouts.plantilla')
@section('title','ingresos show')
@section('content')
<h2>Aqui podras visualizar el Historial de tus ingresos</h2>
<table border="2" bordercolor="green">
    
    <thead>     
        <tr>
        <th> Fecha</th>
        <th> Descripcion</th>
        <th> Tipo</th>
        <th> Valor</th>
        <th> medio de pago</th>
        <th> Numero de Comprobante</th>
        </tr>   
    </thead>
    <tbody>
       @foreach ($ingresos as $ingreso)
       <tr>
      <td> {{$ingreso->fecha}}</td>
      <td> {{$ingreso->descripcion}}</td>
      <td> {{$ingreso->tipo}}</td>
      <td> {{$ingreso->valor}}</td>
      <td> {{$ingreso->mediopago}}</td>
      <td> {{$ingreso->numcomprobante}}</td>
       </tr>   
       @endforeach
    </tbody>
    
</table>

@endsection
