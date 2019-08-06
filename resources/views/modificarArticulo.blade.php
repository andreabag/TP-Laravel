@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ 'Modificar' }} {{$articulo->titulo}}</div>

    <div class="card-body">
        <form method="POST" action="{{ url('actualizarArticulo') }}" enctype="multipart/form-data">
            {{csrf_field()}}

      <div class="form-group row">
          <label for="titulo" class="col-md-4 col-form-label text-md-right">{{ 'Título' }}</label>

          <div class="col-md-6">
              <input id="titulo" type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{$articulo->titulo}}" required autocomplete="titulo">

              @error('titulo')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>

      <div class="form-group row">
          <label for="descripcion" class="col-md-4 col-form-label text-md-right" >{{ 'Descripción' }}
          </label>

          <div class="col-md-6">
              <input id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" value="{{$articulo->descripcion}}" name="descripcion" required autocomplete="descripcion">

              @error('descripcion')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <input type="hidden" name="id" value="{{$articulo->id}}">

      <div class="form-group row">
          <label for="foto" class="col-md-4 col-form-label text-md-right">{{ 'Foto' }}</label>

          <div class="col-md-6">
              <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="titulo" autocomplete="titulo" >

              @error('descripcion')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>

      <div class="form-group row">
          <label for="precio" class="col-md-4 col-form-label text-md-right">{{ 'Precio' }}</label>

          <div class="col-md-6">
              <input id="precio" type="text" class="form-control @error('precio') is-invalid @enderror" name="precio" required autocomplete="precio" value="{{$articulo->precio}}">

              @error('precio')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          </div>
          <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary" value="agregarArticulo">
                      {{ __('MODIFICAR') }}
                  </button>
              </div>
          </div>
          </div>
      </div>
    </form>
    @endsection
