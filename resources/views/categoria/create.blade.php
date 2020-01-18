@extends('layouts.app')
@section('content')

	<div class="container">
        <form action="{{route('categoria.store')}}" method="post" accept-charset="utf-8">

		
		
			<div class="form-group">
			<label for = "nombre">nombre</label>
			<input class="form-control" type="text" name="nombre" value="{{old ('categoria')}}" placeholder="nombre" id="nombre">
			<span class="text-danger">{{$errors->first('nombre')}}</span>
				
			</div>

			@csrf

			<div class="form-group">
				<button type = "submit">Guardar</button>
			</div>
			
		

	</form>    
    </div>

@endsection