@extends('layouts.app')

@section('content')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Teko&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('CONTACTANOS') }}</div>
                <p><i class="far fa-envelope-open"></i> bigfashion@gmail.com</p>
                <p><a href="https://www.instagram.com/bigfashionba/"><i class="fab fa-instagram"></i></a> bigfashionba</p>
                </div>
                </div>
            </form>
        </div>
    </div>

@endsection
