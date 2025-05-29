@extends('layouts.layoutBase')

@section('content')
<h1>Lista de citas</h1>
<p>Todas las citas</p>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Hora</th>
            <!-- <th>Cliente</th>
            <th>Acciones</th> -->
        </tr>
    </thead>
    <tbody>
        @foreach($citas as $cita)
        <tr>
            <td>{{ $cita->id }}</td>
            <td>{{ $cita->fecha }}</td>
            <td>{{ $cita->hora }}</td>
            <!-- <td>{{ $cita->cliente->nombre }}</td> -->
            <!-- <td>
                <a href="{{ route('citas.edit', $cita->id) }}" class="btn btn-primary">Editar</a>
                <form action="{{ route('citas.destroy', $cita->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td> -->
        </tr>
        @endforeach
    </tbody>
@endsection