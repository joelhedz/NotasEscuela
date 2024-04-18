<?php

namespace App\Http\Controllers;

use App\Models\AsignarClase;
use Illuminate\Http\Request;
use App\Models\Docente;
use App\Models\Clase;
use Illuminate\Support\Facades\DB;

class AsignarClaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docente = Docente::all();
        return view('docentes.asignarClases')->with('docente', $docente);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $asignarClase = new AsignarClase();
        $asignarClase->idDocente = $request->get('idDocente');
        $asignarClase->iDClase = $request->get('idClase');

        $asignarClase->save();

        //Actualizar el estado de la clase

        $clase = Clase::find($request->get('idClase'));
        $clase->estado = 'ASIG';
        $clase->save();

        return redirect('/asignar');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $iddocente)
    {
        $clase = Clase::where('estado', 'PEND')->get();
        return view('docentes.listClases')->with('clase', $clase)->with('iddocente', $iddocente);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $iddocente)
    {
        $datos = DB::table('asignar_clases')
            ->join('docentes', 'asignar_clases.idDocente', '=', 'docentes.id')
            ->join('clases', 'asignar_clases.idClase', '=', 'clases.id')
            ->select('asignar_clases.idDocente', 'asignar_clases.idClase', 'docentes.primerNombre', 'docentes.apellido', 'clases.nombre')
            ->where('asignar_clases.idDocente', '=', $iddocente)
            ->get();



        $nombreDocente = Docente::find($iddocente);

        return view('docentes.listAsignaciones')
            ->with('datos', $datos)
            ->with('nombreDocente', $nombreDocente->primerNombre . ' ' . $nombreDocente->apellido);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $idasignarClase)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $iddocente, string $idasignarClase)
    {
        // Buscar y eliminar la asignación de clase
        $asignarClase = AsignarClase::where('idDocente', $iddocente)
            ->where('idClase', $idasignarClase)
            ->delete();


        // Actualizar el estado de la clase
        $clase = Clase::find($idasignarClase);
        $clase->estado = 'PEND';

        $clase->save();

        return redirect('/asignar/' . $iddocente . '/edit');
    }
}
