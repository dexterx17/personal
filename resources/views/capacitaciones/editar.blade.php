@extends('templates.main')
@section('title',' Editar capacitacion')
@section('contenido')
    

@if(Session::has('success'))  
<div class="alert alert-success" role="alert">
 {{ Session::get('success')}}
</div>
@endif

<h2>Editar Capacitacion</h2>

<form action="{{ route('capacitaciones.update', $capacitacion->id)}}" method="post">
    @csrf
    <input type="hidden" name ="_method" value="put">


    <div class="form-group">
    <label for="nombre">Nombre *</label>
    <input type="text" name="nombre" class="form-control" value="{{$capacitacion->nombre}}" placeholder="Ingrese su nombre" required>
    </div>

    <div class="form-group">
    <label for="institucion">Institucion *</label>
    <input type="text" name="institucion" class="form-control" value="{{$capacitacion->institucion}}" placeholder="Ingrese su institucion" required>
    </div>

    <div class="form-group">
    <label for="fecha">Fecha *</label>
    <input type="text" name="fecha" class="form-control" value="{{$capacitacion->fecha}}" placeholder="Ingrese su fecha" required>
    </div>

    <div class="form-group">
    <label for="horas">Horas *</label>
    <input type="text" name="horas" class="form-control" value="{{$capacitacion->horas}}" placeholder="Ingrese su horas" required>
    </div>

    <div class="form-group">
    <button class="btn btn-outline-primary" type="submit" > Guardar </button> 
    <a class="btn btn-outline-primary" href="{{ route('capacitaciones.index') }}" > Atras </a>
    </div>
    </form>
    
</body>
</html>

@endsection