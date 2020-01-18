@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-12 text-center">
            <h4>Registro de productos</h4>
        </div>  
    </div>
    <div class="row ">
        <div class="col-sm-12   ">
            <form action="{{ route('productos.store') }}" method="POST" class="row justify-content-around">
            
                @csrf
                <div class="col-lg-6 border py-4 m-1">
                    <label for="categoria_id">Seleccione categoría:</label>
                     <select name="categoria_id" id="categoria_id"  class="form-control" data-live-search="true"> --}}
                        <option value="">Seleccione una categoría</option>
                        @if ($categorias && count($categorias) >= 1)
                       
                            @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                            @endforeach
                            
                        @endif
                    </select> 

                    <span class="text-danger">{{ $errors->first('unidad_id')}}</span>
                    <div class="form-group">
                        
                        <label for="unidad_id">Seleccione unidad:</label>
                        <select name="unidad_id" id="unidad_id"  class="form-control" data-live-search="true">
                            <option value="">Seleccione una categoría</option>
                            @if ($unidades && count($unidades) >= 1)
                           
                                @foreach ($unidades as $unidad)
                                <option value="{{$unidad->id}}">{{$unidad->nombre}}</option>
                                @endforeach
                                
                            @endif
                        </select>
                    <span class="text-danger">{{ $errors->first('unidad_id')}}</span>
                </div>
                    <div class="form-group ">
                        <label for="Nombre: ">Nombre producto:</label>
                        <input id="nombre" class="form-control" type="text" name="nombre">
                        <span class="text-danger">{{ $errors->first('nombre')}}</span>
                    </div>
                    
                    <label for="proveedor_id">Seleccione proveedor:</label>
                    <select name="proveedor_id" id="proveedor_id"  class="form-control" data-live-search="true">
                        <option value="">Seleccione una proveedor</option>
                        @if ($proveedores && count($proveedores) >= 1)
                       
                            @foreach ($proveedores as $proveedor)
                            <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
                            @endforeach
                            
                        @endif
                    </select>
                <span class="text-danger">{{ $errors->first('proveedor_id')}}</span>


                <div class="row align-items-end mt-5" >
                    <div class="col justify-content-around">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="{{route('productos.index')}}" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
            </div>
                
        
                </div>
                


              
              

                </div>
              
            </form>
               
            
        </div> 
    </div> 
         
   
    
@endsection