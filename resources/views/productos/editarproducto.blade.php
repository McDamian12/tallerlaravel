@extends('layout.app')


@section('vistasgenerales')

<h1>Registro de carro</h1>
<form method="POST" class="form" action="{{route('editado.producto', $producto->id)}}">
    @csrf
    <div>
        <select name="categoria" class="form-control">
            @foreach ($categoria as $value)
            <option value="{{$value->nombre}}">{{$value->nombre}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="nombre">nombre</label>
        <input value="{{$producto->nombre}}" class="form-control" name="nombre" type="text">
    </div>
    <div>
        <label for="descripcion">descripcion</label>
        <input value="{{$producto->descripcion}}"  class="form-control" name="descripcion" type="text">
    </div>
    <div>
        <label for="precio">precio</label>
        <input value="{{$producto->precio}}" class="form-control" name="precio" type="text">
    </div>
  

    <button type="submit" class="btn btn-dark mt-3">Editar producto</button>
    <a class="btn btn-dark  mt-3" href="{{route('listar.producto')}}">Cancelar</a>

</form>
@endsection