<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

?>

<!-- =========================================================================
     FLOATING ACTION BUTTONS WIDGET (Call, Get Quote, WhatsApp)
     ========================================================================= -->
<div class="floating-actions-dock" id="floatingActionsDock" role="region" aria-label="Quick Contact and Quote Actions">
    <div class="floating-actions-container">
        <!-- 1. Get Quote Button (Featured Modal Trigger) -->
        <button type="button" class="floating-btn floating-btn-quote" data-bs-toggle="modal" data-bs-target="#qteModal" aria-label="Get an Instant Moving Quote" title="Get Instant Free Quote">
            <span class="floating-btn-pulse" aria-hidden="true"></span>
            <span class="floating-btn-icon">
                <i class="bi bi-lightning-charge-fill"></i>
            </span>
            <span class="floating-btn-label">Get Free Quote</span>
        </button>

        <!-- 2. Call Button -->
        <a <?= $phonehtml ?> class="floating-btn floating-btn-call" aria-label="Call us directly at <?= htmlspecialchars($phone) ?>" title="Call <?= htmlspecialchars($phone) ?>">
            <span class="floating-btn-icon">
                <i class="bi bi-telephone-fill"></i>
            </span>
            <span class="floating-btn-label">Call Us</span>
        </a>

        <!-- 3. WhatsApp Button -->
        <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="floating-btn floating-btn-whatsapp" aria-label="Chat with our relocation team on WhatsApp" title="Chat on WhatsApp">
            <span class="floating-btn-icon">
                <i class="bi bi-whatsapp"></i>
            </span>
            <span class="floating-btn-label">WhatsApp</span>
        </a>
    </div>
</div>
