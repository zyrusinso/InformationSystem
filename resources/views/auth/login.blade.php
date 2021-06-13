@extends('layouts.MyApp')

@section('content')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Student Information System: Login</title>
    <link rel="stylesheet" href="{{ asset('css/login/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login/fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login/css/Login-Form-Dark.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login/css/styles.css') }}">
</head>

<body>
    <section class="login-dark" style="height: 100vh;">
                            
        <form method="POST" action="{{ route('login') }}"style="margin: 0px;margin-top: -70px;">
            @csrf
                @if (count($errors) > 0)
                    <div class = "alert alert-danger" style="max-width: 100%;">
                        
                        @foreach ($errors->all() as $error)
                            •{{ $error }}<br/>
                        @endforeach
                        
                    </div>
                @endif
            <h2 class="sr-only">{{ __('Login') }}</h2>
            
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input id="text" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autofocus placeholder="Email">
            </div>
            
            <div class="form-group"><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Password">

            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button>
        </form>

        @guest
            @if (Route::has('register'))
                
                <a class="nav-link text-center" href="{{ route('register') }}">{{ __('Register') }}</a>
                
            @endif
        @endguest
        <a href=""></a>
    </section>
    <script src="{{ asset('css/login/js/jquery.min.js') }}"></script>
    <script src="{{ asset('css/login/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
@endsection

