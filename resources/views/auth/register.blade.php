@extends('layouts.store')
@section('sub_title', 'Registro')
@section('content')
<div class="register-box">
    <div class="register-logo">
        <img src="{{asset('/img/logo-tiendapp.png')}}" alt="logo tiendApp" class="logo-app">
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Registro</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf
        <div class="form-group has-feedback">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre Completo">

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>
        <div class="form-group has-feedback">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo Electrónico">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group has-feedback">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group has-feedback">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme Contraseña">
        </div>
        <div class="row">
            <!-- /.col -->
            
            <button type="submit" class="btn btn-primary btn-block btn-flat">Registrarse</button>
            
            <!-- /.col -->
        </div>
        </form>
    </div>
  <!-- /.form-box -->
</div>
@endsection
