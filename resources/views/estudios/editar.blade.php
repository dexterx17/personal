@extends('templates.main')
@section('title',' Editar estudio')
@section('contenido')
    

@if(Session::has('success'))  
<div class="alert alert-success" role="alert">
 {{ Session::get('success')}}
</div>
@endif

<h2>Editar Estudio</h2>

<form action="{{ route('estudios.update', $estudio->id)}}" method="post">
    @csrf
    <input type="hidden" name ="_method" value="put">


    <div class="form-group">
    <label for="nivel">Nivel *</label>
    <input type="text" name="nivel" class="form-control" value="{{$estudio->nivel}}" placeholder="Ingrese su nivel" required>
    </div>

    <div class="form-group">
    <label for="institucion">Institucion *</label>
    <input type="text" name="institucion" class="form-control" value="{{$estudio->institucion}}" placeholder="Ingrese su institucion" required>
    </div>

    <div class="form-group">
    <label for="fecha_egresamiento">Fecha *</label>
    <input type="dataTime" name="fecha_egresamiento" class="form-control" value="{{$estudio->fecha_egresamiento}}" placeholder="Ingrese su fecha_egresamiento" required>
    </div>

    <div class="form-group">
    <label for="titulo">Titulo *</label>
    <input type="text" name="titulo" class="form-control" value="{{$estudio->titulo}}" placeholder="Ingrese su titulo" required>
    </div>

    <div class="form-group">
    <button class="btn btn-outline-primary" type="submit" > Guardar </button> 
    <a class="btn btn-outline-primary" href="{{ route('estudios.index') }}" > Atras </a>
    </div>
    </form>
    
</body>
</html>

@endsection