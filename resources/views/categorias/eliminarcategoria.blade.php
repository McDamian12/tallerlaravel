@extends('layout.app')


@section('vistasgenerales')

<form method="POST" action="{{route('destruir.categoria', $categoria->id)}}">
    @csrf
<div class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><h2>nombre: {{$categoria->nombre}}</h2></li>
      <li class="list-group-item"><h2>descripcion: {{$categoria->descripcion}}</h2> </li>
      

    </ul>
  </div>
  <h1>Esta seguro que desea eliminar?</h1>
    <button type="submit" class="btn btn-danger" >Eliminar</button>
    <a class="btn btn-danger" href="{{route('listar.categoria')}}">Cancelar</a>
</form>


@endsection