<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$process_steps = [
    [
        'step'  => '01',
        'title' => 'Request a Quote',
        'desc'  => 'Share your moving details with us and get a free, no-obligation quote instantly.',
        'svg'   => '<svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="process-step-svg">
            <rect x="13" y="11" width="30" height="38" rx="4" fill="#ffffff" stroke="var(--dark-navy)" stroke-width="2.4"/>
            <path d="M21 11V8C21 6.9 21.9 6 23 6H33C34.1 6 35 6.9 35 8V11" stroke="var(--primary-orange)" stroke-width="2.4" stroke-linecap="round" fill="rgba(255, 95, 0, 0.12)"/>
            <circle cx="28" cy="8.5" r="1.5" fill="var(--primary-orange)"/>
            <circle cx="20" cy="20" r="3.5" fill="rgba(255, 95, 0, 0.15)"/>
            <path d="M18 20L19.5 21.5L22.5 18.5" stroke="var(--primary-orange)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <line x1="26" y1="20" x2="36" y2="20" stroke="var(--dark-navy)" stroke-width="2.2" stroke-linecap="round"/>
            <circle cx="20" cy="28" r="3.5" fill="rgba(255, 95, 0, 0.15)"/>
            <path d="M18 28L19.5 29.5L22.5 26.5" stroke="var(--primary-orange)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <line x1="26" y1="28" x2="35" y2="28" stroke="var(--dark-navy)" stroke-width="2.2" stroke-linecap="round"/>
            <circle cx="20" cy="36" r="3.5" fill="rgba(255, 95, 0, 0.15)"/>
            <path d="M18 36L19.5 37.5L22.5 34.5" stroke="var(--primary-orange)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <line x1="26" y1="36" x2="32" y2="36" stroke="var(--dark-navy)" stroke-width="2.2" stroke-linecap="round"/>
            <g transform="translate(34, 34) rotate(42)">
                <rect x="0" y="0" width="15" height="5" rx="1.2" fill="var(--primary-orange)" stroke="var(--dark-navy)" stroke-width="1.8"/>
                <path d="M0 0L-4 2.5L0 5Z" fill="var(--dark-navy)"/>
                <line x1="10" y1="0" x2="10" y2="5" stroke="var(--dark-navy)" stroke-width="1.5"/>
            </g>
        </svg>'
    ],
    [
        'step'  => '02',
        'title' => 'Free Consultation',
        'desc'  => 'Our experts understand your needs and suggest the best moving solution for you.',
        'svg'   => '<svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="process-step-svg">
            <path d="M42 14C44 16 44 19 42 21" stroke="var(--primary-orange)" stroke-width="2" stroke-linecap="round"/>
            <path d="M45 11C48 14 48 21 45 24" stroke="var(--primary-orange)" stroke-width="1.8" stroke-linecap="round" opacity="0.6"/>
            <path d="M17 26C17 18.8 22.8 13 30 13C37.2 13 43 18.8 43 26" stroke="var(--dark-navy)" stroke-width="2.5" stroke-linecap="round"/>
            <rect x="14" y="23" width="5.5" height="11" rx="2.5" fill="var(--primary-orange)" stroke="var(--dark-navy)" stroke-width="2"/>
            <rect x="40.5" y="23" width="5.5" height="11" rx="2.5" fill="var(--primary-orange)" stroke="var(--dark-navy)" stroke-width="2"/>
            <path d="M21 26C21 31 25 35 30 35C35 31 39 31 39 26" stroke="var(--dark-navy)" stroke-width="2.3" stroke-linecap="round"/>
            <path d="M21 24C24 26 27 22 30 24C33 22 36 26 39 24" stroke="var(--dark-navy)" stroke-width="2.2" stroke-linecap="round"/>
            <path d="M17 31C17 38 24 40 28 40" stroke="var(--primary-orange)" stroke-width="2.4" stroke-linecap="round"/>
            <circle cx="28.5" cy="40" r="2.2" fill="var(--primary-orange)" stroke="var(--dark-navy)" stroke-width="1.5"/>
            <path d="M16 49C16 43.5 21.5 41.5 30 41.5C38.5 41.5 44 43.5 44 49" stroke="var(--dark-navy)" stroke-width="2.5" stroke-linecap="round"/>
            <path d="M26.5 41.5L30 45.5L33.5 41.5" stroke="var(--primary-orange)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>'
    ],
    [
        'step'  => '03',
        'title' => 'Packing & Preparation',
        'desc'  => 'We use high-quality packing materials and carefully pack your belongings.',
        'svg'   => '<svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="process-step-svg">
            <path d="M15 21L7 16L18 10.5L25 15" stroke="var(--dark-navy)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" fill="rgba(255, 95, 0, 0.08)"/>
            <path d="M45 21L53 16L42 10.5L35 15" stroke="var(--dark-navy)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" fill="rgba(255, 95, 0, 0.08)"/>
            <path d="M30 17L21 22L30 26L39 22Z" fill="#fff5eb" stroke="var(--dark-navy)" stroke-width="2.2" stroke-linejoin="round"/>
            <path d="M14 26L30 35V50L14 41V26Z" fill="#ffffff" stroke="var(--dark-navy)" stroke-width="2.4" stroke-linejoin="round"/>
            <path d="M30 35L46 26V41L30 50V35Z" fill="#fffcf8" stroke="var(--dark-navy)" stroke-width="2.4" stroke-linejoin="round"/>
            <line x1="30" y1="35" x2="30" y2="50" stroke="var(--dark-navy)" stroke-width="2.2"/>
            <path d="M25 24L30 26.5L35 24" stroke="var(--primary-orange)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            <line x1="30" y1="26.5" x2="30" y2="41" stroke="var(--primary-orange)" stroke-width="3.2" stroke-linecap="round"/>
            <path d="M20 38L22 35L24 38" stroke="var(--primary-orange)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            <line x1="22" y1="35" x2="22" y2="43" stroke="var(--primary-orange)" stroke-width="1.8" stroke-linecap="round"/>
            <line x1="19" y1="44" x2="25" y2="44" stroke="var(--primary-orange)" stroke-width="1.8" stroke-linecap="round"/>
        </svg>'
    ],
    [
        'step'  => '04',
        'title' => 'Safe Transportation',
        'desc'  => 'Your items are transported safely using well-maintained vehicles and best routes.',
        'svg'   => '<svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="process-step-svg">
            <line x1="7" y1="24" x2="16" y2="24" stroke="var(--primary-orange)" stroke-width="2.4" stroke-linecap="round"/>
            <line x1="4" y1="30" x2="14" y2="30" stroke="var(--primary-orange)" stroke-width="2.4" stroke-linecap="round"/>
            <line x1="8" y1="36" x2="17" y2="36" stroke="var(--primary-orange)" stroke-width="2.4" stroke-linecap="round"/>
            <rect x="18" y="19" width="18" height="20" rx="2" fill="#ffffff" stroke="var(--dark-navy)" stroke-width="2.4"/>
            <line x1="27" y1="22" x2="27" y2="36" stroke="rgba(255, 95, 0, 0.3)" stroke-width="1.8" stroke-dasharray="2 2"/>
            <path d="M36 25H43.5L48 30.5V39H36V25Z" fill="rgba(255, 95, 0, 0.15)" stroke="var(--primary-orange)" stroke-width="2.4" stroke-linejoin="round"/>
            <path d="M38 27H42.5L45.5 31H38V27Z" fill="#ffffff" stroke="var(--dark-navy)" stroke-width="1.8" stroke-linejoin="round"/>
            <line x1="48" y1="37" x2="51" y2="37" stroke="var(--primary-orange)" stroke-width="3" stroke-linecap="round"/>
            <circle cx="48" cy="33" r="1.3" fill="var(--primary-orange)"/>
            <line x1="16" y1="45" x2="52" y2="45" stroke="var(--dark-navy)" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
            <circle cx="24.5" cy="40" r="4.5" fill="#ffffff" stroke="var(--dark-navy)" stroke-width="2.4"/>
            <circle cx="24.5" cy="40" r="1.8" fill="var(--primary-orange)"/>
            <circle cx="42.5" cy="40" r="4.5" fill="#ffffff" stroke="var(--dark-navy)" stroke-width="2.4"/>
            <circle cx="42.5" cy="40" r="1.8" fill="var(--primary-orange)"/>
        </svg>'
    ],
    [
        'step'  => '05',
        'title' => 'Careful Unloading',
        'desc'  => 'Timely doorstep arrival and careful unloading of every item directly into your rooms.',
        'svg'   => '<svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="process-step-svg">
            <path d="M22 10V44L38 44" stroke="var(--dark-navy)" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M17 12L22 10L20 7" stroke="var(--primary-orange)" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/>
            <rect x="25" y="28" width="18" height="15" rx="2" fill="#ffffff" stroke="var(--dark-navy)" stroke-width="2.3"/>
            <line x1="34" y1="28" x2="34" y2="43" stroke="var(--primary-orange)" stroke-width="2.4"/>
            <line x1="25" y1="35.5" x2="43" y2="35.5" stroke="rgba(255, 95, 0, 0.3)" stroke-width="1.5" stroke-dasharray="2 2"/>
            <rect x="27" y="16" width="15" height="12" rx="2" fill="rgba(255, 95, 0, 0.12)" stroke="var(--primary-orange)" stroke-width="2.2"/>
            <line x1="34.5" y1="16" x2="34.5" y2="28" stroke="var(--primary-orange)" stroke-width="2.4"/>
            <path d="M22 24L43 32" stroke="var(--primary-orange)" stroke-width="1.8" stroke-linecap="round"/>
            <circle cx="22" cy="46" r="4.5" fill="#ffffff" stroke="var(--dark-navy)" stroke-width="2.4"/>
            <circle cx="22" cy="46" r="1.8" fill="var(--primary-orange)"/>
            <line x1="38" y1="44" x2="44" y2="44" stroke="var(--primary-orange)" stroke-width="2.6" stroke-linecap="round"/>
        </svg>'
    ],
    [
        'step'  => '06',
        'title' => 'Unpack & Settle In',
        'desc'  => 'We unpack, assemble furniture, and ensure you settle in comfortably and happily.',
        'svg'   => '<svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="process-step-svg">
            <path d="M30 6L31 9L34 10L31 11L30 14L29 11L26 10L29 9Z" fill="var(--primary-orange)"/>
            <path d="M38 20V14H43V24" stroke="var(--dark-navy)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="41" cy="10" r="1.2" fill="var(--primary-orange)" opacity="0.6"/>
            <path d="M13 26L30 13L47 26" stroke="var(--primary-orange)" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M17 25V45H43V25" fill="#ffffff" stroke="var(--dark-navy)" stroke-width="2.4" stroke-linejoin="round"/>
            <line x1="14" y1="45" x2="46" y2="45" stroke="var(--dark-navy)" stroke-width="2.2" stroke-linecap="round"/>
            <path d="M30 38.5L28.3 36.9C23.5 32.5 20.5 29.8 20.5 26.6C20.5 24 22.5 22 25.1 22C26.5 22 27.9 22.7 28.8 23.8C29.6 22.7 31 22 32.4 22C35 22 37 24 37 26.6C37 29.8 34 32.5 29.2 36.9L30 38.5Z" fill="var(--primary-orange)" stroke="var(--primary-orange)" stroke-width="1.5" stroke-linejoin="round"/>
        </svg>'
    ],
];
?>

<!-- =========================================================================
     OUR PROCESS WIDGET SECTION (6 Steps with Animated Pipeline)
     ========================================================================= -->
<section class="process-section position-relative overflow-hidden py-5" id="ourProcess">
    <!-- Subtle Background Accents -->
    <div class="process-bg-dots" aria-hidden="true"></div>
    <div class="process-bg-pattern process-bg-top-left" aria-hidden="true"></div>
    <div class="process-bg-pattern process-bg-top-right" aria-hidden="true"></div>

    <div class="container position-relative z-2">
        <!-- Section Header (reusing service section heading classes) -->
        <div class="text-center svc-header-wrapper mb-4 mb-lg-5">
            <!-- Eyebrow Badge: OUR PROCESS with flanking lines & dots -->
            <div class="svc-pill-badge process-pill-badge d-inline-flex align-items-center justify-content-center mb-2">
                <span class="svc-badge-dots" aria-hidden="true">
                    <span class="process-eyebrow-line"></span><span class="process-eyebrow-dot"></span>
                </span>
                <span class="svc-badge-title">OUR PROCESS</span>
                <span class="svc-badge-dots" aria-hidden="true">
                    <span class="process-eyebrow-dot"></span><span class="process-eyebrow-line"></span>
                </span>
            </div>

            <!-- Main Heading -->
            <h2 class="svc-main-title fw-bolder mb-2">
                Moving <span class="svc-highlight-text">You Can Trust</span>
            </h2>

            <!-- Subtitle -->
            <p class="svc-subtitle text-muted mx-auto mb-0">
                Six easy steps to a smooth and worry-free relocation.
            </p>
        </div>

        <!-- 6 Process Cards Row (2 boxes per row on mobile via Bootstrap col-6) -->
        <div class="row g-3 g-lg-3 justify-content-center process-cards-row">
            <?php foreach ($process_steps as $step): ?>
                <div class="col-6 col-md-4 col-lg-2 process-card-col d-flex">
                    <div class="process-card-box w-100">
                        <!-- Watermark Step Number in Background -->
                        <div class="process-card-watermark" aria-hidden="true"><?= $step['step'] ?></div>

                        <!-- 3D Folded Ribbon Top Badge with Number -->
                        <div class="process-ribbon-wrap" aria-hidden="true">
                            <div class="process-ribbon-body">
                                <?= $step['step'] ?>
                            </div>
                        </div>

                        <!-- Double Circular Icon Container with Dots -->
                        <div class="process-icon-outer" aria-hidden="true">
                            <div class="process-icon-inner">
                                <?= $step['svg'] ?>
                            </div>
                        </div>

                        <!-- Step Title & Description -->
                        <h3 class="process-card-title">
                            <?= htmlspecialchars($step['title']) ?>
                        </h3>
                        <p class="process-card-desc">
                            <?= htmlspecialchars($step['desc']) ?>
                        </p>

                        <!-- Bottom Accent Bar on Hover -->
                        <div class="process-card-accent-bar" aria-hidden="true"></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
