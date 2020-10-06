<?php

namespace App\Http\Controllers;

use App\Models\EstadoPrestamos;
use Illuminate\Http\Request;

class EstadoPrestamosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Eprestamos = EstadoPrestamos::all();
        return view('EstadoPrestamos.index', compact('Eprestamos'));
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

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required'
        ]);

        $Eprestamos = new EstadoPrestamos();

        $Eprestamos->nombre=$request->nombre;
        $Eprestamos->save();
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
        $request->validate([
            'nombre' => 'required'
        ]);
        $Eprestamos = EstadoPrestamos::find($id);
        $Eprestamos->nombre=$request->nombre;
        $Eprestamos->save();

        return back()->with('mensaje', 'ACTUALIZACION EXITOSA');
    }

    public function destroy($id)
    {
        $Eprestamos = EstadoPrestamos::find($id);
        
        $Eprestamos->delete();

        return  back()->with('mensaje', 'REGISTRO ELIMINADO CON EXITO');
    }
}
