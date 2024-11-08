@extends('layouts.main')

@section('title', 'Challenge 29')
@section('css', 'challenge-29')

@section('main')
    <div class="body">
        <div class="container a-container" id="a-container">
            <form class="form" id="a-form" method="" action="">
                <h2 class="title">Create Account</h2>
                <div class="form__icons">
                    <div class="form__icon"><i class="fa-brands fa-facebook-f"></i></div>
                    <div class="form__icon"><i class="fa-brands fa-linkedin"></i></div>
                    <div class="form__icon"><i class="fa-brands fa-twitter"></i></div>
                </div>
                <span class="form__span">or use email for registration</span>
                <input class="form__input" type="text" placeholder="Name" />
                <input class="form__input" type="text" placeholder="Email" />
                <input class="form__input" type="password" placeholder="Password" />
                <button class="button submit">SIGN UP</button>
            </form>
        </div>

        <div class="container b-container" id="b-container">
            <form class="form" id="b-form" method="" action="">
                <h2 class="title">Sign in to Website</h2>
                <div class="form__icons">
                    <div class="form__icon"><i class="fa-brands fa-facebook-f"></i></div>
                    <div class="form__icon"><i class="fa-brands fa-linkedin"></i></div>
                    <div class="form__icon"><i class="fa-brands fa-twitter"></i></div>
                </div>
                <span class="form__span">or use your email account</span>
                <input class="form__input" type="text" placeholder="Email" />
                <input class="form__input" type="password" placeholder="Password" />
                <a class="form__link">Forgot your password?</a>
                <button class="button submit">SIGN IN</button>
            </form>
        </div>

        <div class="switch" id="switch-cnt">
            <div class="switch__circle"></div>
            <div class="switch__circle switch__circle--t"></div>
            <div class="switch__container" id="switch-c1">
                <h2 class="title">Welcome Back !</h2>
                <p class="description">To keep connected with us please login with your personal info</p>
                <button class="switch__button button switch-btn">SIGN IN</button>
            </div>
            <div class="switch__container is-hidden" id="switch-c2">
                <h2 class="switch__title title">Hello Friend !</h2>
                <p class="description">Enter your personal details and start journey with us</p>
                <button class="switch__button button switch-btn">SIGN UP</button>
            </div>
        </div>
    </div>

    <script src="{{ url('/js/challenge-29/index.js') }}"defer></script>
@endsection
