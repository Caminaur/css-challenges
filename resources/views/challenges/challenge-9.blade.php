@extends('layouts.main')

@section('title', 'Challenge 9')
@section('css', 'challenge-9')

@section('main')
    <div class="body">
        <div class="card">
            <div class="part-one">
                <p class="title">
                    Bayley Wonger
                </p>
                <div class="icon-list">
                    <a href="" class="icon"><i class="fa-brands fa-twitter"></i></a>
                    <a href="" class="icon"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
                    <a href="" class="icon"><i class="fa-brands fa-github" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="image-section">
                <img src="{{ url('/images/challenge-9/person1.jpg') }}" alt="" class="imagen">
            </div>
        </div>
        <div class="card">
            <div class="part-one">
                <p class="title">
                    Abraham Pigeon
                </p>
                <div class="icon-list">
                    <a href="" class="icon"><i class="fa-brands fa-twitter"></i></a>
                    <a href="" class="icon"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
                    <a href="" class="icon"><i class="fa-brands fa-github" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="image-section">
                <img src="{{ url('/images/challenge-9/person2.jpg') }}" alt="" class="imagen">
            </div>
        </div>
        <div class="card">
            <div class="part-one">
                <p class="title">
                    Hans Down
                </p>
                <div class="icon-list">
                    <a href="" class="icon"><i class="fa-brands fa-twitter"></i></a>
                    <a href="" class="icon"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
                    <a href="" class="icon"><i class="fa-brands fa-github" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="image-section">
                <img src="{{ url('/images/challenge-9/person3.jpg') }}" alt="" class="imagen">
            </div>
        </div>
    </div>
@endsection
