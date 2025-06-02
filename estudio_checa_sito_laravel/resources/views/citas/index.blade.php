@extends('layouts.layoutBase')

@section('content')
<h1>Lista de citas</h1>
<p>Todas las citas</p>

@section('content')
<h1>Lista delle Citas</h1>
<a href="{{ route('citas.create') }}">Nuova Cita</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Estado</th>
            <th>Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach($citas as $cita)
        <tr>
            <td>{{ $cita->id }}</td>
            <td>{{ $cita->fecha }}</td>
            <td>{{ $cita->hora }}</td>
            <td>{{ $cita->estado }}</td>
            <td>
                <a href="{{ route('citas.edit', $cita) }}">Modifica</a>
                <form action="{{ route('citas.destroy', $cita) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Elimina</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
@endsection