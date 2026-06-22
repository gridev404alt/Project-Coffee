<!-- ABOUT -->
@extends('layouts.appLayout')
@section('title', 'About Us')
@section('content')
    <section class="about" id="about">
        <h1 class="heading">about us <span>why choose us</span></h1>
        <div class="row">
            <div class="image">
                <img src="{{ asset('coffee-shop/image/about-img.png') }}" alt="">
            </div>
            <div class="content">
                <h3 class="title">what's make our coffee special!</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rerum laboriosam reprehenderit ipsa id
                    repellat odio illum, voluptas, necessitatibus assumenda adipisci. Hic, maiores iste? Excepturi illo
                    dolore mollitia qui quia.</p>
                <a href="#" class="btn">read more</a>
                <div class="icons-container">
                    <div class="icons">
                        <img src="{{ asset('coffee-shop/image/about-icon-1.png') }}" alt="">
                        <h3>quality coffee</h3>
                    </div>
                    <div class="icons">
                        <img src="{{ asset('coffee-shop/image/about-icon-2.png') }}" alt="">
                        <h3>our branches</h3>
                    </div>
                    <div class="icons">
                        <img src="{{ asset('coffee-shop/image/about-icon-3.png') }}" alt="">
                        <h3>free delivery</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection