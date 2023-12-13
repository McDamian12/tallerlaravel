@extends('layout.app')


@section('vistasgenerales')
<h1>Listado de proveedores</h1>

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
        @foreach ($proveedor as $value)

        <tr>
            <td>{{$value['id']}}</td>
            <td>{{$value['nombre']}}</td>
            <td>{{$value['direccion']}}</td>
            <td>{{$value['numero']}}</td>
            <td>{{$value['correo']}}</td>
            <td>
                <a class="btn btn-warning" href="{{route('editar.proveedor',$value->id)}}">Editar proveedor</a>
                <a class="btn btn-danger" href="{{route('eliminar.proveedor',$value->id)}}">Eliminar</a>
                {{-- <a class="btn btn-danger" href="{{route('destroy.proveedor',$value->id)}}">Eliminar</a>
                <a class="btn btn-success" href="{{route('detalle.carro',$value->id)}}">Ver detalle</a>
                <a class="btn btn-dark" href="{{route('editar.carro',$value->id)}}">Editar carro</a> --}}
            </td>
        </tr>
            
        @endforeach

    </tbody>

</table>
<a class="btn btn-dark mx-3" href="{{route('home.index')}}">Ir al inicio</a>

<a class="btn btn-dark " href="{{route('registrar.proveedor')}}">registrar proveedor</a>
@endsection