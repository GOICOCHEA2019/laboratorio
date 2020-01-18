<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Producto;
use App\systemPackageModels\proveedores\Proveedor;
use App\Unidad;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos= Producto::get();
        $unidades= Unidad::get();
        $categorias=Categoria::get();
        $categorias=Proveedor::get();
        if(!empty(request()->buscar)){
            $productos=Producto::where('nombre','like','%'.request()->buscar.'%')
            ->orderBy(request('sort','id'),'ASC')
            ->paginate(10);
            return view('producto.index',compact('productos','categorias','unidades','proveedores'));
        }else{
            $productos = Producto::orderBy(request('sort','id'),'ASC')
            ->paginate(10);
           
            return view('producto.index',compact('productos','categorias','unidades','proveedores'));
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos= Producto::get();
        $unidades= Unidad::get();
        $categorias=Categoria::get();
        $categorias=Proveedor::get();
        return view('producto.create',compact('productos','categorias','unidades','proveedores'));
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productos= new Producto();
        $productos->nombre=$request->nombre;
        $productos->categoria_id=$request->categoria_id;
        $productos->unidad_id=$request->unidad_id;
        $productos->proveedor_id=$request->proveedor_id;
 
        $productos->save();

        return redirect()->route('productos.index')->with('info','Registro guardado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productos= Producto::get($id);
        $unidades= Unidad::get();
        $categorias=Categoria::get();
        $categorias=Proveedor::get();

        return view('producto.edit',compact('productos','categorias','unidades','proveedores'));
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $productos=Producto::findOrFail($id);
    
        $productos= new Producto();
        $productos->nombre=$request->nombre;
        $productos->categoria_id=$request->categoria_id;
        $productos->unidad_id=$request->unidad_id;
        $productos->proveedor_id=$request->proveedor_id;
 
        $productos->save();

        return redirect()->route("productos.index")->with("info", "Datos actualizados correctamente");
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
