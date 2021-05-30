@extends('layouts.admin')

@section('content')
<div class="col-md-12 form-group">
	<a href="{{ url('app/vuelos/create') }}" class="btn btn-outline-success">Crear vuelo</a>
</div>
<div class="col-md-12">
	<table class="table table-bordered">
		<thead>
			<th>N°</th>
			<th>Avion</th>
			<th>Piloto</th>
			<th>Copiloto</th>
			<th>Origen</th>
			<th>Destino</th>
			<th>Precio</th>
			<th>Opciones</th>
		</thead>
		<tbody>
			@foreach($vuelos as $key => $vuelo)
				<tr>
					<td> {{ $key }} </td>
					<td> {{ $vuelo->avion->identificacion_avion }} </td>
					<td> {{ $vuelo->piloto->nombre }} </td>
					<td> {{ $vuelo->copiloto->nombre }} </td>
					<td> {{ $vuelo->origen->nombre }} </td>
					<td> {{ $vuelo->destino->nombre }} </td>
					<td> ${{ number_format($vuelo->precio) }} </td>
					<td><a href="{{ url('app/reservacion',$vuelo->id) }}">Ver reservaciones</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection