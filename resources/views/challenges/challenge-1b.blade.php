@extends('layouts.main')

@section('title', 'Home Screen')
@section('css', 'challenge-1b')

@section('main')

    <div class="container" style="padding-top:100px;text-align:center;">
        <figure class="card">
            <div class="profile-image">
                <img src="/images/challenge-1/img1.jpg" alt="">
            </div>
            <figcaption>
                <h3>Sue Shei</h3>
                <h5>Founder</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eos ratione modi, mollitia nesciunt harum.
                </p>
                <div class="icons">
                    <a href="#"><i class="fa-brands fa-reddit-alien"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                </div>
            </figcaption>
        </figure>
        <figure class="card">
            <div class="profile-image">
                <img src="/images/challenge-1/img2.jpg" alt="">
            </div>
            <figcaption>
                <h3>WILL BARROW</h3>
                <h5>WEB DEVELOPER</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eos ratione modi, mollitia nesciunt harum.
                </p>
                <div class="icons">
                    <a href="#"><i class="fa-brands fa-reddit-alien"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                </div>
            </figcaption>
        </figure>
        <figure class="card">
            <div class="profile-image">
                <img src="/images/challenge-1/img3.jpg" alt="">
            </div>
            <figcaption>
                <h3>INDIGO VIOLET</h3>
                <h5>PUBLIC RELATIONSHIPS</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eos ratione modi, mollitia nesciunt harum.
                </p>
                <div class="icons">
                    <a href="#"><i class="fa-brands fa-reddit-alien"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                </div>
            </figcaption>
        </figure>
    </div>

@endsection
