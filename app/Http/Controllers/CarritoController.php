<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\articulo;
use App\carritoPivot;


class CarritoController extends Controller
{
    public function index(){
        if(Auth::user()){

            $articulos = carritoPivot::where('id_user',Auth::user()->id)->get();
            return view('carrito',compact('articulos'));
        }
        return redirect('/');
    }

    public function agregar($id){
        if(Auth::user()){
            $articulos = carritoPivot::where('id_user',Auth::user()->id)
            ->where('id_product',$id);
            if($articulos->exists()){
                $articulo = $articulos->get()->first();
                $articulo->cantidad++;
                $articulo->save();
            }else{
                $nuevoArticulo = new carritoPivot();
                $nuevoArticulo->id_user = Auth::user()->id;
                $nuevoArticulo->id_product = $id;
                $nuevoArticulo->cantidad = 1;
                $nuevoArticulo->save();
            }
            return redirect('carrito');
        }
    }

    public function restar($id){
        $articulo = carritoPivot::find($id);
        $articulo->cantidad--;
        if($articulo->cantidad == 0){
            $this->eliminar($id);
        }else{
            $articulo->save();
        }
        
        return redirect('carrito');
    }

    public function sumar($id){
        $articulo = carritoPivot::find($id);
        $articulo->cantidad++;
        $articulo->save();
        return redirect('carrito');
    }
    public function eliminar($id){
        $articulo = carritoPivot::find($id);
        $articulo->delete();

        return redirect('carrito');
    }

}
