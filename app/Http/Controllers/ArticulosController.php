<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Articulo;
use App\carritoPivot;

class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $r)
    {
      $b = $r->input('buscar');
        $like = '%' . $b . '%';
        $articulos = Articulo::
                where('titulo','like',$like)
                ->paginate(9);

      $vac = compact("articulos");

      return view("listadoArticulos", $vac);
    }
    public function adminIndex(Request $r)
    {
      $b = $r->input('buscar');
        $like = '%' . $b . '%';
        $articulos = Articulo::
                where('titulo','like',$like)
                ->paginate(9);

      $vac = compact("articulos");

      return view("adminArticulos", $vac);
    }




    public function buscar(Request $r){
      $output = "";
      if($r->ajax() && $r->input('search') != ""){
        $b = $r->input('search');
        $like = '%' . $b . '%';
        $articulos = Articulo::
                where('titulo','like',$like)->take(5)->get();

      }

      return Response($articulos->toJson());
    }

    public function agregar(Request $req)
    {
      $articuloNuevo = new Articulo();

      $ruta = $req->file("foto")->store("public");
      $nombreArchivo = basename($ruta);

      $articuloNuevo->foto = $nombreArchivo;
      $articuloNuevo->titulo = $req["titulo"];
      $articuloNuevo->descripcion = $req["descripcion"];
      $articuloNuevo->precio =$req["precio"];
      $articuloNuevo->save();
      return redirect('/admin/agregarArticulo');
    }
    public function borrar(Request $formulario){
      $id = $formulario["id"];
      $eliminarCarrito = carritoPivot::where('id_product',$id);
      $eliminarCarrito->delete();
      $articulo= Articulo::find($id);
      $articulo->delete();


      return redirect ("/admin/articulos");
    }
    public function modificar($id){
      $articulo = Articulo::find($id);
      return View('/modificarArticulo', compact('articulo'));
    }
      public function actualizarArticulo(Request $r)
      {
        $articulo = Articulo::find($r["id"]);
        $articulo->titulo = $r["titulo"];
        if($r->file("foto") != null){
          $ruta = $r->file("foto")->store("public");
          $nombreArchivo = basename($ruta);
          $articulo->foto = $nombreArchivo;
        }
        $articulo->descripcion = $r["descripcion"];
        $articulo->precio = $r["precio"];
        $articulo->save();
        return redirect('/admin/articulos');
      }


      public function detalle($id)
      {
          $articulo = Articulo::find($id);
          return View('/detalleArticulo', compact('articulo'));
      }

    public function campera()
    {
      $articulos = Articulo::where("descripcion", "=", "%campera%")
      ->orderBy("titulo")
      ->get();
      $vac = compact ("articulos");
      return view("listadoArticulos", $vac);
    }
    public function pantalon()
    {
      $articulos = Articulo::where("descripcion", "=", "%pantalon%")
      ->orderBy("titulo")
      ->get();
      $vac = compact ("articulos");
      return view("listadoArticulos", $vac);
    }
    public function buzo()
    {
      $articulos = Articulo::where("descripcion", "=", "%buzo%")
      ->orderBy("titulo")
      ->get();
      $vac = compact ("articulos");
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
     * Store a§ newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
