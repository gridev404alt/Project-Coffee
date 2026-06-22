<!-- BOOK -->
@extends('layouts.appLayout')
@section('title', 'Book Contact')
@section('content')
    <section class="book">
        <h1 class="heading">booking <span>reserve a table</span></h1>
        <form action="">
            <input type="text" placeholder="Name" class="box">
            <input type="email" placeholder="Email" class="box">
            <input type="number" placeholder="Number" class="box">
            <textarea name="" placeholder="Message" class="box" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>
    </section>
@endsection