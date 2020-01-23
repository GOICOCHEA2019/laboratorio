
@extends('layouts.app')

@section('content')

    <form action="{{route('proveedores.update', $proveedor->id)}}" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre" value="{{$proveedor->nombre}}">
            <span class="text-danger">{{$errors->first('nombre')}}</span>
        </div>
        <div class="form-group">
            <label for="direccion">Direccion</label>
            <input class="form-control" type="text" name="direccion" id="direccion" placeholder="direccion" value="{{$proveedor->direccion}}">
            <span class="text-danger">{{$errors->first('direccion')}}</span>
        </div>
        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input class="form-control" type="text" name="telefono" id="telefono" placeholder="telefono" value="{{$proveedor->telefono}}">
            <span class="text-danger">{{$errors->first('direccion')}}</span>
        </div>
        <div class="form-group">
            <label for="correo">Correo</label>
            <input class="form-control" type="email" name="correo" id="correo" placeholder="Correo" value="{{$proveedor->correo}}">
            <span class="text-danger">{{$errors->first('correo')}}</span>
        </div>

        @csrf
        {!! method_field('PUT') !!}
        <div class="form-group">
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{route('proveedores.index')}}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>

@endsection

{{-- {{old('dni')}} para que no se pierdan los datos --}}
{{-- {{$errors->first('dni')}} para mostrar los errores --}}