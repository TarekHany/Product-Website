<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Teka') }}</title>
    <link rel="shortcut icon" href="{{ asset('js/app.js') }}/ico/favicon.png">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- <script src="{{ asset('js/script.js') }}" defer></
    script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/style2.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/media-queries.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    

    {{-- favicon --}}
    <link rel="icon" href="{{ URL::asset('/img/favicon.png') }}" type="image/x-icon"/>
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                     Teka
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <div id="welcome">
		<div id = "" > 
		<nav role = "navigation">
			<div id ="menuToggle">
				<input type="checkbox"/>
				<span id = "ham"></span>
				<span id = "ham"></span>
				<span id = "ham"></span>

				<ul id="menu">
			    <a href="{{ url('/') }}"><li>Home<hr></li></a>
			    <a href="{{ url('/#feature-section') }}"><li>About<hr></li></a>
			    <a href="{{ url('/#review-section') }}"><li>Info<hr></li></a>
			    <a href="#contact-section"><li>Contact<hr></li></a>
			    <a href="{{ route('login') }}"><li>Log in<hr></li></a>
			    <a href="{{ route('register') }}"><li>Sign up</li></a>
			    </ul>
			</div>

			
		</div>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li> --}}
                            @if (Route::has('register'))
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li> --}}
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
