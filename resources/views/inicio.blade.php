@extends('layout.plantilla')

@section('tituloPagina', 'HOME');

@section('contenido')
<div class="card">
    <h5 class="card-header">Crear Asignatura</h5>
    <div class="card-body">
      <h5 class="card-title">Asignaturas</h5>
      <a href="{{ route('asignatura.create')}}" class="btn btn-primary">Crear asignatura</a>
      <div class="card-text" style="display: flex; justifyContent:space-around">
        @foreach($asignaturas as $item)
        <div class="card" style="width: 19rem; margin: 15px 10px">
            <div class="card-body text-center">
              <h5 class="card-title">{{ $item-> nombre }}</h5>
              <p class="card-text">{{ $item -> descripcion}}</p>
              <a href="{{ route('preguntas.index', $item -> id)}}" class="card-link btn bg-success-subtle">Ingresar</a>
            </div>
          </div>
        @endforeach
        </div>
    </div>
  </div>
@endsection
