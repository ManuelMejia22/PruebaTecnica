@extends('layout.plantilla')

@section('tituloPagina', 'Crear asignatura');

@section('contenido')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Nueva Pregunta</h5>
            <p class="card-text">
            <form action="{{ route('comentarios.store', ['id' => $pregunta -> id, 'idAsignatura' => $asignatura -> id])}}" method='POST'>
                @csrf
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label">Responder: </label>
                    <br>
                    <textarea name="respuesta" id="" cols="30" rows="10" style="width: 80%;"></textarea>
                    <br><br>
                    <input type="text" name = 'calificacion' placeholder="calificacion">
                </div>
                <a href="{{ route('preguntas.index', $asignatura -> id)}}" class="btn bg-white">Regresar</a>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            </p>

        </div>
    </div>
@endsection
