@extends('layouts.admin')

@section('content')
<div class="col-md-12 form-group">
	<a href="{{ url('app/vuelos') }}" class="btn btn-outline-success">Volver</a>
</div>
<div class="col-md-12">
	<div class="">
		@if(Session::has('response'))
			<div class="alert alert-success" role="alert">
				{{ Session::get('response') }}	 
			</div>
		@endif
		<form action="{{ route('vuelos.store') }}" method="post">
			@csrf
			<div class="row">
				<div class="col-md-4 form-group">
					<span>Avion</span>
					<select name="id_avion" class="form-control" required>
						<option ></option>
						@foreach($aviones as $key => $avion)
							<option value="{{ $avion->id }}"> {{ $avion->tipo_avion->tipo }}  {{ $avion->identificacion_avion }} </option>
						@endforeach
					</select>
				</div>

				<div class="col-md-4 form-group">
					<span>Piloto</span>
					<select name="id_piloto" class="form-control" required>
						<option ></option>
						@foreach($pilotos as $key => $piloto)
							<option value="{{ $piloto->id }}"> {{ $piloto->nombre }} </option>
						@endforeach
					</select>
				</div>

				<div class="col-md-4 form-group">
					<span>Copiloto</span>
					<select name="id_copiloto" class="form-control" required>
						<option ></option>
						@foreach($copilotos as $key => $copiloto)
							<option value="{{ $copiloto->id }}"> {{ $copiloto->nombre }} </option>
						@endforeach
					</select>
				</div>

				<div class="col-md-4 form-group">
					<span>Origen</span>
					<select name="id_origen" class="form-control" required>
						<option ></option>
						@foreach($lugares as $key => $lugar)
							<option value="{{ $lugar->id }}"> {{ $lugar->nombre }} </option>
						@endforeach
					</select>
				</div>

				<div class="col-md-4 form-group">
					<span>Destino</span>
					<select name="id_destino" class="form-control" required>
						<option ></option>
						@foreach($lugares as $key => $lugar)
							<option value="{{ $lugar->id }}"> {{ $lugar->nombre }} </option>
						@endforeach
					</select>
				</div>

				
				<div class="col-md-4 form-group">
					<span>Precio</span>
					<input type="text" class="form-control" name="precio" required>
				</div>
				<div class="form-group col-md-12">
					<button class="btn btn-outline-primary" type="submit">Crear</button>
				</div>
			</div>
		</form>
	</div>
</div>
	
@endsection