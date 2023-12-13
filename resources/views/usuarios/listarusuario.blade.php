@extends('layout.app')


@section('vistasgenerales')
<h1>Listado de usuarios</h1>

<table class="table table-dark table-striped" >
    <thead>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>Correo</td>
            <td>Numero</td>
            <td>Direccion</td>
            <td>Rol</td>
            <td>ACCIONES</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuario as $value)

        <tr>
            <td>{{$value['id']}}</td>
            <td>{{$value['usuario_nombre']}}</td>
            <td>{{$value['apellidos']}}</td>
            <td>{{$value['correo']}}</td>
            <td>{{$value['numero']}}</td>
            <td>{{$value['direccion']}}</td>
            <td>{{$value['rol_nombre']}}</td>
            <td>
                <a class="btn btn-warning" href="{{route('editar.usuario',$value->id)}}">Editar usuario</a>
                <a class="btn btn-danger" href="{{route('eliminar.usuario',$value->id)}}">Eliminar usuario</a>
                
            </td>
        </tr>
            
        @endforeach

    </tbody>

</table>
<a class="btn btn-dark mx-3" href="{{route('home.index')}}">Ir al inicio</a>

<a class="btn btn-dark " href="{{route('registrar.usuario')}}">registrar usuario</a>
@endsection