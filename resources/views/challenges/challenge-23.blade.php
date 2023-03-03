@extends('layouts.main')

@section('title', 'Challenge 23')
@section('css', 'challenge-23')

@section('main')
    <div class="body">
        <div class="card">
            <img src="{{ url('/images/challenge-23/game1.jpg') }}" alt="">
        </div>
        <div class="card">
            <img src="{{ url('/images/challenge-23/game2.jpg') }}" alt="">
        </div>
        <div class="card">
            <img src="{{ url('/images/challenge-23/game3.jpg') }}" alt="">
        </div>
        <div class="card">
            <img src="{{ url('/images/challenge-23/game4.jpg') }}" alt="">
        </div>
    </div>
@endsection
