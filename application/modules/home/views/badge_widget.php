<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- =========================================================================
     OUR BADGES / TRUST WIDGET SECTION (Reference Replica)
     ========================================================================= -->
<section class="badges-section position-relative overflow-hidden py-5" id="ourBadges">
    <!-- Subtle Skyline Background Watermark -->
    <div class="badges-bg-watermark" aria-hidden="true"></div>

    <div class="container position-relative z-2">
        <!-- Section Header (reusing service heading classes) -->
        <div class="text-center svc-header-wrapper mb-4 mb-lg-5">
            <!-- Eyebrow Pill Badge -->
            <div class="svc-pill-badge badges-pill-badge d-inline-flex align-items-center justify-content-center mb-2">
                <span class="process-eyebrow-line"></span><span class="process-eyebrow-dot"></span>
                <span class="svc-badge-title">OUR BADGES</span>
                <span class="process-eyebrow-dot"></span><span class="process-eyebrow-line"></span>
            </div>

            <!-- Main Title -->
            <h2 class="svc-main-title fw-bolder mb-2">
                Trusted. <span class="svc-highlight-text">Certified.</span> Reliable.
            </h2>

            <!-- Subtitle -->
            <p class="svc-subtitle text-muted mx-auto mb-0">
                Our badges reflect our commitment to quality, safety and customer satisfaction in every move.
            </p>
        </div>

        <!-- 6 Luxury Badges Grid -->
        <div class="badges-row-grid mb-4 mb-lg-5">
            <!-- Badge 1: 100% Safe & Secure -->
            <div class="badge-card-col">
                <div class="badge-item-box">
                    <div class="badge-img-wrap">
                        <img src="<?= base_url('assets/img/safe_secure.png') ?>" alt="100% Safe &amp; Secure Moving" class="badge-gold-img" width="130" height="130" loading="lazy">
                    </div>
                    <div class="badge-label-title">100% Safe &amp; Secure Moving</div>
                </div>
            </div>

            <!-- Badge 2: Customer Satisfaction -->
            <div class="badge-card-col">
                <div class="badge-item-box">
                    <div class="badge-img-wrap">
                        <img src="<?= base_url('assets/img/customer_satisfaction.png') ?>" alt="Customer Satisfaction" class="badge-gold-img" width="130" height="130" loading="lazy">
                    </div>
                    <div class="badge-label-title">Customer Satisfaction</div>
                </div>
            </div>

            <!-- Badge 3: On-Time Delivery -->
            <div class="badge-card-col">
                <div class="badge-item-box">
                    <div class="badge-img-wrap">
                        <img src="<?= base_url('assets/img/on_time.png') ?>" alt="On-Time Delivery" class="badge-gold-img" width="130" height="130" loading="lazy">
                    </div>
                    <div class="badge-label-title">On-Time Delivery</div>
                </div>
            </div>

            <!-- Badge 4: Eco-Friendly Packing -->
            <div class="badge-card-col">
                <div class="badge-item-box">
                    <div class="badge-img-wrap">
                        <img src="<?= base_url('assets/img/eco_friendly.png') ?>" alt="Eco-Friendly Packing" class="badge-gold-img" width="130" height="130" loading="lazy">
                    </div>
                    <div class="badge-label-title">Eco-Friendly Packing</div>
                </div>
            </div>

            <!-- Badge 5: Experienced Team -->
            <div class="badge-card-col">
                <div class="badge-item-box">
                    <div class="badge-img-wrap">
                        <img src="<?= base_url('assets/img/exprienced_team.png') ?>" alt="Experienced Team" class="badge-gold-img" width="130" height="130" loading="lazy">
                    </div>
                    <div class="badge-label-title">Experienced Team</div>
                </div>
            </div>

            <!-- Badge 6: Best Quality Service -->
            <div class="badge-card-col">
                <div class="badge-item-box">
                    <div class="badge-img-wrap">
                        <img src="<?= base_url('assets/img/best_quality.png') ?>" alt="Best Quality Service" class="badge-gold-img" width="130" height="130" loading="lazy">
                    </div>
                    <div class="badge-label-title">Best Quality Service</div>
                </div>
            </div>
        </div>

        <!-- Centered Bottom Assurance Banner -->
        <div class="badges-bottom-banner text-center">
            <div class="badges-banner-pill d-inline-flex align-items-center justify-content-center">
                <span class="banner-dash"></span>
                <span class="banner-truck-icon me-2">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--primary-orange)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="1" y="3" width="15" height="13"/>
                        <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/>
                        <circle cx="5.5" cy="18.5" r="2.5"/>
                        <circle cx="18.5" cy="18.5" r="2.5"/>
                    </svg>
                </span>
                <span class="banner-text fw-bold">Your Move is Our Responsibility</span>
                <span class="banner-dash ms-2"></span>
            </div>
        </div>
    </div>
</section>