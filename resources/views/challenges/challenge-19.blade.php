@extends('layouts.main')

@section('title', 'Challenge 19')
@section('css', 'challenge-19')

@section('main')
    <div class="body">
        <h1>Our Pricing</h1>
        <div class="line">
            <h3>Annually</h3>
            <label class="switch">
                <input class="annually" id="switch" type="checkbox">
                <span class="slider"></span>
            </label>
            <h3>Monthly</h3>
        </div>
        <div class="cards">
            <div class="card">
                <h3 class="titulo">Basic</h3>
                <p class="precio">$199.99</p>
                <div class="info">
                    <p>500GB Storage</p>
                    <p>2 Users Allowed</p>
                    <p>Send up to 3GB</p>
                </div>
                <a href="#" class="learn-more">Learn More</a>
            </div>
            <div class="card main">
                <h3 class="titulo">Profesional</h3>
                <p class="precio">$249.99</p>
                <div class="info">
                    <p>1TB Storage</p>
                    <p>5 Users Allowed</p>
                    <p>Send up to 10GB</p>
                </div>
                <a href="#" class="learn-more">Learn More</a>
            </div>
            <div class="card">
                <h3 class="titulo">Master</h3>
                <p class="precio">$399.99</p>
                <div class="info">
                    <p>2TB Storage</p>
                    <p>10 Users Allowed</p>
                    <p>Send up to 20GB</p>
                </div>
                <a href="#" class="learn-more">Learn More</a>
            </div>
        </div>
    </div>
    <script src="{{ url('/js/challenge-19/index.js') }}"></script>
@endsection
