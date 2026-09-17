<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
?>

<!-- =========================================================================
     CITY ABOUT SECTION - Modern Bento & Branch Showcase for <?= htmlspecialchars($city) ?>
     ========================================================================= -->
<section class="cabout-section position-relative overflow-hidden" id="cityAboutSection">
    <div class="container position-relative z-2">
        <!-- Section Header -->
        <div class="row align-items-end justify-content-between mb-4 mb-lg-5">
            <div class="col-lg-7">
                <div class="cproc-eyebrow mb-2">
                    <span class="cproc-dash">—</span>
                    <span class="cproc-dot">•</span>
                    <span class="cproc-eyebrow-text">LOCAL RELOCATION EXPERTS</span>
                    <span class="cproc-dot">•</span>
                    <span class="cproc-dash">—</span>
                </div>
                <h2 class="cproc-heading fw-bolder mb-3">
                    Your Trusted Moving Partner Across <span class="cproc-highlight"><?= htmlspecialchars($city) ?></span>
                </h2>
                <p class="cabout-lead mb-0">
                    At <strong><?= htmlspecialchars($company3) ?></strong>, we take the stress, heavy lifting, and guesswork out of shifting. Whether moving a studio apartment, a large family villa, an office, or your vehicle, our certified <?= htmlspecialchars($city) ?> team delivers punctuality, careful handling, and transparent pricing.
                </p>
            </div>
            <div class="col-lg-5 col-xl-4 text-lg-end mt-3 mt-lg-0">
                <div class="cabout-quick-card p-3 rounded-4 bg-white shadow-sm border text-start d-inline-block w-100">
                    <div class="d-flex align-items-center gap-3">
                        <div class="cabout-quick-icon-wrap">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div>
                            <div class="fw-bold text-dark fs-6"><?= htmlspecialchars($city) ?> Branch Coverage</div>
                            <div class="text-muted small">Serving all local societies &amp; outskirts</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4 Bento Feature Cards for City -->
        <div class="row g-4 mb-4 mb-lg-5">
            <!-- Pillar 1 -->
            <div class="col-lg-3 col-md-6 col-12 d-flex">
                <div class="cabout-feature-card cabout-feat-1 w-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="cabout-feat-icon-box flex-shrink-0">
                            <i class="bi bi-pin-map-fill"></i>
                        </div>
                        <h3 class="cabout-feat-title mb-0">Local Route Mastery</h3>
                    </div>
                    <p class="cabout-feat-desc mb-0">
                        Familiar with all residential societies, narrow streets, and commercial parks in <?= htmlspecialchars($city) ?> for smooth loading without delays.
                    </p>
                </div>
            </div>

            <!-- Pillar 2 -->
            <div class="col-lg-3 col-md-6 col-12 d-flex">
                <div class="cabout-feature-card cabout-feat-2 w-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="cabout-feat-icon-box flex-shrink-0">
                            <i class="bi bi-box-seam-fill"></i>
                        </div>
                        <h3 class="cabout-feat-title mb-0">3-Layer Bubble Packing</h3>
                    </div>
                    <p class="cabout-feat-desc mb-0">
                        Multi-tier cushioning for glassware, LED TVs, furniture, and kitchenware using heavy-duty corrugated cartons and stretch wrap.
                    </p>
                </div>
            </div>

            <!-- Pillar 3 -->
            <div class="col-lg-3 col-md-6 col-12 d-flex">
                <div class="cabout-feature-card cabout-feat-3 w-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="cabout-feat-icon-box flex-shrink-0">
                            <i class="bi bi-truck-front-fill"></i>
                        </div>
                        <h3 class="cabout-feat-title mb-0">GPS Closed Fleet</h3>
                    </div>
                    <p class="cabout-feat-desc mb-0">
                        All-weather weatherproof closed container vehicles with live fleet tracking. Your goods stay safe, sealed, and protected from dust &amp; rain.
                    </p>
                </div>
            </div>

            <!-- Pillar 4 -->
            <div class="col-lg-3 col-md-6 col-12 d-flex">
                <div class="cabout-feature-card cabout-feat-4 w-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="cabout-feat-icon-box flex-shrink-0">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h3 class="cabout-feat-title mb-0">Transparent &amp; Insured</h3>
                    </div>
                    <p class="cabout-feat-desc mb-0">
                        Upfront written quotation with zero hidden loading or staircase charges. Full transit insurance coverage for complete peace of mind.
                    </p>
                </div>
            </div>
        </div>

        <!-- Lower Banner: Image + Live Stats & Direct Assistance -->
        <div class="cabout-showcase-bar p-4 p-lg-5 rounded-4 shadow-sm border bg-white">
            <div class="row align-items-center g-4">
                <div class="col-lg-5">
                    <div class="cabout-img-frame rounded-4 overflow-hidden position-relative">
                        <img src="<?= base_url('assets/img/home_shifting.jpg') ?>" alt="Moving in <?= htmlspecialchars($city) ?>" class="cabout-img img-fluid w-100 object-fit-cover">
                        <div class="cabout-img-badge position-absolute bottom-0 start-0 m-3 p-2 px-3 rounded-pill bg-white text-dark shadow-sm small fw-bold d-flex align-items-center gap-2">
                            <span class="cabout-pulse-dot"></span>
                            <span>Verified Shifting Crew in <?= htmlspecialchars($city) ?></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="ps-lg-3">
                        <h3 class="cabout-subheading fw-bold mb-3">
                            Moving Families &amp; Businesses with Care Across <?= htmlspecialchars($city) ?>
                        </h3>
                        <p class="text-muted small mb-4">
                            From the moment our supervisor conducts the pre-move assessment until the last box is placed and assembled in your new address, our polite, police-verified personnel handle your belongings with total dedication.
                        </p>

                        <!-- Relocation Content -->
                        <div class="cabout-content-body mb-4">
                            <p class="cabout-desc-text mb-0">
                                Whether you are shifting a 1BHK/2BHK/3BHK residence, relocating an entire corporate office, or transferring your personal vehicle, our dedicated team in <strong><?= htmlspecialchars($city) ?></strong> ensures a seamless, hassle-free transition. Every assignment is managed by a qualified move supervisor who oversees inventory tagging, high-grade multi-layer wrapping, and careful handling of every delicate item.
                            </p>
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-flex align-items-center gap-3 flex-wrap">
                            <a <?= $phonehtml ?> class="crev-phone-btn">
                                <i class="bi bi-telephone-fill"></i>
                                <span>Call <?= htmlspecialchars($phone) ?></span>
                            </a>
                            <button type="button" class="crev-cta-btn" data-bs-toggle="modal" data-bs-target="#qteModal">
                                <span>Get Instant City Quote</span>
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- City Route Map & Service Coverage (col-6 & col-6) -->
        <div class="cabout-map-box mt-4 mt-lg-5 p-4 p-lg-5 rounded-4 border bg-white shadow-sm">
            <div class="row align-items-center g-4">
                <!-- Col-6: Local City Map -->
                <div class="col-12 col-lg-6">
                    <div class="cabout-map-frame rounded-4 overflow-hidden position-relative">
                        <?php include 'city_map.php'; ?>
                        <div class="cabout-map-badge position-absolute bottom-0 start-0 m-3 p-2 px-3 rounded-pill bg-white text-dark shadow-sm small fw-bold d-flex align-items-center gap-2">
                            <span class="cabout-pulse-dot"></span>
                            <span><?= htmlspecialchars($city) ?> Route &amp; Service Coverage</span>
                        </div>
                    </div>
                </div>

                <!-- Col-6: Route & Coverage Content -->
                <div class="col-12 col-lg-6">
                    <div class="ps-lg-3">
                        <div class="cproc-eyebrow mb-2">
                            <span class="cproc-dash">—</span>
                            <span class="cproc-dot">•</span>
                            <span class="cproc-eyebrow-text">LOCAL PRESENCE</span>
                            <span class="cproc-dot">•</span>
                            <span class="cproc-dash">—</span>
                        </div>
                        <h3 class="cabout-subheading fw-bold mb-3">
                            Comprehensive Shifting Coverage Across <span class="cproc-highlight"><?= htmlspecialchars($city) ?></span>
                        </h3>
                        <p class="cabout-desc-text text-muted mb-3">
                            Our localized fleet and dedicated moving coordinators operate extensively across every neighborhood, gated society, industrial sector, and sub-locality in and around <strong><?= htmlspecialchars($city) ?></strong>.
                        </p>
                        <div class="cabout-map-features d-flex flex-column gap-2 mb-4">
                            <div class="d-flex align-items-center gap-2 text-secondary small">
                                <i class="bi bi-geo-alt-fill text-orange"></i>
                                <span><strong>Fast Doorstep Dispatch:</strong> Quick response time for pre-move inspection and same-day packing in <?= htmlspecialchars($city) ?>.</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 text-secondary small">
                                <i class="bi bi-truck-front-fill text-orange"></i>
                                <span><strong>Society Entry Clearance:</strong> Smooth access for large container trucks with society &amp; gate coordination.</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 text-secondary small">
                                <i class="bi bi-shield-fill-check text-orange"></i>
                                <span><strong>Direct Highway Access:</strong> Reliable intercity transit routes connecting <?= htmlspecialchars($city) ?> nationwide.</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 flex-wrap">
                            <a <?= $phonehtml ?> class="crev-phone-btn">
                                <i class="bi bi-telephone-fill"></i>
                                <span>Call <?= htmlspecialchars($phone) ?></span>
                            </a>
                            <button type="button" class="crev-cta-btn" data-bs-toggle="modal" data-bs-target="#qteModal">
                                <span>Check Route Pricing</span>
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'city_process.php'; ?>

<?php include 'city_reviews.php'; ?>

<?php include 'city_faq.php'; ?>

<?php include 'city_service.php'; ?>