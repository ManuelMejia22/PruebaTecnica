@extends('layout.plantilla')

@section('tituloPagina', 'Crear pregunta');

@section('contenido')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Nueva Pregunta</h5>
            <p class="card-text">
            <form action="{{ route('preguntas.store', $asignatura -> id )}}" method='POST'>
                @csrf
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label">Preguntar: </label>
                    <input type="text" class="form-control" name="pregunta">
                </div>
                <a href="{{ route('preguntas.index', $asignatura -> id)}}" class="btn bg-white">Regresar</a>
                <button type="submit" class="btn btn-primary">Preguntar</button>
            </form>
            </p>

        </div>
    </div>
@endsection
