@extends('layouts.app')
<link href="{{ asset('css/carrito.css') }}" rel="stylesheet">
@section('content')

<div class="container">
<h2 class="mb-3"><i class="fas fa-shopping-cart"></i> Carrito</h2>
<table class="table table-hover">
    <thead>
        <th>Articulo</th>
        <th>Cantidad</th>
        <th>Modificar</th>
    </thead>
    <tbody>
        @forelse ($articulos as $articulo)
        <tr>
            <td>
                {{ $articulo->product()->get()->first()->titulo }}
            </td>
            <td>
                {{ $articulo->cantidad }}
            </td>
            <td>
                <form action="/eliminarDelCarrito/{{ $articulo->id }}">
                    <button class="btn btn-dark" type="submit"><i class="fas fa-skull-crossbones"></i></button>
                </form>
                <form action="/restarUnaUnidad/{{ $articulo->id }}">
                    <button class="btn btn-danger" type="submit"><i class="fas fa-minus"></i></button>
                </form>
                <form action="/sumarUnaUnidad/{{ $articulo->id }}">
                    <button class="btn btn-success" type="submit"><i class="fas fa-plus"></i></button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td>Sin articulos en el carrito.</td></tr>
        @endforelse
    </tbody>
</table>

<form action="#" >
    <button class="btn btn-dark" type="submit">Pagar</button>
</form>
</div>

@endsection