<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Coffee bean landing page with roast collections, origin stories, cupping notes, and tasting requests.">
    <title>Bean Craft &mdash; @yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('coffee-shop/image/new/icon1.png') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('coffee-shop/css/style.css') }}">
</head>

<body>
    @include('components.layouts.header')

    @yield('content')

    @include('components.layouts.footer')

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="{{ asset('coffee-shop/js/script.js') }}"></script>
</body>
</html>