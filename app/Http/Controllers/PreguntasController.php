<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Preguntas;
use App\Models\Comentarios;
use Illuminate\Http\Request;
use App\Models\Asignaturas;


class PreguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {

        //$asignatura = DB::select('select * from asignaturas where id = ?', [$id]); SQL
        $asignatura = Asignaturas::find(intval($id));
        $preguntas = Preguntas::all()->where('asignatura_id', $id);
        $comentarios = Comentarios::all();


        return view('asignatura', compact('asignatura', 'preguntas','comentarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        //
        $asignatura = Asignaturas::find($id);
        return view('crearPregunta', compact('asignatura'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        //

        $pregunta = new Preguntas();
        $pregunta -> pregunta = $request->post('pregunta');
        $pregunta -> asignatura_id = $id;
        $pregunta -> save();

        return redirect() -> route('preguntas.index', ['id' => $id] );
    }

    /**
     * Display the specified resource.
     */
    public function show(Preguntas $preguntas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Preguntas $preguntas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Preguntas $preguntas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Preguntas $preguntas)
    {
        //
    }
}
