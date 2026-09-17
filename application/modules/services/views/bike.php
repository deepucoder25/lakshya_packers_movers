<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); 
?>

<!-- Dynamic Hero Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Safe & Reliable Bike Transportation',
    'bc_desc' => 'Door-to-door, scratch-free two-wheeler and motorcycle relocation across India with specialized closed carriers & transit insurance.',
    'breadcrumbs' => [
        ['name' => 'Bike Transportation']
    ]
]);
?>

<!-- BIKE SERVICE DETAILS -->
<section class="bike-service-section position-relative py-5">
    <div class="container position-relative z-2">

        <!-- 1. Top Hero Overview Card -->
        <div class="bike-overview-card bg-white rounded-4 p-4 p-md-5 mb-5 shadow-sm border">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <div class="svc-pill-badge d-inline-flex align-items-center justify-content-center mb-3">
                        <span class="svc-badge-dots" aria-hidden="true">
                            <i></i><i></i><i></i><i></i><i></i>
                        </span>
                        <span class="svc-badge-title">TWO-WHEELER RELOCATION</span>
                        <span class="svc-badge-dots" aria-hidden="true">
                            <i></i><i></i><i></i><i></i><i></i>
                        </span>
                    </div>
                    <h2 class="bike-heading-title fw-bolder">
                        Door-to-Door Bike Transportation Services by <span class="text-orange"><?= htmlspecialchars($company3) ?></span>
                    </h2>
                    <div class="bike-gold-divider d-flex align-items-center my-3">
                        <span class="divider-line"></span>
                        <span class="divider-diamond"><i class="bi bi-bicycle"></i></span>
                        <span class="divider-line"></span>
                    </div>
                    <p class="lead-text mb-3">
                        Are you relocating to a new city and worried about transporting your motorcycle or scooter safely? <strong><?= htmlspecialchars($company3) ?></strong> provides certified, scratch-free, and punctual bike transportation services across India.
                    </p>
                    <p class="text-muted mb-0">
                        Whether it is an everyday scooter, an executive commuter, a heavy cruiser like a Royal Enfield, or a high-end superbike, we treat every vehicle with extreme precision. We pack with shock-absorbing multi-layer materials and haul them in GPS-tracked, covered container carriers with hydraulic ramps.
                    </p>
                </div>

                <div class="col-lg-5">
                    <div class="bike-banner-wrapper position-relative overflow-hidden rounded-4">
                        <img loading="lazy" src="<?= base_url('assets/img/bike_transpot.jpg') ?>" alt="Safe Bike Transportation Carrier by <?= htmlspecialchars($company3) ?>" class="img-fluid w-100 bike-featured-img">
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. Four Key Guarantees (Full-Width 4 Columns) -->
        <div class="row g-3 g-md-4 mb-5">
            <div class="col-lg-3 col-sm-6">
                <div class="bike-full-feat-card h-100 p-4 bg-white rounded-4 border shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="full-feat-icon flex-shrink-0"><i class="bi bi-shield-check"></i></div>
                        <h3 class="h5 fw-bold text-navy m-0">Zero-Scratch Guarantee</h3>
                    </div>
                    <p class="small text-muted m-0">Triple-layered bubble sheet, soft foam wrap, and stretch film covering headlights, mirrors, and fuel tanks.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="bike-full-feat-card h-100 p-4 bg-white rounded-4 border shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="full-feat-icon flex-shrink-0"><i class="bi bi-truck"></i></div>
                        <h3 class="h5 fw-bold text-navy m-0">Covered Hydraulic Carriers</h3>
                    </div>
                    <p class="small text-muted m-0">Enclosed all-weather carrier trucks with wheel chocs and heavy-duty nylon ratchet harness tie-downs.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="bike-full-feat-card h-100 p-4 bg-white rounded-4 border shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="full-feat-icon flex-shrink-0"><i class="bi bi-file-earmark-lock-fill"></i></div>
                        <h3 class="h5 fw-bold text-navy m-0">Transit Insurance</h3>
                    </div>
                    <p class="small text-muted m-0">Comprehensive vehicle transit insurance covering declared value against accidents, fire, or transit risks.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="bike-full-feat-card h-100 p-4 bg-white rounded-4 border shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="full-feat-icon flex-shrink-0"><i class="bi bi-geo-alt-fill"></i></div>
                        <h3 class="h5 fw-bold text-navy m-0">Door-to-Door Delivery</h3>
                    </div>
                    <p class="small text-muted m-0">Prompt pickup from your current home doorstep and direct drop-off right at your destination location.</p>
                </div>
            </div>
        </div>

        <!-- 3. Step-by-Step Moving Workflow (Full Width 4 Steps Grid) -->
        <div class="bike-process-card bg-white rounded-4 p-4 p-md-5 mb-5 shadow-sm border">
            <div class="text-center svc-header-wrapper mb-4 mb-md-5">
                <div class="svc-pill-badge d-inline-flex align-items-center justify-content-center mb-2">
                    <span class="svc-badge-dots" aria-hidden="true"><i></i><i></i><i></i><i></i><i></i></span>
                    <span class="svc-badge-title">STEP-BY-STEP PROCESS</span>
                    <span class="svc-badge-dots" aria-hidden="true"><i></i><i></i><i></i><i></i><i></i></span>
                </div>
                <h2 class="bike-heading-title fw-bolder mb-2">How We Relocate <span class="text-orange">Your Two-Wheeler</span></h2>
                <div class="bike-gold-divider d-flex align-items-center justify-content-center my-3">
                    <span class="divider-line"></span>
                    <span class="divider-diamond"><i class="bi bi-gear-wide-connected"></i></span>
                    <span class="divider-line"></span>
                </div>
                <p class="text-muted mx-auto bike-section-desc">
                    We strictly implement an IBA-standard 4-phase relocation protocol to ensure complete safety from pickup to handover.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="bike-step-grid-item h-100 p-4 rounded-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="step-num-bubble flex-shrink-0">01</div>
                            <h3 class="h5 fw-bold text-navy m-0">Pre-Transit Inspection</h3>
                        </div>
                        <p class="small text-muted m-0">We check the odometer reading, verify RC &amp; Insurance, note fuel level, and prepare an official pre-shipment condition report.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bike-step-grid-item h-100 p-4 rounded-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="step-num-bubble flex-shrink-0">02</div>
                            <h3 class="h5 fw-bold text-navy m-0">Triple-Layer Packing</h3>
                        </div>
                        <p class="small text-muted m-0">Bubble wrapping on speedometer, mirrors, and lamps. High-density foam padding and corrugated wrap on fuel tank and body.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bike-step-grid-item h-100 p-4 rounded-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="step-num-bubble flex-shrink-0">03</div>
                            <h3 class="h5 fw-bold text-navy m-0">Ramp Loading &amp; Anchoring</h3>
                        </div>
                        <p class="small text-muted m-0">Loaded into covered carriers via hydraulic ramps, locked in wheel-chocs, and firmly belted using heavy industrial safety straps.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bike-step-grid-item h-100 p-4 rounded-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="step-num-bubble flex-shrink-0">04</div>
                            <h3 class="h5 fw-bold text-navy m-0">Doorstep Safe Handover</h3>
                        </div>
                        <p class="small text-muted m-0">Delivered directly to your new home. Materials cleanly unwrapped in your presence for cross-checking before final signoff.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Instant Booking Form & Document Checklist Row -->
        <div class="row g-4 mb-5">
            <!-- Left: Two-Wheeler Packing & Preparation Guide -->
            <div class="col-lg-6">
                <div class="bike-form-card bg-white rounded-4 p-4 p-md-5 h-100 border shadow-sm d-flex flex-column justify-content-between">
                    <div>
                        <div class="mb-2">
                            <span class="badge-sub-title"><i class="bi bi-shield-lock-fill"></i> EXPERT PACKAGING PROTOCOL</span>
                        </div>
                        <h3 class="bike-sub-title fw-bold mb-2">How We Protect <span class="text-orange">Your Two-Wheeler</span></h3>
                        <p class="small text-muted mb-4">Every vehicle undergoes a specialized multi-layer wrapping procedure prior to carrier loading:</p>

                        <div class="d-flex flex-column gap-3">
                            <div class="p-3 rounded-3 bg-light border">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div class="doc-icon flex-shrink-0"><i class="bi bi-layers-fill"></i></div>
                                    <h4 class="h6 fw-bold text-navy m-0">Layer 1: High-Grade Air-Bubble Cushioning</h4>
                                </div>
                                <p class="small text-muted m-0">Delicate components including rear-view mirrors, headlamps, digital dashboards, and indicators are bubble-wrapped to absorb bumps and road vibration.</p>
                            </div>

                            <div class="p-3 rounded-3 bg-light border">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div class="doc-icon flex-shrink-0"><i class="bi bi-box-seam-fill"></i></div>
                                    <h4 class="h6 fw-bold text-navy m-0">Layer 2: Corrugated Sheet &amp; EPE Foam Guard</h4>
                                </div>
                                <p class="small text-muted m-0">The fuel tank, exhaust silencer, engine fins, and front/rear mudguards are padded with dense foam sheets preventing contact and friction marks.</p>
                            </div>

                            <div class="p-3 rounded-3 bg-light border">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div class="doc-icon flex-shrink-0"><i class="bi bi-film"></i></div>
                                    <h4 class="h6 fw-bold text-navy m-0">Layer 3: Waterproof Stretch Film Sealing</h4>
                                </div>
                                <p class="small text-muted m-0">The entire motorcycle is enveloped in heavy stretch film and taped firmly to protect against highway rain, moisture, and road dust.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Quick Action -->
                    <div class="mt-4 pt-3 border-top d-flex align-items-center justify-content-between flex-wrap gap-2">
                        <span class="small text-muted"><i class="bi bi-check-circle-fill text-success me-1"></i> 100% Scratch-Free Guarantee</span>
                        <button type="button" class="btn-bike-primary py-2 px-4 small" data-bs-toggle="modal" data-bs-target="#qteModal">
                            <i class="bi bi-calculator me-1"></i> Get Quick Quote
                        </button>
                    </div>
                </div>
            </div>

            <!-- Right: Required Checklist & Direct Contact -->
            <div class="col-lg-6">
                <div class="bike-docs-card bg-white rounded-4 p-4 p-md-5 h-100 border shadow-sm d-flex flex-column justify-content-between">
                    <div>
                        <div class="mb-2">
                            <span class="badge-sub-title"><i class="bi bi-file-earmark-check-fill"></i> MANDATORY DOCUMENTS</span>
                        </div>
                        <h3 class="bike-sub-title fw-bold mb-2">Required Documents <span class="text-orange">for Transit</span></h3>
                        <p class="small text-muted mb-4">Keep these documents ready for highway security checkposts and transport RTO approvals:</p>

                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="doc-card p-3 rounded-3 h-100">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="doc-icon"><i class="bi bi-card-text"></i></div>
                                        <h4 class="doc-title h6 m-0">Vehicle RC Copy</h4>
                                    </div>
                                    <p class="doc-desc m-0">Clear photocopy or verified digital DigiLocker copy of the Registration Certificate.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="doc-card p-3 rounded-3 h-100">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="doc-icon"><i class="bi bi-shield-check"></i></div>
                                        <h4 class="doc-title h6 m-0">Valid Insurance</h4>
                                    </div>
                                    <p class="doc-desc m-0">Copy of active motor vehicle insurance policy to certify road legality.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="doc-card p-3 rounded-3 h-100">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="doc-icon"><i class="bi bi-person-vcard"></i></div>
                                        <h4 class="doc-title h6 m-0">Owner ID Proof</h4>
                                    </div>
                                    <p class="doc-desc m-0">Aadhaar Card, Driving License, or Passport photocopy of the sender.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="doc-card p-3 rounded-3 h-100">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="doc-icon"><i class="bi bi-fuel-pump"></i></div>
                                        <h4 class="doc-title h6 m-0">Empty Petrol Tank</h4>
                                    </div>
                                    <p class="doc-desc m-0">Fuel kept under 1 Liter as mandated by highway carrier fire safety laws.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Direct Contact Banner -->
                    <div class="bike-cta-inline p-3 p-md-4 rounded-4 mt-4 d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <div>
                            <p class="fw-bold text-white m-0 h6">Need immediate pickup assistance?</p>
                            <span class="small text-white-50">Our moving supervisors are available 24x7</span>
                        </div>
                        <div class="d-flex gap-2">
                            <a <?= $phonehtml ?> class="btn-cta-phone fw-bold py-2 px-3 rounded-pill text-decoration-none small">
                                <i class="bi bi-telephone-fill"></i> <?= htmlspecialchars($phone) ?>
                            </a>
                            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn-cta-whatsapp fw-bold py-2 px-3 rounded-pill text-decoration-none small">
                                <i class="bi bi-whatsapp"></i> Chat Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6. Customer Testimonial + FAQ Row (50-50 Split) -->
        <div class="row g-4 mb-5">
            <!-- Left: Verified Reviews Interactive Slider -->
            <div class="col-lg-5">
                <div class="bike-testimonial-card rounded-4 p-4 p-md-5 h-100 border position-relative d-flex flex-column justify-content-between">
                    
                    <!-- Testimonial Slides Container -->
                    <div class="bike-slider-wrapper position-relative flex-grow-1 d-flex flex-column justify-content-center my-2">
                        <!-- Slide 1 -->
                        <div class="bike-review-slide active" data-slide="0">
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4 pb-1">
                                <div class="bike-google-rating-pill d-inline-flex align-items-center gap-2 px-3 py-2 mb-3 rounded-pill bg-white shadow-sm border">
                                    <div class="google-logo-icon flex-shrink-0">
                                        <svg viewBox="0 0 48 48">
                                            <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>
                                            <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
                                            <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/>
                                            <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
                                        </svg>
                                    </div>
                                    <div class="d-flex align-items-center gap-1 text-warning fs-6 lh-1">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <span class="fw-bold text-navy small ms-1 lh-1">5.0 / 5.0</span>
                                </div>
                                <span class="verified-badge small d-inline-flex align-items-center gap-1 mb-3">
                                    <i class="bi bi-patch-check-fill text-success"></i> Verified Relocation
                                </span>
                            </div>
                            <p class="fw-bold text-navy mb-3 fs-5">"Delivered in 100% spotless condition without a single scratch!"</p>
                            <p class="testimonial-quote-text fst-italic mb-3">
                                "I had to shift my Royal Enfield Classic 350 to Bangalore. I was worried about scratches on the chrome tank and mirrors. <?= htmlspecialchars($company3) ?> wrapped the bike with 3 layers of foam and bubble sheet in front of me. Delivered in 4 days right at my doorstep. Superb team and transparent pricing!"
                            </p>
                            <div class="d-flex align-items-center gap-3 pt-3 border-top mt-3">
                                <div class="user-avatar-circle">AS</div>
                                <div>
                                    <strong class="m-0 fw-bold text-navy d-block">Animesh Sengupta</strong>
                                    <span class="small text-muted">Software Engineer &bull; Moved to Bangalore</span>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="bike-review-slide" data-slide="1">
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4 pb-1">
                                <div class="bike-google-rating-pill d-inline-flex align-items-center gap-2 px-3 py-2 mb-3 rounded-pill bg-white shadow-sm border">
                                    <div class="google-logo-icon flex-shrink-0">
                                        <svg viewBox="0 0 48 48">
                                            <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>
                                            <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
                                            <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/>
                                            <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
                                        </svg>
                                    </div>
                                    <div class="d-flex align-items-center gap-1 text-warning fs-6 lh-1">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <span class="fw-bold text-navy small ms-1 lh-1">4.9 / 5.0</span>
                                </div>
                                <span class="verified-badge small d-inline-flex align-items-center gap-1 mb-3">
                                    <i class="bi bi-patch-check-fill text-success"></i> Superbike Move
                                </span>
                            </div>
                            <p class="fw-bold text-navy mb-3 fs-5">"Safe transit for my KTM Duke 390 with covered hydraulic carrier!"</p>
                            <p class="testimonial-quote-text fst-italic mb-3">
                                "Transporting a performance sports bike is always risky, but their team handled it with extreme professionalism. They secured the wheels in hydraulic wheel chocs with nylon safety straps. Received on-time delivery with zero damages. Best vehicle moving experience!"
                            </p>
                            <div class="d-flex align-items-center gap-3 pt-3 border-top mt-3">
                                <div class="user-avatar-circle avatar-orange">RK</div>
                                <div>
                                    <strong class="m-0 fw-bold text-navy d-block">Rahul Karmakar</strong>
                                    <span class="small text-muted">Marketing Lead &bull; Moved to Pune</span>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="bike-review-slide" data-slide="2">
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4 pb-1">
                                <div class="bike-google-rating-pill d-inline-flex align-items-center gap-2 px-3 py-2 mb-3 rounded-pill bg-white shadow-sm border">
                                    <div class="google-logo-icon flex-shrink-0">
                                        <svg viewBox="0 0 48 48">
                                            <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>
                                            <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
                                            <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/>
                                            <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
                                        </svg>
                                    </div>
                                    <div class="d-flex align-items-center gap-1 text-warning fs-6 lh-1">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <span class="fw-bold text-navy small ms-1 lh-1">5.0 / 5.0</span>
                                </div>
                                <span class="verified-badge small d-inline-flex align-items-center gap-1 mb-3">
                                    <i class="bi bi-patch-check-fill text-success"></i> Verified Relocation
                                </span>
                            </div>
                            <p class="fw-bold text-navy mb-3 fs-5">"Smooth door-to-door Activa shifting with timely tracking updates!"</p>
                            <p class="testimonial-quote-text fst-italic mb-3">
                                "Shifted our Honda Activa scooter from Kolkata to Hyderabad. The pickup executive arrived right on scheduled time and prepared the vehicle inspection checklist. Received regular WhatsApp tracking updates. Really transparent and affordable rates!"
                            </p>
                            <div class="d-flex align-items-center gap-3 pt-3 border-top mt-3">
                                <div class="user-avatar-circle avatar-blue">SM</div>
                                <div>
                                    <strong class="m-0 fw-bold text-navy d-block">Soma Mukherjee</strong>
                                    <span class="small text-muted">Bank Executive &bull; Moved to Hyderabad</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide Navigation Controls & Pagination Dots -->
                    <div class="bike-slider-controls d-flex align-items-center justify-content-between pt-3 mt-2 border-top">
                        <!-- Dots -->
                        <div class="bike-slider-dots d-flex align-items-center gap-2" id="bikeReviewDots">
                            <span class="slider-dot active" data-index="0"></span>
                            <span class="slider-dot" data-index="1"></span>
                            <span class="slider-dot" data-index="2"></span>
                        </div>

                        <!-- Prev / Next Arrows -->
                        <div class="bike-slider-arrows d-flex align-items-center gap-2">
                            <button type="button" class="btn-slider-arrow" id="bikeSlidePrev" aria-label="Previous Review">
                                <i class="bi bi-chevron-left"></i>
                            </button>
                            <button type="button" class="btn-slider-arrow" id="bikeSlideNext" aria-label="Next Review">
                                <i class="bi bi-chevron-right"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right: FAQs Accordion -->
            <div class="col-lg-7">
                <div class="bike-faq-card bg-white rounded-4 p-4 p-md-5 h-100 border shadow-sm">
                    <div class="mb-2">
                        <span class="badge-sub-title"><i class="bi bi-question-circle-fill"></i> GOT QUESTIONS?</span>
                    </div>
                    <h3 class="bike-sub-title fw-bold mb-4">Frequently Asked <span class="text-orange">Questions</span></h3>

                    <div class="accordion bike-accordion" id="bikeFaqAccordion">
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="faqHeadOne">
<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqColOne" aria-expanded="true" aria-controls="faqColOne">
                                    <i class="bi bi-question-diamond-fill text-orange me-2"></i> How much does it cost to transport a bike to another city?
                                </button>
</h4>
                            <div id="faqColOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadOne" data-bs-parent="#bikeFaqAccordion">
                                <div class="accordion-body">
                                    The cost generally ranges between ₹2,000 to ₹7,500 depending on the distance, vehicle weight/CC, and packing level. All rates include pickup, premium 3-layer packaging, transit, and home doorstep delivery.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="faqHeadTwo">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqColTwo" aria-expanded="false" aria-controls="faqColTwo">
                                    <i class="bi bi-question-diamond-fill text-orange me-2"></i> Why must I empty the petrol tank before vehicle shipping?
                                </button>
</h4>
                            <div id="faqColTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadTwo" data-bs-parent="#bikeFaqAccordion">
                                <div class="accordion-body">
                                    Under national carrier transport regulations, inflammable liquids are prohibited inside transport containers. We advise keeping under 1 Liter of fuel—just sufficient to drive to the nearest fuel station upon delivery.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="faqHeadThree">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqColThree" aria-expanded="false" aria-controls="faqColThree">
                                    <i class="bi bi-question-diamond-fill text-orange me-2"></i> How do you guarantee zero scratches during transit?
                                </button>
</h4>
                            <div id="faqColThree" class="accordion-collapse collapse" aria-labelledby="faqHeadThree" data-bs-parent="#bikeFaqAccordion">
                                <div class="accordion-body">
                                    We use heavy bubble wrap for glass, mirrors, and dials, followed by thick foam sheets around painted surfaces and the fuel tank. Inside the truck, wheels are anchored in steel chocs and secured with high-tensile safety belts.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h4 class="accordion-header" id="faqHeadFour">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqColFour" aria-expanded="false" aria-controls="faqColFour">
                                    <i class="bi bi-question-diamond-fill text-orange me-2"></i> Is transit insurance available for my two-wheeler?
                                </button>
</h4>
                            <div id="faqColFour" class="accordion-collapse collapse" aria-labelledby="faqHeadFour" data-bs-parent="#bikeFaqAccordion">
                                <div class="accordion-body">
                                    Yes. We provide comprehensive vehicle transit insurance at nominal rates (approx. 1.5% of the vehicle's declared IDV value) to safeguard your vehicle against unforeseen highway hazards or accidental damages.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Testimonial Slider Interaction Script -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.bike-review-slide'), dots = document.querySelectorAll('.slider-dot');
    if (!slides.length) return;
    let cur = 0, timer;
    const show = i => {
        cur = (i + slides.length) % slides.length;
        slides.forEach((s, idx) => s.classList.toggle('active', idx === cur));
        dots.forEach((d, idx) => d.classList.toggle('active', idx === cur));
    };
    const start = () => { clearInterval(timer); timer = setInterval(() => show(cur + 1), 5000); };
    const step = i => () => { show(i); start(); };

    document.getElementById('bikeSlideNext')?.addEventListener('click', () => step(cur + 1)());
    document.getElementById('bikeSlidePrev')?.addEventListener('click', () => step(cur - 1)());
    dots.forEach((dot, i) => dot.addEventListener('click', () => step(i)()));
    start();
});
</script>