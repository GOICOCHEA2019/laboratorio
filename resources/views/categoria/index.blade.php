@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <a href="{{route('categoria.create')}}">Crear Categoria</a>
        </div>
    </div>
    
    
    <div class="table-responsive">
        
        <table class="table table-striped table-bordered">
        <thead>
            <th>Nro</th>
            <th>Nombre</th>
            <th colspan="2">Acciones</th>
            
        </thead>
        <tbody>
            @foreach($categoria as $categoria)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{$categoria->nombre}}</td>
                
                <td>
                    <a href="{{route('categoria.edit',$categoria->id)}}">Editar</a>
                </td>
    
                <td>
                    <form action="{{route('categoria.destroy',$categoria->id)}}" method="POST">
                        {!!method_field('DELETE')!!}
    
                            @csrf
    
                        <button class="btn btn-danger" type="submit">eliminar</button>
                        
                    </form>
                    
                </td>
    
    
            
                @endforeach
            </tr>
        </tbody>
    </table>
    
    </div>
</div>
@endsection