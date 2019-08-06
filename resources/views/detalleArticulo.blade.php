<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Detalle_articulo</title>
  </head>
  <body>
    <div class="row text-center">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="img/art1.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">VER MÁS!</a>
          </div>
        </div>
      </div>


      <form action="/borrarArticulo" method="post"></form>
      {{ csrf_field() }}
      <input type="hidden" name="id" value="{{$articulo->id}}">
      <input type="submit" name="" value="borrarArticulo">

  </body>
</html>
