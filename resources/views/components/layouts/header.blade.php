<header class="header">
    <div id="menu-btn" class="fas fa-bars"></div>
    <a href="{{ route('home') }}" class="logo">coffee <i class="fas fa-mug-hot"></i></a>
    <nav class="navbar">
        <a href="{{ route('home') }}">home</a>
        <a href="{{ route('about') }}">about</a>
        <a href="{{ route('menu') }}">menu</a>
        <a href="{{ route('review') }}">review</a>
        <a href="{{ route('book') }}">book</a>
    </nav>
    <a href="{{ route('book') }}" class="btn">book a table</a>
</header>