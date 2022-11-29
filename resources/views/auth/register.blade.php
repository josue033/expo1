@extends('layouts.app', ['class' => 'register-page', 'page' => _('página de registro'), 'contentClass' => 'register-page'])

@section('content')
    <div class="row">
        <div class="col-md-5 ml-auto">
            <div class="info-area info-horizontal mt-5">
                <div class="icon icon-warning">
                    <i class="tim-icons icon-light-3"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ _('Dato Curioso I') }}</h3>
                    <p class="description">
                        {{ _('Las emociones negativas son muy difíciles de fingir.
                              Probablemente, hemos fingido una sonrisa más de una vez, pero la tristeza es más complicada, porque incluye componentes diferentes en todos nosotros.') }}
                    </p>
                </div>
            </div>
            <div class="info-area info-horizontal">
                <div class="icon icon-primary">
                    <i class="tim-icons icon-light-3"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ _('Dato Curioso II') }}</h3>
                    <p class="description">
                        {{ _('Los científicos han descubierto que una noche de sueño profundo puede ayudar a sobrellevar las recuerdos traumáticas.
                                Esto se debe a que mientras dormimos decrece la cantidad de hormonas relacionadas con el estrés.') }}
                    </p>
                </div>
            </div>
            <div class="info-area info-horizontal">
                <div class="icon icon-info">
                    <i class="tim-icons icon-light-3"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ _('Dato Curioso III') }}</h3>
                    <p class="description">
                        {{ _('Los científicos han demostrado que cuando se muestra a una persona una imagen de alguien lastimando a otro, o haciendo algo malo, la parte del cerebro 
                                que se activa es la de las emociones, mucho antes que la moral.') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-7 mr-auto">
            <div class="card card-register card-white">
                <div class="card-header">
                    <img style="width: 100%; height: 50%;" class="card-img" src="https://clinicaclicc.com/wp-content/uploads/2015/07/%C2%BFQUE-SON-LAS-EMOCIONES_.jpg"  alt="Card image">
                    <h4 class="card-title">{{ _('') }}</h4>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <form class="form" method="post" action="{{ route('register') }}">
                    @csrf

                    <div class="card-body">
                        <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>
                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ _('Nombre') }}" value="{{ old('name') }}">
                            @include('alerts.feedback', ['field' => 'name'])
                        </div>
                        <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-email-85"></i>
                                </div>
                            </div>
                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ _('Correo Electronico') }}" value="{{ old('email') }}">
                            @include('alerts.feedback', ['field' => 'email'])
                        </div>
                        <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ _('Contraseña') }}">
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ _('Confirma Contraseña') }}">
                        </div>
                        <div class="form-check text-left {{ $errors->has('password') ? ' has-danger' : '' }}">
                            <label class="form-check-label">
                                <input class="form-check-input {{ $errors->has('agree_terms_and_conditions') ? ' is-invalid' : '' }}" name="agree_terms_and_conditions"  type="checkbox"  {{ old('agree_terms_and_conditions') ? 'checked' : '' }}>
                                <span class="form-check-sign"></span>
                                {{ _('Acepto') }}
                                <a href="#">{{ _('terminos y condiciones') }}</a>.
                                @include('alerts.feedback', ['field' => 'agree_terms_and_conditions'])
                            </label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-round btn-lg">{{ _('Comenzar') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
