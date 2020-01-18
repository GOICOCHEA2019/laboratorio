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
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($alumnos as $alumno) 
                          <tr class="border">
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$alumno->nombre}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </section>
        </article>
    </div>
    
@endsection