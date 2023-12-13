<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Http\Request;

class rolcontroller extends Controller
{
    public function index()
    {
        $rol = Role::all();
        return view("roles.listarrol", compact("rol"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rol = Role::all();
        return view("roles.registrarrol", compact("rol"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rol = new Role();
        $rol->nombre = $request->input('nombre');
        $rol->save();
        return redirect()->route("listar.rol");
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
        $rol = Role::find($id);
  
        return view("roles.editarrol", compact("rol",));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rol = Role::find($id);
        $rol->nombre = $request->input('nombre');
        $rol->updated_at = Carbon::now()->setTimezone('America/Bogota');
        $rol->save();
        return redirect()->route("listar.rol");
    }

    public function delete(string $id)
    {
        $rol = Role::find($id);
        return view("roles.eliminarrol", compact("rol"));
    }
    public function destroy(string $id)
    {
        $rol = Role::find($id);
        $rol->delete();
        return redirect()->route("listar.rol");
    }
}
