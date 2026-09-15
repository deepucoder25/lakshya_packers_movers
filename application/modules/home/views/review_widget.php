<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
$ratingValue = isset($ratingValue) ? $ratingValue : '5.00';
?>

<!-- =========================================================================
     TESTIMONIALS / REVIEW WIDGET SECTION (Dark Luxury Theme Reference)
     ========================================================================= -->
<section class="review-dark-section position-relative overflow-hidden py-5" id="testimonials">
    <div class="container position-relative z-2">
        <div class="row align-items-center g-4 g-lg-5">
            <!-- Left Column: Title & Google Rating Card -->
            <div class="col-lg-4 col-xl-4">
                <div class="review-left-wrap">
                    <!-- Eyebrow Badge (Using service class structure) -->
                    <div class="review-tag-badge d-inline-flex align-items-center mb-3">
                        <span class="review-tag-text">Testimonials</span>
                    </div>

                    <!-- Main Heading (Using same service class name) -->
                    <h2 class="svc-main-title text-white fw-bolder mb-3">
                        Happy <span class="svc-highlight-text">Customers</span>
                    </h2>

                    <!-- Subtitle -->
                    <p class="svc-subtitle text-muted-light mb-4">
                        Get insights from our clients on how we've helped them achieve a smooth, secure, and stress-free relocation.
                    </p>

                    <!-- Google 5-Star Rating Card -->
                    <div class="google-rating-card d-flex align-items-center">
                        <div class="google-logo-icon me-3" aria-label="Google">
                            <svg viewBox="0 0 48 48" style="width: 38px; height: 38px;">
                                <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>
                                <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
                                <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/>
                                <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
                            </svg>
                        </div>
                        <div class="google-rating-info">
                            <div class="rating-score d-flex align-items-center">
                                <span class="score-num fw-bold"><?= $ratingValue ?></span>
                                <span class="score-star ms-2">★</span>
                            </div>
                            <div class="rating-subtext">Rated <?= $ratingValue ?> stars on Google</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Interactive Testimonial Cards Slider -->
            <div class="col-lg-8 col-xl-8">
                <div class="testimonials-slider-container position-relative">
                    <div class="testimonials-cards-wrap" id="testimonialSlider">
                        <!-- Card 1 -->
                        <div class="testimonial-dark-card active">
                            <p class="testimonial-quote">
                                "I have had the pleasure of working closely with their relocation crew for the past three years, and they have been nothing short of instrumental to the safety of our household goods. Their expertise and dedication to quality packing have been vital in allowing us to move into our new home worry-free. Their commitment to excellence has consistently delivered outstanding results. Highly recommended!"
                            </p>
                            <div class="testimonial-author-row d-flex align-items-center justify-content-between flex-wrap gap-2 mt-4 pt-3 border-top border-secondary border-opacity-25">
                                <div class="d-flex align-items-center">
                                    <div class="author-google-icon me-3">
                                        <svg viewBox="0 0 48 48" style="width: 28px; height: 28px;">
                                            <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>
                                            <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
                                            <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/>
                                            <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="author-name text-white mb-0">Rajesh Sharma</h5>
                                        <div class="author-role text-muted-light">Household Relocation - Bangalore</div>
                                    </div>
                                </div>
                                <div class="stars-gold">
                                    ★★★★★
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="testimonial-dark-card">
                            <p class="testimonial-quote">
                                "Outstanding corporate moving service! They moved our entire office setup including 40 workstations, server racks, and conference furniture with zero downtime. Every piece was labeled meticulously and unpacked precisely as planned. Courteous team and absolute transparency in pricing."
                            </p>
                            <div class="testimonial-author-row d-flex align-items-center justify-content-between flex-wrap gap-2 mt-4 pt-3 border-top border-secondary border-opacity-25">
                                <div class="d-flex align-items-center">
                                    <div class="author-google-icon me-3">
                                        <svg viewBox="0 0 48 48" style="width: 28px; height: 28px;">
                                            <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>
                                            <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
                                            <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/>
                                            <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="author-name text-white mb-0">Priyanka Mohapatra</h5>
                                        <div class="author-role text-muted-light">Corporate Relocation</div>
                                    </div>
                                </div>
                                <div class="stars-gold">
                                    ★★★★★
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="testimonial-dark-card">
                            <p class="testimonial-quote">
                                "Relocating from Bhubaneswar to Delhi with valuable electronics, glassware, and plants seemed daunting until we hired this team. Everything was securely cushioned and arrived in pristine shape. The driver kept us updated via GPS tracking. Truly 5-star service!"
                            </p>
                            <div class="testimonial-author-row d-flex align-items-center justify-content-between flex-wrap gap-2 mt-4 pt-3 border-top border-secondary border-opacity-25">
                                <div class="d-flex align-items-center">
                                    <div class="author-google-icon me-3">
                                        <svg viewBox="0 0 48 48" style="width: 28px; height: 28px;">
                                            <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>
                                            <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
                                            <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/>
                                            <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="author-name text-white mb-0">Amit Verma</h5>
                                        <div class="author-role text-muted-light">Domestic Shifting - Delhi</div>
                                    </div>
                                </div>
                                <div class="stars-gold">
                                    ★★★★★
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Yellow / Amber Navigation Arrows on the right (like in image) -->
                    <div class="testimonials-nav-arrows">
                        <button class="t-nav-btn t-nav-up" id="tNavPrev" aria-label="Previous Testimonial">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="18 15 12 9 6 15"/>
                            </svg>
                        </button>
                        <button class="t-nav-btn t-nav-down" id="tNavNext" aria-label="Next Testimonial">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var cards = document.querySelectorAll('.testimonial-dark-card');
    if (!cards.length) return;
    var currentIndex = 0;
    var prevBtn = document.getElementById('tNavPrev');
    var nextBtn = document.getElementById('tNavNext');

    function showCard(index) {
        cards.forEach(function(c, i) {
            c.classList.toggle('active', i === index);
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', function() {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : cards.length - 1;
            showCard(currentIndex);
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', function() {
            currentIndex = (currentIndex < cards.length - 1) ? currentIndex + 1 : 0;
            showCard(currentIndex);
        });
    }

    // Auto-advance every 6 seconds
    setInterval(function() {
        currentIndex = (currentIndex < cards.length - 1) ? currentIndex + 1 : 0;
        showCard(currentIndex);
    }, 6000);
});
</script>