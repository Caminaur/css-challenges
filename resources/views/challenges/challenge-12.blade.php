@extends('layouts.main')

@section('title', 'Challenge 12')
@section('css', 'challenge-12')

@section('main')
    <div class="body">
        <div class="search">
            <input type="text" id="input" placeholder="Search...">
            <button id="search-lupa">
                <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
            </button>
            <div id="search-spinner">
                <i class="fa fa-spinner"></i>
            </div>
        </div>
        <p class="message">Click the button or hit enter</p>
    </div>
    <script src="{{ url('/js/challenge-12/script.js') }}" defer></script>
@endsection
