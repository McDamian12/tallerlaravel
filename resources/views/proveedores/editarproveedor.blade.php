@extends('layout.app')


@section('vistasgenerales')

<h1>Registro de proveedores</h1>
<form method="POST" class="form" action="{{route('editado.proveedor', $proveedor->id)}}">
    @csrf
   
    <div>
        <label for="nombre">nombre</label>
        <input value="{{$proveedor->nombre}}" class="form-control" name="nombre" type="text">
    </div>
    <div>
        <label for="direccion">direccion</label>
        <input value="{{$proveedor->direccion}}"  class="form-control" name="direccion" type="text">
    </div>
    <div>
        <label for="numero">numero</label>
        <input value="{{$proveedor->numero}}" class="form-control" name="numero" type="text">
    </div>
    <div>
        <label for="correo">correo</label>
        <input value="{{$proveedor->correo}}" class="form-control" name="correo" type="text">
    </div>
  
  

    <button type="submit" class="btn btn-dark mt-3">Editar proveedor</button>
    <a class="btn btn-dark  mt-3" href="{{route('listar.proveedor')}}">Cancelar</a>

</form>
@endsection