<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Carbon\Carbon;
use Illuminate\Http\Request;

class productocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $producto = Producto::select('productos.id','productos.nombre as producto_nombre','productos.descripcion','productos.precio','categorias.nombre as categoria_nombre')
        ->join('categorias','productos.categoria','=','categorias.id')->get();
        return view("productos.listarproducto", compact("producto"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categoria =Categoria::all();
        $producto = Producto::all();
        return view("productos.registrarproducto", compact("producto","categoria"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->categoria = $request->input('categoria');
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');

        $producto->save();
        return redirect()->route("listar.producto");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Producto::find($id);
        $categoria= Categoria::all();
        return view("productos.editarproducto", compact("producto","categoria"));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto = Producto::find($id);
        $producto->categoria = $request->input('categoria');
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->updated_at = Carbon::now()->setTimezone('America/Bogota');

        $producto->save();
        return redirect()->route("listar.producto");

    }

   
    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $producto = Producto::find($id);
        return view("productos.eliminarproducto", compact("producto"));
    }
    public function destroy(string $id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect()->route("listar.producto");
    }
}
