@extends('layouts.admin')

@section('content')
<div class="col-md-12 form-group">
	<a href="{{ url('app/vuelos') }}" class="btn btn-outline-success">Volver</a>
</div>
<div class="col-md-12">
	<div class="alert alert-info">
		<h2>Detalles del vuelo</h2>
		<ul>
			<li><b>Vuelo:</b> {{ $vuelo->avion->id }} </li>
			<li><b>Avion:</b> {{ $vuelo->avion->identificacion_avion }} </li>
			<li><b>piloto:</b> {{ $vuelo->piloto->nombre }} </li>
			<li><b>copiloto:</b> {{ $vuelo->piloto->nombre }} </li>
			<li><b>Origen:</b> {{ $vuelo->origen->nombre }} </li>
			<li><b>Destino:</b> {{ $vuelo->destino->nombre }} </li>
			<li><b>Precio:</b> ${{ number_format($vuelo->precio)}} </li>
		</ul>
	</div>
	<table class="table table-bordered">
		<thead>
			<th>N°</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Cedula</th>
			<th>Telefono</th>
			<th>Correo</th>
		</thead>
		<tbody>
			@foreach($reservaciones as $key => $reservacion)
				<tr>
					<td> {{ $key }} </td>
					<td> {{ $reservacion->cliente->nombre }} </td>
					<td> {{ $reservacion->cliente->apellido }} </td>
					<td> {{ $reservacion->cliente->cedula }} </td>
					<td> {{ $reservacion->cliente->telefono }} </td>
					<td> {{ $reservacion->cliente->correo }} </td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection