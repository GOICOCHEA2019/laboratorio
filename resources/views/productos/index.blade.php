@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>CATEGORIA</th>
                        <th>UND. MEDIDA</th>
                        <th>PROVEEDOR</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                    <tr>
                        <td>{{$producto->id}}</td>
                        <td>{{$producto->nombre}}</td>
                        <td>{{$producto->categoria_id}}</td>
                        <td>{{$producto->unidad_id}}</td>
                        <td>{{$producto->proveedor_id}}</td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>

        </div>
    </div>
    
@endsection