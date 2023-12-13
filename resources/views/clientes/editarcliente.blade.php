@extends('layout.app')


@section('vistasgenerales')

<h1>Registro de cliente</h1>
<form method="POST" class="form" action="{{route('editado.cliente', $cliente->id)}}">
    @csrf
    
    <div>
        <label for="nombre">nombre</label>
        <input value="{{$cliente->nombre}}" class="form-control" name="nombre" type="text">
    </div>
    <div>
        <label for="direccion">direccion</label>
        <input value="{{$cliente->direccion}}"  class="form-control" name="direccion" type="text">
    </div>
    <div>
        <label for="numero">numero</label>
        <input value="{{$cliente->numero}}" class="form-control" name="numero" type="text">
    </div>

    <div>
        <label for="correo">correo</label>
        <input value="{{$cliente->correo}}" class="form-control" name="correo" type="text">
    </div>
  

    <button type="submit" class="btn btn-dark mt-3">Editar cliente</button>
    <a class="btn btn-dark  mt-3" href="{{route('listar.cliente')}}">Cancelar</a>

</form>
@endsection