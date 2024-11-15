@extends('layouts.plantilla')
@section('title','gastos.create')
@section('content')

<h3>GASTOS</h3>
<p>Digita los datos del nuevo gasto</p>
<br>
<form action="{{route('gastos.store')}}" method="POST">
    @csrf
    <label>
        Categoria:
        <select type="select" name="categoria">
            <option value="gasto">gasto</option>
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
        Descripcion del gasto:
        <br>
        <input type="text" name="descripcion"></input>
    </label>
    <br>
    <label>tipo </label>
       
         <select type="select" name="tipo">
            <option value="fijo">fijo</option>
            <option value="variable">variable</option>
        </select>
            
<br>

<label>
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
<button type="submit">Guardar  </button>
</form>


@endsection