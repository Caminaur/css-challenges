@extends('layouts.main')

@section('title', 'Challenge 12')
@section('css', 'challenge-12b')

@section('main')
    <div class="body">
        <div id="search">
            <input id="input" placeholder="Search..." />
            <button id="button">
                <i class="fa fa-search"></i>
            </button>
            <div class="spinner"><i class="fa fa-spinner"></i></div>
        </div>
        <div class="note">Click the button or hit enter.</div>
    </div>
    <script src="{{ url('/js/challenge-12/scriptb.js') }}" defer></script>
@endsection
