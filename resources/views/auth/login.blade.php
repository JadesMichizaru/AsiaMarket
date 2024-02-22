@extends('layouts.app')

@section('content')
    <div class="kontener">
        <input type="checkbox" id="check">
        <div class="login form">
            <header>{{ __('Login') }}</header>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="password" class="col-md-3 col-form-label text-md-end">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <a href="#">Forgot password?</a>
                <input type="submit" class="button" value="Login">
            </form>
            <div class="signup">
                <span class="signup">Don't have an account?
                    <label for="check"><a href="{{ url('/register') }}">Sign Up</a></label>
                </span>
            </div>
        </div>

        <style>
            /* Import Google font - Poppins */
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

            .kontener {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                max-width: 430px;
                width: 100%;
                background: #fff;
                border-radius: 7px;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
            }

            .kontener .registration {
                display: none;
            }

            #check:checked~.registration {
                display: block;
            }

            #check:checked~.login {
                display: none;
            }

            #check {
                display: none;
            }

            .kontener .form {
                padding: 2rem;
            }

            .form header {
                font-size: 2rem;
                font-weight: 500;
                text-align: center;
                margin-bottom: 1.5rem;
            }

            .form input {
                height: 60px;
                width: 100%;
                padding: 0 15px;
                font-size: 17px;
                margin-bottom: 1.3rem;
                border: 1px solid #ddd;
                border-radius: 6px;
                outline: none;
            }

            .form input:focus {
                box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
            }

            .form a {
                font-size: 16px;
                color: #009579;
                text-decoration: none;
            }

            .form a:hover {
                text-decoration: underline;
            }

            .form input.button {
                color: #fff;
                background: #009579;
                font-size: 1.2rem;
                font-weight: 500;
                letter-spacing: 1px;
                margin-top: 1.7rem;
                cursor: pointer;
                transition: 0.4s;
            }

            .form input.button:hover {
                background: #006653;
            }

            .signup {
                font-size: 17px;
                text-align: center;
            }

            .signup label {
                color: #009579;
                cursor: pointer;
            }

            .signup label:hover {
                text-decoration: underline;
            }
        </style>
    @endsection
