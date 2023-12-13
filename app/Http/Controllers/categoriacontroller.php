<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Carbon\Carbon;
class categoriacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoria = Categoria::all();
        return view("categorias.listarcategoria", compact("categoria"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categoria = Categoria::all();
        return view("categorias.registrarcategoria", compact("categoria"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');
        

        $categoria->save();
        return redirect()->route("listar.categoria");
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
        $categoria = Categoria::find($id);
  
        return view("categorias.editarcategoria", compact("categoria",));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categoria = Categoria::find($id);
        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');
        $categoria->updated_at = Carbon::now()->setTimezone('America/Bogota');
        $categoria->save();
        return redirect()->route("listar.categoria");
    }

    public function delete(string $id)
    {
        $categoria = Categoria::find($id);
        return view("categorias.eliminarcategoria", compact("categoria"));
    }
    public function destroy(string $id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect()->route("listar.categoria");
    }
}
