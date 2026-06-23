<!-- BOOK -->
@extends('layouts.appLayout')
@section('title', 'Book Contact')
@section('content')
    <section class="book">
        <h1 class="heading">book tasting <span>reserve a bean session</span></h1>
        <p class="book-intro">
            Need coffee beans for your cafe, office, or personal brewing bar? 
            Share the roast profile, volume, and origin style you are looking for.
        </p>
        <form action="">
            <input type="text" placeholder="Your name" class="box">
            <input type="email" placeholder="Email address" class="box">
            <input type="number" placeholder="Estimated order in grams" class="box">
            <textarea name="" placeholder="Tell us the roast level or bean profile you need" class="box" id="" cols="30"
                rows="10"></textarea>
            <input type="submit" value="send bean request" class="btn">
        </form>
    </section>
@endsection