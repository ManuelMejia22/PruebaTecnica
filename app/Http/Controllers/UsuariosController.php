<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use App\Models\Asignaturas;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        //
        $asignatura = Asignaturas::find($id);
        $usuarios = Usuarios::all();

        return view('usuarios', compact('asignatura', 'usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        //
        return view('crearUsuario', ["id" => $id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        //
        $usuario = new Usuarios();
        $usuario -> nombre = $request -> post('nombre');
        $usuario -> apellido = $request -> post('apellido');
        $usuario -> email = $request -> post('email');
        $usuario -> telefono = $request -> post('telefono');
        $usuario -> rol = $request -> post('rol');
        $usuario -> moderador = $request -> post('moderador');
        $usuario -> asignatura_id = $id;
        $usuario -> save();

        return redirect() -> route('preguntas.index', ['id' => $id] );
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuarios $usuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuarios $usuarios)
    {
        //
    }
}
