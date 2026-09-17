<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); 
?>

<!-- Dynamic Hero Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'About Our Company',
    'bc_desc' => "India's trusted relocation partner delivering safe, damage-free, and punctual household, office, and vehicle moves across India for over {$experience} years.",
    'breadcrumbs' => [
        ['name' => 'About Us']
    ]
]);
?>

<!-- ABOUT US MAIN PAGE CONTENT -->
<section class="about-page-section py-5">
    <div class="container position-relative z-2">

        <!-- 1. Company Profile & Heritage (Storytelling Split with Floating Mosaic) -->
        <div class="row align-items-center g-5 mb-5 pb-lg-3">
            <div class="col-lg-6">
                <div class="pe-lg-3">
                    <h2 class="bike-heading-title fw-bolder mb-3">
                        Moving India Forward With <span class="text-orange">Care, Trust &amp; Precision</span>
                    </h2>

                    <div class="bike-gold-divider d-flex align-items-center my-3">
                        <span class="divider-line"></span>
                        <span class="divider-diamond"><i class="bi bi-shield-check"></i></span>
                        <span class="divider-line"></span>
                    </div>

                    <p class="lead-text mb-3">
                        At <strong><?= htmlspecialchars($company3) ?></strong>, we believe every move is far more than just transporting cardboard boxes—it is about moving your life, your memories, and your ambitions to a fresh new beginning.
                    </p>

                    <p class="mb-4">
                        Founded with a vision to revolutionize the Indian moving sector, we have grown from a local city transporter into one of the country's most respected relocation companies. Today, our IBA-approved operations encompass specialized closed container fleets, modern hydraulic vehicle carriers, secure warehousing hubs, and an elite team of background-verified packing artisans.
                    </p>

                    <!-- 4 Checkmark Pillars (2x2 Grid) -->
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <div class="about-check-item">
                                <i class="bi bi-patch-check-fill about-check-icon"></i>
                                <span>IBA Approved &amp; ISO Certified</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-check-item">
                                <i class="bi bi-patch-check-fill about-check-icon"></i>
                                <span>100% In-House Verified Crew</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-check-item">
                                <i class="bi bi-patch-check-fill about-check-icon"></i>
                                <span>Closed GPS-Tracked Fleets</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-check-item">
                                <i class="bi bi-patch-check-fill about-check-icon"></i>
                                <span>All-Risk Transit Insurance</span>
                            </div>
                        </div>
                    </div>

                    <div class="about-hero-btn-group d-flex align-items-center gap-2 gap-sm-3 pt-2">
                        <button type="button" class="btn-bike-primary" data-bs-toggle="modal" data-bs-target="#qteModal">
                            <i class="bi bi-calculator me-1"></i> Get a Free Quote
                        </button>
                        <a <?= $phonehtml ?> class="btn-calc-quote text-decoration-none">
                            <i class="bi bi-telephone-fill me-1"></i> <?= htmlspecialchars($phone) ?>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right: Asymmetric Photo Mosaic with Floating Badges -->
            <div class="col-lg-6">
                <div class="about-mosaic-wrap">
                    <!-- Main Background Photo -->
                    <div class="about-mosaic-main">
                        <img loading="lazy" src="<?= base_url('assets/img/home_shifting.jpg') ?>" alt="Professional Relocation Services by <?= htmlspecialchars($company3) ?>">
                    </div>

                    <!-- Secondary Overlapping Photo -->
                    <div class="about-mosaic-sub">
                        <img loading="lazy" src="<?= base_url('assets/img/packing_moving.jpg') ?>" alt="Safe Packing Materials and Container Logistics">
                    </div>

                    <!-- Floating Experience Counter Badge -->
                    <div class="about-float-badge">
                        <div class="badge-year"><?= $experience ?></div>
                        <div class="badge-text">Years Legacy</div>
                    </div>

                    <!-- Floating Quality Pill -->
                    <div class="about-float-pill">
                        <i class="bi bi-shield-fill-check text-success fs-5"></i>
                        <span>100% Damage-Free Guarantee</span>
                    </div>
                </div>
            </div>
        </div>



        <!-- 3. Mission, Vision & Core Values (Trio Grid) -->
        <div class="mb-5 pb-lg-3">
            <div class="text-center svc-header-wrapper mb-4 mb-md-5">
                <div class="svc-pill-badge d-inline-flex align-items-center justify-content-center mb-2">
                    <span class="svc-badge-dots" aria-hidden="true"><i></i><i></i><i></i><i></i><i></i></span>
                    <span class="svc-badge-title">OUR GUIDING PRINCIPLES</span>
                    <span class="svc-badge-dots" aria-hidden="true"><i></i><i></i><i></i><i></i><i></i></span>
                </div>
                <h2 class="bike-heading-title fw-bolder mb-2">The Philosophy That <span class="text-orange">Drives Our Work</span></h2>
                <div class="bike-gold-divider d-flex align-items-center justify-content-center my-3">
                    <span class="divider-line"></span>
                    <span class="divider-diamond"><i class="bi bi-compass-fill"></i></span>
                    <span class="divider-line"></span>
                </div>
                <p class="mx-auto bike-section-desc">
                    Every shipment we manage is governed by clear organizational values built around customer safety, transparency, and operational excellence.
                </p>
            </div>

            <div class="row g-4">
                <!-- Mission -->
                <div class="col-lg-4 col-md-6">
                    <div class="about-value-card">
                        <div class="about-value-header">
                            <div class="about-value-icon">
                                <i class="bi bi-bullseye"></i>
                            </div>
                            <h3 class="about-value-title">Our Mission</h3>
                        </div>
                        <p class="about-value-desc">
                            To deliver effortless, zero-damage, and punctual relocation experiences to households and businesses across India with transparent pricing, certified protective packaging, and friendly customer care.
                        </p>
                    </div>
                </div>

                <!-- Vision -->
                <div class="col-lg-4 col-md-6">
                    <div class="about-value-card">
                        <div class="about-value-header">
                            <div class="about-value-icon">
                                <i class="bi bi-eye-fill"></i>
                            </div>
                            <h3 class="about-value-title">Our Vision</h3>
                        </div>
                        <p class="about-value-desc">
                            To be recognized as India's most dependable, digitally-integrated relocation ecosystem, pioneering closed green carrier fleets, automated tracking, and sustainable eco-friendly packaging materials nationwide.
                        </p>
                    </div>
                </div>

                <!-- Core Values -->
                <div class="col-lg-4 col-md-12">
                    <div class="about-value-card">
                        <div class="about-value-header">
                            <div class="about-value-icon">
                                <i class="bi bi-gem"></i>
                            </div>
                            <h3 class="about-value-title">Our Core Values</h3>
                        </div>
                        <p class="about-value-desc">
                            Uncompromising integrity in quotations, genuine empathy for our customers' emotional belongings, absolute safety protocols during highway transit, and relentless commitment to on-time promises.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. The Lakshya Difference (Infrastructure Bento Grid) -->
        <div class="mb-5 pb-lg-3">
            <div class="text-center svc-header-wrapper mb-4 mb-md-5">
                <div class="svc-pill-badge d-inline-flex align-items-center justify-content-center mb-2">
                    <span class="svc-badge-dots" aria-hidden="true"><i></i><i></i><i></i><i></i><i></i></span>
                    <span class="svc-badge-title">OUR INFRASTRUCTURE</span>
                    <span class="svc-badge-dots" aria-hidden="true"><i></i><i></i><i></i><i></i><i></i></span>
                </div>
                <h2 class="bike-heading-title fw-bolder mb-2">Why India Chooses <span class="text-orange"><?= htmlspecialchars($company3) ?></span></h2>
                <div class="bike-gold-divider d-flex align-items-center justify-content-center my-3">
                    <span class="divider-line"></span>
                    <span class="divider-diamond"><i class="bi bi-stars"></i></span>
                    <span class="divider-line"></span>
                </div>
                <p class="mx-auto bike-section-desc">
                    We invest continuously in modern logistics assets, safety equipment, and skilled manpower to set industry standards.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="about-bento-card">
                        <div class="about-bento-header">
                            <div class="bento-icon-badge"><i class="bi bi-truck-front-fill"></i></div>
                            <h3 class="bento-title">Covered All-Weather Container Trucks</h3>
                        </div>
                        <p class="bento-desc">
                            Unlike open flatbed trucks commonly used by aggregators, our entire vehicle fleet consists of fully containerized closed trucks equipped with GPS tracking, hydraulic loading ramps, and soft-cushioned internal cargo anchors.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-bento-card">
                        <div class="about-bento-header">
                            <div class="bento-icon-badge"><i class="bi bi-person-check-fill"></i></div>
                            <h3 class="bento-title">Zero Third-Party Outsourcing</h3>
                        </div>
                        <p class="bento-desc">
                            Every packers, handler, carpenter, and highway driver is a verified, full-time employee trained in our proprietary packing techniques. We never subcontract your precious memories to unvetted third parties.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-bento-card">
                        <div class="about-bento-header">
                            <div class="bento-icon-badge"><i class="bi bi-building-lock"></i></div>
                            <h3 class="bento-title">CCTV-Monitored Warehousing Hubs</h3>
                        </div>
                        <p class="bento-desc">
                            Strategically located across major transit hubs in India, our storage facilities offer raised pallet staging, active moisture protection, routine pest treatments, and 24x7 security personnel.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-bento-card">
                        <div class="about-bento-header">
                            <div class="bento-icon-badge"><i class="bi bi-file-earmark-lock2-fill"></i></div>
                            <h3 class="bento-title">Legally Certified &amp; Full Insurance</h3>
                        </div>
                        <p class="bento-desc">
                            We operate as an officially recognized IBA-approved transport operator complying with all regional transport authority (RTO) norms, GST E-Way bill regulations, and all-risk transit insurance underwriting.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 5. The Lakshya Advantage (Standard Movers vs Lakshya Comparison) -->
        <div class="mb-5 pb-lg-3">
            <div class="text-center svc-header-wrapper mb-4 mb-md-5">
                <h2 class="bike-heading-title fw-bolder mb-2">
                    Why Choose <span class="text-orange"><?= htmlspecialchars($company3) ?></span> Over Local Movers
                </h2>
                <div class="bike-gold-divider d-flex align-items-center justify-content-center my-3">
                    <span class="divider-line"></span>
                    <span class="divider-diamond"><i class="bi bi-shield-shaded"></i></span>
                    <span class="divider-line"></span>
                </div>
                <p class="mx-auto bike-section-desc">
                    See how our certified infrastructure, background-verified crew, and fixed transparent pricing safeguard your valuable belongings.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Standard / Unregistered Transporters -->
                <div class="col-lg-6">
                    <div class="about-compare-card about-compare-other h-100">
                        <div class="about-compare-header">
                            <div class="compare-tag-other">
                                <i class="bi bi-exclamation-triangle-fill me-1"></i> Other / Local Movers
                            </div>
                            <h3 class="compare-title">Unorganized Transporters</h3>
                            <p class="compare-subtitle">Common risks customers face with unregistered operators</p>
                        </div>
                        <ul class="about-compare-list list-unstyled mb-0">
                            <li class="about-compare-item fail">
                                <i class="bi bi-x-circle-fill comp-icon"></i>
                                <div>
                                    <strong>Surprise Hidden Charges:</strong> Low initial estimate followed by demanding unexpected extra fees before unloading.
                                </div>
                            </li>
                            <li class="about-compare-item fail">
                                <i class="bi bi-x-circle-fill comp-icon"></i>
                                <div>
                                    <strong>Untrained Casual Labor:</strong> Daily-wage laborers with zero training in handling luxury furniture or electronics.
                                </div>
                            </li>
                            <li class="about-compare-item fail">
                                <i class="bi bi-x-circle-fill comp-icon"></i>
                                <div>
                                    <strong>Open Flatbed Trucks:</strong> Goods exposed to highway weather, dust, heavy rain, and theft risks.
                                </div>
                            </li>
                            <li class="about-compare-item fail">
                                <i class="bi bi-x-circle-fill comp-icon"></i>
                                <div>
                                    <strong>Cheap Recycled Boxes:</strong> Used grocery boxes that crush easily during transit, causing breakages.
                                </div>
                            </li>
                            <li class="about-compare-item fail">
                                <i class="bi bi-x-circle-fill comp-icon"></i>
                                <div>
                                    <strong>Zero Damage Liability:</strong> No valid transit insurance policy or formal compensation for damaged items.
                                </div>
                            </li>
                            <li class="about-compare-item fail">
                                <i class="bi bi-x-circle-fill comp-icon"></i>
                                <div>
                                    <strong>Unpredictable Delays:</strong> No tracking technology; drivers unreachable for days during highway transit.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Lakshya Packers & Movers (The Verified Advantage) -->
                <div class="col-lg-6">
                    <div class="about-compare-card about-compare-us h-100">
                        <div class="about-compare-header">
                            <div class="compare-tag-us">
                                <i class="bi bi-patch-check-fill me-1"></i> Certified &amp; Recommended
                            </div>
                            <h3 class="compare-title"><?= htmlspecialchars($company3) ?></h3>
                            <p class="compare-subtitle">Peace-of-mind moving with our strict corporate quality standards</p>
                        </div>
                        <ul class="about-compare-list list-unstyled mb-0">
                            <li class="about-compare-item pass">
                                <i class="bi bi-check-circle-fill comp-icon"></i>
                                <div>
                                    <strong>100% Fixed-Price Guarantee:</strong> Written all-inclusive itemized quotation with zero hidden surcharges at delivery.
                                </div>
                            </li>
                            <li class="about-compare-item pass">
                                <i class="bi bi-check-circle-fill comp-icon"></i>
                                <div>
                                    <strong>In-House Background-Verified Crew:</strong> Full-time certified packers trained in furniture dismantling &amp; fragile protection.
                                </div>
                            </li>
                            <li class="about-compare-item pass">
                                <i class="bi bi-check-circle-fill comp-icon"></i>
                                <div>
                                    <strong>Enclosed GPS Container Fleets:</strong> Sealed, weather-proof steel containers with live real-time location monitoring.
                                </div>
                            </li>
                            <li class="about-compare-item pass">
                                <i class="bi bi-check-circle-fill comp-icon"></i>
                                <div>
                                    <strong>Multi-Layer Heavy-Duty Packaging:</strong> 7-ply virgin cartons, air-bubble wrapping, stretch film &amp; foam corners.
                                </div>
                            </li>
                            <li class="about-compare-item pass">
                                <i class="bi bi-check-circle-fill comp-icon"></i>
                                <div>
                                    <strong>IBA-Approved Transit Insurance:</strong> Complete all-risk marine transit insurance documentation provided upfront.
                                </div>
                            </li>
                            <li class="about-compare-item pass">
                                <i class="bi bi-check-circle-fill comp-icon"></i>
                                <div>
                                    <strong>Dedicated Relocation Coordinator:</strong> Single point of contact giving daily status updates until unpacking is complete.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6. Executive Contact & Consultation Hub -->
        <div class="about-consult-box">
            <div class="about-consult-inner text-center">
                <div class="about-consult-tag">
                    <i class="bi bi-patch-check-fill text-orange"></i> DIRECT RELOCATION DESK
                </div>
                <h3 class="about-consult-heading">
                    Ready to Plan Your Next Move With <span class="text-orange"><?= htmlspecialchars($company3) ?></span>?
                </h3>
                <p class="about-consult-desc mx-auto">
                    Speak directly with our senior moving supervisors or get an instant itemized quote on WhatsApp. Zero obligations, zero hidden costs, 100% transparent guidance.
                </p>

                <!-- Dual Action Interactive Tiles -->
                <div class="row g-3 g-md-4 justify-content-center mt-2 mb-4">
                    <!-- Call Action Tile -->
                    <div class="col-md-6 col-lg-5">
                        <a <?= $phonehtml ?> class="about-action-tile call-tile text-decoration-none">
                            <div class="tile-icon-wrap phone-icon">
                                <i class="bi bi-telephone-outbound-fill"></i>
                            </div>
                            <div class="tile-info text-start">
                                <span class="tile-label">Call Moving Consultant</span>
                                <span class="tile-value"><?= htmlspecialchars($phone) ?></span>
                                <span class="tile-sub">Available 24x7 for Free Advice</span>
                            </div>
                            <div class="tile-arrow">
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </a>
                    </div>

                    <!-- WhatsApp Action Tile -->
                    <div class="col-md-6 col-lg-5">
                        <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="about-action-tile wa-tile text-decoration-none">
                            <div class="tile-icon-wrap wa-icon">
                                <i class="bi bi-whatsapp"></i>
                            </div>
                            <div class="tile-info text-start">
                                <span class="tile-label">Instant WhatsApp Desk</span>
                                <span class="tile-value">Chat With Supervisor</span>
                                <span class="tile-sub">Get Quote in Under 10 Mins</span>
                            </div>
                            <div class="tile-arrow">
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Trust Badges Strip -->
                <div class="about-consult-footer d-flex align-items-center justify-content-center flex-wrap gap-3 gap-md-4 pt-3">
                    <div class="consult-trust-item">
                        <i class="bi bi-shield-fill-check text-success"></i> IBA Certified
                    </div>
                    <div class="consult-trust-item">
                        <i class="bi bi-clock-history text-orange"></i> Quick Response
                    </div>
                    <div class="consult-trust-item">
                        <i class="bi bi-tag-fill text-primary"></i> Fixed Price Guarantee
                    </div>
                    <div class="consult-trust-item">
                        <i class="bi bi-truck text-secondary"></i> All-India Closed Fleets
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>