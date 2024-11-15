@extends('layouts.plantilla')
@section('title','ingresos index')
@section('content')

<h2>Sistema de ingresos</h2>

<a href="{{route('ingresos.create')}}">Hacer registro</a>
<a href="{{route('ingresos.show')}}">ver historial</a>




@endsection