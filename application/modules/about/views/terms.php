<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); 
?>

<!-- Dynamic Hero Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Terms and Conditions',
    'bc_desc' => "The service agreements, operational policies, transit insurance terms, and customer guidelines at {$company3}.",
    'breadcrumbs' => [
        ['name' => 'Terms & Conditions']
    ]
]);
?>

<!-- TERMS AND CONDITIONS MAIN PAGE CONTENT -->
<section class="legal-page-section py-5">
    <div class="container position-relative z-2">

        <div class="row g-4 mb-5 pb-lg-3">
            <!-- Left Sticky Table of Contents (Desktop) -->
            <div class="col-lg-4 d-none d-lg-block">
                <div class="legal-nav-card">
                    <div class="legal-nav-title">
                        <i class="bi bi-journal-text text-orange me-2"></i> Terms Index
                    </div>
                    <ul class="legal-nav-list">
                        <li>
                            <a href="#term-scope" class="legal-nav-link">
                                <i class="bi bi-chevron-right"></i> 1. Scope of Relocation Services
                            </a>
                        </li>
                        <li>
                            <a href="#term-pricing" class="legal-nav-link">
                                <i class="bi bi-chevron-right"></i> 2. Quotation &amp; Pricing Terms
                            </a>
                        </li>
                        <li>
                            <a href="#term-payment" class="legal-nav-link">
                                <i class="bi bi-chevron-right"></i> 3. Payment Schedule
                            </a>
                        </li>
                        <li>
                            <a href="#term-cancel" class="legal-nav-link">
                                <i class="bi bi-chevron-right"></i> 4. Rescheduling &amp; Cancellation
                            </a>
                        </li>
                        <li>
                            <a href="#term-restricted" class="legal-nav-link">
                                <i class="bi bi-chevron-right"></i> 5. Prohibited Articles
                            </a>
                        </li>
                        <li>
                            <a href="#term-insurance" class="legal-nav-link">
                                <i class="bi bi-chevron-right"></i> 6. Transit Insurance &amp; Claims
                            </a>
                        </li>
                        <li>
                            <a href="#term-delivery" class="legal-nav-link">
                                <i class="bi bi-chevron-right"></i> 7. Delivery &amp; Force Majeure
                            </a>
                        </li>
                        <li>
                            <a href="#term-jurisdiction" class="legal-nav-link">
                                <i class="bi bi-chevron-right"></i> 8. Governing Law &amp; Disputes
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Right Content Area -->
            <div class="col-lg-8">
                <div class="legal-card">
                    <!-- Meta Header -->
                    <div class="legal-meta-strip">
                        <div class="legal-meta-badge">
                            <i class="bi bi-file-earmark-check"></i> TERMS OF SERVICE
                        </div>
                        <div class="legal-meta-date">
                            <i class="bi bi-clock me-1"></i> Effective Date: January 2026
                        </div>
                    </div>

                    <!-- 1. Scope of Services -->
                    <div class="legal-section-block" id="term-scope">
                        <h2 class="legal-section-heading">
                            <i class="bi bi-truck"></i> 1. Scope of Relocation Services
                        </h2>
                        <p class="legal-text">
                            These Terms and Conditions govern all contracts for household shifting, commercial/office relocation, car carrier transport, bike transportation, and warehousing storage services rendered by <strong><?= htmlspecialchars($company3) ?></strong>.
                        </p>
                        <p class="legal-text">
                            Our scope of work encompasses supplying professional multi-layer packaging materials, in-house labor for packing and loading, furniture dismantling (as agreed), highway transportation via closed GPS containers, unloading at the destination, and basic furniture placement.
                        </p>
                    </div>

                    <!-- 2. Quotation & Pricing Terms -->
                    <div class="legal-section-block" id="term-pricing">
                        <h2 class="legal-section-heading">
                            <i class="bi bi-tag-fill"></i> 2. Quotation &amp; Pricing Terms
                        </h2>
                        <p class="legal-text">
                            Every official quotation provided in writing by <?= htmlspecialchars($company3) ?> remains valid for <strong>15 calendar days</strong> from the date of issuance.
                        </p>
                        <ul class="legal-list">
                            <li><strong>Fixed-Price Assurance:</strong> What is itemized in your written agreement is final. We do not demand surprise surcharges for standard floor stairs or gate waiting.</li>
                            <li><strong>Scope Changes:</strong> If additional large furniture pieces, appliances, or destinations not listed during initial survey are added on moving day, the quotation will be revised transparently before loading commences.</li>
                            <li><strong>Taxes &amp; Tolls:</strong> Interstate highway toll taxes, state permits, and GST are clearly specified upfront in your formal estimate sheet.</li>
                        </ul>
                    </div>

                    <!-- 3. Payment Schedule -->
                    <div class="legal-section-block" id="term-payment">
                        <h2 class="legal-section-heading">
                            <i class="bi bi-credit-card-2-front"></i> 3. Booking &amp; Payment Schedule
                        </h2>
                        <p class="legal-text">
                            To ensure reserved vehicle container allocation and verified crew scheduling, our standard payment protocol is as follows:
                        </p>
                        <ul class="legal-list">
                            <li><strong>Booking Advance:</strong> A token advance (typically 10% to 20%) is payable to reserve your moving date and vehicle slot.</li>
                            <li><strong>Dispatch Payment:</strong> The remaining freight balance is payable upon complete loading and generation of the official Consignment Note (Bilty) prior to final delivery.</li>
                            <li><strong>Official Receipts:</strong> Never pay cash without receiving a verified digital invoice or numbered company cash receipt.</li>
                        </ul>
                    </div>

                    <!-- 4. Rescheduling & Cancellation -->
                    <div class="legal-section-block" id="term-cancel">
                        <h2 class="legal-section-heading">
                            <i class="bi bi-calendar-x"></i> 4. Rescheduling &amp; Cancellation Policy
                        </h2>
                        <p class="legal-text">
                            We understand that move plans can fluctuate due to house keys handover, rent agreements, or job transfers:
                        </p>
                        <ul class="legal-list">
                            <li><strong>Free Rescheduling:</strong> You may reschedule your moving date with zero penalty fees by notifying our coordinator at least <strong>24 hours prior</strong> to the scheduled packing time.</li>
                            <li><strong>Cancellation:</strong> If a booking is cancelled more than 48 hours before the scheduled packing date, the advance token is refunded in full. Cancellations within 24 hours of scheduled dispatch may incur nominal logistical mobilization charges.</li>
                        </ul>
                    </div>

                    <!-- 5. Prohibited Articles -->
                    <div class="legal-section-block" id="term-restricted">
                        <h2 class="legal-section-heading">
                            <i class="bi bi-exclamation-octagon-fill"></i> 5. Restricted Articles &amp; Customer Declarations
                        </h2>
                        <p class="legal-text">
                            Under Motor Vehicles Act regulations and safety protocols, the following items are strictly prohibited from being packed or loaded in cargo trucks:
                        </p>
                        <div class="legal-highlight-box">
                            <p>
                                <strong>Strictly Restricted:</strong> Gas cylinders, fireworks, petrol, acids, inflammable chemicals, illegal substances, and perishable foods. The customer assumes full legal and financial responsibility for any undisclosed contraband discovered during highway RTO/police inspections.
                            </p>
                        </div>
                        <p class="legal-text">
                            <strong>Valuables Notice:</strong> Physical cash, gold/diamond jewelry, original property documents, stock certificates, and small electronic smartwatches must be personally retained and transported by the customer. <?= htmlspecialchars($company3) ?> accepts no liability for undisclosed cash or jewelry placed inside cardboard boxes.
                        </p>
                    </div>

                    <!-- 6. Transit Insurance & Claims -->
                    <div class="legal-section-block" id="term-insurance">
                        <h2 class="legal-section-heading">
                            <i class="bi bi-shield-shaded"></i> 6. Transit Insurance &amp; Damage Claim Protocols
                        </h2>
                        <p class="legal-text">
                            Transit insurance is strongly recommended for all long-distance and interstate moves. When opted for by the client:
                        </p>
                        <ul class="legal-list">
                            <li>An official marine transit insurance policy certificate with policy number is issued prior to dispatch.</li>
                            <li><strong>Inspection &amp; Intimation:</strong> In the rare event of transit damage or missing cartons, the customer must endorse the delivery challan (Bilty) and submit photo/video evidence within <strong>48 hours of delivery</strong>.</li>
                            <li>Claims are evaluated by the insurance surveyor and settled expeditiously as per policy terms.</li>
                        </ul>
                    </div>

                    <!-- 7. Delivery & Force Majeure -->
                    <div class="legal-section-block" id="term-delivery">
                        <h2 class="legal-section-heading">
                            <i class="bi bi-hourglass-split"></i> 7. Delivery Timelines &amp; Force Majeure
                        </h2>
                        <p class="legal-text">
                            <?= htmlspecialchars($company3) ?> commits to punctual highway transit schedules. However, transit timelines provided in estimates are subject to conditions beyond reasonable operational control (Force Majeure):
                        </p>
                        <ul class="legal-list">
                            <li>Severe weather phenomena (floods, cyclones, heavy landslides).</li>
                            <li>Highway road closures, national strikes (bandhs), or state border clearance delays.</li>
                            <li>Local municipal restrictions restricting heavy commercial vehicle entry into residential areas during daytime hours (No-Entry timings).</li>
                        </ul>
                        <p class="legal-text">
                            In all such cases, our personal relocation coordinator will keep the customer continuously updated with real-time tracking telemetry.
                        </p>
                    </div>

                    <!-- 8. Governing Law & Disputes -->
                    <div class="legal-section-block" id="term-jurisdiction">
                        <h2 class="legal-section-heading">
                            <i class="bi bi-bank"></i> 8. Governing Law &amp; Jurisdiction
                        </h2>
                        <p class="legal-text">
                            All agreements and service arrangements with <strong><?= htmlspecialchars($company3) ?></strong> are governed by the laws of India. Any legal disputes or claims arising out of or in connection with our relocation services shall be subject exclusively to the jurisdiction of the competent courts where our corporate head office is registered.
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <!-- Executive Contact & Consultation Hub -->
        <div class="about-consult-box">
            <div class="about-consult-inner text-center">
                <div class="about-consult-tag">
                    <i class="bi bi-patch-check-fill text-orange"></i> DIRECT RELOCATION DESK
                </div>
                <h3 class="about-consult-heading">
                    Have Questions About Our Terms or Services?
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