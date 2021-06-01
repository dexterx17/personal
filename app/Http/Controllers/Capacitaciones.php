<?php

namespace App\Http\Controllers;

use App\Models\Capacitacion;
use App\Models\User;
use Illuminate\Http\Request;

class Capacitaciones extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          //selecionar todos los datos tabla 
          $capacitaciones = Capacitacion::all();
          // le paso a una vista todos los datos
          return view('capacitaciones.listado',[
          'capacitaciones'=>$capacitaciones
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
        return view('capacitaciones.crear',[
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
        
        $capacitacion = new Capacitacion($request->all());
        $capacitacion->save();

        return redirect()-> route('capacitaciones.index')->with('success','Usuario creado correctamente');

   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Capacitacion  $capacitacion
     * @return \Illuminate\Http\Response
     */
    public function show(Capacitacion $capacitacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Capacitacion  $capacitacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Capacitacion $capacitacion)
    {
        return view('capacitaciones.editar',[
            'capacitacion' => $capacitacion

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Capacitacion  $capacitacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Capacitacion $capacitacion)
    {
        $capacitacion->fill($request->all());
        $capacitacion->save();
    
        return redirect()->route('capacitaciones.index')->with('success','Usuario editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Capacitacion  $capacitacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Capacitacion $capacitacion)
    {
        $capacitacion->delete();
        return redirect()->route('capacitaciones.index')->with('success','Usuario eliminado correctamente');
    }
}
