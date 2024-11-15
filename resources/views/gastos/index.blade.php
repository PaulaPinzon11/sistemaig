@extends('layouts.plantilla')
@section('title','gastos index')
@section('content')

<h2>Sistema de ingresos</h2>

<a href="{{route('gastos.create')}}">Hacer registro</a>

<a href="{{route('gastos.show')}}">  ver historial</a>

@endsection