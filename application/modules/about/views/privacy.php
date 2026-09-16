<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); 
?>

<!-- Dynamic Hero Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Privacy Policy',
    'bc_desc' => "Learn how {$company3} collects, utilizes, safeguards, and handles your personal and relocation information.",
    'breadcrumbs' => [
        ['name' => 'Privacy Policy']
    ]
]);
?>

<!-- PRIVACY POLICY MAIN PAGE CONTENT -->
<section class="legal-page-section py-5">
    <div class="container position-relative z-2">

        <div class="row g-4 mb-5 pb-lg-3">
            <!-- Left Sticky Table of Contents (Desktop) -->
            <div class="col-lg-4 d-none d-lg-block">
                <div class="legal-nav-card">
                    <div class="legal-nav-title">
                        <i class="bi bi-list-columns-reverse text-orange me-2"></i> Policy Index
                    </div>
                    <ul class="legal-nav-list">
                        <li>
                            <a href="#sec-overview" class="legal-nav-link">
                                <i class="bi bi-chevron-right"></i> 1. Overview &amp; Commitment
                            </a>
                        </li>
                        <li>
                            <a href="#sec-collect" class="legal-nav-link">
                                <i class="bi bi-chevron-right"></i> 2. Information We Collect
                            </a>
                        </li>
                        <li>
                            <a href="#sec-use" class="legal-nav-link">
                                <i class="bi bi-chevron-right"></i> 3. How We Use Your Data
                            </a>
                        </li>
                        <li>
                            <a href="#sec-share" class="legal-nav-link">
                                <i class="bi bi-chevron-right"></i> 4. Sharing &amp; Third Parties
                            </a>
                        </li>
                        <li>
                            <a href="#sec-security" class="legal-nav-link">
                                <i class="bi bi-chevron-right"></i> 5. Data Security Protocols
                            </a>
                        </li>
                        <li>
                            <a href="#sec-rights" class="legal-nav-link">
                                <i class="bi bi-chevron-right"></i> 6. Your Rights &amp; Choices
                            </a>
                        </li>
                        <li>
                            <a href="#sec-contact" class="legal-nav-link">
                                <i class="bi bi-chevron-right"></i> 7. Contact Privacy Officer
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
                            <i class="bi bi-shield-check"></i> PRIVACY POLICY
                        </div>
                        <div class="legal-meta-date">
                            <i class="bi bi-clock me-1"></i> Last Updated: January 2026
                        </div>
                    </div>

                    <!-- 1. Overview -->
                    <div class="legal-section-block" id="sec-overview">
                        <h2 class="legal-section-heading">
                            <i class="bi bi-shield-lock-fill"></i> 1. Overview &amp; Our Commitment
                        </h2>
                        <p class="legal-text">
                            At <strong><?= htmlspecialchars($company3) ?></strong>, we are committed to respecting and protecting the personal privacy of all customers, corporate clients, and website visitors who interact with our relocation services. This Privacy Policy sets out the basis on which any personal data we collect from you, or that you provide to us, will be processed, stored, and managed securely.
                        </p>
                        <p class="legal-text">
                            By utilizing our website, booking an in-home or virtual pre-move survey, or engaging our packing, shifting, vehicle transportation, or warehousing services, you accept and consent to the practices described in this document.
                        </p>
                    </div>

                    <!-- 2. Information We Collect -->
                    <div class="legal-section-block" id="sec-collect">
                        <h2 class="legal-section-heading">
                            <i class="bi bi-folder-check"></i> 2. Information We Collect
                        </h2>
                        <p class="legal-text">
                            To formulate precise relocation estimates and execute safe logistics, we may collect and process the following categories of information:
                        </p>
                        <ul class="legal-list">
                            <li><strong>Contact Identification:</strong> Full name, primary telephone number, alternate phone, and email address.</li>
                            <li><strong>Relocation Coordinates:</strong> Origin pickup address (including floor level and elevator availability), destination delivery address, and preferred move dates.</li>
                            <li><strong>Inventory Details:</strong> List of household furniture, electronic items, heavy machinery, or vehicles (car/bike models) intended for transport.</li>
                            <li><strong>Verification &amp; Regulatory Data:</strong> Government identity proofs (Aadhaar/PAN/Voter ID) and vehicle RC copies required solely for interstate transport permits, E-Way bills, and transit insurance declarations.</li>
                        </ul>
                    </div>

                    <!-- 3. How We Use Your Data -->
                    <div class="legal-section-block" id="sec-use">
                        <h2 class="legal-section-heading">
                            <i class="bi bi-gear-wide-connected"></i> 3. How We Use Your Information
                        </h2>
                        <p class="legal-text">
                            All data collected is used strictly for legitimate operational purposes:
                        </p>
                        <ul class="legal-list">
                            <li>Generating transparent, itemized fixed-price moving quotations.</li>
                            <li>Scheduling verified packing crews, carpenters, and enclosed GPS container trucks.</li>
                            <li>Underwriting all-risk marine transit insurance policies with government-approved insurance companies.</li>
                            <li>Providing active satellite GPS tracking and proactive transit updates via phone call and WhatsApp.</li>
                            <li>Generating formal GST invoices, consignment notes (Bilty), and payment receipts.</li>
                        </ul>
                    </div>

                    <!-- 4. Sharing & Disclosure -->
                    <div class="legal-section-block" id="sec-share">
                        <h2 class="legal-section-heading">
                            <i class="bi bi-people-fill"></i> 4. Information Sharing &amp; Third Parties
                        </h2>
                        <p class="legal-text">
                            <strong>We never sell, rent, lease, or trade your personal information to third-party telemarketers or external aggregators.</strong>
                        </p>
                        <p class="legal-text">
                            Your information is disclosed only to essential parties required to fulfill your relocation contract:
                        </p>
                        <ul class="legal-list">
                            <li><strong>In-House Operations Team:</strong> Dedicated relocation coordinators, drivers, and packing supervisors handling your move.</li>
                            <li><strong>Insurance Underwriters:</strong> Certified insurance companies issuing your transit insurance policy.</li>
                            <li><strong>Statutory Authorities:</strong> Regional Transport Offices (RTO), GST departments, or highway check-posts when legally mandated by Indian transit laws.</li>
                        </ul>
                    </div>

                    <!-- 5. Security & Encryption -->
                    <div class="legal-section-block" id="sec-security">
                        <h2 class="legal-section-heading">
                            <i class="bi bi-lock-fill"></i> 5. Data Security &amp; Storage Protocols
                        </h2>
                        <p class="legal-text">
                            We implement stringent physical, electronic, and administrative safeguards to protect your personal information against unauthorized access, loss, or alteration.
                        </p>
                        <div class="legal-highlight-box">
                            <p>
                                <strong>Security Standard:</strong> All web submissions and quotation forms are encrypted using 256-bit Secure Socket Layer (SSL) protocols. Access to sensitive customer documents is restricted strictly to authorized operations personnel on a need-to-know basis.
                            </p>
                        </div>
                    </div>

                    <!-- 6. Your Rights -->
                    <div class="legal-section-block" id="sec-rights">
                        <h2 class="legal-section-heading">
                            <i class="bi bi-check2-circle"></i> 6. Your Rights &amp; Choices
                        </h2>
                        <p class="legal-text">
                            You have the full right to:
                        </p>
                        <ul class="legal-list">
                            <li>Request a copy of the personal information stored in our relocation management system.</li>
                            <li>Request correction or updating of any inaccurate contact details or delivery addresses.</li>
                            <li>Opt out of non-essential promotional SMS or WhatsApp communications at any time.</li>
                        </ul>
                    </div>

                    <!-- 7. Contact Privacy Officer -->
                    <div class="legal-section-block" id="sec-contact">
                        <h2 class="legal-section-heading">
                            <i class="bi bi-headset"></i> 7. Contact Data Privacy Officer
                        </h2>
                        <p class="legal-text">
                            If you have questions, concerns, or requests regarding this Privacy Policy or how your personal information is handled by <strong><?= htmlspecialchars($company3) ?></strong>, please reach out to our customer care desk:
                        </p>
                        <ul class="legal-list">
                            <li><strong>Company:</strong> <?= htmlspecialchars($company3) ?></li>
                            <li><strong>Phone:</strong> <a <?= $phonehtml ?> class="text-decoration-none fw-bold"><?= htmlspecialchars($phone) ?></a></li>
                            <li><strong>Support:</strong> Available 24x7 for all relocation support queries</li>
                        </ul>
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
                    Have Questions About Your Move With <span class="text-orange"><?= htmlspecialchars($company3) ?></span>?
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