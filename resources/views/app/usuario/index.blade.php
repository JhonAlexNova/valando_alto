@extends('layouts.admin')

@section('content')
<div class="col-md-12 form-group">
	<a href="{{ url('app/usuarios/create') }}" class="btn btn-outline-success">Crear empleado</a>
</div>
<div class="col-md-12">
	<table class="table table-bordered">
		<thead>
			<th>N°</th>
			<th>Nombres</th>
			<th>Cargo</th>
		</thead>
		 @foreach($empleados as $key => $empleado)
		 	<tr>
		 		<td> {{ $key }} </td>
		 		<td> {{ $empleado->nombre }} </td>
		 		<td> {{ $empleado->tipo_usuario->last()->rol->tipo }}  </td>  
		 	</tr>
		 @endforeach
	</table>
</div>
@endsection