<?php

namespace App\Http\Controllers;

use App\Models\Asignaturas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AsignaturasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //
        $asignaturas = DB::select('SELECT * FROM asignaturas');
        return view('inicio', compact('asignaturas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('crearAsignatura');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $asignatura = new Asignaturas();
        $asignatura->nombre = $request->post('nombre');
        $asignatura->descripcion = $request->post('descripcion');
        $asignatura->valor_curso = intval($request->post('valor_curso'));
        $asignatura->save();

        return redirect() -> route('asignatura.index') -> with('success', 'Asignatura creada con exito!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Asignaturas $asignaturas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asignaturas $asignaturas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asignaturas $asignaturas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asignaturas $asignaturas)
    {
        //
    }
}
