@extends('layout.app')


@section('vistasgenerales')
<div class="card" style="width: 18rem;">
    <h1>Eliminar proveedores</h1>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><h2>nombre: {{$proveedor->nombre}} </h2></li>
      <li class="list-group-item"><h2>direccion: {{$proveedor->direccion}} </h2></li>
      <li class="list-group-item"><h2><h2>numero: {{$proveedor->numero}} </h2> </h2></li>
      <li class="list-group-item"><h2><h2>correo: {{$proveedor->correo}} </h2> </h2></li>

    </ul>
  </div>
<form method="POST" action="{{route('destruir.proveedor', $proveedor->id)}}">
    @csrf

    <h1>Esta seguro que desea eliminar?</h1>

    <button type="submit" class="btn btn-danger" >Eliminar</button>
    <a class="btn btn-danger" href="{{route('listar.proveedor')}}">Cancelar</a>



</form>


@endsection