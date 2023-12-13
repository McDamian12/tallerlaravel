<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Usuario;
use Carbon\Carbon;
use Illuminate\Http\Request;

class usuariocontroller extends Controller
{
    public function index()
    {
        $usuario = Usuario::select('usuarios.id','usuarios.nombre as usuario_nombre','usuarios.apellidos','usuarios.correo','usuarios.numero','usuarios.direccion','roles.nombre as rol_nombre')
        ->join('roles','usuarios.rol','=','roles.id')->get();
        // dd($usuario);
        return view("usuarios.listarusuario", compact("usuario"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rol =Role::all();
        $usuario = Usuario::all();
        return view("usuarios.registrarusuario", compact("usuario","rol"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nombre = $request->input('nombre');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->correo = $request->input('correo');
        $usuario->numero = $request->input('numero');
        $usuario->direccion = $request->input('direccion');
        $usuario->rol = $request->input('rol');


        $usuario->save();
        return redirect()->route("listar.usuario");
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
        $usuario = Usuario::find($id);
  
        return view("usuarios.editarusuario", compact("usuario",));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuario = Usuario::find($id);
        
        $usuario->nombre = $request->input('nombre');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->correo = $request->input('correo');
        $usuario->numero = $request->input('numero');
        $usuario->direccion = $request->input('direccion');
        $usuario->rol = $request->input('rol');
        $usuario->updated_at = Carbon::now()->setTimezone('America/Bogota');


        $usuario->save();
        return redirect()->route("listar.usuario");
    }

   
    public function delete(string $id)
    {
        $usuario = Usuario::find($id);
        return view("usuarios.eliminarusuario", compact("usuario"));
    }
    public function destroy(string $id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect()->route("listar.usuario");
    }
}
