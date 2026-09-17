<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
$comp_name = isset($this->comp['company3']) ? $this->comp['company3'] : (isset($company3) ? $company3 : 'Lakshya Packers and Movers');
$comp_phone = isset($phone) ? $phone : (isset($this->comp['phone']) ? $this->comp['phone'] : '+91 82602 07030');
$comp_phone_clean = preg_replace('/[^0-9+]/', '', $comp_phone);
$city_slug = isset($ctlink) && !empty($ctlink) ? $ctlink : strtolower(str_replace(' ', '-', trim($city)));

$city_services = [
    [
        'id' => '01',
        'title' => 'House Shifting',
        'tag' => 'Household Moving',
        'desc' => 'Safe, doorstep household relocation with multi-layer protective packing across ' . htmlspecialchars($city) . '.',
        'chips' => ['Flats & Villas', 'Insured Moving'],
        'image' => base_url('assets/img/home_shifting.jpg'),
        'icon' => 'bi-house-door-fill',
        'url' => site_url('home-shifting-in-' . $city_slug)
    ],
    [
        'id' => '02',
        'title' => 'Office Relocation',
        'tag' => 'Corporate Moving',
        'desc' => 'Seamless commercial shifting for offices, workstations, and IT servers with zero downtime.',
        'chips' => ['Zero Downtime', 'IT Equipment'],
        'image' => base_url('assets/img/packing_moving.jpg'),
        'icon' => 'bi-briefcase-fill',
        'url' => site_url('office-shifting-in-' . $city_slug)
    ],
    [
        'id' => '03',
        'title' => 'Car Transportation',
        'tag' => 'Vehicle Carrier',
        'desc' => 'Enclosed hydraulic car trailers with door-to-door delivery and full transit insurance.',
        'chips' => ['Closed Carrier', 'GPS Tracked'],
        'image' => base_url('assets/img/car_transpot.jpg'),
        'icon' => 'bi-car-front-fill',
        'url' => site_url('car-transport-in-' . $city_slug)
    ],
    [
        'id' => '04',
        'title' => 'Bike Transportation',
        'tag' => 'Two-Wheeler Transport',
        'desc' => 'Specialized crating and bubble scratch wrap for motorcycles and scooters across India.',
        'chips' => ['Custom Crates', 'Doorstep Pickup'],
        'image' => base_url('assets/img/bike_transpot.jpg'),
        'icon' => 'bi-bicycle',
        'url' => site_url('bike-transport-in-' . $city_slug)
    ],
    [
        'id' => '05',
        'title' => 'Local Shifting',
        'tag' => 'Same-Day Shifting',
        'desc' => 'Fast, same-day local shifting within ' . htmlspecialchars($city) . ' at transparent, budget pricing.',
        'chips' => ['Same Day', 'Local Crew'],
        'image' => base_url('assets/img/local_shifting.jpg'),
        'icon' => 'bi-geo-alt-fill',
        'url' => site_url('local-shifting-in-' . $city_slug)
    ],
    [
        'id' => '06',
        'title' => 'Warehousing & Storage',
        'tag' => 'Safe Goods Storage',
        'desc' => 'CCTV-monitored, moisture-free warehouse storage for household goods and office inventory.',
        'chips' => ['24/7 CCTV', 'Flexible Terms'],
        'image' => base_url('assets/img/packing_moving.jpg'),
        'icon' => 'bi-box-seam-fill',
        'url' => site_url('warehousing-and-storage-in-' . $city_slug)
    ],
];
?>

<!-- =========================================================================
     CITY SERVICES SECTION - Clean & Modern Cards
     ========================================================================= -->
<section class="cservice-section position-relative overflow-hidden" id="cityServicesSection">
    <div class="container position-relative z-2">
        <!-- Section Header -->
        <div class="row align-items-end justify-content-between mb-4 mb-lg-5">
            <div class="col-lg-7">
                <div class="cproc-eyebrow mb-2">
                    <span class="cproc-dash">—</span>
                    <span class="cproc-dot">•</span>
                    <span class="cproc-eyebrow-text">OUR SPECIALIZATIONS</span>
                    <span class="cproc-dot">•</span>
                    <span class="cproc-dash">—</span>
                </div>
                <h2 class="cproc-heading fw-bolder mb-2">
                    Relocation Services in <span class="cproc-highlight"><?= htmlspecialchars($city) ?></span>
                </h2>
                <p class="cservice-lead mb-0">
                    Comprehensive packing and shifting solutions designed for seamless, damage-free doorstep relocation.
                </p>
            </div>
            <div class="col-lg-5 col-xl-4 text-lg-end mt-3 mt-lg-0">
                <div class="cservice-header-card">
                    <div class="d-flex align-items-center gap-3">
                        <div class="cservice-header-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div class="text-start">
                            <div class="fw-bold text-dark fs-6">100% Insured Moves</div>
                            <div class="text-muted small">Doorstep packing to final placement</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6 Clean & Compact Service Cards -->
        <div class="row g-4 mb-4 mb-lg-5">
            <?php foreach ($city_services as $svc): ?>
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <div class="cservice-card position-relative w-100 d-flex flex-column">
                        <!-- Compact Top Photo -->
                        <div class="cservice-img-wrap position-relative">
                            <img src="<?= $svc['image'] ?>" alt="<?= htmlspecialchars($svc['title']) ?> in <?= htmlspecialchars($city) ?>" class="cservice-img w-100 h-100 object-fit-cover">
                            <div class="cservice-img-overlay"></div>
                            
                            <!-- Badges on Image -->
                            <div class="cservice-badge-top d-flex align-items-center justify-content-between">
                                <span class="cservice-category-badge">
                                    <i class="bi <?= $svc['icon'] ?>"></i>
                                    <span><?= htmlspecialchars($svc['tag']) ?></span>
                                </span>
                                <span class="cservice-city-pill">
                                    <i class="bi bi-geo-alt-fill"></i> <?= htmlspecialchars($city) ?>
                                </span>
                            </div>
                        </div>

                        <!-- Card Body (Less Content, Punchy & Clean) -->
                        <div class="cservice-body d-flex flex-column flex-grow-1 p-3 p-lg-4">
                            <h3 class="cservice-title mb-2">
                                <?= htmlspecialchars($svc['title']) ?>
                            </h3>
                            <p class="cservice-desc text-muted mb-3 flex-grow-1">
                                <?= htmlspecialchars($svc['desc']) ?>
                            </p>

                            <!-- Micro Feature Chips -->
                            <div class="cservice-chips-wrap d-flex align-items-center gap-2 mb-3">
                                <?php foreach ($svc['chips'] as $chip): ?>
                                    <span class="cservice-chip">
                                        <i class="bi bi-check2"></i> <?= htmlspecialchars($chip) ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>

                            <!-- Single Clean Action Row -->
                            <div class="cservice-action-row pt-3 border-top d-flex align-items-center justify-content-between">
                                <a href="<?= $svc['url'] ?>" class="cservice-learn-link stretched-link">
                                    <span>Explore Details</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                                <button type="button" class="cservice-quote-pill-btn position-relative z-2" data-bs-toggle="modal" data-bs-target="#qteModal">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Quote</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Custom Shifting Support Banner -->
        <div class="cservice-cta-bar p-3 p-md-4 rounded-4 border bg-white shadow-sm">
            <div class="row align-items-center g-3 justify-content-between">
                <div class="col-lg-7">
                    <div class="d-flex align-items-center gap-3">
                        <div class="cservice-cta-icon-wrap">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div>
                            <h4 class="cservice-cta-title fw-bold mb-1">
                                Need a Custom Relocation in <?= htmlspecialchars($city) ?>?
                            </h4>
                            <p class="cservice-cta-desc text-muted mb-0">
                                Get clear, transparent pricing with zero surprise charges. We tailor vehicle size and schedule to your shifting needs.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4 text-lg-end">
                    <div class="d-flex align-items-center gap-2 justify-content-lg-end flex-wrap">
                        <a href="tel:<?= $comp_phone_clean ?>" class="crev-phone-btn">
                            <i class="bi bi-telephone-fill"></i>
                            <span><?= htmlspecialchars($comp_phone) ?></span>
                        </a>
                        <button type="button" class="crev-cta-btn" data-bs-toggle="modal" data-bs-target="#qteModal">
                            <span>Get Free Quote</span>
                            <i class="bi bi-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>