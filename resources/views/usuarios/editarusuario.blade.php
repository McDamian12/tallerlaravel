@extends('layout.app')


@section('vistasgenerales')

<h1>Registro de cliente</h1>
<form method="POST" class="form" action="{{route('editado.cliente', $usuario->id)}}">
    @csrf
    
    <div>
        <label for="nombre">nombre</label>
        <input value="{{$usuario->nombre}}" class="form-control" name="nombre" type="text">
    </div>
    <div>
        <label for="apellidos">apellidos</label>
        <input value="{{$usuario->apellidos}}" class="form-control" name="apellidos" type="text">
    </div>
    <div>
        <label for="correo">correo</label>
        <input value="{{$usuario->correo}}" class="form-control" name="correo" type="text">
    </div>
    <div>
        <label for="numero">numero</label>
        <input value="{{$usuario->numero}}" class="form-control" name="numero" type="text">
    </div>
    <div>
        <label for="direccion">direccion</label>
        <input value="{{$usuario->direccion}}"  class="form-control" name="direccion" type="text">
    </div>
    <div>
        <select name="rol" class="form-control">
            @foreach ($rol as $value)
            <option value="{{$value->id}}">{{$value->nombre}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-dark mt-3">Editar usuario</button>
    <a class="btn btn-dark  mt-3" href="{{route('listar.usuario')}}">Cancelar</a>

</form>
@endsection