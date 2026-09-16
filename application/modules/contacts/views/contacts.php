<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Contact Us',
    'bc_desc' => 'Get in touch for free moving estimates, fast support, and all-India relocation services.',
    'breadcrumbs' => [
        ['name' => 'Contact Us']
    ]
]);
?>

<!-- Modern Contact Section (Matched to Design Reference with Website Theme) -->
<section class="cnt-modern-section">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">
            <!-- Left Column: Company Story & Direct Contact Channels -->
            <div class="col-lg-6">
                <div class="cnt-story-wrapper pe-lg-3">
                    <div class="cnt-flow-heading">Let's Get Moving</div>
                    <h2 class="cnt-story-subtitle">Reliable &amp; Safe Relocation Services Across India</h2>
                    <p class="cnt-story-desc">
                        At <strong><?= htmlspecialchars($company3) ?></strong>, we take the stress out of shifting. Whether you are moving your household, relocating your corporate office, or transporting your car or bike, our IBA-approved moving specialists and GPS-tracked container vehicles ensure safe, timely, and damage-free delivery to your new doorstep. Reach out today for free moving estimates and dedicated assistance.
                    </p>

                    <!-- Contact Details List -->
                    <div class="cnt-contact-list">
                        <!-- Phone -->
                        <div class="cnt-contact-item">
                            <div class="cnt-icon-badge">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="cnt-item-content">
                                <span class="cnt-item-label">Phone number:</span>
                                <a <?= $phonehtml ?> class="cnt-item-val"><?= $phone ?></a>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="cnt-contact-item">
                            <div class="cnt-icon-badge">
                                <i class="bi bi-send-fill"></i>
                            </div>
                            <div class="cnt-item-content">
                                <span class="cnt-item-label">Email address:</span>
                                <a href="<?= $mailhtml ?>" class="cnt-item-val"><?= $mail ?></a>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="cnt-contact-item">
                            <div class="cnt-icon-badge">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="cnt-item-content">
                                <span class="cnt-item-label">Location:</span>
                                <span class="cnt-item-val"><?= htmlspecialchars($address) ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Trust Highlights Strip -->
                    <div class="d-flex flex-wrap gap-2 pt-3 mt-1">
                        <span class="badge bg-white text-dark border px-3 py-2 rounded-pill shadow-xs d-inline-flex align-items-center gap-1">
                            <i class="bi bi-shield-fill-check text-success"></i> IBA Approved
                        </span>
                        <span class="badge bg-white text-dark border px-3 py-2 rounded-pill shadow-xs d-inline-flex align-items-center gap-1">
                            <i class="bi bi-patch-check-fill text-primary"></i> ISO 9001:2015
                        </span>
                        <span class="badge bg-white text-dark border px-3 py-2 rounded-pill shadow-xs d-inline-flex align-items-center gap-1">
                            <i class="bi bi-clock-fill text-orange"></i> 24/7 Support
                        </span>
                    </div>
                </div>
            </div>

            <!-- Right Column: Card Form Container -->
            <div class="col-lg-6">
                <div class="cnt-card-container">
                    <div class="cnt-card-badge">
                        <i class="bi bi-shield-fill-check text-orange"></i> 100% Free &amp; Zero Obligation
                    </div>
                    <h3 class="cnt-card-title">Get an Instant Free Moving Quote</h3>
                    <p class="cnt-card-desc">
                        Share your relocation details below to receive an honest, transparent, and all-inclusive shifting estimate for your home or vehicle with zero hidden fees.
                    </p>

                    <form id="contactform" class="ajax-form" data-url="<?= site_url('contacts/contact') ?>" data-result="contactformresults" onsubmit="return false;">

                        <!-- Pill Input Fields: col-12 on mobile, col-md-6 on desktop with Floating Labels -->
                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <div class="form-floating cnt-floating-wrap">
                                    <input type="text" name="name" class="form-control cnt-pill-control" id="cnt_name" placeholder="Name*" required>
                                    <label for="cnt_name">Name*</label>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-floating cnt-floating-wrap">
                                    <input type="tel" name="phone" class="form-control cnt-pill-control" id="cnt_phone" placeholder="Phone no.*" required maxlength="10">
                                    <label for="cnt_phone">Phone no.*</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating cnt-floating-wrap">
                                    <input type="email" name="email" class="form-control cnt-pill-control" id="cnt_email" placeholder="Email Address">
                                    <label for="cnt_email">Email Address</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating cnt-floating-wrap">
                                    <textarea name="message" class="form-control cnt-pill-control cnt-pill-textarea" id="cnt_message" placeholder="Message / Moving details..."></textarea>
                                    <label for="cnt_message">Message / Moving details...</label>
                                </div>
                            </div>
                        </div>

                        <!-- Pill Submit & Clear Buttons -->
                        <div class="cnt-submit-wrap d-flex align-items-center gap-3">
                            <button type="submit" class="cnt-pill-submit-btn">
                                SUBMIT
                            </button>
                            <button type="reset" class="cnt-pill-clear-btn" id="cntClearBtn">
                                CLEAR
                            </button>
                        </div>

                        <!-- Result Container -->
                        <div id="contactformresults" class="mt-3"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>