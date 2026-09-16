<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); 
?>

<!-- Dynamic Hero Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Car Transportation Services',
    'bc_desc' => 'Door-to-door, scratch-free four-wheeler and car relocation across India with specialized closed carriers & transit insurance.',
    'breadcrumbs' => [
        ['name' => 'Car Transportation']
    ]
]);
?>

<!-- CAR SERVICE DETAILS -->
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
                        <span class="svc-badge-title">CAR CARRIER RELOCATION</span>
                        <span class="svc-badge-dots" aria-hidden="true">
                            <i></i><i></i><i></i><i></i><i></i>
                        </span>
                    </div>
                    <h2 class="bike-heading-title fw-bolder">
                        Door-to-Door Car Transportation Services by <span class="text-orange"><?= htmlspecialchars($company3) ?></span>
                    </h2>
                    <div class="bike-gold-divider d-flex align-items-center my-3">
                        <span class="divider-line"></span>
                        <span class="divider-diamond"><i class="bi bi-car-front-fill"></i></span>
                        <span class="divider-line"></span>
                    </div>
                    <p class="lead-text mb-3">
                        Planning to shift to another city and searching for a certified, reliable car transport partner? <strong><?= htmlspecialchars($company3) ?></strong> offers premier, scratch-free, and punctual car carrier relocation services nationwide.
                    </p>
                    <p class="text-muted mb-0">
                        From compact hatchbacks and executive sedans to rugged SUVs and luxury European vehicles, our experienced auto-movers handle every car with white-glove precision. We transport vehicles via specialized enclosed car carriers outfitted with low-angle hydraulic ramps, safety wheel chocs, and GPS navigation.
                    </p>
                </div>

                <div class="col-lg-5">
                    <div class="bike-banner-wrapper position-relative overflow-hidden rounded-4">
                        <img loading="lazy" src="<?= base_url('assets/img/car_transpot.jpg') ?>" alt="Safe Car Transportation Carrier by <?= htmlspecialchars($company3) ?>" class="img-fluid w-100 bike-featured-img">
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
                        <h5 class="fw-bold text-navy m-0">Enclosed Car Carriers</h5>
                    </div>
                    <p class="small text-muted m-0">Covered containerized auto-carrier trucks that completely shield your vehicle from highway weather, dust, and gravel.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="bike-full-feat-card h-100 p-4 bg-white rounded-4 border shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="full-feat-icon flex-shrink-0"><i class="bi bi-truck"></i></div>
                        <h5 class="fw-bold text-navy m-0">Wheel Choc Anchoring</h5>
                    </div>
                    <p class="small text-muted m-0">Heavy-duty wheel locking clamps and high-strength nylon ratchet straps prevent vehicle movement or suspension strain.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="bike-full-feat-card h-100 p-4 bg-white rounded-4 border shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="full-feat-icon flex-shrink-0"><i class="bi bi-file-earmark-lock-fill"></i></div>
                        <h5 class="fw-bold text-navy m-0">Transit Insurance Cover</h5>
                    </div>
                    <p class="small text-muted m-0">Comprehensive vehicle transit insurance against road perils, accidents, or force majeure events during highway transit.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="bike-full-feat-card h-100 p-4 bg-white rounded-4 border shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="full-feat-icon flex-shrink-0"><i class="bi bi-geo-alt-fill"></i></div>
                        <h5 class="fw-bold text-navy m-0">Door-to-Door Delivery</h5>
                    </div>
                    <p class="small text-muted m-0">Punctual doorstep pickup from your current residence and direct, scratch-free handover at your destination address.</p>
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
                <h2 class="bike-heading-title fw-bolder mb-2">How We Relocate <span class="text-orange">Your Car</span></h2>
                <div class="bike-gold-divider d-flex align-items-center justify-content-center my-3">
                    <span class="divider-line"></span>
                    <span class="divider-diamond"><i class="bi bi-gear-wide-connected"></i></span>
                    <span class="divider-line"></span>
                </div>
                <p class="text-muted mx-auto bike-section-desc">
                    Our vehicle shipping protocol adheres strictly to certified IBA auto-relocation guidelines ensuring zero scratches and timely transit.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="bike-step-grid-item h-100 p-4 rounded-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="step-num-bubble flex-shrink-0">01</div>
                            <h5 class="fw-bold text-navy m-0">Pre-Shipment Inspection</h5>
                        </div>
                        <p class="small text-muted m-0">Joint exterior inspection, odometer recording, fuel level check, and signing of the official vehicle condition worksheet.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bike-step-grid-item h-100 p-4 rounded-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="step-num-bubble flex-shrink-0">02</div>
                            <h5 class="fw-bold text-navy m-0">Protective Preparation</h5>
                        </div>
                        <p class="small text-muted m-0">Side mirrors folded and cushioned, antennas retracted, bumper corners protected, and interior seat covers installed.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bike-step-grid-item h-100 p-4 rounded-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="step-num-bubble flex-shrink-0">03</div>
                            <h5 class="fw-bold text-navy m-0">Hydraulic Ramp Loading</h5>
                        </div>
                        <p class="small text-muted m-0">Driven smoothly onto covered carriers with low-incline ramps, locked in heavy steel chocs, and tethered by nylon straps.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bike-step-grid-item h-100 p-4 rounded-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="step-num-bubble flex-shrink-0">04</div>
                            <h5 class="fw-bold text-navy m-0">Destination Handover</h5>
                        </div>
                        <p class="small text-muted m-0">Unloaded right at your doorstep, verified against the initial condition report, and handed over with keys and documentation.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Vehicle Protection Protocol & Document Checklist Row -->
        <div class="row g-4 mb-5">
            <!-- Left: Car Protection & Loading Protocol -->
            <div class="col-lg-6">
                <div class="bike-form-card bg-white rounded-4 p-4 p-md-5 h-100 border shadow-sm d-flex flex-column justify-content-between">
                    <div>
                        <div class="mb-2">
                            <span class="badge-sub-title"><i class="bi bi-shield-lock-fill"></i> SAFETY ASSURANCE</span>
                        </div>
                        <h3 class="bike-sub-title fw-bold mb-2">How We Protect <span class="text-orange">Your Automobile</span></h3>
                        <p class="small text-muted mb-4">Every car undergoes an IBA-certified vehicle relocation and securing procedure:</p>

                        <div class="d-flex flex-column gap-3">
                            <div class="p-3 rounded-3 bg-light border">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div class="doc-icon flex-shrink-0"><i class="bi bi-shield-check"></i></div>
                                    <h6 class="fw-bold text-navy m-0">Step 1: Scratch-Guard Bumper &amp; Mirror Wrapping</h6>
                                </div>
                                <p class="small text-muted m-0">External mirrors are folded and bubble wrapped. Exposed bumper edges, door handles, and lights receive protective scratch-guard film.</p>
                            </div>

                            <div class="p-3 rounded-3 bg-light border">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div class="doc-icon flex-shrink-0"><i class="bi bi-disc-fill"></i></div>
                                    <h6 class="fw-bold text-navy m-0">Step 2: Wheel Choc Lock &amp; Safety Harnessing</h6>
                                </div>
                                <p class="small text-muted m-0">All 4 wheels are clamped with contour-fitting steel chocs and fastened to the truck floor using industrial nylon ratchet straps.</p>
                            </div>

                            <div class="p-3 rounded-3 bg-light border">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div class="doc-icon flex-shrink-0"><i class="bi bi-truck-front-fill"></i></div>
                                    <h6 class="fw-bold text-navy m-0">Step 3: Enclosed Weatherproof Carrier Enclosure</h6>
                                </div>
                                <p class="small text-muted m-0">Housed inside fully enclosed multi-car or single-car container carriers, shielding your vehicle from dust, road debris, and heavy rains.</p>
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
                        <h3 class="bike-sub-title fw-bold mb-2">Required Documents <span class="text-orange">for Car Transit</span></h3>
                        <p class="small text-muted mb-4">Prepare these mandatory documents for regional transport checkposts and highway clearances:</p>

                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="doc-card p-3 rounded-3 h-100">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="doc-icon"><i class="bi bi-card-text"></i></div>
                                        <h6 class="doc-title m-0">Vehicle RC Copy</h6>
                                    </div>
                                    <p class="doc-desc m-0">Clear photocopy or DigiLocker verified copy of the Car Registration Certificate.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="doc-card p-3 rounded-3 h-100">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="doc-icon"><i class="bi bi-shield-check"></i></div>
                                        <h6 class="doc-title m-0">Valid Car Insurance</h6>
                                    </div>
                                    <p class="doc-desc m-0">Copy of comprehensive car insurance policy to certify roadworthiness.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="doc-card p-3 rounded-3 h-100">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="doc-icon"><i class="bi bi-person-vcard"></i></div>
                                        <h6 class="doc-title m-0">Owner ID Proof</h6>
                                    </div>
                                    <p class="doc-desc m-0">Aadhaar Card, Passport, or PAN card copy of the vehicle owner or sender.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="doc-card p-3 rounded-3 h-100">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="doc-icon"><i class="bi bi-fuel-pump"></i></div>
                                        <h6 class="doc-title m-0">10-15 Liters Fuel</h6>
                                    </div>
                                    <p class="doc-desc m-0">Keep approximately 10-15 Liters of fuel for ramp loading and destination delivery driving.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Direct Contact Banner -->
                    <div class="bike-cta-inline p-3 p-md-4 rounded-4 mt-4 d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <div>
                            <h6 class="fw-bold text-white m-0">Need express car transport support?</h6>
                            <span class="small text-white-50">Our auto logistics team is available 24x7</span>
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
                                    <i class="bi bi-patch-check-fill text-success"></i> Verified Car Move
                                </span>
                            </div>
                            <h5 class="fw-bold text-navy mb-3">"Flawless interstate transport for my Hyundai Creta!"</h5>
                            <p class="testimonial-quote-text fst-italic mb-3">
                                "Transported my Hyundai Creta from Kolkata to Delhi. I was anxious about potential dents, but <?= htmlspecialchars($company3) ?> sent a closed carrier. The car arrived right on the 4th day spotless with the exact odometer reading. Outstanding service!"
                            </p>
                            <div class="d-flex align-items-center gap-3 pt-3 border-top mt-3">
                                <div class="user-avatar-circle">VK</div>
                                <div>
                                    <h6 class="m-0 fw-bold text-navy">Vikramaditya Kashyap</h6>
                                    <span class="small text-muted">IT Director &bull; Moved to Delhi NCR</span>
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
                                    <i class="bi bi-patch-check-fill text-success"></i> Sedan Relocation
                                </span>
                            </div>
                            <h5 class="fw-bold text-navy mb-3">"Zero hassles, complete door-to-door car shifting!"</h5>
                            <p class="testimonial-quote-text fst-italic mb-3">
                                "Shipped my Honda City from Bhubaneswar to Mumbai. From the initial inspection report to destination delivery, everything was transparent. The driver loaded the car using gentle hydraulic ramps. Highly recommend their car moving services!"
                            </p>
                            <div class="d-flex align-items-center gap-3 pt-3 border-top mt-3">
                                <div class="user-avatar-circle avatar-orange">PM</div>
                                <div>
                                    <h6 class="m-0 fw-bold text-navy">Priyabrata Mishra</h6>
                                    <span class="small text-muted">Corporate Manager &bull; Moved to Mumbai</span>
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
                                    <i class="bi bi-patch-check-fill text-success"></i> SUV Shipping
                                </span>
                            </div>
                            <h5 class="fw-bold text-navy mb-3">"Handled my Mahindra Thar with immense care!"</h5>
                            <p class="testimonial-quote-text fst-italic mb-3">
                                "The team was punctual, verified all documentation, strapped down the wheels securely inside the container, and shared live location milestones. Received delivery right at my society gate without a speck of highway dirt."
                            </p>
                            <div class="d-flex align-items-center gap-3 pt-3 border-top mt-3">
                                <div class="user-avatar-circle avatar-blue">RS</div>
                                <div>
                                    <h6 class="m-0 fw-bold text-navy">Rohan Sharma</h6>
                                    <span class="small text-muted">Consultant &bull; Moved to Pune</span>
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
                                    <i class="bi bi-question-diamond-fill text-orange me-2"></i> How is my car transported to another city?
                                </button>
                            </h2>
                            <div id="faqColOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadOne" data-bs-parent="#bikeFaqAccordion">
                                <div class="accordion-body">
                                    We transport vehicles inside specially designed, covered car carrier container trucks. Your car is safely driven onto the carrier via low-gradient hydraulic ramps, locked in place with wheel chocs, and lashed with heavy-duty safety belts to ensure complete stability throughout transit.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqColTwo" aria-expanded="false" aria-controls="faqColTwo">
                                    <i class="bi bi-question-diamond-fill text-orange me-2"></i> How much fuel should I leave in the car tank?
                                </button>
                            </h2>
                            <div id="faqColTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadTwo" data-bs-parent="#bikeFaqAccordion">
                                <div class="accordion-body">
                                    We recommend keeping around 10 to 15 Liters of fuel (about 1/4th tank). This is adequate for loading onto ramps, offloading at destination, and driving to the nearest fueling station upon arrival, while complying with highway fire safety regulations.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqColThree" aria-expanded="false" aria-controls="faqColThree">
                                    <i class="bi bi-question-diamond-fill text-orange me-2"></i> Can I leave personal items or luggage inside the car?
                                </button>
                            </h2>
                            <div id="faqColThree" class="accordion-collapse collapse" aria-labelledby="faqHeadThree" data-bs-parent="#bikeFaqAccordion">
                                <div class="accordion-body">
                                    Small personal items or locked luggage in the boot trunk are permitted; however, valuables such as jewelry, cash, electronics, or hazardous chemicals are strictly prohibited as transit insurance covers only the automobile itself.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqColFour" aria-expanded="false" aria-controls="faqColFour">
                                    <i class="bi bi-question-diamond-fill text-orange me-2"></i> Is transit insurance included for car shifting?
                                </button>
                            </h2>
                            <div id="faqColFour" class="accordion-collapse collapse" aria-labelledby="faqHeadFour" data-bs-parent="#bikeFaqAccordion">
                                <div class="accordion-body">
                                    Yes, comprehensive all-risk transit insurance is provided based on the car's current Insured Declared Value (IDV). This covers unforeseen road accidents, natural calamities, or transit damages with swift claim assistance.
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
