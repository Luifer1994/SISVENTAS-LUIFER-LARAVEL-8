<?php

namespace App\Http\Controllers;

use App\Models\EstadoProductos;
use App\Models\Generos;
use App\Models\Roles;
use Illuminate\Http\Request;

class GenerosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generos = Generos::all();
        $estados = EstadoProductos::all();
        $roles         = Roles::all();
        return view('utilidades.utilidades2', compact('generos', 'estados', 'roles'));
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
        ]);

        $newGnero = new Generos();

        $newGnero->nombre=$request->nombre;

        $newGnero->save();

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
        $genero = Generos::find($id);
        
        $genero->nombre=$request->nombre;
        $genero->save();
        
        return back()->with('mensaje', 'GENERO '.$genero->nombre.' ACTUALIZADO CON EXITO');
    }

    public function destroy($id)
    {
        $genero = Generos::findOrFail($id);
        $genero->delete();
        return back()->with('mensaje', 'GENERO '.$genero->nombre.' ELIMINADO CON EXITO');
    }
}
