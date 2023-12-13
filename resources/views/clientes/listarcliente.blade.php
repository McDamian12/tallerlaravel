@extends('layout.app')


@section('vistasgenerales')
<h1>Listado de clientes</h1>

<table class="table table-dark table-striped" >
    <thead>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Direccion</td>
            <td>Numero</td>
            <td>Correo</td>

            <td>ACCIONES</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($cliente as $value)

        <tr>
            <td>{{$value['id']}}</td>
            <td>{{$value['nombre']}}</td>
            <td>{{$value['direccion']}}</td>
            <td>{{$value['numero']}}</td>
            <td>{{$value['correo']}}</td>

            <td>
                <a class="btn btn-warning" href="{{route('editar.cliente',$value->id)}}">Editar cliente</a>
                <a class="btn btn-danger" href="{{route('eliminar.cliente',$value->id)}}">Eliminar cliente</a>
                
            </td>
        </tr>
            
        @endforeach

    </tbody>

</table>
<a class="btn btn-dark mx-3" href="{{route('home.index')}}">Ir al inicio</a>

<a class="btn btn-dark " href="{{route('registrar.cliente')}}">registrar cliente</a>
@endsection