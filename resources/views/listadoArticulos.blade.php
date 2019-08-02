
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

  <!-- Navigation -->
  <?php
  $haySession = !empty($_SESSION) && !empty($_SESSION['usuario']);
  if($haySession)
    $usuario = $_SESSION['usuario']['user'];
  ?>
    <nav class="navbar navbar-template navbar-expand-lg navbar-light justify-content-center">
      <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="index.php" class="navbar-brand mx-auto mb-0 h1">
        <span class="brand">Big Fashion</span>
      </a>
      <div class="d-flex order-2 order-lg-3">
            <ul class="navbar-nav flex-row">
              <li class="nav-item"><a href="#" class="nav-link px-2 carrito-nav">
                <i class=" fas fa-shopping-cart"></i></a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 carrito-nav">
                <i class="fas fa-heart"></i></a></li>
                  <?php if($haySession): ?>
                    <li class="nav-item1"><a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li><span class="navbar-text"><b> - Bienvenido </b><?= $usuario ?></span>
                  <?php else: ?>
                    <li class="nav-item1"><a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt carrito-nav"></i>Login</a></li>
                  <?php endif; ?>
            </ul>
  </div>
  <div class="collapse navbar-collapse order-3 order-lg-2" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-home carrito-nav"></i>INICIO</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-tshirt carrito-nav"></i>COLECCION</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="#">Camperas</a>
                <a class="dropdown-item" href="#">Remeras manga larga</a>

              </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-percentage carrito-nav"></i></i> SALE</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-envelope carrito-nav"></i></i> CONTACTO</a>
              </li>

          </ul>
        </div>
      </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">BIG FASHION</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>

    </header>
    
    <div class="row text-center">
    @foreach ($articulos as $articulo)
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="img/art1.png" alt="">
          <div class="card-body">
            <h4 class="card-title">{{ $articulo->titulo}}</h4>
            <p class="card-text">{{ $articulo->descripcion }}</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">VER MÁS!</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
  {{ $articulos->links() }}
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos voluptas quae, quod omnis commodi odit distinctio accusamus atque reprehenderit provident consequatur voluptatum ab ex iste debitis quaerat eius laborum! Tempora?</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
