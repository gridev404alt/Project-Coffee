<!-- NOT FOUND -->
@extends('layouts.appLayout')
@section('title', '404 Not Found')
@section('content')
    <section class="not-found">
        <div class="not-found-content">
            <p class="not-found-code">404</p>
            <p class="not-found-label">oops! halaman tidak tersedia</p>
            <h1 class="not-found-title">page not found</h1>
            <p class="not-found-text">
                Halaman yang kamu cari tidak ada. Kembali ke home untuk melihat koleksi biji kopi dan cupping notes terbaru.
            </p>
            <a href="{{ route('home') }}" class="btn">back to home</a>
        </div>
    </section>
@endsection