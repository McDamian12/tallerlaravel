@extends('layout.app')


@section('vistasgenerales')
<div class="card" style="width: 18rem;">
    <h1>Eliminar producto</h1>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><h2>Categoria: {{$producto->categoria}} </h2></li>
      <li class="list-group-item"><h2>Categoria: {{$producto->categoria}} </h2></li>
      <li class="list-group-item"><h2>nombre: {{$producto->nombre}} </h2></li>
      <li class="list-group-item"><h2>descripcion: {{$producto->descripcion}} </h2></li>
      <li class="list-group-item"><h2><h2>precio: {{$producto->precio}} </h2> </h2></li>
    </ul>
  </div>
<form method="POST" action="{{route('destruir.producto', $producto->id)}}">
    @csrf

    <h1>Esta seguro que desea eliminar?</h1>

    <button type="submit" class="btn btn-danger" >Eliminar</button>
    <a class="btn btn-danger" href="{{route('listar.producto')}}">Cancelar</a>



</form>


@endsection