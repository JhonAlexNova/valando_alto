@extends('layouts.admin')

@section('content')
<div class="col-md-12 form-group">
	<a href="{{ url('app/usuarios') }}" class="btn btn-outline-success">Volver</a>
</div>
<div class="col-md-12">
	<div class="">
		@if(Session::has('response'))
			<div class="alert alert-success" role="alert">
				{{ Session::get('response') }}	 
			</div>
		@endif
		<form action="{{ route('usuarios.store') }}" method="post">
			@csrf
			<div class="row">
				<div class="col-md-3 form-group">
					<span>Cargo</span>
					<select name="id_rol" class="form-control">
						<option ></option>
						@foreach($roles as $key => $rol)
							<option value="{{ $rol->id }}"> {{ $rol->tipo }} </option>
						@endforeach
					</select>
				</div>
				<div class="col-md-4 form-group">
					<span>Nombre</span>
					<input type="text" class="form-control" name="nombre">
				</div>
				<div class="form-group col-md-12">
					<button class="btn btn-outline-primary" type="submit">Crear</button>
				</div>
			</div>
		</form>
	</div>
</div>
	
@endsection