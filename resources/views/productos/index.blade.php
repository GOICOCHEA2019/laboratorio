@extends('layouts.app')
@section('content')
    
    <div class="row">
        
        <div class="col">
            <div class="row">
                <div class="col-md-12 text-center text-primary">
                    <h3>Registro de nuevas productos</h3>
                <div class="dropdown-divider"></div>
                </div>
            </div>
            <div class="row">

                <div class="col">
                    <div class="row py-1 pr-1" >
                        <div class="col-xs-12 col-sm-12">
                            <form action="" id="form-buscar-productos" action="">
                                <div class="input-group input-group-built-in">
                                    <input type="text" class="form-control rounded-1 " placeholder="Buscar" name="buscar" value="{{request()->query('buscar')}}">
                                    <span class="input-group-btn">
                                        <button class="btn btn-outline-info" type="submit">Buscar</button>
                                        <a href="{{route('productos.create')}}" class="btn btn-warning shadow-sm rounded" >Nuevo producto</a>
                                    </span>

                                </div>
                            </form>
                            
                        </div>

                    </div>
                    <div class="table-responsive">
                        @if(count($productos)>0)
                        <table class="table table-bordered table-striped table-sm ">
                            <thead class="bg-dark text-light " >
                                <tr>
                                    <th><a  class="{{ request()->query('sort')== 'id'?'active':'text-light' }}"
                                         href="{{ request()->fullUrlWithQuery( ['sort'=>'id' ]) }}">Código</a></th>
                                    <th><a class="{{ request()->query('sort')== 'nombre'?'active':'text-light' }}"
                                         href="{{ request()->fullUrlWithQuery( ['sort'=>'nombre' ]) }}">Nombre</a></th>
                                  
                                    <th >Categoria</th>
                                    <th >Und. Medida</th>
                                    <th >Proveedor</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $productos as $producto )
                                <tr>
                                   <td class="text-right">{{$producto->id}}</td>
                                    <td>{{$producto->nombre}}</td>
                                    <td>{{$producto->categoria_id}}</td>
                                    <td>{{$producto->unidad_id}}</td>
                                    <td>{{$producto->proveedor_id}}</td>
                                   
                                    <td class="d-flex">
                                       {{--  @can('public.productos.editar') --}}
                                        <div>
                                            <a href="{{route('productos.edit',$producto->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                        </div>
                                         {{-- @endcan --}}
                                       <div>
                                                                               
                                          <form class="m-0 p-0" id="productos.eliminar.{{ $producto->id }}" action="{{ route('productos.destroy',$producto->id) }}" method="POST">
                                          {!! method_field('DELETE') !!}
                                          {!! csrf_field() !!}
                                  <a href="#" class="btn btn-danger"   title="Eliminar" onclick="event.preventDefault(); document.getElementById('productos.eliminar.{{$producto->id}}').submit();"><i class="fas fa-trash-alt"></i></a>
                                 </form>
                                </div>
                                        
                                    </td>                        
                                </tr>
                                @endforeach
                            </tbody>
                           
                        </table>
                        <div>
                            {!! $productos->appends(['buscar' => request('buscar'), 'sort'=>request('sort')])->links('pagination::bootstrap-4') !!}
                        </div>
                        
                        @endif                  
                    </div>
                    
                    
                </div>
            </div>
                

        
        </div>
    </div>

@endsection
