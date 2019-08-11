
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

  <title>Big Fashion - Catalogo</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>


  <!-- Page Content -->
  <div class="container">
    <form action="articulos" method="GET">
      <input type="text" class="form-control col-md-6 my-2" id="buscar" name="buscar" placeholder="Buscar...">
    </form>
    <div class="liveSearch col-md-6">
      <table class="table table-dark table-hover">
        <tbody id="respuesta">

        </tbody>
      </table>
    </div>
    <div class="row text-center  tarjetas">
    @foreach ($articulos as $articulo)
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-150">
          <img class="card-img-top" src="/storage/{{ $articulo->foto }}" alt="">
          <div class="card-body">
            <h4 class="card-title">{{ $articulo->titulo}}</h4>
            <p class="card-text">{{ $articulo->descripcion }}</p>
            <h5 class="card-title">${{ $articulo->precio}}</h5>
          </div>
          <div class="card-footer">
          <a href="#"><i class="fas fa-cart-arrow-down"></i></a>

          </div>

        </div>
      </div>
    @endforeach
  </div>
  </div>

  <div class="col-md-12">
    {{ $articulos->links() }}
  </div>
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

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>
<script type="text/javascript">
$( document ).ready(function() {
    console.log( "ready!" );
  $('#buscar').on('keyup',function(){
    $value=$(this).val();
    $.ajax({
      type : 'get',
      url : '{{URL::to('search')}}',
      data:{'search':$value},
      success:function(data){
      $('#respuesta').html(data);

      },
      fail:function(data){
        alert("uh");
      }
      });
  });
});

  </script>
  <script type="text/javascript">
  $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
  </script>

@endsection
