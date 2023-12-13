@extends('layout.app')


@section('vistasgenerales')

<h1>Registro de rol</h1>
<div class="form mt-5 ">
<form method="POST" class="form" action="{{route('guardar.rol')}}">
    @csrf
    
    <div>
        <label for="nombre">Nombre</label>
        <input class="form-control" name="nombre" type="text">
    </div>
    <button type="submit" class="btn btn-dark mt-3">Registrar rol</button>
    <a class="btn btn-dark  mt-3" href="{{route('listar.rol')}}">Cancelar</a>
</form>
</div>
@endsection