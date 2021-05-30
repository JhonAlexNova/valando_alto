<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rol = Rol::get();
        
    }

    public function get_rols_empleados(){
        $rol = Rol::where('id','!=',3)->get();
        return $rol;
    }

     public function get_user_filter($rol){
        $rol = Rol::where('id','!=',3)->get();
        return $rol;
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function show(rol $rol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function edit(rol $rol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rol $rol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy(rol $rol)
    {
        //
    }
}
