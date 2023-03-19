@extends('layouts.main')

@section('title', 'Challenge 1')
@section('css', 'challenge-1')

@section('main')

    <div class="container" style="width: 100vw; padding-top:100px;">
        <div class="body">
            <div class="card">
                <img class="card-image" src="/images/challenge-1/img1.jpg" alt="">
                <h3 class="title">SUE SHEI</h3>
                <h4 class="subtitle">FOUNDER</h3>
                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic aut quaerat rerum
                        fugit eligendi.</p>
                    <div class="icons-row">
                        <a href="#" class="icon"><i class="fa-brands fa-reddit-alien"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-vimeo-v"></i></a>
                    </div>
            </div>
            <div class="card">
                <img class="card-image" src="/images/challenge-1/img2.jpg" alt="">
                <h3 class="title">WILL BARROW</h3>
                <h4 class="subtitle">WEB DEVELOPER</h3>
                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic aut quaerat rerum
                        fugit eligendi.</p>
                    <div class="icons-row">
                        <a href="#" class="icon"><i class="fa-brands fa-reddit-alien"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-vimeo-v"></i></a>
                    </div>
            </div>
            <div class="card">
                <img class="card-image" src="{{ url('/images/challenge-1/img3.jpg') }}" alt="">
                <h3 class="title">INDIGO VIOLET</h3>
                <h4 class="subtitle">PUBLIC RELATIONSHIPS</h3>
                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic aut quaerat rerum
                        fugit eligendi.</p>
                    <div class="icons-row">
                        <a href="#" class="icon"><i class="fa-brands fa-reddit-alien"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-vimeo-v"></i></a>
                    </div>
            </div>
        </div>
    </div>

@endsection
