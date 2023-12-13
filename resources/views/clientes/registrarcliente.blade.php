@extends('layout.app')


@section('vistasgenerales')

<h1>Registro de cliente</h1>
<div class="form mt-5 ">
<form method="POST" class="form" action="{{route('guardar.cliente')}}">
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
   
    <button type="submit" class="btn btn-dark mt-3">Registrar cliente</button>
    <a class="btn btn-dark  mt-3" href="{{route('listar.cliente')}}">Cancelar</a>



</form>
</div>
@endsection