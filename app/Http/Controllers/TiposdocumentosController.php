<?php

namespace App\Http\Controllers;

use App\Models\TipoDocumentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TiposdocumentosController extends Controller
{
    
    public function index()
    {
        if (Auth::user()->id_rol == 3) {
            $tipoDocuemto = TipoDocumentos::all();
            return view('tipoDocumentos.index', compact('tipoDocuemto'));
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required'
        ]);

        $newDocuemento = new TipoDocumentos();

        $newDocuemento->nombre=$request->nombre;

        $newDocuemento->save();

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

        $tipoDocuemto = TipoDocumentos::find($id);

        $tipoDocuemto->nombre=$request->nombre;
        
        $tipoDocuemto->save();
        return back()->with('mensaje', 'DOCUMENTO ACTUALIZADO CON EXITO');
    }


    public function destroy($id)
    {
        $tipoDocuemto = TipoDocumentos::find($id);
        $tipoDocuemto->delete();
        return back()->with('mensaje', 'DOCUMENTO ELIMINADO CON EXITO');
    }
}
