@extends('templates.main')
@section('title','Listado de estudios')
@section('contenido')

@if(Session::has('success'))  
<div class="alert alert-success" role="alert">
 {{ Session::get('success')}}
</div>
@endif

    <h1>Listado de estudios</h1>
    <a href="{{ route('estudios.create')}}"> Nuevo Estudio</a>
    <table class="table table-dark table-bordered table-striped" >
        <thead>
            <tr>
                <th>#</th>
                <th>Nivel</th>
                <th>Institucion</th>
                <th>Fecha_egresamiento</th>
                <th>Titulo</th>
                <th>Accion</th>
        </thead>
            <tbody>
                 @foreach ($estudios as $estudio)
            <tr>
                <td>{{$estudio->id}}</td>
                <td>{{$estudio->nivel}}</td>
                <td>{{$estudio->institucion}}</td>
                <td>{{$estudio->fecha_egresamiento}}</td>
                <td>{{$estudio->titulo}}</td> 
                <td> 
                <a class="btn btn-outline-primary" href="{{ route('estudios.edit', $estudio->id) }}">Editar</a>
<form action="{{ route('estudios.destroy',$estudio->id)}}" method="post">

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