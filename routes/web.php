<?php

use App\Http\Controllers\categoriacontroller;
use App\Http\Controllers\clientecontroller;
use App\Http\Controllers\productocontroller;
use App\Http\Controllers\proveedorcontroller;
use App\Http\Controllers\rolcontroller;
use App\Http\Controllers\usuariocontroller;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('index');
})->name("home.index");

// vistas de clientes
Route::get('/productos', [productocontroller::class,'index'])->name("listar.producto");
Route::get('/productos/registrarproducto', [productocontroller::class,'create'])->name("registrar.producto");
Route::post('/productos/guardarproducto',[productocontroller::class, 'store'])->name("guardar.producto");
Route::get('/productos/editarproducto.{id}', [productocontroller::class,'edit'])->name("editar.producto");
Route::post('/productos/editadoproducto.{id}', [productocontroller::class,'update'])->name("editado.producto");
Route::get('/productos/eliminarproducto.{id}', [productocontroller::class,'delete'])->name("eliminar.producto");
Route::post('/productos/destruirproducto.{id}', [productocontroller::class,'destroy'])->name("destruir.producto");

// vistas de clientes
Route::get('/clientes', [clientecontroller::class,'index'])->name("listar.cliente");
Route::get('/clientes/registrarcliente', [clientecontroller::class,'create'])->name("registrar.cliente");
Route::post('/clientes/guardarcliente',[clientecontroller::class, 'store'])->name("guardar.cliente");
Route::get('/clientes/editarcliente.{id}', [clientecontroller::class,'edit'])->name("editar.cliente");
Route::post('/clientes/editadocliente.{id}', [clientecontroller::class,'update'])->name("editado.cliente");
Route::get('/clientes/eliminarcliente.{id}', [clientecontroller::class,'delete'])->name("eliminar.cliente");
Route::post('/clientes/destruircliente.{id}', [clientecontroller::class,'destroy'])->name("destruir.cliente");

// vistas de categorias 
Route::get('/categorias', [categoriacontroller::class,'index'])->name("listar.categoria");
Route::get('/categorias/registrarcategoria', [categoriacontroller::class,'create'])->name("registrar.categoria");
Route::post('/categorias/guardarcategoria',[categoriacontroller::class, 'store'])->name("guardar.categoria");
Route::get('/categorias/editarcategoria.{id}', [categoriacontroller::class,'edit'])->name("editar.categoria");
Route::post('/categorias/editadocategoria.{id}', [categoriacontroller::class,'update'])->name("editado.categoria");
Route::get('/categorias/eliminarcategoria.{id}', [categoriacontroller::class,'delete'])->name("eliminar.categoria");
Route::post('/categorias/destruircategoria.{id}', [categoriacontroller::class,'destroy'])->name("destruir.categoria");

// vistas de proveedores 
Route::get('/proveedores', [proveedorcontroller::class,'index'])->name("listar.proveedor");
Route::get('/proveedores/registrarproveedor', [proveedorcontroller::class,'create'])->name("registrar.proveedor");
Route::post('/proveedores/guardarproveedor',[proveedorcontroller::class, 'store'])->name("guardar.proveedor");
Route::get('/proveedores/editarproveedor.{id}', [proveedorcontroller::class,'edit'])->name("editar.proveedor");
Route::post('/proveedores/editadoproveedor.{id}', [proveedorcontroller::class,'update'])->name("editado.proveedor");
Route::get('/proveedores/eliminarproveedor.{id}', [proveedorcontroller::class,'delete'])->name("eliminar.proveedor");
Route::post('/proveedores/destruirproveedor.{id}', [proveedorcontroller::class,'destroy'])->name("destruir.proveedor");

// vistas de usuarios 
Route::get('/usuarios', [usuariocontroller::class,'index'])->name("listar.usuario");
Route::get('/usuarios/registrarusuario', [usuariocontroller::class,'create'])->name("registrar.usuario");
Route::post('/usuarios/guardarusuario',[usuariocontroller::class, 'store'])->name("guardar.usuario");
Route::get('/usuarios/editarusuario.{id}', [usuariocontroller::class,'edit'])->name("editar.usuario");
Route::post('/usuarios/editadousuario.{id}', [usuariocontroller::class,'update'])->name("editado.usuario");
Route::get('/usuarios/eliminarusuario.{id}', [usuariocontroller::class,'delete'])->name("eliminar.usuario");
Route::post('/usuarios/destruirusuario.{id}', [usuariocontroller::class,'destroy'])->name("destruir.usuario");

// vistas de usuarios 
Route::get('/roles', [rolcontroller::class,'index'])->name("listar.rol");
Route::get('/roles/registrarrol', [rolcontroller::class,'create'])->name("registrar.rol");
Route::post('/roles/guardarrol',[rolcontroller::class, 'store'])->name("guardar.rol");
Route::get('/roles/editarrol.{id}', [rolcontroller::class,'edit'])->name("editar.rol");
Route::post('/roles/editadorol.{id}', [rolcontroller::class,'update'])->name("editado.rol");
Route::get('/roles/eliminarrol.{id}', [rolcontroller::class,'delete'])->name("eliminar.rol");
Route::post('/roles/destruirrol.{id}', [rolcontroller::class,'destroy'])->name("destruir.rol");


