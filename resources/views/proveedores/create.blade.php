
@extends('layouts.app')

@section('content')

    <form action="{{route('proveedores.store')}}" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre" value="{{old('nombre')}}">
            <span class="text-danger">{{$errors->first('nombre')}}</span>
        </div>
        <div class="form-group">
            <label for="direccion">Direccion</label>
            <input class="form-control" type="text" name="direccion" id="direccion" placeholder="direccion" value="{{old('direccion')}}">
            <span class="text-danger">{{$errors->first('direccion')}}</span>
        </div>
        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input class="form-control" type="text" name="telefono" id="telefono" placeholder="telefono" value="{{old('direccion')}}">
            <span class="text-danger">{{$errors->first('direccion')}}</span>
        </div>
        <div class="form-group">
            <label for="correo">Correo</label>
            <input class="form-control" type="email" name="correo" id="correo" placeholder="Correo" value="{{old('correo')}}">
            <span class="text-danger">{{$errors->first('correo')}}</span>
        </div>

        <div class="form-group">
            <label for="dniEscaneado">subir DNI</label>
            <input type="file" name="dniEscaneado" class="form-control">
            <span class="text-danger">{{$errors->first('dniEscaneado')}}</span>
        </div>

        @csrf 
        <div class="form-group">
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{route('proveedores.index')}}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>

@endsection

{{-- {{old('dni')}} para que no se pierdan los datos --}}
{{-- {{$errors->first('dni')}} para mostrar los errores --}}