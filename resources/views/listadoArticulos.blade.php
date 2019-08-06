
@extends('layouts.app')

@section('content')
<link href="{{ asset('css/articulos.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Heroic Features - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>


  <!-- Page Content -->
  <div class="container">
    <div class="row text-center">
    @foreach ($articulos as $articulo)
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="{{ $articulo->foto }}" alt="">
          <div class="card-body">
            <h4 class="card-title">{{ $articulo->titulo}}</h4>
            <p class="card-text">{{ $articulo->descripcion }}</p>
          </div>
          <div class="card-footer">
          <button type="button" class="btn btn-secondary btn-sm">Detalle</button>
          <button type="button" class="btn btn-secondary btn-sm">Agregar al carrito</button>
          </div>

        </div>
      </div>
    @endforeach
  </div>
  {{ $articulos->links() }}
  <!-- /.container -->

  <!-- Footer -->
  <footer class="main-footer">
    <div class="foot-service">
      <i class="fas fa-truck"></i>
      <h4>Envíos gratis</h4>
      <p>Envíos gratis en las compras superiores a $2000.</p>
    </div>
    <div class="foot-service">
      <i class="fas fa-store-alt"></i>
      <h4>Pick up store</h4>
      <p>Compra online y retirá tu compra por nuestro local.</p>
    </div>
    <div class="foot-service">
      <i class="fas fa-undo-alt"></i>
      <h4>Cambios gratis</h4>
      <p>Tenés 30 días para realizar cambios.</p>

    </div>


  </footer>
  <div class="whatsappDiv">
    <i class="fab fa-whatsapp"></i>
  </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
@endsection
