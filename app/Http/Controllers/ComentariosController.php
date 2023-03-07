<?php

namespace App\Http\Controllers;

use App\Models\Comentarios;
use App\Models\Preguntas;
use App\Models\Asignaturas;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id, $idAsignatura)
    {
        //
        $pregunta = Preguntas::find($id);
        $asignatura = Asignaturas::find($idAsignatura);
        return view('crearComentario', compact('pregunta', 'asignatura'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id,$idAsignatura)
    {
        //
        $comentario = new Comentarios();
        $comentario -> respuesta = $request -> post('respuesta');
        $comentario -> calificacion = $request -> post('calificacion');
        $comentario -> pregunta_id = intval($id);
        $comentario -> save();

        return redirect() -> route('preguntas.index', [$idAsignatura] );
    }



    /**
     * Display the specified resource.
     */
    public function show(Comentarios $comentarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comentarios $comentarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comentarios $comentarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comentarios $comentarios)
    {
        //
    }
}
