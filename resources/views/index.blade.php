@extends('layout.app')

@section('vistasgenerales')
    <header class="bg-primary text-center py-5 mb-4">
        <div class="container">
            <h1 class="fw-light text-white">GESTION COMERCIAL</h1>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- Team Member 1 -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Listado de productos</h5>
                        <div class="card-text text-black-50"><a class="btn btn-primary"
                                href="{{ route('listar.producto') }}">Listado de productos</a></div>
                    </div>
                </div>
            </div>
            <!-- Team Member 2 -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow">

                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Listado de clientes</h5>
                        <div class="card-text text-black-50"><a class="btn btn-primary"
                                href="{{ route('listar.cliente') }}">Listado de clientes</a></div>
                    </div>
                </div>
            </div>
            <!-- Team Member 3 -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Listado de categorias</h5>
                        <a class="btn btn-primary" href="{{ route('listar.categoria') }}">Listado de categorias</a>
                    </div>
                </div>
            </div>
            <!-- Team Member 4 -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Listado de proveedores</h5>
                        <a class="btn btn-primary" href="{{ route('listar.proveedor') }}">Listado de proveedores</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <!-- Team Member 5 -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Listado de usuarios</h5>
                        <a class="btn btn-primary" href="{{ route('listar.usuario') }}">Listado de usuarios</a>
                    </div>
                </div>
            </div>

            <!-- Team Member 5 -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Listado de roles</h5>
                        <a class="btn btn-primary" href="{{ route('listar.rol') }}">Listado de roles</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection
