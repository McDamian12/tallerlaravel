<?php

namespace App\Http\Controllers;

use App\Models\Proveedore;
use Carbon\Carbon;
use Illuminate\Http\Request;

class proveedorcontroller extends Controller
{
    public function index()
    {

        $proveedor = Proveedore::all();
        return view('proveedores.listarproveedor', compact('proveedor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $proveedor = Proveedore::all();
        return view("proveedores.registrarproveedor", compact("proveedor"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $proveedor = new Proveedore();
        $proveedor->nombre = $request->input('nombre');
        $proveedor->direccion = $request->input('direccion');
        $proveedor->numero = $request->input('numero');
        $proveedor->correo = $request->input('correo');

        $proveedor->save();
        return redirect()->route("listar.proveedor");
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
        $proveedor = Proveedore::find($id);
  
        return view("proveedores.editarproveedor", compact("proveedor",));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $proveedor = Proveedore::find($id);
        
       
        $proveedor->nombre = $request->input('nombre');
        $proveedor->direccion = $request->input('direccion');
        $proveedor->numero = $request->input('numero');
        $proveedor->correo = $request->input('correo');
        $proveedor->updated_at = Carbon::now()->setTimezone('America/Bogota');

        $proveedor->save();
        return redirect()->route("listar.proveedor");
    }

   
    public function delete(string $id)
    {
        $proveedor = Proveedore::find($id);
        return view("proveedores.eliminarproveedor", compact("proveedor"));
    }
    public function destroy(string $id)
    {
        $proveedor = Proveedore::find($id);
        $proveedor->delete();
        return redirect()->route("listar.proveedor");
    }
}
