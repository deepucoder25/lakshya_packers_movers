<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); 
?>

<!-- Dynamic Hero Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Why Choose Us',
    'bc_desc' => "Discover the standards, certified processes, and honest guarantees that make {$company3} India's preferred relocation specialist.",
    'breadcrumbs' => [
        ['name' => 'Why Choose Us']
    ]
]);
?>

<!-- WHY CHOOSE US MAIN PAGE CONTENT -->
<section class="choose-page-section py-5">
    <div class="container position-relative z-2">

        <!-- 1. Hero Intro Card -->
        <div class="row g-4 mb-5 pb-lg-3">
            <div class="col-12">
                <div class="choose-intro-card">
                    <div class="choose-intro-tag">
                        <i class="bi bi-shield-check"></i> THE LAKSHYA STANDARD
                    </div>
                    
                    <h2 class="bike-heading-title fw-bolder mb-3">
                        Relocation Done Right With <span class="text-orange">Certified Care &amp; Integrity</span>
                    </h2>

                    <div class="bike-gold-divider d-flex align-items-center my-3">
                        <span class="divider-line"></span>
                        <span class="divider-diamond"><i class="bi bi-stars"></i></span>
                        <span class="divider-line"></span>
                    </div>

                    <p class="lead-text mb-3">
                        Choosing a relocation company isn't merely about finding a truck; it is entrusting your most cherished possessions, family heirlooms, and sensitive equipment to people you can rely on completely.
                    </p>

                    <p class="mb-3">
                        At <strong><?= htmlspecialchars($company3) ?></strong>, we have earned the reputation of India's most dependable packers and movers by eliminating the uncertainties, hidden surcharges, and careless handling typical of unorganized transporters. Every relocation is executed with documented protocols, dedicated supervisors, and IBA-approved accountability.
                    </p>

                    <!-- 4 Trust Points -->
                    <div class="choose-trust-strip">
                        <div class="choose-trust-point">
                            <i class="bi bi-patch-check-fill"></i>
                            <span>IBA Approved &amp; Bank Empanelled</span>
                        </div>
                        <div class="choose-trust-point">
                            <i class="bi bi-people-fill"></i>
                            <span>100% In-House Verified Packers</span>
                        </div>
                        <div class="choose-trust-point">
                            <i class="bi bi-shield-fill-check"></i>
                            <span>All-Risk Marine Transit Insurance</span>
                        </div>
                        <div class="choose-trust-point">
                            <i class="bi bi-truck-front-fill"></i>
                            <span>GPS-Tracked Closed Containers</span>
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
        </div>

        <!-- 2. Core Pillars of Excellence (6 Grid Cards) -->
        <div class="mb-5 pb-lg-3">
            <div class="text-center svc-header-wrapper mb-4 mb-md-5">
                <h2 class="bike-heading-title fw-bolder mb-2">
                    6 Core Reasons India Trusts <span class="text-orange"><?= htmlspecialchars($company3) ?></span>
                </h2>
                <div class="bike-gold-divider d-flex align-items-center justify-content-center my-3">
                    <span class="divider-line"></span>
                    <span class="divider-diamond"><i class="bi bi-gem"></i></span>
                    <span class="divider-line"></span>
                </div>
                <p class="mx-auto bike-section-desc">
                    Every relocation is backed by standardized operational protocols designed to protect your home and peace of mind.
                </p>
            </div>

            <div class="row g-4">
                <!-- Pillar 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="choose-pillar-card">
                        <div class="choose-pillar-header">
                            <div class="choose-pillar-icon">
                                <i class="bi bi-file-earmark-lock2-fill"></i>
                            </div>
                            <h3 class="choose-pillar-title">IBA Approved Logistics</h3>
                        </div>
                        <p class="choose-pillar-desc">
                            Officially recognized transport operator meeting Indian Banks' Association norms, enabling seamless transfer claim reimbursements.
                        </p>
                        <ul class="choose-pillar-bullets">
                            <li><i class="bi bi-check-circle-fill"></i> Valid for bank &amp; PSU bills</li>
                            <li><i class="bi bi-check-circle-fill"></i> Official GST E-Way bill compliance</li>
                            <li><i class="bi bi-check-circle-fill"></i> Legally verified documentation</li>
                        </ul>
                    </div>
                </div>

                <!-- Pillar 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="choose-pillar-card">
                        <div class="choose-pillar-header">
                            <div class="choose-pillar-icon">
                                <i class="bi bi-person-check-fill"></i>
                            </div>
                            <h3 class="choose-pillar-title">100% In-House Crew</h3>
                        </div>
                        <p class="choose-pillar-desc">
                            We never outsource your precious belongings to unverified daily laborers. Every packer is a trained, full-time company employee.
                        </p>
                        <ul class="choose-pillar-bullets">
                            <li><i class="bi bi-check-circle-fill"></i> Complete background verification</li>
                            <li><i class="bi bi-check-circle-fill"></i> Expert furniture carpenters</li>
                            <li><i class="bi bi-check-circle-fill"></i> Courteous, uniformed handlers</li>
                        </ul>
                    </div>
                </div>

                <!-- Pillar 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="choose-pillar-card">
                        <div class="choose-pillar-header">
                            <div class="choose-pillar-icon">
                                <i class="bi bi-box-seam-fill"></i>
                            </div>
                            <h3 class="choose-pillar-title">Multi-Layer Packaging</h3>
                        </div>
                        <p class="choose-pillar-desc">
                            We use only virgin, high-density protective materials engineered specifically to withstand rigorous highway transit vibrations.
                        </p>
                        <ul class="choose-pillar-bullets">
                            <li><i class="bi bi-check-circle-fill"></i> 7-ply virgin heavy cartons</li>
                            <li><i class="bi bi-check-circle-fill"></i> Dual-layer air bubble wrapping</li>
                            <li><i class="bi bi-check-circle-fill"></i> Corner foam &amp; stretch film wrap</li>
                        </ul>
                    </div>
                </div>

                <!-- Pillar 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="choose-pillar-card">
                        <div class="choose-pillar-header">
                            <div class="choose-pillar-icon">
                                <i class="bi bi-truck-front-fill"></i>
                            </div>
                            <h3 class="choose-pillar-title">Closed Container Fleet</h3>
                        </div>
                        <p class="choose-pillar-desc">
                            Unlike open flatbed trucks used by unorganized operators, our vehicles are 100% closed, weather-tight steel containers.
                        </p>
                        <ul class="choose-pillar-bullets">
                            <li><i class="bi bi-check-circle-fill"></i> Rain, dust, and heat proof</li>
                            <li><i class="bi bi-check-circle-fill"></i> Real-time satellite GPS tracking</li>
                            <li><i class="bi bi-check-circle-fill"></i> Soft internal cargo lashings</li>
                        </ul>
                    </div>
                </div>

                <!-- Pillar 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="choose-pillar-card">
                        <div class="choose-pillar-header">
                            <div class="choose-pillar-icon">
                                <i class="bi bi-currency-rupee"></i>
                            </div>
                            <h3 class="choose-pillar-title">Fixed Price Guarantee</h3>
                        </div>
                        <p class="choose-pillar-desc">
                            No hidden gate fees, stair charges, or last-minute unloading surcharges. What we quote in writing is all that you ever pay.
                        </p>
                        <ul class="choose-pillar-bullets">
                            <li><i class="bi bi-check-circle-fill"></i> All-inclusive written estimates</li>
                            <li><i class="bi bi-check-circle-fill"></i> Transparent itemized cost sheet</li>
                            <li><i class="bi bi-check-circle-fill"></i> Zero hidden unloading demands</li>
                        </ul>
                    </div>
                </div>

                <!-- Pillar 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="choose-pillar-card">
                        <div class="choose-pillar-header">
                            <div class="choose-pillar-icon">
                                <i class="bi bi-shield-fill-check"></i>
                            </div>
                            <h3 class="choose-pillar-title">All-Risk Insurance</h3>
                        </div>
                        <p class="choose-pillar-desc">
                            Every relocation is backed by full marine all-risk transit insurance policy documentation provided before dispatch.
                        </p>
                        <ul class="choose-pillar-bullets">
                            <li><i class="bi bi-check-circle-fill"></i> Full transit risk coverage</li>
                            <li><i class="bi bi-check-circle-fill"></i> Policy copy issued upfront</li>
                            <li><i class="bi bi-check-circle-fill"></i> Swift damage claim assistance</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. Safety Guarantee Bar -->
        <div class="choose-guarantee-bar mb-5">
            <div class="row g-3 align-items-center">
                <div class="col-6 col-lg-3">
                    <div class="choose-guarantee-item">
                        <div class="choose-guarantee-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div>
                            <div class="choose-guarantee-title">Zero Damage</div>
                            <div class="choose-guarantee-sub">Multi-layer protective protocol</div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="choose-guarantee-item">
                        <div class="choose-guarantee-icon">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <div>
                            <div class="choose-guarantee-title">On-Time Arrival</div>
                            <div class="choose-guarantee-sub">Punctual dispatch &amp; delivery</div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="choose-guarantee-item">
                        <div class="choose-guarantee-icon">
                            <i class="bi bi-tag-fill"></i>
                        </div>
                        <div>
                            <div class="choose-guarantee-title">Fixed Price</div>
                            <div class="choose-guarantee-sub">Written guarantee, no surprises</div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="choose-guarantee-item">
                        <div class="choose-guarantee-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div>
                            <div class="choose-guarantee-title">24x7 Support</div>
                            <div class="choose-guarantee-sub">Dedicated move coordinator</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Detailed Feature Comparison Table -->
        <div class="mb-5 pb-lg-3">
            <div class="text-center svc-header-wrapper mb-4 mb-md-5">
                <h2 class="bike-heading-title fw-bolder mb-2">
                    How We Compare To <span class="text-orange">Regular Transporters</span>
                </h2>
                <div class="bike-gold-divider d-flex align-items-center justify-content-center my-3">
                    <span class="divider-line"></span>
                    <span class="divider-diamond"><i class="bi bi-arrow-left-right"></i></span>
                    <span class="divider-line"></span>
                </div>
                <p class="mx-auto bike-section-desc">
                    An honest comparison of standard industry practices versus Lakshya's certified quality standards.
                </p>
            </div>

            <div class="choose-compare-wrap">
                <table class="choose-compare-table">
                    <thead>
                        <tr>
                            <th>Service Aspect</th>
                            <th>Regular / Local Operators</th>
                            <th><?= htmlspecialchars($company3) ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="table-aspect-name">Quotation &amp; Pricing</td>
                            <td><span class="table-badge-fail"><i class="bi bi-x-circle-fill"></i> Low estimate, surprise charges later</span></td>
                            <td><span class="table-badge-pass"><i class="bi bi-check-circle-fill"></i> 100% Fixed written all-inclusive quote</span></td>
                        </tr>
                        <tr>
                            <td class="table-aspect-name">Packing Manpower</td>
                            <td><span class="table-badge-fail"><i class="bi bi-x-circle-fill"></i> Daily-wage casual untrained labor</span></td>
                            <td><span class="table-badge-pass"><i class="bi bi-check-circle-fill"></i> Verified in-house packing artisans</span></td>
                        </tr>
                        <tr>
                            <td class="table-aspect-name">Moving Vehicles</td>
                            <td><span class="table-badge-fail"><i class="bi bi-x-circle-fill"></i> Open flatbeds exposed to rain &amp; dust</span></td>
                            <td><span class="table-badge-pass"><i class="bi bi-check-circle-fill"></i> Weather-sealed closed container fleet</span></td>
                        </tr>
                        <tr>
                            <td class="table-aspect-name">Packaging Materials</td>
                            <td><span class="table-badge-fail"><i class="bi bi-x-circle-fill"></i> Used grocery cartons &amp; newspapers</span></td>
                            <td><span class="table-badge-pass"><i class="bi bi-check-circle-fill"></i> 7-ply virgin cartons &amp; air-bubble film</span></td>
                        </tr>
                        <tr>
                            <td class="table-aspect-name">Transit Insurance</td>
                            <td><span class="table-badge-fail"><i class="bi bi-x-circle-fill"></i> Verbal promises, zero formal policy</span></td>
                            <td><span class="table-badge-pass"><i class="bi bi-check-circle-fill"></i> Formal IBA-approved all-risk policy upfront</span></td>
                        </tr>
                        <tr>
                            <td class="table-aspect-name">Live Tracking &amp; Updates</td>
                            <td><span class="table-badge-fail"><i class="bi bi-x-circle-fill"></i> Unreachable drivers, no tracking</span></td>
                            <td><span class="table-badge-pass"><i class="bi bi-check-circle-fill"></i> Real-time GPS tracking &amp; move coordinator</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- 5. Executive Contact & Consultation Hub -->
        <div class="about-consult-box">
            <div class="about-consult-inner text-center">
                <div class="about-consult-tag">
                    <i class="bi bi-patch-check-fill text-orange"></i> DIRECT RELOCATION DESK
                </div>
                <h3 class="about-consult-heading">
                    Ready to Experience Stress-Free Shifting With <span class="text-orange"><?= htmlspecialchars($company3) ?></span>?
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