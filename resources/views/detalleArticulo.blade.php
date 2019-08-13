@extends('layouts.app')

@section('content')
<link href="{{ asset('css/detalle.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


  <div class="container col-md-12 w-75 mt-4">
    <h2 class="my-4"><i class="fas fa-search-plus"></i> Detalles</h2>
      <div class="row">
        <div class="col-md-6">
          <img src="/storage/{{ $articulo->foto }}" class="card-img" alt="foto_articulo">
        </div>

        <div class="col-md-6 my-auto">
          <div class="card-body">
            <h5 class="card-title">{{ $articulo->titulo}}</h5>
            <p class="card-text">{{ $articulo->descripcion }}</p>
            <p class="card-text"><medium class="text-muted">$ {{ $articulo->precio}}</medium></p>
                  <form action="/agregarACarrito/{{ $articulo->id }}">
                    <button class="btn btn-dark w-100" type="submit"><i class="fas fa-cart-arrow-down"></i> Agregar</button>
                  </form>
          </div>
        </div>
      </div>
  </div>
</div>

@endsection
