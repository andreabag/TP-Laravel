@extends('layouts.app')

@section('content')
<link href="{{ asset('css/detalle.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


<div class="jumbotron">
  <div class="container">
    <div class="card mb-3" style="max-width: 900px;">
      <div class="row no-gutters">
        <div class="col-lg-6 col-md-6 mb-4">
          <img src="{{ $articulo->foto }}" class="card-img" alt="foto_articulo">
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card-body">
            <h5 class="card-title">{{ $articulo->titulo}}</h5>
            <p class="card-text">{{ $articulo->descripcion }}</p>
            <p class="card-text"><medium class="text-muted">{{ $articulo->precio}}</medium></p>

              <div class="card-footer">
              <a href="#"><i class="fas fa-cart-arrow-down"></i></a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>

@endsection
