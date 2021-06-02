<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioStoreRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class Usuarios extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::orderBy('name','desc')->get();

        return response()->json([
            'status'    =>  true,
            'data'  => $usuarios
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioStoreRequest $request)
    {
        //Tipos de errores
        //1) Error de base de datos
        //2) Error de validacion
        //3) Errores desconocidos
        try{
            $usuario = User::create($request->all());            
        }catch(Exception $e){
            return response()->json([
                'status'    =>  false,
                'error' => $e->getMessage(),
                'msg' => 'Error al crear usuario!'
            ]);  
        }

        return response()->json([
            'status'    =>  true,
            'data'  => $usuario
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
