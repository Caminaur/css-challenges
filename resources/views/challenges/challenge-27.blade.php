@extends('layouts.main')

@section('title', 'Challenge 27')
@section('css', 'challenge-27')

@section('main')
    <div class="body">
        <div class="section-1">
            <h4>Menu</h4>
            <div class="menues">
                <a href="" class="menue">
                    <i class="fa fa-user"></i>
                    <span>My drive</span>
                </a>
                <a href="" class="menue">
                    <i class="fa fa-laptop"></i>
                    <span href="">Computers</span>
                </a>
                <a href="" class="menue">
                    <i class="fa fa-clone"></i>
                    <span href="">Shared with me</span>
                </a>
                <a href="" class="menue">
                    <i class="fa fa-star"></i>
                    <span href="">Starred</span>
                </a>
                <a href="" class="menue">
                    <i class="fa fa-trash"></i>
                    <span href="">Trash</span>
                </a>
            </div>
        </div>
        <div class="section-2"></div>
    </div>
@endsection