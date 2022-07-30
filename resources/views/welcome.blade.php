<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 p-5">
                    <div class="card">
                        <div class="card-header text-center">
                            <h1>¡Bienvenido!</h1>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <h5>Este es un sistema de crud, inicia sesión y ve como funciona.</h5>
                                <p>Ingresa con estas credenciales: </p>
                                <p>email: <strong>admin@gmail.com</strong></p>
                                <p>contraseña: <strong>password</strong></p>
                                <a href="{{ route('login') }}" class="btn btn-dark w-50">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
