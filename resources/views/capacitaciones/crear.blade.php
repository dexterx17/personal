
@extends('templates.main')
@section('title','Crear personas')
@section('contenido')

<h1>Crear Capacitacion</h1>
<div>
   

</div>

    <form action="{{route('capacitaciones.store')}}" method="post">
    <label for="nombres">Usuario</label>
    <select name="user_id">
    @foreach ($usuarios as $usuario)
    <option value = "{{$usuario -> id}}"> {{$usuario->name}}</option>
    @endforeach
    </select>

        @csrf


        <div class="form-group">
            <labelinstitucionombres">Nombre *</label>
                <input type="text" name="nombre" value="{{ old('nombre')}}"  class="form-control @error('nombre') is-invalid  @enderror" placeholder="Ingrese su nombre" required>
                    @error('nombre')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
        </div>
        
        <div class="form-group">
            <label for="institucion">Institucion*</label>
                <input type="text" name="institucion" value="{{ old('institucion')}}"  class="form-control @error('institucion') is-invalid  @enderror" placeholder="Ingrese su institucion" required>
                    @error('institucion')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
        </div>

        <div class="form-group">
            <label for="fecha"> Fecha*</label>
                <input type="dataTime" name="fecha" value="{{ old('fecha')}}"  class="form-control @error('fecha') is-invalid  @enderror" placeholder="Ingrese su fecha" required>
                    @error('fecha')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
        </div>

        <div class="form-group">
            <label for="horas"> Horas*</label>
                <input type="time" name="horas" value="{{ old('horas')}}"  class="form-control @error('horas') is-invalid  @enderror" placeholder="Ingrese su horas" required>
                    @error('horas')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
        </div>
        

        

    <div class="form-group" >
    <button class="btn btn-outline-primary"  class="form-control" type="submit"> Guardar</button>

    </button>
    </div>

    </form>
    @endsection