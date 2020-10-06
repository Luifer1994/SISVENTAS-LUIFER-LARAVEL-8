<?php

namespace App\Http\Controllers;

use App\Models\Ciudades;
use App\Models\Departamentos;
use Illuminate\Http\Request;

class CiudadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamentos::all();
        $ciudades = Ciudades::select("ciudades.id", "ciudades.nombre", "ciudades.id_departamento",
                    "departamentos.nombre as nombreD")
                    ->join("departamentos", "ciudades.id_departamento", "=", "departamentos.id")
                    ->get();
        return view('ciudades.index', compact('departamentos', 'ciudades'));
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required | string',
            'departamento' => 'required'
        ]);

        $newCiudad = new Ciudades();

        $newCiudad->nombre=$request->nombre;
        $newCiudad->id_departamento=$request->departamento;

        $newCiudad->save();

        return back()->with('mensaje', 'REGISTRO EXITOSO');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $ciudad =  Ciudades::find($id);

        $ciudad->nombre=$request->nombre;
        $ciudad->id_departamento=$request->departamento;

        $ciudad->save();

        return back()->with('mensaje', 'CIUDAD ACTUALIZADA CON EXITO');
    }

    
    public function destroy($id)
    {
        $ciudad = Ciudades::findOrFail($id);
        $ciudad->delete();
        return back()->with('mensaje', 'CIUDAD ELIMINADO CON EXITO');
    }
}
