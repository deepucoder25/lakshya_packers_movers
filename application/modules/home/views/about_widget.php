<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
$comp_name = isset($this->comp['company3']) ? $this->comp['company3'] : (isset($this->comp['company']) ? $this->comp['company'] : 'Lakshya Packers and Movers');
?>

<!-- =========================================================================
     ABOUT US WIDGET SECTION (Reference Replica)
     ========================================================================= -->
<section class="about-section position-relative overflow-hidden py-5" id="aboutSection">
    <div class="container position-relative z-2">
        <div class="row align-items-center g-4 g-xl-5">
            <!-- Left Column: Story, Numbers & CTA (First on Mobile and Desktop) -->
            <div class="col-12 col-lg-6 order-1">
                <div class="about-content-wrapper pe-lg-3">
                    <!-- Eyebrow Pill Badge (Same service class name) -->
                    <div class="svc-pill-badge d-inline-flex align-items-center justify-content-center mb-2">
                        <span class="svc-badge-dots" aria-hidden="true"><i></i><i></i><i></i><i></i><i></i></span>
                        <span class="svc-badge-title">ABOUT US</span>
                        <span class="svc-badge-dots" aria-hidden="true"><i></i><i></i><i></i><i></i><i></i></span>
                    </div>

                    <!-- Cursive Script Tagline -->
                    <div class="about-script-tagline mb-1">
                        More Than Just Moving <span class="about-heart-icon">♡</span>
                    </div>

                    <!-- Main Heading (Same service class name) -->
                    <h2 class="svc-main-title fw-bolder mb-3">
                        We Move Your Life <span class="svc-highlight-text">With Care</span>
                    </h2>

                    <!-- Story Paragraphs -->
                    <p class="about-lead-desc mb-3">
                        At <strong class="about-company-name"><?= htmlspecialchars($comp_name) ?></strong>, we believe every move is more than just shifting belongings—it's about moving your life to a new beginning. With years of experience and a customer-first approach, we offer end-to-end relocation solutions for homes, offices, vehicles and more.
                    </p>
                    <p class="about-sub-desc text-muted mb-4">
                        From careful packing to safe delivery, our mission is to make your move simple, stress-free and perfectly organized.
                    </p>

                    <!-- 4 Counter Metric Badges -->
                    <div class="about-metrics-grid mb-4">
                        <!-- Metric 1 -->
                        <div class="about-metric-item">
                            <div class="about-metric-icon-box">
                                <svg viewBox="0 0 24 24" fill="none" stroke="var(--primary-orange)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                    <circle cx="12" cy="7" r="4"/>
                                </svg>
                            </div>
                            <div class="about-metric-num">1000+</div>
                            <div class="about-metric-label">Happy Customers</div>
                        </div>

                        <!-- Metric 2 -->
                        <div class="about-metric-item">
                            <div class="about-metric-icon-box">
                                <svg viewBox="0 0 24 24" fill="none" stroke="var(--primary-orange)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
                                    <line x1="12" y1="22.08" x2="12" y2="12"/>
                                </svg>
                            </div>
                            <div class="about-metric-num">5000+</div>
                            <div class="about-metric-label">Successful Moves</div>
                        </div>

                        <!-- Metric 3 -->
                        <div class="about-metric-item">
                            <div class="about-metric-icon-box">
                                <svg viewBox="0 0 24 24" fill="none" stroke="var(--primary-orange)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                            </div>
                            <div class="about-metric-num">250+</div>
                            <div class="about-metric-label">Cities Covered</div>
                        </div>

                        <!-- Metric 4 -->
                        <div class="about-metric-item">
                            <div class="about-metric-icon-box">
                                <svg viewBox="0 0 24 24" fill="none" stroke="var(--primary-orange)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="8" r="6"/>
                                    <path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/>
                                </svg>
                            </div>
                            <div class="about-metric-num">10+</div>
                            <div class="about-metric-label">Years Experience</div>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <div class="about-cta-wrap">
                        <a href="<?= site_url('about') ?>" class="about-pill-btn text-decoration-none d-inline-flex align-items-center">
                            <span>Know More About Us</span>
                            <span class="about-btn-arrow" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"/>
                                    <polyline points="12 5 19 12 12 19"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Column: 4 Feature Cards (2x2 Grid, Second on Mobile and Desktop) -->
            <div class="col-12 col-lg-6 order-2">
                <div class="about-cards-grid">
                    <!-- Card 1: Trusted & Reliable -->
                    <div class="about-card-box">
                        <div class="about-card-img-wrap">
                            <img src="<?= base_url('assets/img/packing_moving.jpg') ?>" alt="Trusted & Reliable Packers and Movers" class="about-card-img" loading="lazy">
                            <div class="about-card-badge about-badge-orange" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" class="about-badge-icon">
                                    <circle cx="12" cy="8" r="6"/>
                                    <path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/>
                                </svg>
                            </div>
                        </div>
                        <div class="about-card-body">
                            <h4 class="about-card-title">Trusted &amp; Reliable</h4>
                            <p class="about-card-desc">We are trusted by thousands of happy customers for safe and on-time deliveries.</p>
                            <span class="about-corner-notch" aria-hidden="true"></span>
                        </div>
                    </div>

                    <!-- Card 2: Experienced Team -->
                    <div class="about-card-box">
                        <div class="about-card-img-wrap">
                            <img src="<?= base_url('assets/img/hero_slider_bg.jpg') ?>" alt="Experienced Moving Team" class="about-card-img" loading="lazy">
                            <div class="about-card-badge about-badge-navy" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" class="about-badge-icon">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                    <circle cx="9" cy="7" r="4"/>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                </svg>
                            </div>
                        </div>
                        <div class="about-card-body">
                            <h4 class="about-card-title">Experienced Team</h4>
                            <p class="about-card-desc">Our trained professionals handle your belongings with care and complete every move efficiently.</p>
                            <span class="about-corner-notch" aria-hidden="true"></span>
                        </div>
                    </div>

                    <!-- Card 3: Safe & Secure Packing -->
                    <div class="about-card-box">
                        <div class="about-card-img-wrap">
                            <img src="<?= base_url('assets/img/home_shifting.jpg') ?>" alt="Safe & Secure Packing Materials" class="about-card-img" loading="lazy">
                            <div class="about-card-badge about-badge-navy" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" class="about-badge-icon">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                    <path d="M9 12l2 2 4-4"/>
                                </svg>
                            </div>
                        </div>
                        <div class="about-card-body">
                            <h4 class="about-card-title">Safe &amp; Secure Packing</h4>
                            <p class="about-card-desc">We use premium quality packing materials to ensure complete safety of your items.</p>
                            <span class="about-corner-notch" aria-hidden="true"></span>
                        </div>
                    </div>

                    <!-- Card 4: On-Time Delivery -->
                    <div class="about-card-box">
                        <div class="about-card-img-wrap">
                            <img src="<?= base_url('assets/img/car_transpot.jpg') ?>" alt="On-Time Delivery Carrier Trucks" class="about-card-img" loading="lazy">
                            <div class="about-card-badge about-badge-orange" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" class="about-badge-icon">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polyline points="12 6 12 12 16 14"/>
                                </svg>
                            </div>
                        </div>
                        <div class="about-card-body">
                            <h4 class="about-card-title">On-Time Delivery</h4>
                            <p class="about-card-desc">We value your time and ensure timely pickup and delivery without any delays.</p>
                            <span class="about-corner-notch" aria-hidden="true"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Decorative Curved Wave Transition at bottom -->
    <div class="about-wave-divider" aria-hidden="true">
        <svg viewBox="0 0 1440 85" fill="none" preserveAspectRatio="none">
            <path d="M0,0 C320,65 620,80 980,45 C1200,20 1350,55 1440,75 L1440,85 L0,85 Z" fill="#0b1528"/>
            <path d="M0,25 C360,85 700,70 1020,35 C1240,10 1380,45 1440,65 L1440,85 L0,85 Z" fill="#ff5f00" opacity="0.85"/>
        </svg>
    </div>
</section>
