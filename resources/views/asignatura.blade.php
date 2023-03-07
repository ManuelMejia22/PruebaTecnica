@extends('layout.plantilla')

@section('tituloPagina', 'Asignatura');

@section('contenido')
    <div class="card">
        <h5 class="card-header">{{ $asignatura->nombre }}</h5>
        <div class="card-body">
            <a href="{{ route('preguntas.create', $asignatura->id) }}" class="btn bg-primary">Preguntar</a>
            <a href="{{ route('usuarios.index', $asignatura->id) }}" class="btn bg-white">Usuarios</a>
            <div class="card-text" style="display: flex; justifyContent:center; flex-wrap:wrap; margin-top: 5px">
                @if ($preguntas)
                    @foreach ($preguntas as $item)
                        <div class="card" style=" width:100%;margin: 15px 15px">
                            <div class="card-body" style="position:relative; width:100%;">
                                <h5 class="card-title">{{ $item->pregunta }}</h5>
                                @if ($comentarios)
                                    @foreach ($comentarios as $comentario)
                                        @if ($comentario->pregunta_id == $item->id)
                                            <div class="card" style="margin-top: 15px; padding:10px">
                                                <p>{{ $comentario->respuesta }}</p>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                                <a href="{{ route('comentarios.create', ['id' => $item->id, 'idAsignatura' => $asignatura->id]) }}"
                                    class="card-link btn bg-success-subtle"
                                    style=" margin:5px 5px;margin-top:15px;">Responder</a>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
            <a href="{{ route('asignatura.index') }}" class="btn bg-white">Regresar</a>
        </div>
    </div>
@endsection
