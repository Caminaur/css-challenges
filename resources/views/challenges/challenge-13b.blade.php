@extends('layouts.main')

@section('title', 'Challenge 13')
@section('css', 'challenge-13')

@section('main')

    <body>
        <div class="containeru right-panel-active">
            <!-- Sign Up -->
            <div class="containeru__form containeru--signup">
                <form action="#" class="form" id="form1">
                    <h2 class="form__title">Sign Up</h2>
                    <input type="text" placeholder="User" class="input" />
                    <input type="email" placeholder="Email" class="input" />
                    <input type="password" placeholder="Password" class="input" />
                    <button class="btn">Sign Up</button>
                </form>
            </div>

            <!-- Sign In -->
            <div class="containeru__form containeru--signin">
                <form action="#" class="form" id="form2">
                    <h2 class="form__title">Sign In</h2>
                    <input type="email" placeholder="Email" class="input" />
                    <input type="password" placeholder="Password" class="input" />
                    <a href="#" class="link">Forgot your password?</a>
                    <button class="btn">Sign In</button>
                </form>
            </div>

            <!-- Overlay -->
            <div class="containeru__overlay">
                <div class="overlay">
                    <div class="overlay__panel overlay--left">
                        <button class="btn" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay__panel overlay--right">
                        <button class="btn" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script src="{{ url('/js/challenge-13/indexb.js') }}"></script>
@endsection
