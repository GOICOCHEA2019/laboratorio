@extends('layouts.app')
@section('content')

    <div class="container">
        <article class="row">
            <section class="col">
                <a class="btn btn-success mb-4 float-right" href="{{route('proveedores.create')}}">Crear Proveedor</a>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                          <tr class="table-success border">
                            <th scope="col">ID</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">DIRECCION</th>
                            <th scope="col">TELEFONO</th>
                            <th scope="col">CORREO</th>
                            <th scope="col" colspan="2">ACCIONES</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($proveedores as $proveedor) 
                          <tr class="border">
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$proveedor->nombre}}</td>
                            <td>{{$proveedor->direccion}}</td>
                            <td>{{$proveedor->telefono}}</td>
                            <td>{{$proveedor->correo}}</td>
                            <td>
                                <a class="btn btn-info" href="{{route('proveedores.edit', $proveedor->id)}}">Editar</a>
                            </td>
                            <td>
                                <form action="{{route('proveedores.destroy', $proveedor->id)}}" method="POST">
                                        {!! method_field('DELETE') !!}
                                        @csrf
                                    <button type="submit" href="" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        </article>
    </div>
    
@endsection