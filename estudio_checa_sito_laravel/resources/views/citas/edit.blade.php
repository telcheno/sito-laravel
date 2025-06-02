@extends('layouts.layoutBase')


<h1>Agiorna cita</h1>

@section('content')
<h1>Modifica Cita</h1>
<form action="{{ route('citas.update', $cita) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Fecha: <input type="date" name="fecha" value="{{ $cita->fecha }}"></label><br>
    <label>Hora: <input type="time" name="hora" value="{{ $cita->hora }}"></label><br>
    <label>Estado: <input type="text" name="estado" value="{{ $cita->estado }}"></label><br>
    <button type="submit">Aggiorna</button>
</form>
@endsection