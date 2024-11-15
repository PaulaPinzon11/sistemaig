@extends('layouts.plantilla')
@section('title','ingreso create')
@section('content')

<h3>INGRESOS</h3>
<p>Digita los datos del nuevo ingreso</p>
<br>
<form action="{{route('ingresos.store')}}" method="POST">
    @csrf
    <label>
        Categoria:
        <select type="select" name="categoria">
            <option value="ingreso">ingreso</option>
        </select>

    </label>
    <br>    
    <label>
        Fecha:
        <br>
        <input type="date" name="fecha">
    </label>
    <br>
   
    <label>
        Descripcion del ingreso:
        <br>
        <input type="text" name="descripcion"></input>
    </label>
    <br>
    <br>
    <label>tipo </label>
       
         <select type="select" name="tipo">
            <option value="fijo">fijo</option>
            <option value="variable">variable</option>
        </select>
<label>
    <br>
    valor
     <br>
    <input type="number" name="valor"></input>
 </label>
<br>
<label>
    Medio de pago
     <br>
  <input type="text" name="mediopago"></input>
 </label>
<br>
<label>
    numero de combrobante
     <br>
    <input type="text"  name="numcomprobante"></input>
 </label>
<br>
<button type="submit">Guardar </button>
</form>
@endsection