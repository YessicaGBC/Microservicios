<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('categoriaIndex',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoriaCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate(request(),[
            
        ]);         
       
        $categoria= new Categoria();
            $categoria->categoria= $request['categoria'];
        // add other fields
        $categoria->save();


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
        
        return redirect('/categoria');
        //Producto::create($request->all());
        //return redirect('/producto');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        return view('/categoriaShow',compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        return view('/CategoriaEdit',compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        Categoria::where('id',$categoria->id)->update($request->except('_token','_method','action'));
        return redirect('/categoria');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        Session()->flash('success','Se ha eliminado con éxito');
        return redirect('/categoria');
    }
}
