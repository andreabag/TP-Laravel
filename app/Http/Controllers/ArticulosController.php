<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\articulo;

class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
      $articulos = Articulo::paginate(4);
      $vac = compact("articulos");
      return view("listadoArticulos", $vac);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articulo->$req['foto'];
        $articulo->$req['titulo'];
        $articulo->$req['descripcion'];
        $articulo->$req['precio'];
        $articulo->$req['descuento'];
        $articulo->save();
<<<<<<< HEAD
        return redirect("");
=======
        
>>>>>>> 16112e48b758e571966d421092ed108d424f9835
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $vac = compact ("id");
      return view ("detalleArticulo", $vac);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
