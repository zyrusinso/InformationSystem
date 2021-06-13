@extends('layouts.MyApp')

@section('content')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Student Information System: Register</title>
    <link rel="stylesheet" href="{{ asset('css/login/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login/fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login/css/Login-Form-Dark.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login/css/styles.css') }}">
</head>

<body>
    <section class="login-dark" style="height: 100vh;">
           
        
        <form method="POST" action="{{ route('register') }}" style="margin: 0px;margin-top: -70px;">
        @csrf
            <h2 class="sr-only">{{ __('Register') }}</h2>
            @if (count($errors) > 0)
                    <div class = "alert alert-danger" style="max-width: 100%;">
                        
                        @foreach ($errors->all() as $error)
                            •{{ $error }}<br/>
                        @endforeach
                        
                    </div>
                @endif
            <h1 class="text-center mb-5" style="opacity: 0.8;">Register</h1>

            <div class="form-group">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Name">
            </div>

            <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Email">
            </div>
            
            <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Password">
            </div>

            <div class="form-group">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="Confirm Password">
            </div>
            

            <div class="form-group"><button class="btn btn-primary btn-block" type="submit"> {{ __('Register') }}</button>
        </form>

        
    </section>
    <script src="{{ asset('css/login/js/jquery.min.js') }}"></script>
    <script src="{{ asset('css/login/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
@endsection

