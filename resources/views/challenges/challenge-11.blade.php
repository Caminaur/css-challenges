@extends('layouts.main')

@section('title', 'Challenge 11')
@section('css', 'challenge-11')

@section('main')
    <div class="body">
        <div class="search">
            <img src="{{ url('/images/challenge-11/top-menu.png') }}" alt="">
            <input id="search" autocomplete="off" class="das-input" placeholder="Search..." type="text" name=""
                id="">
            <label for="search">
                <img class="search-stuff" src="{{ url('/images/challenge-11/search.png') }}" alt="">
            </label>
        </div>
        <div id="search-box" class="search-box">
            <div class="search-box-top">
                <p class="title">Search</p>
                <img id="close-button" src="{{ url('/images/challenge-11/cancel.png') }}" alt=""
                    class="close-button">
            </div>
            <div class="search-box-bottom">
                @php
                    $users = ['Kate Morrison', 'Diana Smiley', 'Miyah Myles'];
                @endphp
                @for ($i = 1; $i <= 3; $i++)
                    <div class="user-card">
                        <img src="{{ url('/images/challenge-11/img' . $i . '.jpg') }}" alt="" class="profile-pic">
                        <div class="description">
                            <p class="name">New notification from {{ $users[$i - 1] }}</p>
                            <p class="time">Hace 2 segundos..</p>
                        </div>
                    </div>
                @endfor
                @for ($i = 1; $i <= 3; $i++)
                    <div class="user-card">
                        <img src="{{ url('/images/challenge-11/img' . $i . '.jpg') }}" height=200 width="200"
                            alt="" class="profile-pic">
                        <div class="description">
                            <p class="name">New notification from {{ $users[$i - 1] }}</p>
                            <p class="time">Hace 2 segundos..</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('load', function() {
            const input = document.getElementById('search');
            const exitButton = document.getElementById('close-button');
            const searchBox = document.getElementById('search-box');
            input.addEventListener('focus', function() {
                searchBox.animate({
                    opacity: 1,
                    transform: 'translate3d(0, -30px , 0)'
                }, {
                    fill: 'forwards',
                    duration: 300
                });
            });
            exitButton.addEventListener('click', function() {
                searchBox.animate({
                    opacity: 0,
                    transform: 'translate3d(0, 0 , 0)'
                }, {
                    fill: 'forwards',
                    duration: 200
                });
            });
        });
    </script>
@endsection
