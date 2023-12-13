@extends('layout.app')


@section('vistasgenerales')

<h1>Registro de proveedores</h1>
<div class="form mt-5 ">
<form method="POST" class="form" action="{{route('guardar.proveedor')}}">
    @csrf
   
    <div>
        <label for="nombre">Nombre</label>
        <input class="form-control" name="nombre" type="text">
    </div>
    <div>
        <label for="direccion">direccion</label>
        <input class="form-control" name="direccion" type="text">
    </div>
    <div>
        <label for="numero">numero</label>
        <input class="form-control" name="numero" type="text">
    </div>
    <div>
        <label for="correo">correo</label>
        <input class="form-control" name="correo" type="text">
    </div>
   
    <button type="submit" class="btn btn-dark mt-3">Registrar proveedor</button>
    <a class="btn btn-dark  mt-3" href="{{route('listar.proveedor')}}">Cancelar</a>



</form>
</div>
@endsection