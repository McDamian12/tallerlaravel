@extends('layout.app')


@section('vistasgenerales')

<form method="POST" action="{{route('destruir.cliente', $cliente->id)}}">
    @csrf
<div class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><h2>nombre: {{$cliente->nombre}}</h2></li>
      <li class="list-group-item"><h2>direccion: {{$cliente->direccion}}</h2> </li>
      <li class="list-group-item"><h2> numero: {{$cliente->numero}}</h2></li>
      <li class="list-group-item"><h2>correo: {{$cliente->correo}}</h2></li>

    </ul>
  </div>
  <h1>Esta seguro que desea eliminar?</h1>
    <button type="submit" class="btn btn-danger" >Eliminar</button>
    <a class="btn btn-danger" href="{{route('listar.cliente')}}">Cancelar</a>
</form>


@endsection