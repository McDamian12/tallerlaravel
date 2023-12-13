@extends('layout.app')


@section('vistasgenerales')
<h1>Listado de roles</h1>

<table class="table table-dark table-striped" >
    <thead>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>ACCIONES</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($rol as $value)

        <tr>
            <td>{{$value['id']}}</td>
            <td>{{$value['nombre']}}</td>
            
            <td>
                <a class="btn btn-warning" href="{{route('editar.rol',$value->id)}}">Editar rol</a>
                <a class="btn btn-danger" href="{{route('eliminar.rol',$value->id)}}">Eliminar rol</a>
                
            </td>
        </tr>
            
        @endforeach

    </tbody>

</table>
<a class="btn btn-dark mx-3" href="{{route('home.index')}}">Ir al inicio</a>

<a class="btn btn-dark " href="{{route('registrar.rol')}}">registrar rol</a>
@endsection