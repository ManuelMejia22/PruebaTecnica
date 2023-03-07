@extends('layout.plantilla')

@section('tituloPagina', 'Crear asignatura');

@section('contenido')
    <div class="card">
        <h5 class="card-header">Crear Usuario</h5>
        <div class="card-body">
            <h5 class="card-title text-center">Nuevo Usuario</h5>
            <p class="card-text">
            <form action="{{route('usuarios.store', $id)}}" method='POST'>
                @csrf
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label">Nommbre</label>
                    <input type="text" class="form-control" name="nombre">
                    <label for="exampleFormControlInput2" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="apellido">
                    <label for="exampleFormControlInput3" class="form-label">email</label>
                    <input type="text" class="form-control" name="email">
                    <label for="exampleFormControlInput3" class="form-label">Telefono</label>
                    <input type="text" class="form-control" name="telefono">
                    <label for="exampleFormControlInput3" class="form-label" >rol</label>
                    <input type="text" class="form-control" name="rol" placeholder="E -> estudiante / P -> profesor">
                    <label for="exampleFormControlInput3" class="form-label" >moderador</label>
                    <input type="text" class="form-control" name="moderador" placeholder="Y -> Si / N -> No">
                </div>
                <a href="{{ route('preguntas.index', $id)}}" class="btn bg-white">Regresar</a>
                <button type="submit" class="btn btn-primary">Crear Usuario</button>
            </form>
            </p>

        </div>
    </div>
@endsection
