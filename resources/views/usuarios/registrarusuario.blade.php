@extends('layout.app')


@section('vistasgenerales')

<h1>Registro de usuarios</h1>
<div class="form mt-5 ">
<form method="POST" class="form" action="{{route('guardar.usuario')}}">
    @csrf
    
    <div>
        <label for="nombre">Nombre</label>
        <input class="form-control" name="nombre" type="text">
    </div>
    <div>
        <label for="apellidos">apellidos</label>
        <input class="form-control" name="apellidos" type="text">
    </div>
    <div>
        <label for="correo">correo</label>
        <input class="form-control" name="correo" type="text">
    </div>
    <div>
        <label for="numero">numero</label>
        <input class="form-control" name="numero" type="text">
    </div>
    <div>
        <label for="direccion">direccion</label>
        <input class="form-control" name="direccion" type="text">
    </div>
    <div>
        <select name="rol" class="form-control">
            @foreach ($rol as $value)
            <option value="{{$value->id}}">{{$value->nombre}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-dark mt-3">Registrar usuario</button>
    <a class="btn btn-dark  mt-3" href="{{route('listar.usuario')}}">Cancelar</a>
</form>
</div>
@endsection