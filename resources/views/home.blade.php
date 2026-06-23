<!-- HOME -->
@extends('layouts.appLayout')
@section('title', 'Home')
@section('content')
    <section class="home" id="home">
        <div class="row">
            <div class="content">
                <h3>explore the story inside every coffee bean</h3>
                <p>From bright green beans to deep espresso roasts, each batch is curated to highlight origin, aroma,
                    and character before it reaches your grinder.</p>
                <a href="{{ route('menu') }}" class="btn">explore beans</a>
            </div>
            <div class="image">
                <img src="{{ asset('coffee-shop/image/new/coffee-cherries.png') }}" class="main-home-image" alt="Coffee beans and cherries">
            </div>
        </div>
        <div class="image-slider">
            <img src="{{ asset('coffee-shop/image/new/coffee-cherries.png') }}" alt="Green coffee beans">
            <img src="{{ asset('coffee-shop/image/new/coffee-branch.png') }}" alt="Roasted coffee beans in burlap bag">
            <img src="{{ asset('coffee-shop/image/new/coffee-beans-roasted.png') }}" alt="Coffee cherries and roasted beans">
        </div>
    </section>
@endsection