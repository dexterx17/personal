<?php

namespace App\Http\Controllers;

use App\Models\Estudio;
use App\Models\User;
use Illuminate\Http\Request;

class Estudios extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          //selecionar todos los datos tabla 
          $estudios = Estudio::all();
          // le paso a una vista todos los datos
          return view('estudios.listado',[
          'estudios'=>$estudios
          ]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::select('id','name')->get();
        return view('estudios.crear',[
        'usuarios'=>$usuarios
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estudio = new Estudio($request->all());
        $estudio->save();

        return redirect()-> route('estudios.index')->with('success','Usuario creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudio  $estudio
     * @return \Illuminate\Http\Response
     */
    public function show(Estudio $estudio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudio  $estudio
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudio $estudio)
    {
        return view('estudios.editar',[
            'estudio' => $estudio

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudio  $estudio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudio $estudio)
    {
        $estudio->fill($request->all());
        $estudio->save();
    
        return redirect()->route('estudios.index')->with('success','Estudio editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudio  $estudio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudio $estudio)
    {
        $estudio->delete();
        return redirect()->route('estudios.index')->with('success','Usuario eliminado correctamente');
    }
}
