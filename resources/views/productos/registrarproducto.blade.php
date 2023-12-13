@extends('layout.app')


@section('vistasgenerales')

<h1>Registro de producto</h1>
<div class="form mt-5 ">
<form method="POST" class="form" action="{{route('guardar.producto')}}">
    @csrf
    <div>
        <select name="categoria" class="form-control">
            @foreach ($categoria as $value)
            <option value="{{$value->id}}">{{$value->nombre}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="nombre">Nombre</label>
        <input class="form-control" name="nombre" type="text">
    </div>
    <div>
        <label for="descripcion">Descripcion</label>
        <input class="form-control" name="descripcion" type="text">
    </div>
    <div>
        <label for="precio">Precio</label>
        <input class="form-control" name="precio" type="number">
    </div>
   
    <button type="submit" class="btn btn-dark mt-3">Registrar producto</button>
    <a class="btn btn-dark  mt-3" href="{{route('listar.producto')}}">Cancelar</a>



</form>
</div>
@endsection