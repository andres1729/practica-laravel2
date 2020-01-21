<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Http\Requests\CreateProductosRequest;

class productosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $productos=Producto::all();
      return view("productos.index", compact("productos"));
        //return "A ratos vivo alegre igual que un liron este poeta loco, amador e indolente";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("productos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductosRequest $request)
    {
      //  $this->validate($request, ['NombreArticulo'=>'required','seccion'=>'required', 'PaisOrigen'=>'required']);
        //return view("productos.insert");
        /*
        $producto=new Producto;
        $producto->NombreArticulo=$request->NombreArticulo;
        $producto->seccion=$request->seccion;
        $producto->Precio=$request->Precio;
        $producto->Fecha=$request->Fecha;
        $producto->PaisOrigen=$request->PaisOrigen;

        $producto->save();
        */

        $entrada=$request->all();

        if($archivo=$request->file('file')){
          $nombre=$archivo->getClientOriginalName();
          $archivo->move('images', $nombre);
          $entrada['ruta']=$nombre;
        }

        Producto::create($entrada);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto=Producto::findOrFail($id);
        return view("productos.show", compact("producto"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $producto=Producto::findOrFail($id);
      return view("productos.edit", compact("producto"));

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
      $producto=Producto::findOrFail($id);
      $producto->update($request->all());
      return redirect("/productos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $producto=Producto::findOrFail($id);
      $producto->delete();
      return redirect("/productos");
    }
}
