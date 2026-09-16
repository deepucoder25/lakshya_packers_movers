<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); 
?>

<!-- Dynamic Hero Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Corporate & Office Relocation',
    'bc_desc' => 'Zero-downtime office shifting, IT infrastructure relocation, and modular furniture setup with minimal business disruption.',
    'breadcrumbs' => [
        ['name' => 'Office Relocation']
    ]
]);
?>

<!-- OFFICE RELOCATION SERVICE DETAILS -->
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
                        <span class="svc-badge-title">CORPORATE &amp; COMMERCIAL RELOCATION</span>
                        <span class="svc-badge-dots" aria-hidden="true">
                            <i></i><i></i><i></i><i></i><i></i>
                        </span>
                    </div>
                    <h2 class="bike-heading-title fw-bolder">
                        Seamless Office Relocation Services by <span class="text-orange"><?= htmlspecialchars($company3) ?></span>
                    </h2>
                    <div class="bike-gold-divider d-flex align-items-center my-3">
                        <span class="divider-line"></span>
                        <span class="divider-diamond"><i class="bi bi-building"></i></span>
                        <span class="divider-line"></span>
                    </div>
                    <p class="lead-text mb-3">
                        Relocating your corporate office or business facility? <strong><?= htmlspecialchars($company3) ?></strong> delivers turnkey, structured corporate moving services planned around your operational schedule.
                    </p>
                    <p class="text-muted mb-0">
                        We understand that business downtime means lost revenue. That's why our certified commercial moving teams execute weekend and overnight relocations. We specialize in anti-static IT server moves, modular cubicle dismantling and reassembly, confidential records handling, and executive cabin setup.
                    </p>
                </div>

                <div class="col-lg-5">
                    <div class="bike-banner-wrapper position-relative overflow-hidden rounded-4">
                        <img loading="lazy" src="<?= base_url('assets/img/packing_moving.jpg') ?>" alt="Corporate Office Relocation by <?= htmlspecialchars($company3) ?>" class="img-fluid w-100 bike-featured-img">
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. Four Key Guarantees (Full-Width 4 Columns) -->
        <div class="row g-3 g-md-4 mb-5">
            <div class="col-lg-3 col-sm-6">
                <div class="bike-full-feat-card h-100 p-4 bg-white rounded-4 border shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="full-feat-icon flex-shrink-0"><i class="bi bi-clock-history"></i></div>
                        <h5 class="fw-bold text-navy m-0">Zero Downtime</h5>
                    </div>
                    <p class="small text-muted m-0">Weekend, Friday night, and holiday schedules ensuring your team starts working seamlessly by Monday morning.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="bike-full-feat-card h-100 p-4 bg-white rounded-4 border shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="full-feat-icon flex-shrink-0"><i class="bi bi-cpu-fill"></i></div>
                        <h5 class="fw-bold text-navy m-0">IT &amp; Server Care</h5>
                    </div>
                    <p class="small text-muted m-0">Anti-static bubble wrap and foam-cushioned crates for servers, networking equipment, monitors, and CPUs.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="bike-full-feat-card h-100 p-4 bg-white rounded-4 border shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="full-feat-icon flex-shrink-0"><i class="bi bi-grid-3x3-gap-fill"></i></div>
                        <h5 class="fw-bold text-navy m-0">Modular Furniture Setup</h5>
                    </div>
                    <p class="small text-muted m-0">Expert dismantling and precision reassembly of workstations, conference tables, executive cabins, and partitions.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="bike-full-feat-card h-100 p-4 bg-white rounded-4 border shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="full-feat-icon flex-shrink-0"><i class="bi bi-shield-lock-fill"></i></div>
                        <h5 class="fw-bold text-navy m-0">Confidential Security</h5>
                    </div>
                    <p class="small text-muted m-0">Color-coded, numbered security crates for sensitive corporate files, financial archives, and legal documentation.</p>
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
                <h2 class="bike-heading-title fw-bolder mb-2">Our Structured <span class="text-orange">Office Move Process</span></h2>
                <div class="bike-gold-divider d-flex align-items-center justify-content-center my-3">
                    <span class="divider-line"></span>
                    <span class="divider-diamond"><i class="bi bi-gear-wide-connected"></i></span>
                    <span class="divider-line"></span>
                </div>
                <p class="text-muted mx-auto bike-section-desc">
                    A rigorous 4-phase corporate moving protocol guaranteeing inventory accountability and uninterrupted business continuity.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="bike-step-grid-item h-100 p-4 rounded-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="step-num-bubble flex-shrink-0">01</div>
                            <h5 class="fw-bold text-navy m-0">Floorplan Mapping</h5>
                        </div>
                        <p class="small text-muted m-0">Onsite audit of origin and destination layout, department color-coding, and creation of a master relocation schedule.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bike-step-grid-item h-100 p-4 rounded-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="step-num-bubble flex-shrink-0">02</div>
                            <h5 class="fw-bold text-navy m-0">Tagged Packing</h5>
                        </div>
                        <p class="small text-muted m-0">Each employee's desk belongings, IT hardware, and cables are packed into individually labeled and numbered bins.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bike-step-grid-item h-100 p-4 rounded-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="step-num-bubble flex-shrink-0">03</div>
                            <h5 class="fw-bold text-navy m-0">Dedicated Fleet Haul</h5>
                        </div>
                        <p class="small text-muted m-0">Loaded into GPS-tracked closed container trucks using hydraulic tail-lifts and secured with internal cargo lock-bars.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bike-step-grid-item h-100 p-4 rounded-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="step-num-bubble flex-shrink-0">04</div>
                            <h5 class="fw-bold text-navy m-0">Reassembly &amp; Setup</h5>
                        </div>
                        <p class="small text-muted m-0">Workstations reassembled at exact mapped floor coordinates and IT hardware placed ready for your system admins.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Packaging Protocol & Document Checklist Row -->
        <div class="row g-4 mb-5">
            <!-- Left: Corporate Relocation Protocol -->
            <div class="col-lg-6">
                <div class="bike-form-card bg-white rounded-4 p-4 p-md-5 h-100 border shadow-sm d-flex flex-column justify-content-between">
                    <div>
                        <div class="mb-2">
                            <span class="badge-sub-title"><i class="bi bi-shield-lock-fill"></i> CORPORATE ASSET PROTECTION</span>
                        </div>
                        <h3 class="bike-sub-title fw-bold mb-2">Advanced Protocol <span class="text-orange">for Office Assets</span></h3>
                        <p class="small text-muted mb-4">Precision packaging standards designed to protect sensitive hardware and business data:</p>

                        <div class="d-flex flex-column gap-3">
                            <div class="p-3 rounded-3 bg-light border">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div class="doc-icon flex-shrink-0"><i class="bi bi-shield-check"></i></div>
                                    <h6 class="fw-bold text-navy m-0">Anti-Static Bubble Wraps for IT Hardware</h6>
                                </div>
                                <p class="small text-muted m-0">Specialized ESD-safe wrapping for server motherboards, hard disk arrays, desktop monitors, and networking switches.</p>
                            </div>

                            <div class="p-3 rounded-3 bg-light border">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div class="doc-icon flex-shrink-0"><i class="bi bi-tags-fill"></i></div>
                                    <h6 class="fw-bold text-navy m-0">Color-Coded Department Tagging</h6>
                                </div>
                                <p class="small text-muted m-0">Every department (HR, Tech, Accounts, Legal) is color-coded with numbered box stickers to guarantee 100% item trace-ability.</p>
                            </div>

                            <div class="p-3 rounded-3 bg-light border">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div class="doc-icon flex-shrink-0"><i class="bi bi-grid-fill"></i></div>
                                    <h6 class="fw-bold text-navy m-0">Modular Workstation Carpentry Care</h6>
                                </div>
                                <p class="small text-muted m-0">Fasteners, screws, and brackets are bagged and taped to respective desk frames for fast, error-free reassembly.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Quick Action -->
                    <div class="mt-4 pt-3 border-top d-flex align-items-center justify-content-between flex-wrap gap-2">
                        <span class="small text-muted"><i class="bi bi-check-circle-fill text-success me-1"></i> Guaranteed Monday Morning Readiness</span>
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
                            <span class="badge-sub-title"><i class="bi bi-clipboard-check"></i> CORPORATE CHECKLIST</span>
                        </div>
                        <h3 class="bike-sub-title fw-bold mb-2">Pre-Relocation <span class="text-orange">Checklist</span></h3>
                        <p class="small text-muted mb-4">Steps your administrative and facility team should review before moving day:</p>

                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="doc-card p-3 rounded-3 h-100">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="doc-icon"><i class="bi bi-file-earmark-lock"></i></div>
                                        <h6 class="doc-title m-0">IT Data Backups</h6>
                                    </div>
                                    <p class="doc-desc m-0">Ensure full cloud and offsite backups of servers and critical databases prior to shutdown.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="doc-card p-3 rounded-3 h-100">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="doc-icon"><i class="bi bi-building-gear"></i></div>
                                        <h6 class="doc-title m-0">Building Permits</h6>
                                    </div>
                                    <p class="doc-desc m-0">Secure loading dock gate passes and freight elevator approvals from commercial tech park management.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="doc-card p-3 rounded-3 h-100">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="doc-icon"><i class="bi bi-people-fill"></i></div>
                                        <h6 class="doc-title m-0">Staff Briefing</h6>
                                    </div>
                                    <p class="doc-desc m-0">Advise employees to pack personal desk items into distributed individual crates before Friday evening.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="doc-card p-3 rounded-3 h-100">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="doc-icon"><i class="bi bi-map-fill"></i></div>
                                        <h6 class="doc-title m-0">New Seating Plan</h6>
                                    </div>
                                    <p class="doc-desc m-0">Provide our crew with a numbered floor plan for exact placement of desks and IT assets.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Direct Contact Banner -->
                    <div class="bike-cta-inline p-3 p-md-4 rounded-4 mt-4 d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <div>
                            <h6 class="fw-bold text-white m-0">Need a corporate relocation proposal?</h6>
                            <span class="small text-white-50">Speak to our dedicated enterprise account manager</span>
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
                                    <i class="bi bi-patch-check-fill text-success"></i> 45-Seat Tech Office
                                </span>
                            </div>
                            <h5 class="fw-bold text-navy mb-3">"Zero downtime! All 45 workstations were live on Monday morning!"</h5>
                            <p class="testimonial-quote-text fst-italic mb-3">
                                "We relocated our software development office over the weekend. <?= htmlspecialchars($company3) ?> packed on Friday evening, dismantled 45 modular workstations, safely transported our server racks, and set up everything by Sunday evening. Unbelievable efficiency!"
                            </p>
                            <div class="d-flex align-items-center gap-3 pt-3 border-top mt-3">
                                <div class="user-avatar-circle">AC</div>
                                <div>
                                    <h6 class="m-0 fw-bold text-navy">Anirban Chakraborty</h6>
                                    <span class="small text-muted">CTO &bull; Tech Solutions</span>
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
                                    <i class="bi bi-patch-check-fill text-success"></i> Law Firm Shifting
                                </span>
                            </div>
                            <h5 class="fw-bold text-navy mb-3">"Complete confidentiality with tagged, numbered crates!"</h5>
                            <p class="testimonial-quote-text fst-italic mb-3">
                                "Our legal practice had hundreds of confidential case files and reference volumes. The color-coded numbered tagging protocol was remarkable. Not a single document went missing. Extremely professional execution."
                            </p>
                            <div class="d-flex align-items-center gap-3 pt-3 border-top mt-3">
                                <div class="user-avatar-circle avatar-orange">MR</div>
                                <div>
                                    <h6 class="m-0 fw-bold text-navy">Meenakshi Rao</h6>
                                    <span class="small text-muted">Senior Partner &bull; Law Associates</span>
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
                                    <i class="bi bi-patch-check-fill text-success"></i> Branch Office Relocation
                                </span>
                            </div>
                            <h5 class="fw-bold text-navy mb-3">"Punctual, organized, and handled our glass cabins flawlessly!"</h5>
                            <p class="testimonial-quote-text fst-italic mb-3">
                                "The carpentry team dismantled our glass partitions and executive conference table with precision tools and reinstalled them at the new commercial building cleanly. Highly satisfied with their corporate moving standards."
                            </p>
                            <div class="d-flex align-items-center gap-3 pt-3 border-top mt-3">
                                <div class="user-avatar-circle avatar-blue">KV</div>
                                <div>
                                    <h6 class="m-0 fw-bold text-navy">Karthik Venkat</h6>
                                    <span class="small text-muted">Operations VP &bull; Financial Services</span>
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
                                    <i class="bi bi-question-diamond-fill text-orange me-2"></i> How do you ensure zero interruption to our daily business operations?
                                </button>
                            </h2>
                            <div id="faqColOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadOne" data-bs-parent="#bikeFaqAccordion">
                                <div class="accordion-body">
                                    We schedule commercial office moves after business hours on Friday evening and across Saturday and Sunday. Our teams work round-the-clock so that all workstations, conference rooms, and basic IT connections are set up and operational for your staff by 9 AM on Monday.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqColTwo" aria-expanded="false" aria-controls="faqColTwo">
                                    <i class="bi bi-question-diamond-fill text-orange me-2"></i> Can your team dismantle and reassemble modular cubicles?
                                </button>
                            </h2>
                            <div id="faqColTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadTwo" data-bs-parent="#bikeFaqAccordion">
                                <div class="accordion-body">
                                    Yes, our staff includes trained corporate carpenters experienced with all major modular furniture brands (Godrej, Featherlite, Herman Miller, etc.). We dismantle cubicles, race-way power channels, and executive desks and reconstruct them accurately in your new space.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqColThree" aria-expanded="false" aria-controls="faqColThree">
                                    <i class="bi bi-question-diamond-fill text-orange me-2"></i> How are servers and delicate electronic equipment relocated?
                                </button>
                            </h2>
                            <div id="faqColThree" class="accordion-collapse collapse" aria-labelledby="faqHeadThree" data-bs-parent="#bikeFaqAccordion">
                                <div class="accordion-body">
                                    Servers and networking hardware are packed with specialized electro-static discharge (ESD) bubble film, padded foam blankets, and transported inside custom foam-lined flight cases or shock-absorbing crates.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqColFour" aria-expanded="false" aria-controls="faqColFour">
                                    <i class="bi bi-question-diamond-fill text-orange me-2"></i> Do you provide an itemized inventory list for corporate audit?
                                </button>
                            </h2>
                            <div id="faqColFour" class="accordion-collapse collapse" aria-labelledby="faqHeadFour" data-bs-parent="#bikeFaqAccordion">
                                <div class="accordion-body">
                                    Yes, we provide digital itemized manifests detailing box numbers, asset tags, originating department, and destination floor location. This allows seamless cross-auditing by your facilities and IT teams before signing the final handover.
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