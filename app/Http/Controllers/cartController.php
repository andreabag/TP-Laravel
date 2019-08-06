<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cartController extends Controller
{
    public function __construct()
    {
      if(\Session::has('cart')) \Session::put('cart', array());
    }
    //Show cart
    public function show(){
      return \Session::get('cart');

    }

    //add

    public function add(articulos $articulos)
    {
      $cart = \Session::get('cart');
      $articulos ->cantidad=1;
      $articulos->id = $id;
      \Session::put('cart', $cart);


      return redirect()->route('cart-show');
    }
}
