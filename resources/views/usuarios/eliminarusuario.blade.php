@extends('layout.app')


@section('vistasgenerales')

<form method="POST" action="{{route('destruir.usuario', $usuario->id)}}">
    @csrf
<div class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><h2>nombre: {{$usuario->nombre}}</h2></li>
      <li class="list-group-item"><h2>direccion: {{$usuario->direccion}}</h2> </li>
      <li class="list-group-item"><h2> numero: {{$usuario->numero}}</h2></li>
      <li class="list-group-item"><h2>correo: {{$usuario->correo}}</h2></li>

    </ul>
  </div>
  <h1>Esta seguro que desea eliminar?</h1>
    <button type="submit" class="btn btn-danger" >Eliminar</button>
    <a class="btn btn-danger" href="{{route('listar.usuario')}}">Cancelar</a>
</form>


@endsection