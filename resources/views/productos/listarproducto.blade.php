@extends('layout.app')


@section('vistasgenerales')
<h1>Listado de productos</h1>

<table class="table table-dark table-striped" >
    <thead>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Descripcion</td>
            <td>Precio</td>
            <td>Categoria</td>
            <td>ACCIONES</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($producto as $value)

        <tr>
            <td>{{$value['id']}}</td>
            <td>{{$value['producto_nombre']}}</td>
            <td>{{$value['descripcion']}}</td>
            <td>{{$value['precio']}}</td>
            <td>{{$value['categoria_nombre']}}</td>
            <td>
                <a class="btn btn-warning" href="{{route('editar.producto',$value->id)}}">Editar producto</a>
                <a class="btn btn-danger" href="{{route('eliminar.producto',$value->id)}}">Eliminar</a>
                {{-- <a class="btn btn-danger" href="{{route('destroy.producto',$value->id)}}">Eliminar</a>
                <a class="btn btn-success" href="{{route('detalle.carro',$value->id)}}">Ver detalle</a>
                <a class="btn btn-dark" href="{{route('editar.carro',$value->id)}}">Editar carro</a> --}}
            </td>
        </tr>
            
        @endforeach

    </tbody>

</table>
<a class="btn btn-dark mx-3" href="{{route('home.index')}}">Ir al inicio</a>

<a class="btn btn-dark " href="{{route('registrar.producto')}}">registrar producto</a>
@endsection