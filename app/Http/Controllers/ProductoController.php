<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "Aqui va a ir el listado de productos";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Seleccionar todas las marcas 
       $marcas = Marca::all();

       //Seleccionar todas las categorias
       $Categorias =Categoria::all();
       /* echo "<pre>";


       var_dump($Categorias);
       echo "</pre>";*/

       //Mostrar la vista de nuevo producto
       return view('productos.create')
       ->with('marcas',$marcas)
       ->with('categorias', $Categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validaciones 
        //establecer reglas de validación

        $reglas=[
            "nombre" => 'required|alpha|unique:productos,nombre',
            "desc" => 'required|min:5|max:20',
            "precio" => 'required|numeric',
            "imagen" => 'required|image',
            "marca" => 'required',
            "categoria" => 'required'
        ];

        //crear el objeto validador

        $v= Validator::make($request ->all() , $reglas );

        //Validar 
        if($v->fails()){
            //Si la validacion fallo
            //reirigirme a la vista de create(ruta: productos/create)
            return redirect('productos/create')
                    ->withErrors($v);
        } else{
            //Validacion exitosa
            $archivo=$request->imagen;
            //obtener el nombre original del archivo
            $nombre_archivo = $archivo->getClientOriginalName();
            //establecer la ubicación
            $ruta=public_path()."/img";
            //mover el archivo de imagen a la ubicacion y nombre deseados
            $archivo->move($ruta , $nombre_archivo);
        
            //Crear nuevo producto
            $p = new Producto();
            $p->nombre = $request->nombre;
            $p->Desc =$request->desc;
            $p->Precio =$request->precio;
            $p->marca_id=$request->marca;
            $p->categoria_id=$request->categoria;
            $p->imagen = $nombre_archivo;
            //grabar productos
            $p-> save();
            //redirigir a productos/create
            //con un mensaje de exito
            return redirect('productos/create')
            ->with('mensajito' , 'Producto registrado exitosamente');
        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        echo "Aqui va  el detalle del producto con id";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($producto)
    {
        echo"Mostrar el formulario de edicion";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}