<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); 
?>

<!-- Dynamic Hero Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Fast & Affordable Local Shifting',
    'bc_desc' => 'Same-day household and commercial local moving across town with skilled handlers, premium packing, and zero hidden costs.',
    'breadcrumbs' => [
        ['name' => 'Local Shifting']
    ]
]);
?>

<!-- LOCAL SHIFTING SERVICE DETAILS -->
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
                        <span class="svc-badge-title">SAME-DAY LOCAL CITY SHIFTING</span>
                        <span class="svc-badge-dots" aria-hidden="true">
                            <i></i><i></i><i></i><i></i><i></i>
                        </span>
                    </div>
                    <h2 class="bike-heading-title fw-bolder">
                        Fast &amp; Reliable Local Shifting by <span class="text-orange"><?= htmlspecialchars($company3) ?></span>
                    </h2>
                    <div class="bike-gold-divider d-flex align-items-center my-3">
                        <span class="divider-line"></span>
                        <span class="divider-diamond"><i class="bi bi-geo-alt-fill"></i></span>
                        <span class="divider-line"></span>
                    </div>
                    <p class="lead-text mb-3">
                        Moving to a new apartment or villa within the city? <strong><?= htmlspecialchars($company3) ?></strong> provides swift, affordable, and seamless same-day local relocation solutions.
                    </p>
                    <p class="text-muted mb-0">
                        Even within the same neighborhood, shifting heavy furniture, electronics, and delicate glassware can be exhausting and risky without professional hands. Our local moving crew handles everything—from morning dismantling and packing to afternoon loading, transit, and evening setup in your new home.
                    </p>
                </div>

                <div class="col-lg-5">
                    <div class="bike-banner-wrapper position-relative overflow-hidden rounded-4">
                        <img loading="lazy" src="<?= base_url('assets/img/local_shifting.jpg') ?>" alt="Swift Local Shifting Services by <?= htmlspecialchars($company3) ?>" class="img-fluid w-100 bike-featured-img">
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. Four Key Guarantees (Full-Width 4 Columns) -->
        <div class="row g-3 g-md-4 mb-5">
            <div class="col-lg-3 col-sm-6">
                <div class="bike-full-feat-card h-100 p-4 bg-white rounded-4 border shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="full-feat-icon flex-shrink-0"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5 class="fw-bold text-navy m-0">Same-Day Completion</h5>
                    </div>
                    <p class="small text-muted m-0">Entire shifting cycle completed within 4 to 8 hours without disrupting your busy work schedule.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="bike-full-feat-card h-100 p-4 bg-white rounded-4 border shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="full-feat-icon flex-shrink-0"><i class="bi bi-truck"></i></div>
                        <h5 class="fw-bold text-navy m-0">Right-Sized City Trucks</h5>
                    </div>
                    <p class="small text-muted m-0">Dedicated fleet of Tata Ace, Bolero Maxi, and 14ft container trucks permitted for city daytime navigation.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="bike-full-feat-card h-100 p-4 bg-white rounded-4 border shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="full-feat-icon flex-shrink-0"><i class="bi bi-shield-check"></i></div>
                        <h5 class="fw-bold text-navy m-0">Zero Scratch Assurance</h5>
                    </div>
                    <p class="small text-muted m-0">Protective moving blankets and multi-layer bubble wrap guard furniture corners against tight hallways and lifts.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="bike-full-feat-card h-100 p-4 bg-white rounded-4 border shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="full-feat-icon flex-shrink-0"><i class="bi bi-tag-fill"></i></div>
                        <h5 class="fw-bold text-navy m-0">Transparent Pricing</h5>
                    </div>
                    <p class="small text-muted m-0">Fixed all-inclusive quotes with no surprise floor climbing or weekend surcharges at the end of the move.</p>
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
                <h2 class="bike-heading-title fw-bolder mb-2">How We Handle <span class="text-orange">Local Shifting</span></h2>
                <div class="bike-gold-divider d-flex align-items-center justify-content-center my-3">
                    <span class="divider-line"></span>
                    <span class="divider-diamond"><i class="bi bi-gear-wide-connected"></i></span>
                    <span class="divider-line"></span>
                </div>
                <p class="text-muted mx-auto bike-section-desc">
                    Our quick 4-step local relocation protocol ensures you can sleep in your new home on the very same night.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="bike-step-grid-item h-100 p-4 rounded-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="step-num-bubble flex-shrink-0">01</div>
                            <h5 class="fw-bold text-navy m-0">Slot Booking</h5>
                        </div>
                        <p class="small text-muted m-0">Book your preferred moving day and morning slot. We confirm the ideal vehicle size and crew strength instantly.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bike-step-grid-item h-100 p-4 rounded-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="step-num-bubble flex-shrink-0">02</div>
                            <h5 class="fw-bold text-navy m-0">Rapid Safe Packing</h5>
                        </div>
                        <p class="small text-muted m-0">Our crew packs your electronics, fragile decor, kitchenware, and furniture with specialized blankets and bubble wraps.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bike-step-grid-item h-100 p-4 rounded-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="step-num-bubble flex-shrink-0">03</div>
                            <h5 class="fw-bold text-navy m-0">Smooth City Transit</h5>
                        </div>
                        <p class="small text-muted m-0">Loaded into closed vehicles and navigated directly to your new home, avoiding traffic choke-points.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bike-step-grid-item h-100 p-4 rounded-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="step-num-bubble flex-shrink-0">04</div>
                            <h5 class="fw-bold text-navy m-0">Unloading &amp; Placement</h5>
                        </div>
                        <p class="small text-muted m-0">Items are unloaded into your designated rooms, big furniture reassembled, and packing materials cleared.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Packaging Protocol & Document Checklist Row -->
        <div class="row g-4 mb-5">
            <!-- Left: Local Shifting Packing Protocol -->
            <div class="col-lg-6">
                <div class="bike-form-card bg-white rounded-4 p-4 p-md-5 h-100 border shadow-sm d-flex flex-column justify-content-between">
                    <div>
                        <div class="mb-2">
                            <span class="badge-sub-title"><i class="bi bi-shield-lock-fill"></i> SMART CITY PACKING</span>
                        </div>
                        <h3 class="bike-sub-title fw-bold mb-2">Efficient &amp; Safe <span class="text-orange">Packing Standards</span></h3>
                        <p class="small text-muted mb-4">Fast yet rigorous packing protocols designed specifically for swift intra-city moving:</p>

                        <div class="d-flex flex-column gap-3">
                            <div class="p-3 rounded-3 bg-light border">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div class="doc-icon flex-shrink-0"><i class="bi bi-layers-fill"></i></div>
                                    <h6 class="fw-bold text-navy m-0">Moving Blankets for Furniture</h6>
                                </div>
                                <p class="small text-muted m-0">Quilted heavy fabric blankets wrapped around polished wooden surfaces, dining tables, and refrigerators preventing doorway friction.</p>
                            </div>

                            <div class="p-3 rounded-3 bg-light border">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div class="doc-icon flex-shrink-0"><i class="bi bi-film"></i></div>
                                    <h6 class="fw-bold text-navy m-0">Mattress &amp; Fabric Stretch Wrap</h6>
                                </div>
                                <p class="small text-muted m-0">Clean transparent stretch film wrapped over mattresses, upholstered sofa sets, and curtains to keep them spotless during transit.</p>
                            </div>

                            <div class="p-3 rounded-3 bg-light border">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div class="doc-icon flex-shrink-0"><i class="bi bi-box-seam-fill"></i></div>
                                    <h6 class="fw-bold text-navy m-0">Sturdy Cartons for Breakables</h6>
                                </div>
                                <p class="small text-muted m-0">Double-walled carton boxes with bubble wrap for kitchen plates, mugs, picture frames, and small countertop appliances.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Quick Action -->
                    <div class="mt-4 pt-3 border-top d-flex align-items-center justify-content-between flex-wrap gap-2">
                        <span class="small text-muted"><i class="bi bi-check-circle-fill text-success me-1"></i> Swift Same-Day Delivery</span>
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
                            <span class="badge-sub-title"><i class="bi bi-clock-history"></i> QUICK PREPARATION</span>
                        </div>
                        <h3 class="bike-sub-title fw-bold mb-2">Moving Day <span class="text-orange">Checklist</span></h3>
                        <p class="small text-muted mb-4">A few simple preparations to ensure an effortless, lightning-fast local shift:</p>

                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="doc-card p-3 rounded-3 h-100">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="doc-icon"><i class="bi bi-building"></i></div>
                                        <h6 class="doc-title m-0">Reserve Service Lift</h6>
                                    </div>
                                    <p class="doc-desc m-0">Inform society security in advance to block the service elevator for faster loading.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="doc-card p-3 rounded-3 h-100">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="doc-icon"><i class="bi bi-p-square-fill"></i></div>
                                        <h6 class="doc-title m-0">Clear Parking Spot</h6>
                                    </div>
                                    <p class="doc-desc m-0">Ensure adequate parking near the building entrance for our moving truck.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="doc-card p-3 rounded-3 h-100">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="doc-icon"><i class="bi bi-cash-stack"></i></div>
                                        <h6 class="doc-title m-0">Keep Valuables Safe</h6>
                                    </div>
                                    <p class="doc-desc m-0">Carry cash, jewelry, and laptop bags personally in your personal vehicle.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="doc-card p-3 rounded-3 h-100">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="doc-icon"><i class="bi bi-power"></i></div>
                                        <h6 class="doc-title m-0">Unplug Electronics</h6>
                                    </div>
                                    <p class="doc-desc m-0">Disconnect Wi-Fi router, TV cables, and defrost refrigerator ahead of time.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Direct Contact Banner -->
                    <div class="bike-cta-inline p-3 p-md-4 rounded-4 mt-4 d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <div>
                            <h6 class="fw-bold text-white m-0">Planning a quick local shift today?</h6>
                            <span class="small text-white-50">Instant quotes &amp; same-day slots available</span>
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
                                    <i class="bi bi-patch-check-fill text-success"></i> Same-Day 2 BHK Move
                                </span>
                            </div>
                            <h5 class="fw-bold text-navy mb-3">"Shifted our 2BHK in just 5 hours without breaking a sweat!"</h5>
                            <p class="testimonial-quote-text fst-italic mb-3">
                                "The packers arrived at 9 AM sharp with all boxes, tape, and blankets. By 2 PM, everything was unloaded and set up in our new apartment. Super fast, friendly staff, and strictly adhered to the quoted price."
                            </p>
                            <div class="d-flex align-items-center gap-3 pt-3 border-top mt-3">
                                <div class="user-avatar-circle">AD</div>
                                <div>
                                    <h6 class="m-0 fw-bold text-navy">Ananya Das</h6>
                                    <span class="small text-muted">Content Lead &bull; City Relocation</span>
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
                                    <i class="bi bi-patch-check-fill text-success"></i> 1 BHK Local Move
                                </span>
                            </div>
                            <h5 class="fw-bold text-navy mb-3">"Very polite crew and took immense care of our washing machine!"</h5>
                            <p class="testimonial-quote-text fst-italic mb-3">
                                "Moved 12 km across town. The crew had moving blankets and wrapped the washing machine and refrigerator properly so no scratches occurred. Very smooth coordination by <?= htmlspecialchars($company3) ?>."
                            </p>
                            <div class="d-flex align-items-center gap-3 pt-3 border-top mt-3">
                                <div class="user-avatar-circle avatar-orange">TN</div>
                                <div>
                                    <h6 class="m-0 fw-bold text-navy">Tanmay Nayak</h6>
                                    <span class="small text-muted">Civil Engineer &bull; Intra-City Shifting</span>
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
                                    <i class="bi bi-patch-check-fill text-success"></i> 3 BHK Apartment
                                </span>
                            </div>
                            <h5 class="fw-bold text-navy mb-3">"Flawless dismantling and reassembly of all beds!"</h5>
                            <p class="testimonial-quote-text fst-italic mb-3">
                                "Their carpenter dismantled our hydraulic storage bed and wall-mounted TV smoothly. At the new home, everything was fitted back exactly as it was. Great teamwork and highly recommended for local shifting!"
                            </p>
                            <div class="d-flex align-items-center gap-3 pt-3 border-top mt-3">
                                <div class="user-avatar-circle avatar-blue">SP</div>
                                <div>
                                    <h6 class="m-0 fw-bold text-navy">Sanjay Patel</h6>
                                    <span class="small text-muted">Executive &bull; Local Shifting</span>
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
                            <h2 class="accordion-header" id="faqHeadOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqColOne" aria-expanded="true" aria-controls="faqColOne">
                                    <i class="bi bi-question-diamond-fill text-orange me-2"></i> How long does a typical local shifting process take?
                                </button>
                            </h2>
                            <div id="faqColOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadOne" data-bs-parent="#bikeFaqAccordion">
                                <div class="accordion-body">
                                    For a standard 1 BHK or 2 BHK apartment, the entire move takes roughly 4 to 6 hours from arrival to final placement. For larger 3-4 BHK homes or villas, it typically takes 6 to 9 hours, always completed within the same day.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqColTwo" aria-expanded="false" aria-controls="faqColTwo">
                                    <i class="bi bi-question-diamond-fill text-orange me-2"></i> Can you shift on weekends or public holidays?
                                </button>
                            </h2>
                            <div id="faqColTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadTwo" data-bs-parent="#bikeFaqAccordion">
                                <div class="accordion-body">
                                    Yes, we operate 7 days a week, including weekends and public holidays. Since weekends are popular for moving, we recommend booking your slot 3-4 days in advance to reserve your preferred morning timing.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqColThree" aria-expanded="false" aria-controls="faqColThree">
                                    <i class="bi bi-question-diamond-fill text-orange me-2"></i> Are packing boxes included in the local shifting price?
                                </button>
                            </h2>
                            <div id="faqColThree" class="accordion-collapse collapse" aria-labelledby="faqHeadThree" data-bs-parent="#bikeFaqAccordion">
                                <div class="accordion-body">
                                    Yes, all necessary packing supplies including heavy-duty cartons, bubble wrap, tapes, stretch film, and moving blankets are covered in our comprehensive quotation.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqColFour" aria-expanded="false" aria-controls="faqColFour">
                                    <i class="bi bi-question-diamond-fill text-orange me-2"></i> What if my society building does not have an elevator?
                                </button>
                            </h2>
                            <div id="faqColFour" class="accordion-collapse collapse" aria-labelledby="faqHeadFour" data-bs-parent="#bikeFaqAccordion">
                                <div class="accordion-body">
                                    Our team is trained in manual stair carry. Please notify us during the quotation stage about the floor level and absence of a service elevator so we can deploy extra helpers for effortless, safe carrying.
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
