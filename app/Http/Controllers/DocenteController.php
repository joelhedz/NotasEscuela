<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Models\Clase;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docentes = Docente::all();
        return view('docentes.index')->with('docente', $docentes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('docentes.createDocente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $docente = new Docente();
        $docente->identidad = $request->get('identidad');
        $docente->primerNombre = $request->get('primerNombre');
        $docente->segundoNombre = $request->get('segundoNombre');
        $docente->apellido = $request->get('apellido');
        $docente->tipoNombramiento = $request->get('tipoNombramiento');
        $docente->save();

        return redirect('/docente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $iddocente)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $iddocente)
    {
        $docente = Docente::find($iddocente);
        return view('docentes.createDocente')->with('docente', $docente);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $iddocente)
    {
        $docente = Docente::find($iddocente);
        $docente->identidad = $request->get('identidad');
        $docente->primerNombre = $request->get('primerNombre');
        $docente->segundoNombre = $request->get('segundoNombre');
        $docente->apellido = $request->get('apellido');
        $docente->tipoNombramiento = $request->get('tipoNombramiento');
        $docente->save();

        return redirect('/docente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $iddocente)
    {
        $docente = Docente::find($iddocente);
        $docente->delete();

        return redirect('/docente');
    }
}
