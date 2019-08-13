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

}
