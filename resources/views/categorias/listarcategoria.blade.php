@extends('layout.app')


@section('vistasgenerales')
<h1>Listado de categorias</h1>

<table class="table table-dark table-striped" >
    <thead>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Descripcion</td>
            <td>ACCIONES</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($categoria as $value)

        <tr>
            <td>{{$value['id']}}</td>
            <td>{{$value['nombre']}}</td>
            <td>{{$value['descripcion']}}</td>
            <td>
                <a class="btn btn-warning" href="{{route('editar.categoria',$value->id)}}">Editar categoria</a>
                <a class="btn btn-danger" href="{{route('eliminar.categoria',$value->id)}}">Eliminar categoria</a>
                
            </td>
        </tr>
            
        @endforeach

    </tbody>

</table>
<a class="btn btn-dark mx-3" href="{{route('home.index')}}">Ir al inicio</a>

<a class="btn btn-dark " href="{{route('registrar.categoria')}}">registrar categoria</a>
@endsection