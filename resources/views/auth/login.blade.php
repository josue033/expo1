@extends('layouts.app', ['class' => 'login-page', 'page' => _('Iniciar sesión'), 'contentClass' => 'login-page'])

@section('content')
    <div class="col-md-10 text-center ml-auto mr-auto">
        <h3 class="mb-5">Bienvenido</h3>
    </div>
    <div class="col-lg-4 col-md-6 ml-auto mr-auto" >
        <form class="form" method="post" action="{{ route('login') }}">
            @csrf

            <div class="card card-login card-white">
                <div class="card-header">
                    <img src="https://clinicaclicc.com/wp-content/uploads/2015/07/%C2%BFQUE-SON-LAS-EMOCIONES_.jpg"  alt="">
                    <h1 class="card-title">{{ _(' ') }}</h1>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="card-body">
                    <p class="text-dark mb-2">Entra con tu <strong>correo o usuario</strong> y contrasena <strong>privada</strong></p>
                    <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-email-85"></i>
                            </div>
                        </div>
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ _('Correo') }}">
                        @include('alerts.feedback', ['field' => 'email'])
                    </div>
                    <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-lock-circle"></i>
                            </div>
                        </div>
                        {{-- CAmbien en placehoder Contasena por paasword --}}
                        <input type="password" placeholder="{{ _('Contraseña') }}" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                        @include('alerts.feedback', ['field' => 'password'])
                    </div>
                </div>
                <div class="card-footer">
                    {{-- Cabio de get stardter por iniciar --}}
                    <button type="submit" href="" class="btn btn-primary btn-lg btn-block mb-3">{{ _('Comenzar') }}</button>
                    <div class="pull-left">
                        <h6>
                            {{-- Cerar cuenta por cretate acout Create Account--}}
                            <a href="{{ route('register') }}" class="link footer-link">{{ _('Crear cuenta') }}</a>
                        </h6>
                    </div>
                    <div class="pull-right">
                        <h6>
                            {{-- olvidar contarsena Forgot password? --}}
                            <a href="{{ route('password.request') }}" class="link footer-link">{{ _('¿Olvidaste tu contraseña?') }}</a>
                        </h6>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
