<?php

namespace App\Http\Controllers;

use App\Models\TasaIntereses;
use Illuminate\Http\Request;

class TasaInteresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Tinteres = TasaIntereses::all();
        return view('tasaIntereses.index', compact('Tinteres'));
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
            'nombre' => 'required|numeric'
        ]);

        $Tinteres = new TasaIntereses();

        $Tinteres->tasa=$request->nombre;

        $Tinteres->save();
        return back()->with('mensaje', 'TASA DE INTERES REGISTRADA CON EXITO');
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
            'nombre' => 'required|numeric'
        ]);

        $Tinteres = TasaIntereses::find($id);

        $Tinteres->tasa=$request->nombre;
        $Tinteres->save();
        return back()->with('mensaje', 'ACTUALIZACION EXITOSA');
    }

 
    public function destroy($id)
    {
        $Tinteres = TasaIntereses::find($id);
        $Tinteres->delete();
        return back()->with('mensaje', 'ELIMINADO CON EXITO');
    }
}
