<!-- MENU -->
@extends('layouts.appLayout')
@section('title', 'Menu')
@section('content')
    <section class="menu" id="menu">
        <h1 class="heading">bean collection <span>from green to dark roast</span></h1>
        <div class="box-container">
            <a href="#" class="box">
                <img src="{{ asset('coffee-shop/image/new/coffee-beans-robusta.png') }}" alt="Robusta coffee beans">
                <div class="content">
                    <h3>robusta reserve</h3>
                    <p>Dense body, cocoa bitterness, and earthy depth for bold blends, milk drinks, and strong daily
                        cups.</p>
                    <span>Rp79.000 / 250g</span>
                </div>
            </a>

            <a href="#" class="box">
                <img src="{{ asset('coffee-shop/image/new/coffee-beans-arabica.png') }}" alt="Arabica coffee beans">
                <div class="content">
                    <h3>estate arabica lot</h3>
                    <p>Elegant arabica beans with floral aroma, citrus sparkle, and clarity that shines in filter
                        brewing.</p>
                    <span>Rp88.000 / 250g</span>
                </div>
            </a>

            <a href="#" class="box">
                <img src="{{ asset('coffee-shop/image/new/coffee-cherry.png') }}" alt="Roasted coffee beans">
                <div class="content">
                    <h3>house roast classic</h3>
                    <p>Balanced roasted beans with cocoa sweetness, soft spice, and a smooth finish for everyday
                        brewing.</p>
                    <span>Rp94.000 / 250g</span>
                </div>
            </a>

            <a href="#" class="box">
                <img src="{{ asset('coffee-shop/image/new/burlap-sack-green-beans-premium.png') }}"
                    alt="Premium green bean select">
                <div class="content">
                    <h3>premium green select</h3>
                    <p>Fresh green beans in premium lots for home roasters who want a clean start and steady roast
                        control.</p>
                    <span>Rp82.000 / 250g</span>
                </div>
            </a>

            <a href="#" class="box">
                <img src="{{ asset('coffee-shop/image/new/burlap-sack-arabica-beans.png') }}" alt="Coffee cherries">
                <div class="content">
                    <h3>cherry harvest lot</h3>
                    <p>A showcase of ripe coffee cherries that reflects fruit-forward sweetness and vibrant harvest
                        character.</p>
                    <span>Rp91.000 / 250g</span>
                </div>
            </a>
            
            <a href="#" class="box">
                <img src="{{ asset('coffee-shop/image/new/burlap-sack-green-beans.png') }}" alt="Coffee branch and beans">
                <div class="content">
                    <h3>branch picked micro lot</h3>
                    <p>Selected branch-picked beans that celebrate freshness, leaf aroma, and the story of the farm.
                    </p>
                    <span>Rp97.000 / 250g</span>
                </div>
            </a>
        </div>
    </section>
@endsection