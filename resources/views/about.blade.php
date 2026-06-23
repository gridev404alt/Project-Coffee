<!-- ABOUT -->
@extends('layouts.appLayout')
@section('title', 'About Us')
@section('content')
    <section class="about" id="about">
        <h1 class="heading">about beans <span>from farm to roast</span></h1>
        <div class="row">
            <div class="image">
                <img src="{{ asset('coffee-shop/image/new/coffee-plantation.png') }}" alt="Coffee plantation">
            </div>
            <div class="content">
                <h3 class="title">we focus on the bean before the brew</h3>
                <p>Bean Craft is built around coffee beans with clear origin, careful sorting, and roast profiles that
                    respect each harvest. We select lots that keep their natural sweetness, layered aroma, and distinct
                    finish from the first crack to the final cup.</p>
                <a href="{{ route('menu') }}" class="btn">see bean collection</a>
                <div class="icons-container">
                    <div class="icons">
                        <img src="{{ asset('coffee-shop/image/new/icon1.png') }}" alt="Roasted bean icon">
                        <h3>single origin picks</h3>
                    </div>
                    <div class="icons">
                        <img src="{{ asset('coffee-shop/image/new/icon2.png') }}" alt="Roasting icon">
                        <h3>small batch roasting</h3>
                    </div>
                    <div class="icons">
                        <img src="{{ asset('coffee-shop/image/new/icon3.png') }}" alt="Coffee farm icon">
                        <h3>traceable harvests</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection