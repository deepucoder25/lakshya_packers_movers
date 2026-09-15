<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
$ci =& get_instance();
$comp_phone = isset($phone) ? $phone : (isset($ci->comp['phone']) ? $ci->comp['phone'] : '+91 82602 07030');
$comp_phone_clean = preg_replace('/[^0-9+]/', '', $comp_phone);

$services_list = [
    [
        'id' => '01',
        'theme' => 'navy',
        'color' => '#0c2340',
        'title' => 'House Shifting',
        'url' => site_url('house-shifting'),
        'desc' => 'Safe and secure packing and moving of your household items with utmost care.',
        'image' => base_url('assets/img/home_shifting.jpg'),
        'alt' => 'Safe and Secure House Shifting Services',
        // Hexagon House Icon SVG with Big White Border
        'svg_icon' => '<svg viewBox="0 0 72 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="svc-svg-hex">
            <path d="M36 5.5C38.3 5.5 40.5 6.8 41.7 8.8L64.8 22.2C67 23.5 68.3 25.9 68.3 28.5V55.5C68.3 58.1 67 60.5 64.8 61.8L41.7 75.2C40.5 77.2 38.3 78.5 36 78.5C33.7 78.5 31.5 77.2 30.3 75.2L7.2 61.8C5 60.5 3.7 58.1 3.7 55.5V28.5C3.7 25.9 5 23.5 7.2 22.2L30.3 8.8C31.5 6.8 33.7 5.5 36 5.5Z" fill="#0C2340" stroke="#FFFFFF" stroke-width="6.5" stroke-linejoin="round"/>
            <g transform="translate(20, 24)" stroke="#FFFFFF" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" fill="none">
                <path d="M22 6V11" stroke-width="2.6"/>
                <path d="M2 14L16 3L30 14" stroke-width="3"/>
                <path d="M5 13V29H27V13"/>
                <path d="M12 29V20C12 18 14 16 16 16C18 16 20 18 20 20V29"/>
            </g>
        </svg>'
    ],
    [
        'id' => '02',
        'theme' => 'orange',
        'color' => '#ff5f00',
        'title' => 'Office Relocation',
        'url' => site_url('office-relocation'),
        'desc' => 'Efficient office relocation services to minimize downtime and ensure smooth shifting.',
        'image' => base_url('assets/img/packing_moving.jpg'),
        'alt' => 'Fast and Efficient Corporate Office Relocation',
        // Hexagon Office Building & Workstation Icon SVG with Big White Border
        'svg_icon' => '<svg viewBox="0 0 72 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="svc-svg-hex">
            <path d="M36 5.5C38.3 5.5 40.5 6.8 41.7 8.8L64.8 22.2C67 23.5 68.3 25.9 68.3 28.5V55.5C68.3 58.1 67 60.5 64.8 61.8L41.7 75.2C40.5 77.2 38.3 78.5 36 78.5C33.7 78.5 31.5 77.2 30.3 75.2L7.2 61.8C5 60.5 3.7 58.1 3.7 55.5V28.5C3.7 25.9 5 23.5 7.2 22.2L30.3 8.8C31.5 6.8 33.7 5.5 36 5.5Z" fill="#FF5F00" stroke="#FFFFFF" stroke-width="6.5" stroke-linejoin="round"/>
            <g transform="translate(19, 24)" stroke="#FFFFFF" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" fill="none">
                <!-- Building on left with rounded top -->
                <path d="M4 28V6.5C4 4.5 5.5 3 7.5 3H10.5C12.5 3 14 4.5 14 6.5V28"/>
                <path d="M2 28H16"/>
                <!-- Building Window Lines -->
                <path d="M7 8.5H11M7 13.5H11M7 18.5H11M7 23.5H11" stroke-width="2.2"/>
                <!-- Workstation Desk on right -->
                <path d="M16 19H29" stroke-width="2.6"/>
                <path d="M18 19V28M27 19V28" stroke-width="2.4"/>
                <!-- Office Chair / Person behind desk -->
                <path d="M21 15C21 12.5 24 12.5 24 15V19"/>
                <circle cx="22.5" cy="9.5" r="2" stroke-width="2.3"/>
            </g>
        </svg>'
    ],
    [
        'id' => '03',
        'theme' => 'burgundy',
        'color' => '#8b1538',
        'title' => 'Car Transportation',
        'url' => site_url('car-transportation'),
        'desc' => 'Secure transportation of your car or bike to any city across India with full safety.',
        'image' => base_url('assets/img/car_transpot.jpg'),
        'alt' => 'Safe Car Transportation Carriers Across India',
        // Hexagon Car Side View Icon SVG with Big White Border
        'svg_icon' => '<svg viewBox="0 0 72 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="svc-svg-hex">
            <path d="M36 5.5C38.3 5.5 40.5 6.8 41.7 8.8L64.8 22.2C67 23.5 68.3 25.9 68.3 28.5V55.5C68.3 58.1 67 60.5 64.8 61.8L41.7 75.2C40.5 77.2 38.3 78.5 36 78.5C33.7 78.5 31.5 77.2 30.3 75.2L7.2 61.8C5 60.5 3.7 58.1 3.7 55.5V28.5C3.7 25.9 5 23.5 7.2 22.2L30.3 8.8C31.5 6.8 33.7 5.5 36 5.5Z" fill="#8B1538" stroke="#FFFFFF" stroke-width="6.5" stroke-linejoin="round"/>
            <g transform="translate(16, 29)" stroke="#FFFFFF" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round" fill="none">
                <!-- Car Body Profile -->
                <path d="M3 16V12.5C3 11 4.2 9.5 5.5 9.5L8.5 9.5L12 3.5C13 1.8 14.8 1 16.5 1H26C27.8 1 29.5 2 30.5 3.5L34 9.5H35.5C37 9.5 38 10.5 38 12V16C38 17 37 17.5 36 17.5H33C33 14.5 30.5 12.5 28 12.5C25.5 12.5 23 14.5 23 17.5H16C16 14.5 13.5 12.5 11 12.5C8.5 12.5 6 14.5 6 17.5H3Z"/>
                <!-- Horizontal Window Accent Line -->
                <path d="M10 9.5H30" stroke-width="2.8"/>
                <!-- Front & Rear Wheels -->
                <circle cx="11" cy="17.5" r="3.6" stroke-width="2.8"/>
                <circle cx="28" cy="17.5" r="3.6" stroke-width="2.8"/>
            </g>
        </svg>'
    ],
    [
        'id' => '04',
        'theme' => 'blue',
        'color' => '#1a56db',
        'title' => 'Bike Transportation',
        'url' => site_url('bike-transportation'),
        'desc' => 'Safe, scratch-free, and punctual door-to-door two-wheeler transportation services.',
        'image' => base_url('assets/img/bike_transpot.jpg'),
        'alt' => 'Safe Bike Transportation & Two Wheeler Relocation',
        // Hexagon Motorcycle / Bike Icon SVG with Big White Border
        'svg_icon' => '<svg viewBox="0 0 72 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="svc-svg-hex">
            <path d="M36 5.5C38.3 5.5 40.5 6.8 41.7 8.8L64.8 22.2C67 23.5 68.3 25.9 68.3 28.5V55.5C68.3 58.1 67 60.5 64.8 61.8L41.7 75.2C40.5 77.2 38.3 78.5 36 78.5C33.7 78.5 31.5 77.2 30.3 75.2L7.2 61.8C5 60.5 3.7 58.1 3.7 55.5V28.5C3.7 25.9 5 23.5 7.2 22.2L30.3 8.8C31.5 6.8 33.7 5.5 36 5.5Z" fill="#1A56DB" stroke="#FFFFFF" stroke-width="6.5" stroke-linejoin="round"/>
            <g transform="translate(18, 25)" stroke="#FFFFFF" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none">
                <!-- Motorcycle Wheels -->
                <circle cx="6.5" cy="19.5" r="5.5" stroke-width="2.5"/>
                <circle cx="6.5" cy="19.5" r="1.5" fill="#FFFFFF"/>
                <circle cx="26.5" cy="19.5" r="5.5" stroke-width="2.5"/>
                <circle cx="26.5" cy="19.5" r="1.5" fill="#FFFFFF"/>
                <!-- Motorcycle Chassis & Fork -->
                <path d="M6.5 19.5L13.5 13L20.5 13L26.5 19.5"/>
                <path d="M13.5 13L15.5 19.5H22.5L24.5 10"/>
                <!-- Handlebar -->
                <path d="M21.5 8L25.5 10L27 8"/>
                <!-- Fuel Tank & Seat -->
                <path d="M11.5 11C13 9 16.5 9 18.5 11L20.5 11.5" stroke-width="2.6"/>
            </g>
        </svg>'
    ],
    [
        'id' => '05',
        'theme' => 'teal',
        'color' => '#0e8388',
        'title' => 'Local Shifting',
        'url' => site_url('local-shifting'),
        'desc' => 'Fast, safe, and stress-free same-day local home and office shifting within your city.',
        'image' => base_url('assets/img/local_shifting.jpg'),
        'alt' => 'Fast and Safe Local Shifting and Relocation Services',
        // Hexagon Local Shifting Map Pin & House Icon SVG with Big White Border
        'svg_icon' => '<svg viewBox="0 0 72 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="svc-svg-hex">
            <path d="M36 5.5C38.3 5.5 40.5 6.8 41.7 8.8L64.8 22.2C67 23.5 68.3 25.9 68.3 28.5V55.5C68.3 58.1 67 60.5 64.8 61.8L41.7 75.2C40.5 77.2 38.3 78.5 36 78.5C33.7 78.5 31.5 77.2 30.3 75.2L7.2 61.8C5 60.5 3.7 58.1 3.7 55.5V28.5C3.7 25.9 5 23.5 7.2 22.2L30.3 8.8C31.5 6.8 33.7 5.5 36 5.5Z" fill="#0E8388" stroke="#FFFFFF" stroke-width="6.5" stroke-linejoin="round"/>
            <g transform="translate(20, 23)" stroke="#FFFFFF" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none">
                <!-- Location Pin Outline -->
                <path d="M16 29C16 29 27 19.5 27 12C27 5.9 22.1 1 16 1C9.9 1 5 5.9 5 12C5 19.5 16 29 16 29Z" stroke-width="2.4"/>
                <!-- Inner Moving Home Silhouette -->
                <path d="M11 12.5L16 8L21 12.5" stroke-width="2.3"/>
                <path d="M12.5 12V17H19.5V12" stroke-width="2"/>
                <circle cx="16" cy="14" r="1.2" fill="#FFFFFF"/>
            </g>
        </svg>'
    ],
];
?>

<!-- =========================================================================
     OUR SERVICES SHOWCASE SECTION
     ========================================================================= -->
<section class="services-showcase-section position-relative overflow-hidden py-5" id="servicesShowcase">
    <div class="container position-relative z-2">
        <!-- Section Header -->
        <div class="text-center svc-header-wrapper mb-4 mb-lg-5">
            <!-- Pill Badge: OUR SERVICES with dots -->
            <div class="svc-pill-badge d-inline-flex align-items-center justify-content-center mb-3">
                <span class="svc-badge-dots" aria-hidden="true">
                    <i></i><i></i><i></i><i></i><i></i>
                </span>
                <span class="svc-badge-title">OUR SERVICES</span>
                <span class="svc-badge-dots" aria-hidden="true">
                    <i></i><i></i><i></i><i></i><i></i>
                </span>
            </div>

            <!-- Main Heading -->
            <h2 class="svc-main-title fw-bolder text-uppercase mb-2">
                WE MAKE MOVING <span class="svc-highlight-text">SIMPLE &amp; SAFE</span>
            </h2>

            <!-- Center Diamond Divider -->
            <div class="svc-diamond-separator d-flex align-items-center justify-content-center my-3" aria-hidden="true">
                <span class="sep-line"></span>
                <span class="sep-diamond"></span>
                <span class="sep-line"></span>
            </div>

            <!-- Subtitle -->
            <p class="svc-subtitle text-muted mx-auto mb-0">
                End-to-end moving solutions designed to ensure a smooth, secure and stress-free relocation experience.
            </p>
        </div>

        <!-- 5 Service Cards Grid (2 columns / col-6 on mobile, 3 on tablet, 5 on desktop) -->
        <div class="svc-cards-grid mb-4 mb-lg-5">
            <?php foreach ($services_list as $svc): ?>
                <div class="col-6 svc-card-col">
                    <a href="<?= $svc['url'] ?>" class="svc-card-box svc-card-<?= $svc['theme'] ?> text-decoration-none d-flex flex-column h-100 position-relative" title="<?= htmlspecialchars($svc['title']) ?>">
                        <!-- Overlapping Geometric Hexagon Icon SVG with Crisp White Border -->
                        <div class="svc-hexagon-wrap">
                            <div class="svc-hexagon-svg-container">
                                <?= $svc['svg_icon'] ?>
                            </div>
                        </div>

                        <!-- Card Body / Content -->
                        <div class="svc-card-content text-center px-3 pt-4 pb-2 flex-grow-1 d-flex flex-column">
                            <h3 class="svc-card-title text-uppercase mb-1" style="color: <?= $svc['color'] ?>;">
                                <?= $svc['title'] ?>
                            </h3>
                            <!-- Title Underline Accent Bar -->
                            <span class="svc-title-underline mx-auto" style="background-color: <?= $svc['color'] ?>;"></span>
                            
                            <p class="svc-card-desc text-muted mb-0">
                                <?= $svc['desc'] ?>
                            </p>
                        </div>

                        <!-- SVG Chevron V-Shape Divider -->
                        <div class="svc-chevron-divider-wrap" aria-hidden="true">
                            <svg viewBox="0 0 100 22" preserveAspectRatio="none" class="svc-chevron-svg" xmlns="http://www.w3.org/2000/svg">
                                <path d="M-2 -4 L102 -4 L102 2 L50 20 L-2 2 Z" fill="#FFFFFF"/>
                                <path d="M-2 2 L50 20 L102 2" stroke="<?= $svc['color'] ?>" stroke-width="3.5" stroke-linejoin="round" stroke-linecap="round" fill="none"/>
                            </svg>
                        </div>

                        <!-- Card Image at Bottom with Number Badge -->
                        <div class="svc-card-img-wrap position-relative overflow-hidden">
                            <img src="<?= $svc['image'] ?>" alt="<?= htmlspecialchars($svc['alt']) ?>" class="svc-card-img w-100" loading="lazy">
                            <div class="svc-card-img-overlay"></div>
                            
                            <!-- Bottom Center Number Badge -->
                            <div class="svc-number-badge" style="background-color: <?= $svc['color'] ?>;">
                                <?= $svc['id'] ?>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>