<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

$city_faqs = [
    [
        'q' => 'How much do packers and movers cost in ' . htmlspecialchars($city) . '?',
        'a' => 'Relocation costs in ' . htmlspecialchars($city) . ' depend on the volume of belongings (1BHK, 2BHK, 3BHK), transit distance (local vs intercity), and packing material requirements. Local moving in ' . htmlspecialchars($city) . ' typically starts from ₹3,500 to ₹9,500. We provide a completely transparent written estimate with zero hidden loading or unloading fees.'
    ],
    [
        'q' => 'Do you cover all localities and societies across ' . htmlspecialchars($city) . '?',
        'a' => 'Yes, our fleet and moving staff operate across all residential colonies, high-rise apartments, and commercial zones in ' . htmlspecialchars($city) . ' and surrounding districts in ' . htmlspecialchars($state) . '. We coordinate with society guards and building management to ensure smooth elevator access and loading.'
    ],
    [
        'q' => 'Is transit insurance provided for moves from ' . htmlspecialchars($city) . '?',
        'a' => 'Absolutely. ' . htmlspecialchars($company3) . ' provides comprehensive transit insurance coverage for all household, commercial, and vehicle shipments originating in ' . htmlspecialchars($city) . '. This guarantees complete financial protection against any unforeseen accidental events during transit.'
    ],
    [
        'q' => 'How many days in advance should I book my move in ' . htmlspecialchars($city) . '?',
        'a' => 'We recommend booking 2 to 4 days in advance for local household shifting within ' . htmlspecialchars($city) . ', and 5 to 7 days for inter-state long distance relocations. However, we also accommodate urgent, same-day moves depending on vehicle and crew availability.'
    ],
    [
        'q' => 'What packing materials are used to protect fragile items and electronics?',
        'a' => 'We use premium 5-layer heavy-duty corrugated cartons, air bubble wrap, edge guards, waterproof stretch film, and thermocol padding. Delicate crockery and LED TVs are packed in specialized custom wooden crates upon request to guarantee zero damage.'
    ],
    [
        'q' => 'Can you safely transport my car or two-wheeler bike from ' . htmlspecialchars($city) . '?',
        'a' => 'Yes, we operate specialized enclosed car carrier trailers and dedicated two-wheeler carrier frames equipped with safety wheel-locking clamps. We pick up your vehicle right from your doorstep in ' . htmlspecialchars($city) . ' and deliver it safely across India.'
    ]
];
?>

<!-- =========================================================================
     CITY FAQS SECTION - Modern Split FAQ & Assistance Hub
     ========================================================================= -->
<section class="cfaq-section position-relative overflow-hidden" id="cityFaqsSection">
    <div class="container position-relative z-2">
        <div class="row g-4 g-xl-5">
            <!-- Left Column: Header & Sticky Support Hub -->
            <div class="col-lg-5 col-xl-4">
                <div class="cfaq-sticky-sidebar">
                    <div class="cproc-eyebrow mb-2">
                        <span class="cproc-dash">—</span>
                        <span class="cproc-dot">•</span>
                        <span class="cproc-eyebrow-text">COMMON QUERIES</span>
                        <span class="cproc-dot">•</span>
                        <span class="cproc-dash">—</span>
                    </div>
                    <h2 class="cproc-heading fw-bolder mb-3">
                        Got Questions About Shifting in <span class="cproc-highlight"><?= htmlspecialchars($city) ?></span>?
                    </h2>
                    <p class="cfaq-sidebar-lead mb-4">
                        Everything you need to know about transparent quotes, safety protocols, and transit timelines across <?= htmlspecialchars($city) ?>.
                    </p>

                    <!-- Support Card -->
                    <div class="cfaq-help-card">
                        <div class="cfaq-help-header d-flex align-items-center gap-2 mb-3">
                            <span class="cabout-pulse-dot"></span>
                            <span class="cfaq-help-badge-text">24/7 Shifting Consultation</span>
                        </div>
                        <h3 class="cfaq-help-title mb-2">Need Direct Answers?</h3>
                        <p class="cfaq-help-desc mb-4">
                            Speak directly with our <?= htmlspecialchars($city) ?> relocation manager for instant pricing or to schedule a free pre-move survey.
                        </p>
                        <div class="d-flex flex-column gap-2">
                            <a <?= $phonehtml ?> class="crev-phone-btn w-100 justify-content-center">
                                <i class="bi bi-telephone-fill"></i>
                                <span>Call <?= htmlspecialchars($phone) ?></span>
                            </a>
                            <button type="button" class="crev-cta-btn w-100 justify-content-center" data-bs-toggle="modal" data-bs-target="#qteModal">
                                <span>Get Instant City Quote</span>
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Card-Based Accordion -->
            <div class="col-lg-7 col-xl-8">
                <div class="cfaq-accordion-group d-flex flex-column gap-3">
                    <?php foreach ($city_faqs as $idx => $faq): ?>
                        <div class="cfaq-card <?= ($idx === 0) ? 'cfaq-card-open' : '' ?>">
                            <button class="cfaq-toggle-btn w-100 d-flex align-items-center justify-content-between text-start" type="button" aria-expanded="<?= ($idx === 0) ? 'true' : 'false' ?>">
                                <div class="d-flex align-items-center gap-3">
                                    <span class="cfaq-num-badge">0<?= $idx + 1 ?></span>
                                    <span class="cfaq-q-title"><?= $faq['q'] ?></span>
                                </div>
                                <span class="cfaq-icon-wrap flex-shrink-0">
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </button>
                            <div class="cfaq-body-collapse">
                                <div class="cfaq-body-content">
                                    <p class="cfaq-a-text mb-0"><?= $faq['a'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var faqSection = document.getElementById('cityFaqsSection');
    if (!faqSection) return;

    var toggles = faqSection.querySelectorAll('.cfaq-toggle-btn');
    toggles.forEach(function(btn) {
        btn.addEventListener('click', function() {
            var card = this.closest('.cfaq-card');
            var isAlreadyOpen = card.classList.contains('cfaq-card-open');
            
            // Close all cards
            faqSection.querySelectorAll('.cfaq-card').forEach(function(c) {
                c.classList.remove('cfaq-card-open');
                var b = c.querySelector('.cfaq-toggle-btn');
                if (b) b.setAttribute('aria-expanded', 'false');
            });

            // If it wasn't open, open it
            if (!isAlreadyOpen) {
                card.classList.add('cfaq-card-open');
                this.setAttribute('aria-expanded', 'true');
            }
        });
    });
});
</script>
