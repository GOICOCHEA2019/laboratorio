@extends('layouts.app')
@section('content')


	<div class="row">
		<div class="col">
			<a href="{{ route('unidades.create')}}">Crear Unidad</a>			
		</div>
	</div>

	<table class="table table-striped">
		<thead>
			<tr class="bg-dark text-white">
				<td>ID</td>
				<td>NOMBRES</td>				
				<td colspan="2">Acciones</td>
			</tr>			
		</thead>
		<tbody>
		
			@foreach($unidades as $unidad)
				<tr>
					<td>{{$unidad->id}}</td>
					<td>{{$unidad->nombre}}</td>
					
					<td>
						<a href="{{route('unidades.edit', $unidad->id)}}">Editar</a>											
					</td>
					<td>
						<form action="{{route('unidades.destroy', $unidad->id)}}" method="post">
							{!! method_field('DELETE')!!}
							@csrf
							<button class="btn btn-danger" type="submit">Eliminar</button>
						</form>	
					</td>
				</tr>
			@endforeach
					
		</tbody>
	</table>

@endsection