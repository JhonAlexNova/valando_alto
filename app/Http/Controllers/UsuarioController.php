<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo_Usuario;
use App\User;
use Session;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = User::with(['tipo_usuario'=>function($rol){
            $rol->with('rol');
        }])->whereHas('tipo_usuario',function($tu){
            $tu->where('id_rol','!=',3);
        })->get();

      //  dd($empleados);



        return view('app.usuario.index',compact('empleados'));
    }


    public function get_user_filter($id_rol){
         $users = User::whereHas('tipo_usuario',function($rol) use($id_rol){
            $rol->where('id_rol','=',$id_rol);
          })->get();

         return $users;
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rol = new RolController();
        $roles = $rol->get_rols_empleados();

        return view('app.usuario.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new User();
        $usuario->cedula = $request->cedula;
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->correo = $request->correo;
        $usuario->telefono = $request->telefono;
        $usuario->save();

        $id_usuario = $usuario->id;

        //dd($id_usuario);

        $tipo_usuario = new Tipo_Usuario();
        $tipo_usuario->id_usuario = $id_usuario;
        $tipo_usuario->id_rol = $request->id_rol;
        $tipo_usuario->save();

        Session::flash('response','Usuario creado correctamente.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
