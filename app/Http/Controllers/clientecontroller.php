<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Carbon\Carbon;
use Illuminate\Http\Request;

class clientecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $cliente = Cliente::all();
        return view("clientes.listarcliente", compact("cliente"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $cliente = Cliente::all();
        return view("clientes.registrarcliente", compact("cliente"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nombre = $request->input('nombre');
        $cliente->direccion = $request->input('direccion');
        $cliente->numero = $request->input('numero');
        $cliente->correo = $request->input('correo');

        $cliente->save();
        return redirect()->route("listar.cliente");
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
        $cliente = Cliente::find($id);
  
        return view("clientes.editarcliente", compact("cliente",));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::find($id);
        
        
        $cliente->nombre = $request->input('nombre');
        $cliente->direccion = $request->input('direccion');
        $cliente->numero = $request->input('numero');
        $cliente->correo = $request->input('correo');
        $cliente->updated_at = Carbon::now()->setTimezone('America/Bogota');
        $cliente->save();
        return redirect()->route("listar.cliente");
    }

   
    public function delete(string $id)
    {
        $cliente = Cliente::find($id);
        return view("clientes.eliminarcliente", compact("cliente"));
    }
    public function destroy(string $id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->route("listar.cliente");
    }
} 
