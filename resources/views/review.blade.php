<!-- REVIEW -->
@extends('layouts.appLayout')
@section('title', 'Reviews')
@section('content')
    <section class="review" id="review">
        <h1 class="heading">cupping review <span>notes from our roasts</span></h1>
        <div class="swiper review-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <i class="fas fa-quote-left"></i>
                    <i class="fas fa-quote-right"></i>
                    <img src="{{ asset('coffee-shop/image/pic-1.png') }}" alt="Review from Adrian">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>A bright roast with citrus lift, tea-like body, and a clean finish that stays elegant from the
                        first sip.</p>
                    <h3>adrian cole</h3>
                    <span>home brewer</span>
                </div>

                <div class="swiper-slide box">
                    <i class="fas fa-quote-left"></i>
                    <i class="fas fa-quote-right"></i>
                    <img src="{{ asset('coffee-shop/image/pic-2.png') }}" alt="Review from Elina">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Balanced sweetness and soft cocoa notes make this roast comfortable for everyday cups without
                        losing origin character.</p>
                    <h3>elina hart</h3>
                    <span>cafe owner</span>
                </div>

                <div class="swiper-slide box">
                    <i class="fas fa-quote-left"></i>
                    <i class="fas fa-quote-right"></i>
                    <img src="{{ asset('coffee-shop/image/pic-3.png') }}" alt="Review from Marco">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Dark chocolate depth, syrupy body, and a long finish make this profile a strong choice for
                        espresso lovers.</p>
                    <h3>marco vale</h3>
                    <span>espresso enthusiast</span>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
@endsection