@extends('layouts.main')

@section('title', 'Challenge 25')
@section('css', 'challenge-25')

@section('main')
    <div class="body">
        <div class="central-button">
            <input type="checkbox" name="central-button" id="checkbox">
            <button id="off" class="button posicion-3">OFF
            </button>
            <button id="on" class="button posicion-4">ON</button>
        </div>
    </div>
    <script src="{{ url('/js/challenge-25/index.js') }}"></script>
@endsection
