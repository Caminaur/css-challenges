@extends('layouts.main')

@section('title', 'Challenge 2')
@section('css', 'challenge-2')

@section('main')

    <div class="body">
        <div class="card">
            <div class="box box1">
                <div class="content">
                    <img class="logo-image" src="{{ url('/images/challenge-2/img1.png') }}" alt="">
                    <h3 class="title">Design</h3>
                </div>
            </div>
            <div class="box box2">
                <div class="content">
                    <h5 class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos cupiditate
                    </h5>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box box1">
                <div class="content">
                    <img class="logo-image" src="{{ url('/images/challenge-2/img2.png') }}" alt="">
                    <h3 class="title">Code</h3>
                </div>
            </div>
            <div class="box box2">
                <div class="content">
                    <h5 class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos cupiditate
                    </h5>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box box1">
                <div class="content">
                    <img class="logo-image" src="{{ url('/images/challenge-2/img3.png') }}" alt="">
                    <h3 class="title">Launch</h3>
                </div>
            </div>
            <div class="box box2">
                <div class="content">
                    <h5 class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos cupiditate
                    </h5>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>

@endsection
