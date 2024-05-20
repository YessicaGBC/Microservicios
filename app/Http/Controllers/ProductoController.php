<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productoIndex',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('productoCreate', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate(request(),[
            
        ]);         
       
        $producto= new Producto();
            $producto->nombre= $request['nombre'];
            $producto->descripcion= $request['descripcion'];
            $producto->precio= $request['precio'];
        // add other fields
        $producto->save();

        $producto->categorias()->attach($request->categorias);

        Session()->flash('success', 'Se ha guardado con éxito');
        return redirect('/producto');


        //$request->validate([
            //'name' => 'required|max:32',
            //'descripcion' => 'required|max:100',
            //'precio' => 'required|integer|required|max:255'
        //]);
        //$product = new Producto();
        //$product->name = $request->input('name');
        //$product->descripcion = $request->input('descripcion');
        //$product->precio = $request->input('precio');
        //$product->save();

        // Additional logic or redirection after successful data storage
        
        return redirect('/producto');
        //Producto::create($request->all());
        //return redirect('/producto');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return view('/productoShow',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();
        return view('/productoEdit',compact('categorias','producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {

        // $request->validate([
        //     'nombre' => 'required',
        //     'marca' => 'required',
        //     'precio' => 'required|numeric',
        // ]);

        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->save();
    
        if ($request->has('categorias')) {
            $producto->categorias()->sync($request->categorias);
        } else {
            $producto->categorias()->detach(); 
        }
    
        return redirect('/producto');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        Session()->flash('success','Se ha eliminado con éxito');
        return redirect('/producto');
    }
}
