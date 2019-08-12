

@extends('layouts.app')
<link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
@section('content')
<head>
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }




        </style>

    </head>
    <body>


        <div class="flex-center position-ref full-height">


            <div class="content">

              <div id="carouselExampleControls" class="carousel slide car" data-ride="carousel">
                <div class="carousel-inner">

                  <div class="carousel-item active">
                    <img class="d-block img-fluid " src="storage/miko2019.jpg" alt="First slide">
                  </div>

                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="storage/2.jpg" alt="Second slide">
                  </div>

                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>

                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>

                </div>

            </div>
        </div>
    </body>

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
</html>

@endsection
