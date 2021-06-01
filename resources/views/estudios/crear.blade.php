
@extends('templates.main')
@section('title','Crear estudio')
@section('contenido')

<h1>Crear Estudio</h1>
<div>
   

</div>

    <form action="{{route('estudios.store')}}" method="post">
    <label for="nombres">Usuario</label>
    <select name="user_id">
    @foreach ($usuarios as $usuario)
    <option value = "{{$usuario -> id}}"> {{$usuario->name}}</option>
    @endforeach
    </select>

        @csrf

        <div class="form-group">
            <labelinstitucionombres">Nivel *</label>
                <input type="text" name="nivel" value="{{ old('nivel')}}"  class="form-control @error('nivel') is-invalid  @enderror" placeholder="Ingrese su nivel" required>
                    @error('nivel')
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
            <label for="fecha_egresamiento"> Fecha*</label>
                <input type="dataTime" name="fecha_egresamiento" value="{{ old('fecha_egresamiento')}}"  class="form-control @error('fecha_egresamiento') is-invalid  @enderror" placeholder="Ingrese su fecha_egresamiento" required>
                    @error('fecha_egresamiento')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
        </div>

        <div class="form-group">
            <label for="titulo"> Titulo*</label>
                <input type="text" name="titulo" value="{{ old('titulo')}}"  class="form-control @error('titulo') is-invalid  @enderror" placeholder="Ingrese su titulo" required>
                    @error('titulo')
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