@extends('layout.app')
@section('vistasgenerales')

<h1>Registro de categoria</h1>
<form method="POST" class="form" action="{{route('editado.categoria', $categoria->id)}}">
    @csrf
    
    <div>
        <label for="nombre">nombre</label>
        <input value="{{$categoria->nombre}}" class="form-control" name="nombre" type="text">
    </div>
    <div>
        <label for="descripcion">descripcion</label>
        <input value="{{$categoria->descripcion}}"  class="form-control" name="descripcion" type="text">
    </div>
    <button type="submit" class="btn btn-dark mt-3">Editar categoria</button>
    <a class="btn btn-dark  mt-3" href="{{route('listar.categoria')}}">Cancelar</a>

</form>
@endsection