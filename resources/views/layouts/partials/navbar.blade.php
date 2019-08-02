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
