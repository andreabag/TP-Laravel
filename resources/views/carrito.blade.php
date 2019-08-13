@extends('layouts.app')
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
                
                <button class="btn btn-danger" type="submit"><i class="fas fa-minus"></i></button>
                <button class="btn btn-success" type="submit"><i class="fas fa-plus"></i></button>
                
            </td>
        </tr>
        @empty
        <tr><td>Sin articulos en el carrito.</td></tr>
        @endforelse
    </tbody>
</table>

<form action="carrito" method="POST">
    <button class="btn btn-dark" type="submit">Pagar con MercadoPago</button>
</form>
</div>

@endsection