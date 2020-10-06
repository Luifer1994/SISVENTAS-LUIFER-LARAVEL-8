<?php

namespace App\Http\Controllers;

use App\Models\Ciudades;
use App\Models\Generos;
use App\Models\Roles;
use App\Models\TipoDocumentos;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class UsersController extends Controller
{
    
    public function index()
    {
        $tipoDocumento  = TipoDocumentos::all();
        $roles          = Roles::all();
        $generos        = Generos::all();
        $ciudades       = Ciudades::all();
        $usuarios       = User::select("users.id", "users.id_tipoDocumento", "users.password",
         "users.name", "users.documento", "users.email", "users.id_genero", "users.id_rol",
         "users.id_ciudad", "users.direccion", "roles.nombreR")
        ->join("roles", "users.id_rol", "=", "roles.id")
        ->get();
        
        return view('usuarios.index', compact('usuarios','tipoDocumento','roles','generos', 'ciudades'));
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipoDocumento' => ['required'],
            'numeroDocumento' => ['required', 'integer'],
            'genero' => ['required'],
            'rol' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'ciudad' => ['required'],
            'direccion' => ['required', 'string'],
            'password' => ['required'],
        ]);


        $user = new User();

        $user->id_tipoDocumento=$request->tipoDocumento;
        $user->documento=$request->numeroDocumento;
        $user->name=$request->name;
        $user->id_genero=$request->genero;
        $user->id_rol=$request->rol;
        $user->email=$request->email;
        $user->id_ciudad=$request->ciudad;
        $user->direccion=$request->direccion;
        $user->password=Hash::make($request->password);

        $user->save();

        return back()->with('mensaje', 'Usuario Registro exito');

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
        // $request->validate([
        //     'tipoDocumento' => ['required'],
        //     'numeroDocumento' => ['required', 'integer'],
        //     'genero' => ['required'],
        //     'rol' => ['required'],
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'ciudad' => ['required'],
        //     'direccion' => ['required', 'string'],
        //     'password' => ['required'],
        // ]);

        $user = User::find($id);

        $user->id_tipoDocumento=$request->tipoDocumento;
        $user->documento=$request->numeroDocumento;
        $user->name=$request->name;
        $user->id_genero=$request->genero;
        $user->id_rol=$request->rol;
        $user->email=$request->email;
        $user->id_ciudad=$request->ciudad;
        $user->direccion=$request->direccion;
        

        $user->save();

        return back()->with('mensaje', 'Usuario Actualizado exito');

    }

    
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();
        return back()->with('mensaje', 'Usuario Eliminado con exito');
    }

    public function logout()
    {
        session()->flush();
        return view('auth.login');
    } 
}
