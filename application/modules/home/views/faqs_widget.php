<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- =========================================================================
     FREQUENTLY ASKED QUESTIONS (FAQS) WIDGET SECTION
     ========================================================================= -->
<section class="faqs-section position-relative overflow-hidden py-5" id="faqsSection">
    <div class="container position-relative z-2">
        <!-- Section Header (reusing service heading classes) -->
        <div class="text-center svc-header-wrapper mb-4 mb-lg-5">
            <!-- Eyebrow Badge -->
            <div class="svc-pill-badge faqs-pill-badge d-inline-flex align-items-center justify-content-center mb-2">
                <span class="process-eyebrow-line"></span><span class="process-eyebrow-dot"></span>
                <span class="svc-badge-title">FREQUENTLY ASKED QUESTIONS</span>
                <span class="process-eyebrow-dot"></span><span class="process-eyebrow-line"></span>
            </div>

            <!-- Main Heading -->
            <h2 class="svc-main-title fw-bolder mb-2">
                Got Questions? <span class="svc-highlight-text">We've Got Answers</span>
            </h2>

            <!-- Subtitle -->
            <p class="svc-subtitle text-muted mx-auto mb-0">
                Everything you need to know about our reliable packing, shifting, and nationwide transit services.
            </p>
        </div>

        <!-- 2-Column Accordion Grid -->
        <div class="row g-3 g-lg-4 max-w-1050 mx-auto">
            <!-- Col 1 -->
            <div class="col-lg-6">
                <div class="faq-accordion-item">
                    <button class="faq-question-btn d-flex align-items-center justify-content-between w-100" type="button">
                        <span class="faq-q-title">How do I get a free moving estimate or quote?</span>
                        <span class="faq-toggle-icon" aria-hidden="true">+</span>
                    </button>
                    <div class="faq-answer-panel">
                        <p class="faq-answer-text">
                            You can easily request a free quotation by submitting our online quote form or calling our customer support. Our moving coordinator will assess your inventory list and provide a transparent, all-inclusive quote with no hidden charges.
                        </p>
                    </div>
                </div>

                <div class="faq-accordion-item">
                    <button class="faq-question-btn d-flex align-items-center justify-content-between w-100" type="button">
                        <span class="faq-q-title">How much advance notice is required to book a move?</span>
                        <span class="faq-toggle-icon" aria-hidden="true">+</span>
                    </button>
                    <div class="faq-answer-panel">
                        <p class="faq-answer-text">
                            We recommend booking at least 2 to 4 days in advance for local shifting and 5 to 7 days for inter-state relocations. However, we also cater to urgent, same-day moves depending on vehicle and crew availability.
                        </p>
                    </div>
                </div>

                <div class="faq-accordion-item">
                    <button class="faq-question-btn d-flex align-items-center justify-content-between w-100" type="button">
                        <span class="faq-q-title">What packing materials do you use for safety?</span>
                        <span class="faq-toggle-icon" aria-hidden="true">+</span>
                    </button>
                    <div class="faq-answer-panel">
                        <p class="faq-answer-text">
                            We utilize 5-layer heavy-duty corrugated cartons, multi-layer air bubble wrap, waterproof stretch film, foam corner protectors, and high-tensile strapping to keep your items scratch-proof and moisture-free during transit.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Col 2 -->
            <div class="col-lg-6">
                <div class="faq-accordion-item">
                    <button class="faq-question-btn d-flex align-items-center justify-content-between w-100" type="button">
                        <span class="faq-q-title">Are my household goods insured during transit?</span>
                        <span class="faq-toggle-icon" aria-hidden="true">+</span>
                    </button>
                    <div class="faq-answer-panel">
                        <p class="faq-answer-text">
                            Yes, we provide comprehensive transit insurance coverage. In the rare event of transit damage or unexpected road accidents, your declared goods are fully covered under our verified insurance policy.
                        </p>
                    </div>
                </div>

                <div class="faq-accordion-item">
                    <button class="faq-question-btn d-flex align-items-center justify-content-between w-100" type="button">
                        <span class="faq-q-title">How do you transport delicate and electronic items?</span>
                        <span class="faq-toggle-icon" aria-hidden="true">+</span>
                    </button>
                    <div class="faq-answer-panel">
                        <p class="faq-answer-text">
                            Delicate items such as LED TVs, glassware, crockery, and IT equipment are packed with specialized wooden crating, anti-static bubble cushions, and labeled with high-visibility "FRAGILE / THIS SIDE UP" stickers.
                        </p>
                    </div>
                </div>

                <div class="faq-accordion-item">
                    <button class="faq-question-btn d-flex align-items-center justify-content-between w-100" type="button">
                        <span class="faq-q-title">Do you provide car and two-wheeler bike transport?</span>
                        <span class="faq-toggle-icon" aria-hidden="true">+</span>
                    </button>
                    <div class="faq-answer-panel">
                        <p class="faq-answer-text">
                            Yes! We operate dedicated enclosed car carrier trailers and specialized two-wheeler safety frames to deliver your vehicles scratch-free and punctually across any city in India.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Support Assistance Box -->
        <div class="faqs-support-box mt-4 mt-lg-5 p-4 text-center rounded-4 max-w-850 mx-auto">
            <h5 class="fw-bold mb-1" style="color: var(--dark-navy);">Still have questions or need a customized shifting quote?</h5>
            <p class="text-muted mb-3 small">Our customer care experts are available 24/7 to assist you with every step of your move.</p>
            <a href="tel:<?= preg_replace('/[^0-9+]/', '', isset($this->comp['phone']) ? $this->comp['phone'] : '+918260207030') ?>" class="about-pill-btn d-inline-flex align-items-center text-decoration-none">
                <i class="fa fa-phone me-2"></i> Call Us: <?= isset($this->comp['phone']) ? $this->comp['phone'] : '+91 82602 07030' ?>
            </a>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var faqBtns = document.querySelectorAll('.faq-question-btn');
    faqBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            var item = this.parentElement;
            var isActive = item.classList.contains('active');
            
            // Close all items
            document.querySelectorAll('.faq-accordion-item').forEach(function(el) {
                el.classList.remove('active');
                var icon = el.querySelector('.faq-toggle-icon');
                if (icon) icon.textContent = '+';
            });

            // Toggle clicked item
            if (!isActive) {
                item.classList.add('active');
                var icon = item.querySelector('.faq-toggle-icon');
                if (icon) icon.textContent = '−';
            }
        });
    });

    // Open first FAQ by default
    if (faqBtns.length > 0) {
        faqBtns[0].click();
    }
});
</script>