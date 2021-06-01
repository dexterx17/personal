@extends('templates.main')
@section('title','Listado de capacitaciones')
@section('contenido')

@if(Session::has('success'))  
<div class="alert alert-success" role="alert">
 {{ Session::get('success')}}
</div>
@endif

    <h1>Listado de capacitaciones</h1>
    <a href="{{ route('capacitaciones.create')}}"> Nuevo Capacitacion</a>
    <table class="table table-dark table-bordered table-striped" >
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Istitucion</th>
                <th>Fecha</th>
                <th>Horas</th>
                <th>Acciones</th>
            </tr>
        </thead>
            <tbody>
                 @foreach ($capacitaciones as $cap)
            <tr>
                <td>{{$cap->id}}</td>
                <td>{{$cap->nombre}}</td>
                <td>{{$cap->institucion}}</td>
                <td>{{$cap->fecha}}</td>
                <td>{{$cap->horas}}</td> 
                <td> 
                <a class="btn btn-outline-primary" href="{{ route('capacitaciones.edit', $cap->id) }}">Editar</a>
<form action="{{ route('capacitaciones.destroy',$cap->id)}}" method="post">

@csrf
@method('delete')
<button class="btn btn-outline-danger" type="submit">Eliminar</a>
</form>
</td>
        
            </tr>
                @endforeach
            </tbody>
    </table>


@endsection