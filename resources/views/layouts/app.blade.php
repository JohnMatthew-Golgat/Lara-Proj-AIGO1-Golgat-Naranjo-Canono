<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'KapeLink | Local Coffee Bean Shop')</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @stack('styles')
</head>
<body>
    <nav class="site-nav">
        <a href="{{ url('/') }}" class="site-logo">
            <img src="{{ asset('images/KapeLink.png') }}" alt="KapeLink Logo" width="140">
        </a>
        <ul class="site-nav-links">
            <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
            <li><a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
            <li>
                <button id="global-theme-toggle" class="site-theme-btn" type="button">🌙 Dark Mode</button>
            </li>
        </ul>
    </nav>

    <main class="site-main">
        @yield('content')
    </main>

    <footer class="site-footer">
        <p>&copy; 2026 <strong>KapeLink</strong>. Your local coffee bean shop.</p>
        <p>Group Members: <strong>John Matthew Golgat</strong>, <strong>Kathleen Grace Canono</strong>, &amp; <strong>Daphnie Thalia Naranjo</strong></p>
    </footer>

    <script src="{{ asset('js/home.js') }}"></script>
    @stack('scripts')
</body>
</html>
