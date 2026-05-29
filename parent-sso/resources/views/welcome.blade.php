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
            <!-- Floating leaf wind particles -->
            <div class="hero-leaves">
                <span class="hero-leaf">🍃</span>
                <span class="hero-leaf">🌿</span>
                <span class="hero-leaf">🍃</span>
                <span class="hero-leaf">🌱</span>
                <span class="hero-leaf">🍃</span>
                <span class="hero-leaf">🌿</span>
                <span class="hero-leaf">🍃</span>
                <span class="hero-leaf">🌿</span>
            </div>
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
            <div class="corp-bento-title-group reveal" id="our-brands">
                <span class="corp-bento-tag">Our Brands</span>
                <h2 class="corp-bento-title">Crafted for Those Who<br>Demand the Finest</h2>
            </div>
            
            <div class="corp-divisions-grid">
                <div class="corp-division-card reveal reveal-delay-1">
                    <span class="corp-card-tag">Premium Single-Origin</span>
                    <h3 class="corp-card-title">Nusantara Coffee</h3>
                    <p class="corp-card-desc">
                        Experience the richness of Indonesian highlands in every cup. Our single-origin beans are hand-selected from volcanic soils across Sumatra, Java, and Sulawesi, then carefully roasted to preserve their complex, earthy character.
                    </p>
                </div>
                
                <div class="corp-division-card reveal reveal-delay-2">
                    <span class="corp-card-tag">Clinical Botanical</span>
                    <h3 class="corp-card-title">Atsiri Wellness</h3>
                    <p class="corp-card-desc">
                        Pure, therapeutic-grade essential oils distilled from Indonesia's finest botanicals. From soothing patchouli to invigorating vetiver, each bottle carries the essence of nature's most potent healing compounds.
                    </p>
                </div>
                
                <div class="corp-division-card reveal reveal-delay-3">
                    <span class="corp-card-tag">The Holding Group</span>
                    <h3 class="corp-card-title">One Ecosystem, Many Strengths</h3>
                    <p class="corp-card-desc">
                        Behind every product is a fully integrated supply chain. We own and operate our own extraction facilities, logistics networks, and retail channels, ensuring every item meets our uncompromising standards before it reaches you.
                    </p>
                </div>
            </div>

            <!-- Section 2: Why Choose Nusantara -->
            <div class="corp-bento-title-group reveal" id="why-us">
                <span class="corp-bento-tag">Our Promise</span>
                <h2 class="corp-bento-title">Why Choose Nusantara</h2>
            </div>
            
            <div class="corp-stats-grid">
                <div class="corp-stat-card reveal reveal-delay-1">
                    <span class="corp-stat-num">100%</span>
                    <span class="corp-stat-label">Pure & Natural</span>
                    <p class="corp-stat-desc">No synthetic additives, no shortcuts. Every product is derived purely from natural Indonesian botanicals.</p>
                </div>
                
                <div class="corp-stat-card reveal reveal-delay-2">
                    <span class="corp-stat-num">12+</span>
                    <span class="corp-stat-label">Farming Partners</span>
                    <p class="corp-stat-desc">We work directly with regional farming cooperatives, ensuring fair trade and the freshest raw materials.</p>
                </div>
                
                <div class="corp-stat-card reveal reveal-delay-3">
                    <span class="corp-stat-num">Zero</span>
                    <span class="corp-stat-label">Waste Commitment</span>
                    <p class="corp-stat-desc">From harvest to delivery, our process is designed to minimize environmental impact at every stage.</p>
                </div>
                
                <div class="corp-stat-card reveal reveal-delay-4">
                    <span class="corp-stat-num">Seed</span>
                    <span class="corp-stat-label">To Shelf Traceability</span>
                    <p class="corp-stat-desc">Every product can be traced back to the exact farm, harvest date, and processing batch it came from.</p>
                </div>
            </div>

            <!-- Section 3: From Our Farms to Your Hands -->
            <div class="corp-bento-title-group reveal" id="our-story">
                <span class="corp-bento-tag">Our Story</span>
                <h2 class="corp-bento-title">From Indonesian Farms to Your Hands</h2>
            </div>
            
            <div class="corp-wide-card reveal">
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

    <!-- Journey Timeline: How We Bring It To You -->
    <section class="journey-section" id="the-journey">
        <div class="container">
            <div class="corp-bento-title-group reveal" style="text-align: center;">
                <span class="corp-bento-tag">The Journey</span>
                <h2 class="corp-bento-title">From Soil to Your Doorstep</h2>
            </div>
            <div class="journey-grid">
                <div class="journey-step reveal reveal-delay-1">
                    <div class="journey-step-num">1</div>
                    <h3 class="journey-step-title">Harvest</h3>
                    <p class="journey-step-desc">Our partner farmers handpick the finest vetiver roots, patchouli leaves, and premium coffee cherries from Indonesia's most fertile volcanic regions.</p>
                </div>
                <div class="journey-step reveal reveal-delay-2">
                    <div class="journey-step-num">2</div>
                    <h3 class="journey-step-title">Refine</h3>
                    <p class="journey-step-desc">Raw materials are carefully distilled and roasted in our own facilities using gentle, eco-friendly processes that preserve every natural compound.</p>
                </div>
                <div class="journey-step reveal reveal-delay-3">
                    <div class="journey-step-num">3</div>
                    <h3 class="journey-step-title">Deliver</h3>
                    <p class="journey-step-desc">Freshly packaged and shipped directly to you through our own logistics network. No warehousing delays, no quality compromises.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Counter Section -->
    <section class="impact-section" id="our-impact">
        <div class="container">
            <div class="impact-grid">
                <div class="impact-item reveal reveal-delay-1">
                    <span class="impact-num" data-count="2500">0</span>
                    <span class="impact-unit">Hectares Cultivated</span>
                    <p class="impact-desc">Active farming cooperatives across Sumatra, Java, and Sulawesi.</p>
                </div>
                <div class="impact-item reveal reveal-delay-2">
                    <span class="impact-num" data-count="48">0</span>
                    <span class="impact-unit">Product Varieties</span>
                    <p class="impact-desc">Premium coffees, essential oils, and botanical concentrates.</p>
                </div>
                <div class="impact-item reveal reveal-delay-3">
                    <span class="impact-num" data-count="15">0</span>
                    <span class="impact-unit">Export Destinations</span>
                    <p class="impact-desc">Reaching wellness markets and specialty retailers worldwide.</p>
                </div>
                <div class="impact-item reveal reveal-delay-4">
                    <span class="impact-num" data-count="98">0</span>
                    <span class="impact-unit">Client Satisfaction</span>
                    <p class="impact-desc">Of our wholesale partners renew their contracts annually.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Customer Testimonials Section -->
    <section class="testimonials-section" id="testimonials">
        <div class="container">
            <div class="corp-bento-title-group reveal" style="text-align: center;">
                <span class="corp-bento-tag">What People Say</span>
                <h2 class="corp-bento-title">Trusted by Partners Worldwide</h2>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card reveal reveal-delay-1">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">"The patchouli oil from Atsiri Wellness is unlike anything we've sourced before. The purity is exceptional, and our clients in Europe immediately noticed the difference in quality."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">MK</div>
                        <div>
                            <div class="testimonial-name">Martin Kessler</div>
                            <div class="testimonial-role">Procurement Director, Swiss Aromatics GmbH</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card reveal reveal-delay-2">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">"We switched to Nusantara Coffee for our premium line last year. The single-origin Sumatra beans have become our bestseller. The freshness and consistency are remarkable."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">YS</div>
                        <div>
                            <div class="testimonial-name">Yuki Sato</div>
                            <div class="testimonial-role">Buyer, Tokyo Specialty Roasters</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card reveal reveal-delay-3">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">"What sets Nusantara apart is their full supply chain control. We know exactly where every batch originates. That level of traceability is rare and incredibly valuable to our brand."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">LA</div>
                        <div>
                            <div class="testimonial-name">Lisa Andersen</div>
                            <div class="testimonial-role">CEO, Nordic Natural Wellness</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Banner Section -->
    <section class="cta-section" id="get-started">
        <div class="container">
            <div class="cta-card reveal-scale">
                <span class="cta-tag">Start Your Journey</span>
                <h2 class="cta-title">Ready to Experience<br>Indonesia's Finest?</h2>
                <p class="cta-desc">Whether you're looking for premium single-origin coffee, therapeutic essential oils, or a reliable supply chain partner, we'd love to hear from you.</p>
                <div class="cta-buttons">
                    <a href="#" class="btn-cta-primary">Explore Our Products →</a>
                    <a href="#" class="btn-cta-secondary">Contact Our Team</a>
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
                    Indonesia's premium botanical extraction and retail holding group. From volcanic soils to global shelves.
                </p>
            </div>
            <div>
                <h4 class="footer-links-title">Our Brands</h4>
                <ul class="footer-links">
                    <li><a href="#">Nusantara Coffee</a></li>
                    <li><a href="#">Atsiri Wellness</a></li>
                </ul>
            </div>
            <div>
                <h4 class="footer-links-title">Company</h4>
                <ul class="footer-links">
                    <li><a href="#our-brands">Our Brands</a></li>
                    <li><a href="#our-story">Our Story</a></li>
                    <li><a href="#our-impact">Our Impact</a></li>
                </ul>
            </div>
            <div>
                <h4 class="footer-links-title">Connect</h4>
                <ul class="footer-links">
                    <li><a href="#">Business Inquiries</a></li>
                    <li><a href="#">Wholesale Partnership</a></li>
                    <li><a href="#">Press & Media</a></li>
                </ul>
            </div>
        </div>
        <div class="container footer-bottom">
            <span>&copy; 2026 Nusantara Extract & Co. All rights reserved.</span>
            <span>Jakarta, Indonesia</span>
        </div>
    </footer>

    <!-- Scroll Reveal Animation Engine -->
    <script>
    (function() {
        'use strict';

        /* Intersection Observer for scroll-triggered reveal animations */
        var revealElements = document.querySelectorAll('.reveal, .reveal-scale');
        
        var revealObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15,
            rootMargin: '0px 0px -60px 0px'
        });

        revealElements.forEach(function(el) {
            revealObserver.observe(el);
        });

        /* Animated number counter for impact section */
        var counterElements = document.querySelectorAll('[data-count]');
        var counterDone = new Set();

        var counterObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting && !counterDone.has(entry.target)) {
                    counterDone.add(entry.target);
                    animateCounter(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counterElements.forEach(function(el) {
            counterObserver.observe(el);
        });

        function animateCounter(el) {
            var target = parseInt(el.getAttribute('data-count'), 10);
            var duration = 2000;
            var startTime = null;

            function step(timestamp) {
                if (!startTime) startTime = timestamp;
                var progress = Math.min((timestamp - startTime) / duration, 1);
                var eased = 1 - Math.pow(1 - progress, 3);
                var current = Math.floor(eased * target);
                
                el.textContent = current.toLocaleString();
                
                if (progress < 1) {
                    requestAnimationFrame(step);
                } else {
                    el.textContent = target.toLocaleString();
                    /* Append suffix markers for specific units */
                    var unit = el.nextElementSibling;
                    if (unit && unit.textContent.includes('Satisfaction')) {
                        el.textContent = target + '%';
                    } else if (unit && unit.textContent.includes('Hectares')) {
                        el.textContent = target.toLocaleString() + '+';
                    } else {
                        el.textContent = target + '+';
                    }
                }
            }

            requestAnimationFrame(step);
        }
    })();
    </script>
</body>
</html>

