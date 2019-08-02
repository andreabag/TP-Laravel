@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control @error('name') is-invalid @enderror" name="surname" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user" class="col-md-4 col-form-label text-md-right">{{ __('User') }}</label>

                            <div class="col-md-6">
                                <input id="user" type="text" class="form-control @error('name') is-invalid @enderror" name="user" value="{{ old('user') }}" required autocomplete="name" autofocus>

                                @error('user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="birthdate" class="col-md-4 col-form-label text-md-right">{{ __('Birthdate') }}</label>

                            <div class="col-md-6">
                                <input id="birthdate" type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" required autocomplete="birthdate" autofocus>

                                @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('Province') }}</label>
                            <div class="col-md-6">
                            <select class="form-control" name="province" id="provincia">
                              <option value="seleccion">Seleccione una opcion</option>
                              <option value="Buenos Aires">Bs. As.</option>
                              <option value="Catamarca">Catamarca</option>
                              <option value="Chaco">Chaco</option>
                              <option value="Chubut">Chubut</option>
                              <option value="Cordoba">Cordoba</option>
                              <option value="Corrientes">Corrientes</option>
                              <option value="Entre Rios">Entre Rios</option>
                              <option value="Formosa">Formosa</option>
                              <option value="Jujuy">Jujuy</option>
                              <option value="La Pampa">La Pampa</option>
                              <option value="La Rioja">La Rioja</option>
                              <option value="Mendoza">Mendoza</option>
                              <option value="Misiones">Misiones</option>
                              <option value="Neuquen">Neuquen</option>
                              <option value="Rio Negro">Rio Negro</option>
                              <option value="Salta">Salta</option>
                              <option value="San Juan">San Juan</option>
                              <option value="San Luis">San Luis</option>
                              <option value="Santa Cruz">Santa Cruz</option>
                              <option value="Santa Fe">Santa Fe</option>
                              <option value="Sgo. del Estero">Sgo. del Estero</option>
                              <option value="Tierra del Fuego">Tierra del Fuego</option>
                              <option value="Tucuman">Tucuman</option>
                           </select>
                           </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label text-md-right" for="avatar"> Avatar</label>
                          <div class="col-md-6">
                            <input type="file" name="avatar" placeholder="Avatar">
                          </div>
                      </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
