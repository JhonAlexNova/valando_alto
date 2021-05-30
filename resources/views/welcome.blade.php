@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="row">
                <div class="col-md-12">
                    @if(Session::has('response'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('response') }}   
                        </div>
                    @endif

                     @if(Session::has('error'))
                        <div class="alert alert-warning" role="alert">
                            {{ Session::get('error') }}   
                        </div>
                    @endif
                </div>
                @foreach($vuelos as $key => $vuelo)
                    <div class="col-md-3" style="padding: 10px">
                        <div class="card" style="width: 95%; display: block;margin: auto;">
                          <div class="card-body">
                            <p class="card-text">
                                <b>Avion: </b> {{ $vuelo->avion->identificacion_avion }} <br>
                                <b>Piloto: </b> {{ $vuelo->piloto->nombre }} <br>
                                <b>Copiloto: </b> {{ $vuelo->copiloto->nombre }} <br>
                                <b>Origen: </b> {{ $vuelo->origen->nombre }} <br>
                                <b>Origen: </b> {{ $vuelo->destino->nombre }} <br>
                                <b>Origen: </b> {{ $vuelo->precio }} <br>
                            </p>
                            <a href="javascript:void(0);" class="btn btn-outline-success" onclick="reservar('{{ $vuelo->id }}')">Reservar</a>
                          </div>
                        </div>
                    </div>
                @endforeach
                    
            </div>
    </div>
</div>


<form action="{{ route('reservacion.store') }}" method="post">
    @csrf
    <div class="modal" id="modal_user" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
                <input type="hidden" name="id_vuelo">
                <div class="col-md-6 form-group">
                    <span>Cedula</span>
                    <input type="text" name="cedula" class="form-control">
                </div>

                <div class="col-md-6 form-group">
                    <span>Nombre</span>
                    <input type="text" name="nombre" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <span>Apellidos</span>
                    <input type="text" name="apellido" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <span>Telefono</span>
                    <input type="text" name="telefono" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <span>Correo</span>
                    <input type="text" name="correo" class="form-control">
                </div>

            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Confirmar</button>
          </div>
        </div>
      </div>
    </div>
</form>
    
@endsection