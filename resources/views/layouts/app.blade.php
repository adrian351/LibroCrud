<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    {{--  js  --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/myFunction.js') }}" defer></script>
    <script src="{{ asset('js/plugins/jQuery/jquery-3.6.0.min.js') }}"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js" defer></script>

    {{--  csss  --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <i class="fas fa-book" style="padding-right: 5px;"></i>{{ config('app.name', 'Laravel') }}
                </a>
                @guest
                    @if (Route::has('login'))
                            
                    @endif
                @else
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                      <a class="nav-link {{ Request::is('book') ? 'active' : ''}}" href="{{ route('book.index') }}">
                        <i class="fas fa-book-open"></i>&nbsp;&nbsp;{{ __('Libros') }}
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('home') ? 'active' : ''}}" href="{{ route('home') }}">
                        <i class="fas fa-link"></i>&nbsp;{{ __('API') }}
                        </a>
                    </li>
                </ul>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               <i class="fas fa-user-minus"></i>&nbsp; {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}&nbsp;&nbsp;<i class="fa-solid fa-arrow-right-from-bracket" title="Logout"></i>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <a class="dropdown-item" href="{{ route('user.index', Auth::user()->id) }}">Información &nbsp;&nbsp;<i class="fas fa-circle-info" title="Informacíon"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
                @endguest
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
