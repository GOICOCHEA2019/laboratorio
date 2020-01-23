<?php

namespace App\Http\Controllers;
use App\Http\Requests\proveedorCreateRequest;
use App\Proveedores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;



class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedores::get();

        return view('proveedores.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(proveedorCreateRequest $request)

    {


        $proveedor = new Proveedores;
        $proveedor->nombre = $request->nombre;
        $proveedor->direccion = $request->direccion;
        $proveedor->telefono = $request->telefono;
        $proveedor->correo = $request->correo;

        if($request->hasFile("dniEscaneado")){
            $archivo = $request->file('dniEscaneado');
            $extension = $archivo->getClientOriginalExtension();
            $nuevoNombre = strtolower(time().".".$extension);

            $proveedor->dniescaneado = Storage::putFileAs("public/proveedores/",
            $archivo, $nuevoNombre);

        }
        else{
            Log::info('no has enviado un archivo');
        }
        

        $proveedor->save();

        return redirect()->route('proveedores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedores $proveedores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedor = Proveedores::findOrFail($id);
        return view('proveedores.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proveedor = Proveedores::findOrFail($id);
        $proveedor->nombre = $request->nombre;
        $proveedor->direccion = $request->direccion;
        $proveedor->telefono = $request->telefono;
        $proveedor->correo = $request->correo;
        $proveedor->save();

        return redirect()->route('proveedores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor = Proveedores::findOrFail($id);
        $proveedor->delete();   

        return redirect()->route('proveedores.index');
    }
}
