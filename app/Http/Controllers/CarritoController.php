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
