<?php

namespace App\Http\Controllers;

use App\Models\Ciudades;
use App\Models\Departamentos;
use App\Models\Paises;
use App\Models\Roles;
use Illuminate\Http\Request;

class PaisesController extends Controller
{
    public function index()
    {
        $paises = Paises::all();
        return view('paises.index', compact('paises'));
    }

   
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required | string',
        ]);

        $newPais = new Paises();

        $newPais->nombre=$request->nombre;

        $newPais->save();

        return back()->with('mensaje', 'REGISTRO EXITOSO');
    }

    
    public function show()
    {
        $pais = Paises::get();
        return $pais;
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
        $pais = Paises::find($id);
        
        $pais->nombre=$request->nombre;
        $pais->save();
        
        return back()->with('mensaje', 'PAIS ACTUALIZADO CON EXITO');
    }


    public function destroy(Request $request, $id)
    {
        $pais = Paises::findOrFail($id);
        $pais->delete();
        return back()->with('mensaje', 'Pais Eliminado con exito');
    }
}
