<?php

namespace App\Http\Controllers;

use App\Reservacion;
use Illuminate\Http\Request;
use App\User;
use App\Tipo_Usuario;
use Session;

class ReservacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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

        $reservaciones = Reservacion::with(['vuelo'])->where('id_vuelo',$request->id_vuelo)->get()->count();
        $vuelo = new VueloController();
        $vuelo = $vuelo->show($request->id_vuelo);

        $max_cupos_avion = $vuelo->avion->numero_pasajeros;

        if($max_cupos_avion==$reservaciones){
            Session::flash('error','Este vuelo ya se encuentra completo.');
            return redirect()->back();
        }


        $cliente = new User();
        $cliente->cedula = $request->cedula;
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->correo = $request->correo;
        $cliente->telefono = $request->telefono;
        $cliente->save();
        
        $id_cliente = $cliente->id;

        $tipo_usuario = new Tipo_Usuario();
        $tipo_usuario->id_usuario = $id_cliente;
        $tipo_usuario->id_rol = 3;
        $tipo_usuario->save();

        $reservacion = new Reservacion();
        $reservacion->id_vuelo = $request->id_vuelo;
        $reservacion->id_cliente = $id_cliente;
        $reservacion->save();

        Session::flash('response','Reservacion realizada correctamente.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function show($id_vuelo)
    {
        $vuelo =  new VueloController();
        $vuelo = $vuelo->show($id_vuelo);
        $reservaciones = Reservacion::with(['vuelo','cliente'])->where('id_vuelo',$id_vuelo)->get();
        return view('app.reservacion.index',compact('reservaciones','vuelo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservacion $reservacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservacion $reservacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservacion $reservacion)
    {
        //
    }
}
