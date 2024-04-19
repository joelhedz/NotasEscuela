<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clase;
use App\Models\Seccion;
use Illuminate\Support\Facades\DB;

class ClaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $clase = DB::table('clases')
            ->join('seccions', 'clases.idseccion', '=', 'seccions.id')
            ->select('clases.*', 'seccions.descripcion as seccion')
            ->get();
        return view('clase.index')->with('clases', $clase);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $seccion = Seccion::all();

        return view('clase.create')->with('secciones', $seccion);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $clase = new Clase();
        $clase->idclase = $request->get('idclase');
        $clase->nombre = $request->get('nombre');
        $clase->idseccion = $request->get('idseccion');
        $clase->save();
        return redirect('/clase');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $eliminarRegistro = Clase::find($id);
        return view('clase.delete')->with('eliminar', $eliminarRegistro);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $seccion = Seccion::all();
        $seccionSeleccionada = DB::table('seccions')
            ->join('clases', 'seccions.id', '=', 'clases.idseccion')
            ->select('seccions.*')
            ->where('clases.id', '=', $id)
            ->first();
        $editar = Clase::find($id);
        return view('clase.edit')->with('editar', $editar)->with('secciones', $seccion)->with('seccionSeleccionada', $seccionSeleccionada);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $clase = Clase::find($id);
        $clase->idclase = $request->get('idclase');
        $clase->nombre = $request->get('nombre');
        $clase->idseccion = $request->get('idseccion');
        $clase->save();
        return redirect('/clase');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarRegistro = Clase::find($id);
        $eliminarRegistro->delete();
        return redirect('/clase');
    }
}
