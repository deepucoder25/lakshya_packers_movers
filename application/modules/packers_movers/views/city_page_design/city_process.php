<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

$city_process_steps = [
    [
        'num'   => '01',
        'title' => 'Request a Quote',
        'desc'  => 'Share your moving details in ' . htmlspecialchars($city) . ' and get a free, no-obligation quote instantly.',
        'svg'   => '<svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="10" y="10" width="30" height="38" rx="4" stroke="#1e293b" stroke-width="2.4" fill="#ffffff"/>
            <rect x="18" y="6" width="14" height="7" rx="2.5" fill="#ffffff" stroke="#1e293b" stroke-width="2.2"/>
            <circle cx="25" cy="9.5" r="1.5" fill="#ff6b00"/>
            <path d="M16 22L19 25L25 19" stroke="#ff6b00" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
            <line x1="28" y1="22" x2="35" y2="22" stroke="#64748b" stroke-width="2" stroke-linecap="round"/>
            <path d="M16 32L19 35L25 29" stroke="#ff6b00" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
            <line x1="28" y1="32" x2="35" y2="32" stroke="#64748b" stroke-width="2" stroke-linecap="round"/>
            <path d="M33 42L41 26L44 29L36 45L32 46L33 42Z" fill="#ff6b00" stroke="#1e293b" stroke-width="1.8"/>
            <line x1="39" y1="30" x2="42" y2="33" stroke="#ffffff" stroke-width="1.2"/>
        </svg>'
    ],
    [
        'num'   => '02',
        'title' => 'Free Consultation',
        'desc'  => 'Our experts understand your needs and suggest the best moving solution for your relocation in ' . htmlspecialchars($city) . '.',
        'svg'   => '<svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="26" cy="22" r="9" stroke="#1e293b" stroke-width="2.4" fill="#ffffff"/>
            <path d="M14 44C14 36 19 33 26 33C33 33 38 36 38 44" stroke="#1e293b" stroke-width="2.4" stroke-linecap="round"/>
            <path d="M13 22C13 15 18 10 26 10C34 10 39 15 39 22" stroke="#e63946" stroke-width="2.8" stroke-linecap="round"/>
            <rect x="11" y="19" width="4" height="8" rx="2" fill="#e63946"/>
            <rect x="37" y="19" width="4" height="8" rx="2" fill="#e63946"/>
            <path d="M38 25C38 29 35 31 31 31" stroke="#e63946" stroke-width="2.2" stroke-linecap="round"/>
            <circle cx="30" cy="31" r="2" fill="#e63946"/>
        </svg>'
    ],
    [
        'num'   => '03',
        'title' => 'Packing & Preparation',
        'desc'  => 'We use high-quality packing materials to pack your household & office items safely and securely.',
        'svg'   => '<svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M26 8L44 18V34L26 44L8 34V18L26 8Z" stroke="#1e293b" stroke-width="2.4" stroke-linejoin="round" fill="#ffffff"/>
            <path d="M26 8V44" stroke="#1e293b" stroke-width="2.2"/>
            <path d="M8 18L26 28L44 18" stroke="#1e293b" stroke-width="2.2"/>
            <path d="M26 8L35 13L26 18L17 13L26 8Z" fill="#f59e0b" fill-opacity="0.85"/>
            <line x1="26" y1="18" x2="26" y2="36" stroke="#f59e0b" stroke-width="3.5" stroke-linecap="round"/>
        </svg>'
    ],
    [
        'num'   => '04',
        'title' => 'Safe Transportation',
        'desc'  => 'Your belongings are transported safely using GPS-enabled, well-maintained closed vehicles to your destination.',
        'svg'   => '<svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="13" y="14" width="22" height="19" rx="2" stroke="#1e293b" stroke-width="2.4" fill="#ffffff"/>
            <path d="M35 21H42L46 26V33H35V21Z" stroke="#1e293b" stroke-width="2.4" stroke-linejoin="round" fill="#ffffff"/>
            <path d="M37 23H41L44 27H37V23Z" fill="#10b981" fill-opacity="0.75"/>
            <circle cx="20" cy="35" r="4.5" fill="#ffffff" stroke="#1e293b" stroke-width="2.4"/>
            <circle cx="20" cy="35" r="1.8" fill="#10b981"/>
            <circle cx="40" cy="35" r="4.5" fill="#ffffff" stroke="#1e293b" stroke-width="2.4"/>
            <circle cx="40" cy="35" r="1.8" fill="#10b981"/>
            <line x1="5" y1="20" x2="10" y2="20" stroke="#10b981" stroke-width="2.2" stroke-linecap="round"/>
            <line x1="3" y1="25" x2="9" y2="25" stroke="#10b981" stroke-width="2.2" stroke-linecap="round"/>
            <line x1="6" y1="30" x2="10" y2="30" stroke="#10b981" stroke-width="2.2" stroke-linecap="round"/>
        </svg>'
    ],
    [
        'num'   => '05',
        'title' => 'Unloading & Settle In',
        'desc'  => 'We unload, unpack and help you settle in comfortably in your new destination in ' . htmlspecialchars($city) . '.',
        'svg'   => '<svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 24L26 10L42 24" stroke="#1e293b" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M36 18V13H40V21" stroke="#1e293b" stroke-width="2.2"/>
            <path d="M14 22V40C14 41.1 14.9 42 16 42H36C37.1 42 38 41.1 38 40V22" stroke="#1e293b" stroke-width="2.4" fill="#ffffff"/>
            <path d="M26 36.5C26 36.5 20 32.5 20 28.5C20 26.5 21.5 25 23.5 25C24.8 25 25.6 25.7 26 26.4C26.4 25.7 27.2 25 28.5 25C30.5 25 32 26.5 32 28.5C32 32.5 26 36.5 26 36.5Z" fill="#2563eb"/>
        </svg>'
    ],
];
?>

<!-- =========================================================================
     CHEVRON CONNECTED 5-STEP RELOCATION PROCESS SECTION (Matching Screenshot)
     ========================================================================= -->
<section class="cproc-section position-relative overflow-hidden" id="cityProcessSection">
    <!-- Geometric Corner Accents -->
    <div class="cproc-corner-tl" aria-hidden="true"></div>
    <div class="cproc-corner-br" aria-hidden="true"></div>

    <!-- Decorative Stacked Moving Boxes (Top Right) -->
    <div class="cproc-decor-boxes" aria-hidden="true">
        <img src="<?= base_url('assets/img/moving_boxes_stack.jpg') ?>" alt="Lakshya Packers and Movers Packing" class="cproc-boxes-img">
    </div>

    <div class="container position-relative z-2">
        <!-- Section Header -->
        <div class="text-center cproc-header mb-4 mb-lg-5">
            <!-- Eyebrow Tag -->
            <div class="cproc-eyebrow mb-2">
                <span class="cproc-dash">—</span>
                <span class="cproc-dot">•</span>
                <span class="cproc-eyebrow-text">OUR PROCESS</span>
                <span class="cproc-dot">•</span>
                <span class="cproc-dash">—</span>
            </div>

            <!-- Main Title -->
            <h2 class="cproc-heading fw-bolder mb-2">
                Moving <span class="cproc-highlight">You Can Trust</span>
            </h2>

            <!-- Subtitle -->
            <p class="cproc-subheading text-muted mx-auto mb-0">
                Five easy steps to a smooth and worry-free relocation across <?= htmlspecialchars($city) ?>.
            </p>
        </div>

        <!-- 5 Connecting Cards with Directional Chevrons -->
        <div class="cproc-chain-wrapper">
            <?php foreach ($city_process_steps as $idx => $step): ?>
                <!-- Process Card -->
                <div class="cproc-card-item cproc-step-<?= $step['num'] ?>">
                    <div class="cproc-card">
                        <!-- Top Row: Number on Left, Icon on Right (In One Row) -->
                        <div class="cproc-card-top">
                            <div class="cproc-num">
                                <?= $step['num'] ?>
                            </div>
                            <div class="cproc-icon-wrap">
                                <?= $step['svg'] ?>
                            </div>
                        </div>

                        <!-- Step Title -->
                        <h3 class="cproc-title">
                            <?= htmlspecialchars($step['title']) ?>
                        </h3>

                        <!-- Step Description -->
                        <p class="cproc-desc mb-0">
                            <?= htmlspecialchars($step['desc']) ?>
                        </p>
                    </div>
                </div>

                <!-- Directional Arrow Chevron (After each card) -->
                <div class="cproc-chevron-wrap cproc-chevron-<?= $step['num'] ?>" aria-hidden="true">
                    <svg class="cproc-chevron-svg" viewBox="0 0 24 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0L12 19L0 38H10L22 19L10 0H0Z" fill="currentColor"/>
                    </svg>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
