@extends('layouts.systemPackage')
@section('content')

    <div class="row">
        <div class="col-12">
            <h4>Registro de productos</h4>
        </div>  
        {{-- @if(session()->has('info'))
        <div class="row">
            <div class="col">
                <div class="alert alert-success" role="alert">
                    {{session('info')}}
                </div>
            </div>
        </div>
    @endif --}}

    </div>
    <div class="row ">
        <div class="col-sm-12   ">
            <form action="{{ route('productos.update',$productos->id) }}" method="POST" class="row justify-content-around">
            
                <div class="col-lg-6 border py-4 m-1">
                    <label for="categoria_id">Seleccione categoría:</label>
                    <select name="categoria_id" id="categoria_id"  class="form-control" data-live-search="true">
                        <option value="">Seleccione una categoría</option>
                        @if ($categorias && count($categorias) >= 1)
                       
                            @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id}}" 
                                @if ($categoria->id==$productos->categoria_id)
                                    selected='selected'
                                @endif
                                >{{$categoria->nombre}}</option>
                            @endforeach
                            
                        @endif
                    </select>
                    <span class="text-danger">{{ $errors->first('categoria_id')}}</span>
                    <div class="form-group">
                        
                    <label for="marca">Seleccione una marca:</label>
                    <select name="marca_id" id="marca"  class="form-control">
                        <option value="">Seleccione marca</option>
                        @foreach ($marcas as $marca)
                            <option value="{{$marca->id}}"
                              @if ($marca->id==$productos->marca_id)
                                selected='selected'
                              @endif
                            >{{$marca->nombre}}</option>
                        @endforeach
                    </select>
                    <span class="text-danger">{{ $errors->first('marca_id')}}</span>
                </div>
                    <div class="form-group ">
                        <label for="Nombre: ">Nombre:</label>
                        <input id="nombre" class="form-control" type="text" name="nombre" value="{{$productos->nombre}}">
                        <span class="text-danger">{{ $errors->first('nombre')}}</span>
                    </div>
                    <div class="form-group ">
                        <label for="descripción: ">Descripción:</label>
                        <textarea name="descripcion" id="descripcion" cols="10" rows="3" class="form-control" >{{$productos->descripcion}}</textarea>
                        <span class="text-danger">{{ $errors->first('descripcion')}}</span>
                    </div>
                    <div class="form-group ">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="psicotropico" name="psicotropico" @if ($productos->psicotropico)
                                checked
                            @endif                        
                            >
                            <label class="form-check-label" for="psicotropico">Este producto se vende solo con reseta médica</label>
                        </div>
                        {{--  <label for="">
                            <input type="checkbox" class="form-control-md" id="materialUnchecked"> Este producto se vende solo con reseta médica.
                        </label>  --}}
                    </div>
                </div>
                
                <div class="col-lg-5 text-center border m-1">
                
                <div class="row align-items-start">
                    <div class="col">
                        <img src="https://i.pravatar.cc/250" alt="" class="pt-2">
                        <input type="file" class="form-control-file mt-2" id="" name="imagen" value="{{$productos->imagen}}">{{$productos->imagen}}
                        <span class="text-danger">{{ $errors->first('imagen')}}</span>
                    </div>
                  
                </div>  
                <br><br><br><br>
                @method("PUT")
                @csrf
                <div class="row align-items-end" >
                    <div class="col justify-content-around">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="{{route('productos.index')}}" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>

                </div>
            </form>
               
            
        </div> 
    </div> 
         
   
    
@endsection