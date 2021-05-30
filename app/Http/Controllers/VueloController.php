<?php

namespace App\Http\Controllers;

use App\Vuelo;
use Illuminate\Http\Request;
use App\User;
use Session;

class VueloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {

        $vuelos = $this->get_vuelos();
        return view('app.vuelo.index',compact('vuelos'));
    }


    public function get_vuelos(){
        $vuelos = Vuelo::with(['avion','piloto','copiloto','origen','destino'])->get();

        return $vuelos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $usuario = new UsuarioController();
        $pilotos = $usuario->get_user_filter(1);
        $copilotos = $usuario->get_user_filter(2);

        $lugares = new LugarController();
        $lugares = $lugares->get_lugares();

        $aviones = new AvionController();
        $aviones = $aviones->get_aviones(1);


         return view('app.vuelo.create',compact('pilotos','copilotos','lugares','aviones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vuelo = new Vuelo();
        $vuelo->id_avion = $request->id_avion;
        $vuelo->id_piloto = $request->id_piloto;
        $vuelo->id_copiloto = $request->id_copiloto;
        $vuelo->id_origen = $request->id_origen;
        $vuelo->id_destino = $request->id_destino;
        $vuelo->precio = $request->precio;
        $vuelo->save();

        Session::flash('response','Vuelo creado correctamente.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vuelos  $vuelos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vuelo = Vuelo::with(['avion','piloto','copiloto','origen','destino'])->where('id',$id)->get()->last();
        return $vuelo;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vuelos  $vuelos
     * @return \Illuminate\Http\Response
     */
    public function edit(Vuelos $vuelos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vuelos  $vuelos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vuelos $vuelos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vuelos  $vuelos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vuelos $vuelos)
    {
        //
    }
}
