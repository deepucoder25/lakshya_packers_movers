<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); 
?>

<!-- Dynamic Hero Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Warehousing & Storage Services',
    'bc_desc' => 'Clean, 24x7 CCTV-monitored, pest-controlled, and insured storage facilities for household goods and commercial merchandise.',
    'breadcrumbs' => [
        ['name' => 'Warehousing & Storage']
    ]
]);
?>

<!-- WAREHOUSING SERVICE DETAILS -->
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
                        <span class="svc-badge-title">SECURE WAREHOUSING &amp; STORAGE</span>
                        <span class="svc-badge-dots" aria-hidden="true">
                            <i></i><i></i><i></i><i></i><i></i>
                        </span>
                    </div>
                    <h2 class="bike-heading-title fw-bolder">
                        Safe Warehousing &amp; Storage Solutions by <span class="text-orange"><?= htmlspecialchars($company3) ?></span>
                    </h2>
                    <div class="bike-gold-divider d-flex align-items-center my-3">
                        <span class="divider-line"></span>
                        <span class="divider-diamond"><i class="bi bi-box-seam-fill"></i></span>
                        <span class="divider-line"></span>
                    </div>
                    <p class="lead-text mb-3">
                        Looking for temporary or long-term storage for your household furniture, appliances, or business inventory? <strong><?= htmlspecialchars($company3) ?></strong> offers certified, climate-protected, and 24x7 secured warehousing facilities across India.
                    </p>
                    <p class="text-muted mb-0">
                        Whether you are traveling overseas, renovating your current residence, waiting for apartment possession, or requiring commercial distribution warehousing, our secure storage facilities provide flexible monthly leases, raised pallet staging, round-the-clock CCTV surveillance, and routine pest management.
                    </p>
                </div>

                <div class="col-lg-5">
                    <div class="bike-banner-wrapper position-relative overflow-hidden rounded-4">
                        <img loading="lazy" src="<?= base_url('assets/img/packing_moving.jpg') ?>" alt="Safe Warehousing & Storage Facilities by <?= htmlspecialchars($company3) ?>" class="img-fluid w-100 bike-featured-img">
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. Four Key Guarantees (Full-Width 4 Columns) -->
        <div class="row g-3 g-md-4 mb-5">
            <div class="col-lg-3 col-sm-6">
                <div class="bike-full-feat-card h-100 p-4 bg-white rounded-4 border shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="full-feat-icon flex-shrink-0"><i class="bi bi-camera-video-fill"></i></div>
                        <h5 class="fw-bold text-navy m-0">24x7 CCTV Surveillance</h5>
                    </div>
                    <p class="small text-muted m-0">Continuous HD camera recording, perimeter alarm systems, and 24x7 stationed security personnel guard every bay.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="bike-full-feat-card h-100 p-4 bg-white rounded-4 border shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="full-feat-icon flex-shrink-0"><i class="bi bi-shield-check"></i></div>
                        <h5 class="fw-bold text-navy m-0">Pest &amp; Moisture Control</h5>
                    </div>
                    <p class="small text-muted m-0">Routine chemical pest treatment, elevated wooden pallets, and moisture absorption packs prevent dampness.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="bike-full-feat-card h-100 p-4 bg-white rounded-4 border shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="full-feat-icon flex-shrink-0"><i class="bi bi-calendar3"></i></div>
                        <h5 class="fw-bold text-navy m-0">Flexible Storage Leases</h5>
                    </div>
                    <p class="small text-muted m-0">Short-term weekly, monthly, or multi-year leases with scalable storage volume based on your dynamic needs.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="bike-full-feat-card h-100 p-4 bg-white rounded-4 border shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="full-feat-icon flex-shrink-0"><i class="bi bi-truck"></i></div>
                        <h5 class="fw-bold text-navy m-0">Doorstep Pickup &amp; Return</h5>
                    </div>
                    <p class="small text-muted m-0">We pack and pick up from your doorstep, store securely, and deliver back whenever you are ready.</p>
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
                <h2 class="bike-heading-title fw-bolder mb-2">How Our Storage <span class="text-orange">Service Works</span></h2>
                <div class="bike-gold-divider d-flex align-items-center justify-content-center my-3">
                    <span class="divider-line"></span>
                    <span class="divider-diamond"><i class="bi bi-gear-wide-connected"></i></span>
                    <span class="divider-line"></span>
                </div>
                <p class="text-muted mx-auto bike-section-desc">
                    A streamlined 4-step process from home doorstep pickup to secure vault warehousing and final delivery.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="bike-step-grid-item h-100 p-4 rounded-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="step-num-bubble flex-shrink-0">01</div>
                            <h5 class="fw-bold text-navy m-0">Doorstep Packing &amp; Audit</h5>
                        </div>
                        <p class="small text-muted m-0">Our professional crew wraps all items in protective stretch film and prepares an itemized barcode inventory list.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bike-step-grid-item h-100 p-4 rounded-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="step-num-bubble flex-shrink-0">02</div>
                            <h5 class="fw-bold text-navy m-0">Palletized Staging</h5>
                        </div>
                        <p class="small text-muted m-0">Transported to our facility and stacked onto raised, moisture-isolated wooden pallets inside dedicated storage racks.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bike-step-grid-item h-100 p-4 rounded-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="step-num-bubble flex-shrink-0">03</div>
                            <h5 class="fw-bold text-navy m-0">Active Maintenance</h5>
                        </div>
                        <p class="small text-muted m-0">Goods remain under 24x7 CCTV surveillance with bi-weekly pest-control inspections and clean, dust-free warehousing.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bike-step-grid-item h-100 p-4 rounded-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="step-num-bubble flex-shrink-0">04</div>
                            <h5 class="fw-bold text-navy m-0">Doorstep Delivery On-Demand</h5>
                        </div>
                        <p class="small text-muted m-0">When your new home or office is ready, notify us 24-48 hours ahead and we will deliver and unpack everything safely.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Packaging Protocol & Document Checklist Row -->
        <div class="row g-4 mb-5">
            <!-- Left: Storage Protection Protocol -->
            <div class="col-lg-6">
                <div class="bike-form-card bg-white rounded-4 p-4 p-md-5 h-100 border shadow-sm d-flex flex-column justify-content-between">
                    <div>
                        <div class="mb-2">
                            <span class="badge-sub-title"><i class="bi bi-shield-lock-fill"></i> LONG-TERM PRESERVATION</span>
                        </div>
                        <h3 class="bike-sub-title fw-bold mb-2">Preservation Protocol <span class="text-orange">for Storage</span></h3>
                        <p class="small text-muted mb-4">How we ensure your stored belongings remain fresh and undamaged over months:</p>

                        <div class="d-flex flex-column gap-3">
                            <div class="p-3 rounded-3 bg-light border">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div class="doc-icon flex-shrink-0"><i class="bi bi-shield-fill-check"></i></div>
                                    <h6 class="fw-bold text-navy m-0">Moisture Barrier &amp; Silica Gel Packs</h6>
                                </div>
                                <p class="small text-muted m-0">Electronics, wooden furniture, and fabrics are wrapped in moisture-resistant film with silica gel packs to prevent fungus and humidity.</p>
                            </div>

                            <div class="p-3 rounded-3 bg-light border">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div class="doc-icon flex-shrink-0"><i class="bi bi-stack"></i></div>
                                    <h6 class="fw-bold text-navy m-0">Elevated Pallet Staging Off Floor</h6>
                                </div>
                                <p class="small text-muted m-0">No item is stored directly on the bare warehouse floor. Everything rests on treated wooden or plastic pallets with generous air clearance.</p>
                            </div>

                            <div class="p-3 rounded-3 bg-light border">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div class="doc-icon flex-shrink-0"><i class="bi bi-upc-scan"></i></div>
                                    <h6 class="fw-bold text-navy m-0">Digital Barcode Tracking System</h6>
                                </div>
                                <p class="small text-muted m-0">Every carton, furniture piece, and appliance is cataloged with a unique barcode linked to your storage account for instantaneous retrieval.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Quick Action -->
                    <div class="mt-4 pt-3 border-top d-flex align-items-center justify-content-between flex-wrap gap-2">
                        <span class="small text-muted"><i class="bi bi-check-circle-fill text-success me-1"></i> Clean, Sanitized &amp; Insured Facility</span>
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
                            <span class="badge-sub-title"><i class="bi bi-clipboard-check"></i> STORAGE POLICY</span>
                        </div>
                        <h3 class="bike-sub-title fw-bold mb-2">Warehouse Storage <span class="text-orange">Guidelines</span></h3>
                        <p class="small text-muted mb-4">Please adhere to these guidelines for safe and compliant warehousing storage:</p>

                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="doc-card p-3 rounded-3 h-100">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="doc-icon"><i class="bi bi-exclamation-octagon-fill"></i></div>
                                        <h6 class="doc-title m-0">No Perishable Items</h6>
                                    </div>
                                    <p class="doc-desc m-0">Perishable food, spices, and groceries are prohibited to prevent pest attraction.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="doc-card p-3 rounded-3 h-100">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="doc-icon"><i class="bi bi-fire"></i></div>
                                        <h6 class="doc-title m-0">Zero Inflammables</h6>
                                    </div>
                                    <p class="doc-desc m-0">Paints, fuels, gas cylinders, and chemicals are strictly barred by fire regulations.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="doc-card p-3 rounded-3 h-100">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="doc-icon"><i class="bi bi-person-badge"></i></div>
                                        <h6 class="doc-title m-0">KYC Documentation</h6>
                                    </div>
                                    <p class="doc-desc m-0">Valid Aadhaar / Passport copy and address proof required for storage agreement.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="doc-card p-3 rounded-3 h-100">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="doc-icon"><i class="bi bi-arrow-repeat"></i></div>
                                        <h6 class="doc-title m-0">24-48 Hr Retrieval</h6>
                                    </div>
                                    <p class="doc-desc m-0">Notify our dispatch desk 24 to 48 hours prior for scheduled doorstep return delivery.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Direct Contact Banner -->
                    <div class="bike-cta-inline p-3 p-md-4 rounded-4 mt-4 d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <div>
                            <h6 class="fw-bold text-white m-0">Need immediate storage space?</h6>
                            <span class="small text-white-50">Custom storage vaults ready for immediate move-in</span>
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
                                    <i class="bi bi-patch-check-fill text-success"></i> 6-Month Household Storage
                                </span>
                            </div>
                            <h5 class="fw-bold text-navy mb-3">"Stored our 2BHK furniture for 6 months while traveling overseas!"</h5>
                            <p class="testimonial-quote-text fst-italic mb-3">
                                "I went on an onsite assignment to Germany for 6 months. <?= htmlspecialchars($company3) ?> packed our 2BHK home, stored everything on raised pallets, and delivered back upon our return without a trace of dust, mold, or smell. Top-notch service!"
                            </p>
                            <div class="d-flex align-items-center gap-3 pt-3 border-top mt-3">
                                <div class="user-avatar-circle">PB</div>
                                <div>
                                    <h6 class="m-0 fw-bold text-navy">Pratik Bhowmik</h6>
                                    <span class="small text-muted">IT Architect &bull; 6 Months Storage</span>
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
                                    <i class="bi bi-patch-check-fill text-success"></i> Home Renovation Storage
                                </span>
                            </div>
                            <h5 class="fw-bold text-navy mb-3">"Saved our furniture from interior renovation plaster and paint dust!"</h5>
                            <p class="testimonial-quote-text fst-italic mb-3">
                                "During our home remodeling, we needed a safe place for 2 months for our heavy wooden beds, sofa, and television. The storage facility was spotless and the barcode tracking made recovery effortless."
                            </p>
                            <div class="d-flex align-items-center gap-3 pt-3 border-top mt-3">
                                <div class="user-avatar-circle avatar-orange">GS</div>
                                <div>
                                    <h6 class="m-0 fw-bold text-navy">Gaurav Saxena</h6>
                                    <span class="small text-muted">Interior Designer &bull; 2 Months Storage</span>
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
                                    <i class="bi bi-patch-check-fill text-success"></i> E-Commerce Inventory
                                </span>
                            </div>
                            <h5 class="fw-bold text-navy mb-3">"Very cost-effective pallet storage for our seasonal stock!"</h5>
                            <p class="testimonial-quote-text fst-italic mb-3">
                                "We run an online retail store and needed overflow storage during festive peak seasons. The warehouse is well-managed, dry, and CCTV-secured. Highly recommend their commercial storage solutions."
                            </p>
                            <div class="d-flex align-items-center gap-3 pt-3 border-top mt-3">
                                <div class="user-avatar-circle avatar-blue">RM</div>
                                <div>
                                    <h6 class="m-0 fw-bold text-navy">Rajeev Mehta</h6>
                                    <span class="small text-muted">Merchant &bull; Commercial Warehousing</span>
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
                                    <i class="bi bi-question-diamond-fill text-orange me-2"></i> What is the minimum duration I can rent warehouse storage?
                                </button>
                            </h2>
                            <div id="faqColOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadOne" data-bs-parent="#bikeFaqAccordion">
                                <div class="accordion-body">
                                    Our flexible storage plans start with a minimum duration of just 15 days to 1 month. You can easily extend your lease on a month-to-month basis or opt for 3, 6, or 12-month plans for higher cost savings.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqColTwo" aria-expanded="false" aria-controls="faqColTwo">
                                    <i class="bi bi-question-diamond-fill text-orange me-2"></i> How do you protect stored goods from pests and moisture?
                                </button>
                            </h2>
                            <div id="faqColTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadTwo" data-bs-parent="#bikeFaqAccordion">
                                <div class="accordion-body">
                                    All items are sealed in moisture-barrier stretch wrap, packed with silica gel packets, and elevated above the ground on treated wooden or plastic pallets. The entire warehouse undergoes scheduled professional chemical pest and rodent control treatments.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqColThree" aria-expanded="false" aria-controls="faqColThree">
                                    <i class="bi bi-question-diamond-fill text-orange me-2"></i> Can I retrieve only specific boxes or items during the storage period?
                                </button>
                            </h2>
                            <div id="faqColThree" class="accordion-collapse collapse" aria-labelledby="faqHeadThree" data-bs-parent="#bikeFaqAccordion">
                                <div class="accordion-body">
                                    Yes! Because every box and package is labeled with unique barcode tags and item descriptions on your initial inventory list, you can request retrieval of specific items or boxes with prior 24-hour notice.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqColFour" aria-expanded="false" aria-controls="faqColFour">
                                    <i class="bi bi-question-diamond-fill text-orange me-2"></i> Is transit and warehouse storage insurance included?
                                </button>
                            </h2>
                            <div id="faqColFour" class="accordion-collapse collapse" aria-labelledby="faqHeadFour" data-bs-parent="#bikeFaqAccordion">
                                <div class="accordion-body">
                                    Our facility maintains comprehensive commercial property insurance against fire, flooding, and natural hazards. We also offer declared-value transit and storage risk insurance policies for individual consignments at standard nominal rates.
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
