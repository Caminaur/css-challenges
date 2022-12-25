@extends('layouts.main')

@section('title', 'Challenge 13')
@section('css', 'challenge-13')

@section('main')
    <div class="body">
        <div class="main-box">
            <div class="signin-box">
                <form class="formulario login" action="">
                    <h2 class="titulo">Sign in</h2>
                    <div class="inputs">
                        <input type="text" placeholder="Email">
                    </div>
                    <div class="inputs">
                        <input type="password" name="password" id="" placeholder="Password">
                    </div>
                    <small class="password-recovery" href="">Forgot your password?</small>
                    <button class="botones-deco">Sign in</button>
                </form>
            </div>
            <div class="signup-box">
                <form class="formulario signup" action="">
                    <h2 class="titulo">Sign Up</h2>
                    <div class="inputs">
                        <input name="user" type="text" placeholder="User">
                    </div>
                    <div class="inputs">
                        <input name="email" type="text" placeholder="Email">
                    </div>
                    <div class="inputs">
                        <input type="password" name="password" id="login-pass" placeholder="Password">
                    </div>
                    <button class="botones-deco">Sign Up</button>
                </form>
            </div>
            <div class="overlay1">
                <div class="signup-action" id="signup-action">
                    <button class="botones-deco" id="signup-button">Sign Up</button>
                </div>
                <div class="signin-action state-1" id="signin-action">
                    <button class="botones-deco" id="signin-button">Sign in</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('/js/challenge-13/index.js') }}"></script>
@endsection
