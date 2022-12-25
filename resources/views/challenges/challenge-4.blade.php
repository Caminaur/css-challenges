@extends('layouts.main')

@section('title', 'Challenge 4')
@section('css', 'challenge-4')

@section('main')
    <div class="body">
        <div class="card">
            <div class="image">
                <img src=" {{ url('/images/challenge-4/img1.jpg') }} " alt="">
            </div>
            <div class="link"><a href="#">Buy now</a></div>
        </div>
        <div class="card">
            <div class="image">
                <img src=" {{ url('/images/challenge-4/img2.jpg') }} " alt="">
            </div>
            <div class="link"><a href="#">Read more</a></div>
        </div>
        <div class="card">
            <div class="image">
                <img src=" {{ url('/images/challenge-4/img3.jpg') }} " alt="">
            </div>
            <div class="link"><a href="#">Join us</a></div>
        </div>
    </div>
@endsection
