{{-- https://30dayscss.vercel.app/dayone --}}
@extends('layouts.main')

@section('title', 'Challenge 21')
@section('css', 'challenge-21')

@section('main')
    <div class="body">
        <section class="photo-grid-container">
            <div class="photo-grid-item">
                <img src="{{ URL::asset('/images/challenge-21/img1.jpg') }}" alt="">
            </div>
            <div class="photo-grid-item">
                <img src="{{ URL::asset('/images/challenge-21/img2.jpg') }}" alt="">
            </div>
            <div class="photo-grid-item">
                <img src="{{ URL::asset('/images/challenge-21/img3.jpg') }}" alt="">
            </div>
            <div class="photo-grid-item">
                <img src="{{ URL::asset('/images/challenge-21/img4.jpg') }}" alt="">
            </div>
            <div class="photo-grid-item">
                <img src="{{ URL::asset('/images/challenge-21/img5.jpg') }}" alt="">
            </div>
            <div class="photo-grid-item">
                <img src="{{ URL::asset('/images/challenge-21/img6.jpg') }}" alt="">
            </div>
            <div class="photo-grid-item">
                <img src="{{ URL::asset('/images/challenge-21/img7.jpg') }}" alt="">
            </div>
            <div class="photo-grid-item">
                <img src="{{ URL::asset('/images/challenge-21/img8.jpg') }}" alt="">
            </div>
            <div class="photo-grid-item">
                <img src="{{ URL::asset('/images/challenge-21/img9.jpg') }}" alt="">
            </div>
            <div class="photo-grid-item">
                <img src="{{ URL::asset('/images/challenge-21/img10.jpg') }}" alt="">
            </div>
            <div class="photo-grid-item">
                <img src="{{ URL::asset('/images/challenge-21/img11.jpg') }}" alt="">
            </div>
            <div class="photo-grid-item">
                <img src="{{ URL::asset('/images/challenge-21/img12.jpg') }}" alt="">
            </div>
            <div class="photo-grid-item">
                <img src="{{ URL::asset('/images/challenge-21/img13.jpg') }}" alt="">
            </div>
            <div class="photo-grid-item">
                <img src="{{ URL::asset('/images/challenge-21/img14.jpg') }}" alt="">
            </div>
            <div class="photo-grid-item">
                <img src="{{ URL::asset('/images/challenge-21/img15.jpg') }}" alt="">
            </div>
            <div class="photo-grid-item">
                <img src="{{ URL::asset('/images/challenge-21/img16.jpg') }}" alt="">
            </div>
            <div class="photo-grid-item">
                <img src="{{ URL::asset('/images/challenge-21/img17.jpg') }}" alt="">
            </div>
            <div class="photo-grid-item">
                <img src="{{ URL::asset('/images/challenge-21/img18.jpg') }}" alt="">
            </div>
            <div class="photo-grid-item">
                <img src="{{ URL::asset('/images/challenge-21/img19.jpg') }}" alt="">
            </div>
            <div class="photo-grid-item">
                <img src="{{ URL::asset('/images/challenge-21/img20.jpg') }}" alt="">
            </div>
        </section>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"
        integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $('img').ladyload();
        });
    </script>
@endsection
