@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-header"><i class="fas fa-user" style="font-size: 2rem;"></i></div>
                <div class="card-body shadow-lg">
                    <form method="POST" action="{{ route('login') }}" id="form-login">
                        @csrf

                        <div class="row">
                            <div class="form-group col-sm">
                              <label for="email">{{ __('Correo electrónico') }}</label>
                                <input id="email" type="email" class="form-control " name="email" value="{{ old('email') }}" placeholder="{{ __('Correo electrónico') }}" required autocomplete="email" autofocus>
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-sm">
                              <label for="email">{{ __('Contraseña') }}</label>
                                <input id="txtpassword" type="password" class="form-control" name="password" placeholder="{{ __('Contraseña') }}" required autocomplete="current-password">
                            </div>
                          </div>
                          <div class="row justify-content-center p-3">
                            <button type="submit" class="btn btn-success w-50 p-2 " id="btnsubmit">
                              {{ __('Iniciar sesión') }}
                            </button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
