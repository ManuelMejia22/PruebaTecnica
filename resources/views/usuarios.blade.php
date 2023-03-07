@extends('layout.plantilla')

@section('tituloPagina', 'Usuarios');

@section('contenido')
    <div class="card">
        <h5 class="card-header">{{ $asignatura->nombre }}</h5>
        <div class="card-body">
            <div class="card-text" style="display: flex; justifyContent:center; flex-wrap:wrap; margin-top: 5px">
                <table class="table table-responsive table-bordered">
                    <thead>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Rol</th>
                        <th>Moderador</th>
                    </thead>

                    <tbody>
                        @foreach ($usuarios as $item )
                        <tr>
                            <td>{{ $item -> nombre}}</td>
                            <td>{{ $item -> apellido}}</td>
                            <td>{{ $item -> email}}</td>
                            <td>{{ $item -> telefono}}</td>
                            <td>{{ $item -> rol}}</td>
                            <td>{{ $item -> moderador}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <a href="{{ route('preguntas.index', $asignatura -> id)}}" class="btn bg-white">Regresar</a>

            <a href="{{ route('usuarios.create', $asignatura -> id)}}" class="btn bg-success">Agregar usuario</a>
        </div>
    </div>
@endsection
