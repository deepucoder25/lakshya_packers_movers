<div class="modal fade qte-custom-modal" id="qteModal" tabindex="-1" role="dialog" aria-labelledby="qteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content qte-modal-box">
            <!-- Modal Header -->
            <div class="qte-modal-header">
                <div class="qte-header-content">
                    <span class="qte-header-badge">
                        <i class="bi bi-shield-fill-check"></i> 100% Free &amp; Zero Obligation
                    </span>
                    <h3 class="qte-modal-title" id="qteModalLabel">Get an Instant Moving Quote</h3>
                    <p class="qte-modal-desc">Fill in your relocation details below for transparent, honest pricing with zero hidden charges.</p>
                </div>
                <button type="button" class="qte-modal-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>

            <!-- Quote Form -->
            <form id="quotemodal" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="resultquotemodal" onsubmit="return false;">
                <div class="row g-3">
                    <!-- Name -->
                    <div class="col-12 col-md-6">
                        <div class="form-floating qte-floating-wrap">
                            <i class="bi bi-person-fill qte-input-ico"></i>
                            <input type="text" class="form-control qte-input-field" id="qte_name" name="name" placeholder="Your Name *" required>
                            <label for="qte_name">Your Name *</label>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="col-12 col-md-6">
                        <div class="form-floating qte-floating-wrap">
                            <i class="bi bi-telephone-fill qte-input-ico"></i>
                            <input type="tel" class="form-control qte-input-field" id="qte_phone" name="phone" placeholder="Mobile Number *" required maxlength="10">
                            <label for="qte_phone">Mobile Number *</label>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="col-12">
                        <div class="form-floating qte-floating-wrap">
                            <i class="bi bi-envelope-fill qte-input-ico"></i>
                            <input type="email" class="form-control qte-input-field" id="qte_email" name="email" placeholder="Email Address (Optional)">
                            <label for="qte_email">Email Address (Optional)</label>
                        </div>
                    </div>

                    <!-- From City -->
                    <div class="col-6">
                        <div class="form-floating qte-floating-wrap">
                            <i class="bi bi-geo-alt-fill qte-input-ico"></i>
                            <input type="text" class="form-control qte-input-field" id="qte_mfrom" name="mfrom" placeholder="From City">
                            <label for="qte_mfrom">From City</label>
                        </div>
                    </div>

                    <!-- To City -->
                    <div class="col-6">
                        <div class="form-floating qte-floating-wrap">
                            <i class="bi bi-send-check-fill qte-input-ico"></i>
                            <input type="text" class="form-control qte-input-field" id="qte_mto" name="mto" placeholder="To City">
                            <label for="qte_mto">To City</label>
                        </div>
                    </div>

                    <!-- Message -->
                    <div class="col-12">
                        <div class="form-floating qte-floating-wrap qte-textarea-wrap">
                            <i class="bi bi-chat-square-text-fill qte-input-ico"></i>
                            <textarea name="message" class="form-control qte-input-field qte-textarea-field" id="qte_message" placeholder="Describe your relocation needs (e.g. 2BHK household, bike, car)..."></textarea>
                            <label for="qte_message">Describe your relocation needs...</label>
                        </div>
                    </div>
                </div>

                <!-- Submit & Clear Buttons (Side by Side) -->
                <div class="qte-btn-wrap d-flex align-items-center gap-3">
                    <button id="submitbquotemodal" type="submit" class="qte-btn-submit">
                        <span>Get Free Quote</span> <i class="bi bi-send-fill ms-2"></i>
                    </button>
                    <button type="reset" class="qte-btn-clear" id="quoteClearBtn">
                        <span>Clear</span> <i class="bi bi-arrow-counterclockwise ms-1"></i>
                    </button>
                </div>

                <!-- Response Alert Container -->
                <div id="resultquotemodal" class="mt-3"></div>
            </form>
        </div>
    </div>
</div>