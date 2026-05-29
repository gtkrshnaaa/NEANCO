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
                <span class="logo-text">Nusantara <span class="logo-subtext">Extract & Co.</span></span>
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
                        <a href="{{ route('login') }}" class="btn btn-secondary">
                            <span class="btn-text-full">Client Login</span>
                            <span class="btn-text-mobile">Login</span>
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary">
                                <span class="btn-text-full">Enterprise SSO</span>
                                <span class="btn-text-mobile">SSO</span>
                            </a>
                        @endif
                    @endauth
                @else
                    <a href="#" class="btn btn-secondary">
                        <span class="btn-text-full">Client Login</span>
                        <span class="btn-text-mobile">Login</span>
                    </a>
                    <a href="#" class="btn btn-primary">
                        <span class="btn-text-full">Enterprise SSO</span>
                        <span class="btn-text-mobile">SSO</span>
                    </a>
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


    <!-- Commercial Brand Showcase Sections -->
    <section class="corp-bento-section">
        <div class="container">
            
            <!-- Section 1: Our Premium Brands -->
            <div class="corp-bento-title-group" id="our-brands">
                <span class="corp-bento-tag">Our Brands</span>
                <h2 class="corp-bento-title">Crafted for Those Who<br>Demand the Finest</h2>
            </div>
            
            <div class="corp-divisions-grid">
                <!-- Brand: Nusantara Coffee -->
                <div class="corp-division-card">
                    <span class="corp-card-tag">Premium Single-Origin</span>
                    <h3 class="corp-card-title">Nusantara Coffee</h3>
                    <p class="corp-card-desc">
                        Experience the richness of Indonesian highlands in every cup. Our single-origin beans are hand-selected from volcanic soils across Sumatra, Java, and Sulawesi, then carefully roasted to preserve their complex, earthy character.
                    </p>
                </div>
                
                <!-- Brand: Atsiri Wellness -->
                <div class="corp-division-card">
                    <span class="corp-card-tag">Clinical Botanical</span>
                    <h3 class="corp-card-title">Atsiri Wellness</h3>
                    <p class="corp-card-desc">
                        Pure, therapeutic-grade essential oils distilled from Indonesia's finest botanicals. From soothing patchouli to invigorating vetiver, each bottle carries the essence of nature's most potent healing compounds.
                    </p>
                </div>
                
                <!-- The Holding Group Story -->
                <div class="corp-division-card">
                    <span class="corp-card-tag">The Holding Group</span>
                    <h3 class="corp-card-title">One Ecosystem, Many Strengths</h3>
                    <p class="corp-card-desc">
                        Behind every product is a fully integrated supply chain. We own and operate our own extraction facilities, logistics networks, and retail channels, ensuring every item meets our uncompromising standards before it reaches you.
                    </p>
                </div>
            </div>

            <!-- Section 2: Why Choose Nusantara -->
            <div class="corp-bento-title-group" id="why-us">
                <span class="corp-bento-tag">Our Promise</span>
                <h2 class="corp-bento-title">Why Choose Nusantara</h2>
            </div>
            
            <div class="corp-stats-grid">
                <div class="corp-stat-card">
                    <span class="corp-stat-num">100%</span>
                    <span class="corp-stat-label">Pure & Natural</span>
                    <p class="corp-stat-desc">No synthetic additives, no shortcuts. Every product is derived purely from natural Indonesian botanicals.</p>
                </div>
                
                <div class="corp-stat-card">
                    <span class="corp-stat-num">12+</span>
                    <span class="corp-stat-label">Farming Partners</span>
                    <p class="corp-stat-desc">We work directly with regional farming cooperatives, ensuring fair trade and the freshest raw materials.</p>
                </div>
                
                <div class="corp-stat-card">
                    <span class="corp-stat-num">Zero</span>
                    <span class="corp-stat-label">Waste Commitment</span>
                    <p class="corp-stat-desc">From harvest to delivery, our process is designed to minimize environmental impact at every stage.</p>
                </div>
                
                <div class="corp-stat-card">
                    <span class="corp-stat-num">Seed</span>
                    <span class="corp-stat-label">To Shelf Traceability</span>
                    <p class="corp-stat-desc">Every product can be traced back to the exact farm, harvest date, and processing batch it came from.</p>
                </div>
            </div>

            <!-- Section 3: From Our Farms to Your Hands -->
            <div class="corp-bento-title-group" id="our-story">
                <span class="corp-bento-tag">Our Story</span>
                <h2 class="corp-bento-title">From Indonesian Farms to Your Hands</h2>
            </div>
            
            <div class="corp-wide-card">
                <div class="corp-wide-info">
                    <h3 class="corp-wide-title">Rooted in Nature, Refined with Care</h3>
                    <p class="corp-wide-desc">
                        It begins with Indonesian soil. Our farmers cultivate vetiver, patchouli, and premium coffee cherries using time-honored techniques passed down through generations. We then carefully extract and refine these raw materials in our own facilities, preserving their purity and potency. The result? Products you can trust, with a story you can feel in every sip and every drop.
                    </p>
                </div>
                <div class="corp-wide-pillars">
                    <div class="corp-pillar-item">
                        <span class="corp-pillar-title">Ethically Sourced</span>
                        <span class="corp-pillar-desc">Direct partnerships with Indonesian farmers ensuring fair pricing and sustainable practices.</span>
                    </div>
                    <div class="corp-pillar-item">
                        <span class="corp-pillar-title">Freshness Guaranteed</span>
                        <span class="corp-pillar-desc">Smart inventory rotation ensures you always receive the freshest batch available.</span>
                    </div>
                    <div class="corp-pillar-item">
                        <span class="corp-pillar-title">In-House Processing</span>
                        <span class="corp-pillar-desc">We own our extraction and roasting facilities for complete quality control.</span>
                    </div>
                    <div class="corp-pillar-item">
                        <span class="corp-pillar-title">Direct to You</span>
                        <span class="corp-pillar-desc">No middlemen, no markups. From our production line straight to your doorstep.</span>
                    </div>
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
