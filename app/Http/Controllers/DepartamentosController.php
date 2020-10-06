<?php

namespace App\Http\Controllers;

use App\Models\Departamentos;
use App\Models\Paises;
use Illuminate\Http\Request;

class DepartamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamentos::select("departamentos.id", "departamentos.nombre",
                        "departamentos.id_pais", "paises.nombre as nombreP")
                        ->join("paises", "departamentos.id_pais", "=", "paises.id")
                        ->get();
        $paises = Paises::all();
        return view('departamentos.index', compact('departamentos', 'paises'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            'pais' => 'required'
        ]);

        $newDepartamento = new Departamentos();

        $newDepartamento->nombre=$request->nombre;
        $newDepartamento->id_pais=$request->pais;

        $newDepartamento->save();

        return back()->with('mensaje', 'REGISTRO EXITOSO');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $departamento = Departamentos::find($id);
        
        $departamento->nombre=$request->nombre;
        $departamento->id_pais=$request->pais;
        $departamento->save();
        
        return back()->with('mensaje', 'DEPARTAMENTO ACTUALIZADO CON EXITO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departamento = Departamentos::findOrFail($id);
        $departamento->delete();
        return back()->with('mensaje', 'DEPARTAMENTO ELIMINADO CON EXITO');
    }
}
