@extends('layouts.app')
@section('content')


	<form action="{{route('unidades.store')}}" method="post" >
asdasdasd
		<div class="form-group">
			<label for="nombre">NOMBRE</label>
			<input class="form-control" type="text" name="nombre" value="{{$unidad->nombre }}" id="nombre">

			<span class="text-danger">{{ $errors->first('nombre')}}</span>
		</div>	
		
		@csrf
		{!! method_field('PUT') !!}

		<div>
			
			<button type="submit">Guardar</button>
		</div>

	</form>

@endsection