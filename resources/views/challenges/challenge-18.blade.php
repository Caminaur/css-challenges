@extends('layouts.main')

@section('title', 'Challenge 18')
@section('css', 'challenge-18')

@section('main')
    <div class="body">
        <div class="button" id="button"></div>
        <div class="contenido" id="circle"></div>
    </div>
    <script src="{{ url('/js/challenge-18/index.js') }}" defer></script>
@endsection
