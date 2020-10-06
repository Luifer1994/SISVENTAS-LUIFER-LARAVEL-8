<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'id_tipoDocumento' => ['required'],
            'numeroDocumento' => ['required', 'integer'],
            'genero' => ['required'],
            'rol' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'ciudad' => ['required'],
            'direccion' => ['required', 'string'],
            'password' => $this->passwordRules(),
        ])->validate();


        return User::create([
            'id_tipoDocumento' => $input['id_tipoDocumento'],
            'documento' => $input['numeroDocumento'],
            'id_genero' => $input['genero'],
            'id_rol' => $input['rol'],
            'id_ciudad' => $input['ciudad'],
            'direccion' => $input['direccion'],
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
