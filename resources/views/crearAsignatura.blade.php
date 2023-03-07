@extends('layout.plantilla')

@section('tituloPagina', 'Crear asignatura');

@section('contenido')
    <div class="card">
        <h5 class="card-header">Crear Asignatura</h5>
        <div class="card-body">
            <h5 class="card-title text-center">Nueva Asignatura</h5>
            <p class="card-text">
            <form action="{{route('asignatura.store')}}" method='POST'>
                @csrf
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label">Nommbre de la asignatura</label>
                    <input type="text" class="form-control" name="nombre">
                    <label for="exampleFormControlInput2" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion">
                    <label for="exampleFormControlInput3" class="form-label">Valor</label>
                    <input type="text" class="form-control" name="valor_curso">
                </div>
                <a href="{{route('asignatura.index')}}" class="btn bg-white">Regresar</a>
                <button type="submit" class="btn btn-primary">Crear asignatura</button>
            </form>
            </p>

        </div>
    </div>
@endsection
