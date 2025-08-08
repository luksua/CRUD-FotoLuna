@extends('layouts.app')

@section('title', 'Listado de clientes')

@section('content')
    <form action="{{ url('/appointment') }}" method="POST">
        @csrf
        <select name="" id=""></select>
        <input type="time" name="horaCita" id="horaCita">
        <input type="date" name="fechaCita" id="fechaCita">
        <input type="text" name="lugarCita" id="lugarCita">
        <input type="submit" value="Aceptar">
    </form>
@endsection