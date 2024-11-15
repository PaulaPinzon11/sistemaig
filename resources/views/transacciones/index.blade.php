@extends('layouts.plantilla')
@section('title','transacciones')
@section('content')

<h2>Historial de transacciones 
</h2>
<table border="2" bordercolor="purple">
<thead>     
    <tr>
    <th> categoria</th>
    <th> Fecha</th>
    <th> Descripcion</th>
    <th> tipo</th>
    <th> Valor</th>
    <th> medio de pago</th>
    <th> Numero de Comprobante</th>
    </tr>   
</thead>
<tbody>
   @foreach ($transacciones as $transaccione)
   <tr>
 <td> {{$transaccione->categoria}}</td>
  <td> {{$transaccione->fecha}}</td>
  <td> {{$transaccione->descripcion}}</td>
  <td> {{$transaccione->tipo}}</td>
  <td> {{$transaccione->valor}}</td>
  <td> {{$transaccione->mediopago}}</td>
  <td> {{$transaccione->numcomprobante}}</td>
   </tr>   
   @endforeach
</tbody>

</table>

@endsection