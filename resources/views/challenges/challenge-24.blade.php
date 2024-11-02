@extends('layouts.main')

@section('title', 'Challenge 24')
@section('css', 'challenge-24')

@section('main')
    <div class="body">
        <div class="contenido">
            <h2>Frecuently Asked Questions</h2>
            <div class="accordion">
                <div class="accordion-item">
                    <button class='inactive' id="accordion-button-1" aria-expanded="false">
                        <span class="accordion-title">Why is the moon sometimes out during the day?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi fugit ipsum iste ad distinctio
                        consectetur
                        saepe, at laborum quam atque animi repudiandae rem illo exercitationem quibusdam harum quis
                        doloremque?
                        Enim.
                    </div>
                </div>
                <div class="accordion-item">
                    <button class='inactive' id="accordion-button-2" aria-expanded="false">
                        <span class="accordion-title">Why is the sky blue?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi fugit ipsum iste ad distinctio
                        consectetur
                        saepe, at laborum quam atque animi repudiandae rem illo exercitationem quibusdam harum quis
                        doloremque?
                        Enim.
                    </div>
                </div>
                <div class="accordion-item">
                    <button class='inactive' id="accordion-button-3" aria-expanded="false">
                        <span class="accordion-title">Will we ever discover aliens?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi fugit ipsum iste ad distinctio
                        consectetur
                        saepe, at laborum quam atque animi repudiandae rem illo exercitationem quibusdam harum quis
                        doloremque?
                        Enim.
                    </div>
                </div>
                <div class="accordion-item">
                    <button class='inactive' id="accordion-button-4" aria-expanded="false">
                        <span class="accordion-title">How much does the Earth weight?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi fugit ipsum iste ad distinctio
                        consectetur
                        saepe, at laborum quam atque animi repudiandae rem illo exercitationem quibusdam harum quis
                        doloremque?
                        Enim.
                    </div>
                </div>
                <div class="accordion-item">
                    <button class='inactive' id="accordion-button-5" aria-expanded="false">
                        <span class="accordion-title">How do airplanes stay up?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi fugit ipsum iste ad distinctio
                        consectetur
                        saepe, at laborum quam atque animi repudiandae rem illo exercitationem quibusdam harum quis
                        doloremque?
                        Enim.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ url('/js/challenge-24/index.js') }}"defer></script>
@endsection
