@extends('layout.app')


@section('vistasgenerales')

<h1>Registro de categoria</h1>
<div class="form mt-5 ">
<form method="POST" class="form" action="{{route('guardar.categoria')}}">
    @csrf
    
    <div>
        <label for="nombre">Nombre</label>
        <input class="form-control" name="nombre" type="text">
    </div>
    <div>
        <label for="descripcion">descripcion</label>
        <input class="form-control" name="descripcion" type="text">
    </div>
  
   
    <button type="submit" class="btn btn-dark mt-3">Registrar categoria</button>
    <a class="btn btn-dark  mt-3" href="{{route('listar.categoria')}}">Cancelar</a>



</form>
</div>
@endsection