<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Coffee shop website, Best coffee in town, Delicious coffee and pastries, Great atmosphere">
    <title>Coffee &mdash; @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="https://png.pngtree.com/png-clipart/20230211/original/pngtree-silhouette-of-coffee-bean-logo-icon-shop-png-image_8952508.png">
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