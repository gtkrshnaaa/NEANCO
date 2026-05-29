<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nusantara Extract & Co. - Enterprise Portal</title>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
<body>
    <!-- Header Navigation -->
    <header>
        <div class="container nav-wrapper">
            <a href="#" class="logo-container">
                <div class="logo-icon">N</div>
                <span class="logo-text">Nusantara <span>Extract & Co.</span></span>
            </a>
            <nav>
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#ecosystem">About Us</a></li>
                    <li><a href="#ecosystem">Features</a></li>
                    <li><a href="#ecosystem">Our Work</a></li>
                    <li><a href="#ecosystem">Contact</a></li>
                </ul>
            </nav>
            <div class="auth-buttons">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-secondary">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-secondary">Client Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary">Enterprise SSO</a>
                        @endif
                    @endauth
                @else
                    <a href="#" class="btn btn-secondary">Client Login</a>
                    <a href="#" class="btn btn-primary">Enterprise SSO</a>
                @endif
            </div>
        </div>
    </header>

    <!-- Hero Section with Absolute Blended Background and Fog Overlays -->
    <section class="hero" id="hero">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content">
                    <h1 class="hero-tagline">
                        Pure Extracts,<br>
                        <span>Global Impact.</span>
                    </h1>
                    <p class="hero-description">
                        Synthesizing Indonesia's rich agricultural biodiversity into premium botanical concentrates with zero environmental trace.
                    </p>
                    <div class="hero-ctas">
                        <a href="#ecosystem" class="btn btn-ecosystem">Our Ecosystem</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Full-bleed background image & fog/mist overlays -->
        <div class="hero-background-image-container">
            <div class="hero-mist-overlay-left"></div>
            <div class="hero-mist-overlay-bottom"></div>
            <img src="{{ asset('images/nusantara_hero_island.png') }}" alt="Nusantara Extraction Island" class="hero-bg-image">
        </div>
    </section>

    <!-- Refinement Ecosystem Features Section (Shifted Up to Overlap Hero) -->
    <section class="features" id="ecosystem">
        <div class="container">
            <div class="features-grid">
                <!-- Card 1: Soft Blue Glass -->
                <div class="feature-card feature-card-blue">
                    <div class="feature-image-wrapper">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m0-12.728l.707.707m11.314 11.314l.707-.707M12 5a7 7 0 100 14 7 7 0 000-14z"></path>
                        </svg>
                    </div>
                    <h3 class="feature-title">Botanical Purity</h3>
                    <p class="feature-desc">Fostering high-value agricultural extractions utilizing subcritical and green solvent extraction mechanisms.</p>
                </div>
                <!-- Card 2: Soft Green Glass -->
                <div class="feature-card feature-card-green">
                    <div class="feature-image-wrapper">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                    </div>
                    <h3 class="feature-title">Logistics Ledger</h3>
                    <p class="feature-desc">Real-time trace ledger linking processing plant inventory outputs directly to global export channels.</p>
                </div>
                <!-- Card 3: Soft Blue Glass -->
                <div class="feature-card feature-card-blue">
                    <div class="feature-image-wrapper">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="feature-title">Identity Authority</h3>
                    <p class="feature-desc">Central SSO hub managing cryptographic session handshakes, tokens, and multi-tenant security clearances.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="container footer-grid">
            <div class="footer-brand">
                <a href="#" class="footer-logo">
                    <div class="footer-logo-icon">N</div>
                    <span class="footer-logo-text">Nusantara <span>Extract & Co.</span></span>
                </a>
                <p class="footer-desc">
                    Decoupled botanical refinery and trade networks. Restructuring sustainable agricultural high-value supply lines.
                </p>
            </div>
            <div>
                <h4 class="footer-links-title">Ecosystem Applications</h4>
                <ul class="footer-links">
                    <li><a href="http://localhost:49111">SSO Authority Portal</a></li>
                    <li><a href="http://localhost:49222">Factory Manufacturing Sync</a></li>
                    <li><a href="http://localhost:49333">Logistics Ledger Hub</a></li>
                </ul>
            </div>
            <div>
                <h4 class="footer-links-title">Commerce Sub-brands</h4>
                <ul class="footer-links">
                    <li><a href="http://localhost:49444">Nusantara Coffee Brand</a></li>
                    <li><a href="http://localhost:49555">Nusantara Wellness Brand</a></li>
                </ul>
            </div>
            <div>
                <h4 class="footer-links-title">Resources & Info</h4>
                <ul class="footer-links">
                    <li><a href="#">Security Matrix</a></li>
                    <li><a href="#">API Documentation</a></li>
                    <li><a href="#">Sustainability Report</a></li>
                </ul>
            </div>
        </div>
        <div class="container footer-bottom">
            <span>&copy; 2026 Nusantara Extract & Co. All rights reserved.</span>
            <span>Security Authority Code: NES-2026-SSO</span>
        </div>
    </footer>
</body>
</html>
