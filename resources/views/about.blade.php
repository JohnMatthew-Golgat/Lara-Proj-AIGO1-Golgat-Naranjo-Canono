@extends('layouts.app')

@section('content')
<main class="about-page">

    <!-- ===== Hero: split panel (matches the Contact page layout) ===== -->
    <section class="about-hero">
        <div class="hero-side">
            <h1>Bean There,<br>Brewed That.</h1>
            <p class="hero-tagline">Get to know the story, the mission,
                and the people behind every cup of KapeLink coffee.</p>

            <!-- Animated counters (activity JS requirement) -->
            <div class="stats-grid">
                <div class="stat">
                    <span class="stat-num"><span class="counter" data-target="5000">0</span>+</span>
                    <span class="stat-label">Cups Served</span>
                </div>
                <div class="stat">
                    <span class="stat-num"><span class="counter" data-target="15">0</span>+</span>
                    <span class="stat-label">Bean Origins</span>
                </div>
                <div class="stat">
                    <span class="stat-num"><span class="counter" data-target="98">0</span>%</span>
                    <span class="stat-label">Happy Customers</span>
                </div>
                <div class="stat">
                    <span class="stat-num"><span class="counter" data-target="3">0</span></span>
                    <span class="stat-label">Passionate Baristas</span>
                </div>
            </div>
        </div>

        <div class="hero-main">
            <h2>Our Story</h2>
            <p>
                KapeLink started in 2019 as a small stall outside a local
                university, serving hand-dripped coffee to students pulling
                all-nighters. What began as three friends sharing a single
                grinder has grown into your neighborhood's favorite
                coffee bean shop.
            </p>
            <p>
                Today, we source our beans directly from smallholder farms
                in Benguet, Sagada, and Batangas, roasting them in small
                batches so every cup tastes as fresh as the morning it was
                brewed.
            </p>

            <!-- Hidden extra content revealed by the Read More toggle -->
            <div class="more-text" id="moreText">
                <p>
                    The name "KapeLink" comes from our belief that coffee is
                    more than a drink — it's a link between people. Every
                    blend we create is taste-tested by our team, and every
                    recipe is named after a regular customer who inspired it.
                </p>
                <p>
                    Whether you're here for your daily fix, a quiet place to
                    work, or a bag of beans to brew at home, you're part of
                    the KapeLink story too.
                </p>
            </div>

            <button class="btn-read" id="readMoreBtn">Read More</button>
        </div>
    </section>

    <!-- ===== Mission & Vision ===== -->
    <section class="mv-section">
        <div class="mv-card">
            <span class="mv-icon">☕</span>
            <h3>Our Mission</h3>
            <p>
                To serve honest, high-quality locally sourced coffee at
                prices students and families can afford — while giving
                Filipino coffee farmers a fair, direct market for their harvest.
            </p>
        </div>
        <div class="mv-card">
            <span class="mv-icon">🌱</span>
            <h3>Our Vision</h3>
            <p>
                To become the most trusted neighborhood coffee brand in the
                region, known for sustainability, community, and a cup that
                always feels like home.
            </p>
        </div>
    </section>

    <!-- ===== Team / Staff Cards ===== -->
    <section class="team-section">
        <h2>Meet the Team</h2>
        <p class="team-sub">The hands (and hearts) behind your daily brew.</p>

        <div class="team-grid">
            <div class="team-card">
                <div class="avatar">KC</div>
                <h4>Kathleen Grace Canono</h4>
                <span class="role">Founder &amp; Head Barista</span>
                <p>Started the stall with one espresso machine and a dream.
                   Still taste-tests every new blend herself.</p>
            </div>
            <div class="team-card">
                <div class="avatar">JG</div>
                <h4>John Matthew Golgat</h4>
                <span class="role">Master Roaster</span>
                <p>Handles our small-batch roasting schedule and works
                   directly with farm partners in Benguet and Sagada.</p>
            </div>
            <div class="team-card">
                <div class="avatar">DN</div>
                <h4>Daphnie Thalia Naranjo</h4>
                <span class="role">Customer Experience Lead</span>
                <p>Keeps the shop welcoming and runs our community events —
                   from latte-art nights to cupping workshops.</p>
            </div>
        </div>
    </section>

</main>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/about.js') }}"></script>
@endpush
