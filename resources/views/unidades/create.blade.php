@extends('layouts.app')
@section('content')


	<form action="{{route('unidades.store')}}" method="post" >
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input class="form-control" type="text" name="nombre" value="{{old('nombre')}}" id="nombre">
			<span class="text-danger">{{ $errors->first('nombre')}}</span>
		</div>		
		
		@csrf

		<div>
			
			<button type="submit">Guardar</button>
		</div>

	</form>

@endsection