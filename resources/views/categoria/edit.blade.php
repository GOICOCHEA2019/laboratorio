@extends('layouts.app')
@section('content')

	<div class="container">

        <form action="{{route('categoria.update',$categoria->id)}}" method="post" accept-charset="utf-8">

		

            <div class="form-group">
                <label for = "nombre">Nombre</label>
                <input class="form-control" type="text" name="nombre" value="{{$categoria->nombre}}" placeholder="nombre" id="nombre">
                <span class="text-danger">{{$errors->first('nombre')}}</span>
            </div>
            
                
    
                @csrf
    
                {!! method_field('PUT')!!}
    
                <div class="form-group">
                    <button type = "submit">Guardar</button>
                </div>
                
            
    
        </form>
    </div>

@endsection