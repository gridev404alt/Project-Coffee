<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- SWIPER -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- Font Awesome CDN Link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS File Link  -->
    <link rel="stylesheet" href="{{ asset('coffee-shop/css/style.css') }}">
</head>

<body>

    <!-- HEADER -->
    @include('components.layouts.header')

    <!-- MAIN CONTENT -->
    @yield('content')

    <!-- FOOTER -->
    @include('components.layouts.footer')

    <!-- SWIPER -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- Custom JS File Link  -->
    <script src="{{ asset('coffee-shop/js/script.js') }}"></script>

</body>
</html>