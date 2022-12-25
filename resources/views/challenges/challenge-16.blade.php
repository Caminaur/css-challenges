@extends('layouts.main')

@section('title', 'Challenge 16')
@section('css', 'challenge-16')
@section('scripts')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection

@section('main')
    <div class="body">
        <form action="" class="signin" autocomplete="off">
            <h1>Sign in</h1>
            <input class="inputs" type="email" name="email" id="email" placeholder="Email Address">
            <input class="inputs" type="password" name="password" id="pass" placeholder="Password">
            <button class="btnlogin" type="button">
                <ion-icon class="icon" name="lock-closed"></ion-icon>
                Log in
            </button>
            <div class="buttons-row">
                <button class="unit">
                    <ion-icon class="icon" name="arrow-back"></ion-icon>
                </button>
                <button class="unit">
                    <ion-icon class="icon" name="bookmark"></ion-icon>
                </button>
                <button class="unit">
                    <ion-icon class="icon" name="settings"></ion-icon>
                </button>
            </div>
            <div class="email-row">
                <input type="email" name="email-2" id="email-2" placeholder="Email Address">
                <button class="unit">
                    <ion-icon name="search"></ion-icon>
                </button>
            </div>
        </form>
    </div>
    <script src="{{ url('/js/challenge-16/index.js') }}"></script>
@endsection
