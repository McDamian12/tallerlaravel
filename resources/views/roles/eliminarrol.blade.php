@extends('layout.app')


@section('vistasgenerales')

<form method="POST" action="{{route('destruir.rol', $rol->id)}}">
    @csrf
<div class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><h2>nombre: {{$rol->nombre}}</h2></li>
    </ul>
  </div>
  <h1>Esta seguro que desea eliminar?</h1>
    <button type="submit" class="btn btn-danger" >Eliminar</button>
    <a class="btn btn-danger" href="{{route('listar.rol')}}">Cancelar</a>
</form>


@endsection