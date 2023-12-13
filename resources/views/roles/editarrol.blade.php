@extends('layout.app')


@section('vistasgenerales')

<h1>Registro de rol</h1>
<form method="POST" class="form" action="{{route('editado.rol', $rol->id)}}">
    @csrf
    
    <div>
        <label for="nombre">nombre</label>
        <input value="{{$rol->nombre}}" class="form-control" name="nombre" type="text">
    </div>
   
    <button type="submit" class="btn btn-dark mt-3">Editar rol</button>
    <a class="btn btn-dark  mt-3" href="{{route('listar.rol')}}">Cancelar</a>

</form>
@endsection