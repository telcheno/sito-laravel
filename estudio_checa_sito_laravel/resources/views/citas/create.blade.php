@extends('layouts.layoutBase')

@section('content')
<h1>Lista de citas</h1>
<p>Todas las citas</p>

@section('content')
<h1>Nuova Cita</h1>
<form action="{{ route('citas.store') }}" method="POST">
    @csrf
    <label>Fecha: <input type="date" name="fecha"></label><br>
    <label>Hora: <input type="time" name="hora"></label><br>
    <label>Estado: <input type="text" name="estado"></label><br>
    <button type="submit">Salva</button>
</form>
@endsection


@endsection