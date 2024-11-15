@extends('layouts.plantilla')
@section('title','gastos show')
@section('content')
<h2>Aqui podras visualizar el Historial de tus Gastos</h2>
<table border="2" bordercolor="red" >
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
       @foreach ($gastos as $gasto)
       <tr>
      <td> {{$gasto->fecha}}</td>
      <td> {{$gasto->descripcion}}</td>
      <td> {{$gasto->tipo}}</td>
      <td> {{$gasto->valor}}</td>
      <td> {{$gasto->mediopago}}</td>
      <td> {{$gasto->numcomprobante}}</td>
       </tr>   
       @endforeach
    </tbody>
    
</table>

@endsection