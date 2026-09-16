<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); 
?>

<!-- Dynamic Hero Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Frequently Asked Questions',
    'bc_desc' => "Find clear, honest answers to common queries regarding packing materials, shifting rates, delivery timelines, and transit insurance at {$company3}.",
    'breadcrumbs' => [
        ['name' => 'FAQs']
    ]
]);
?>

<!-- FAQ MAIN PAGE CONTENT -->
<section class="faq-page-section py-5">
    <div class="container position-relative z-2">

        <!-- Section Header -->
        <div class="text-center mb-5">
            <h2 class="bike-heading-title fw-bolder mb-2">
                Have Questions? We Have <span class="text-orange">Clear Answers</span>
            </h2>
            <div class="bike-gold-divider d-flex align-items-center justify-content-center my-3">
                <span class="divider-line"></span>
                <span class="divider-diamond"><i class="bi bi-question-circle-fill"></i></span>
                <span class="divider-line"></span>
            </div>
            <p class="mx-auto bike-section-desc mb-0">
                Explore our comprehensive relocation guide and find quick resolutions to the most common queries about our packing and shifting services.
            </p>
        </div>

        <!-- FAQ Accordion List -->
        <div class="row justify-content-center mb-5 pb-lg-3">
            <div class="col-lg-10">
                <div class="accordion faq-accordion" id="relocationFaq">

                    <!-- FAQ 1: Pricing -->
                    <div class="accordion-item faq-item" data-category="pricing">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="bi bi-currency-rupee text-orange me-2"></i> How are packers and movers charges calculated by <?= htmlspecialchars($company3) ?>?
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#relocationFaq">
                            <div class="accordion-body">
                                <p>Our relocation quotations are formulated transparently using four primary parameters:</p>
                                <ul>
                                    <li><strong>Volume &amp; Weight of Goods:</strong> Number of rooms (1 BHK, 2 BHK, 3 BHK) determining the quantity of protective packaging materials and truck capacity required.</li>
                                    <li><strong>Total Highway Distance:</strong> Exact distance from origin city to destination pin code including interstate toll taxes.</li>
                                    <li><strong>Floor Levels &amp; Elevator Availability:</strong> Lift access at origin and delivery floors determines labor time and specialized lifting aids.</li>
                                    <li><strong>Optional Add-On Value Services:</strong> Vehicle car/bike carrier space, custom wooden crating for delicate marble/temple items, or interim climate-controlled warehousing.</li>
                                </ul>
                                <p>Every estimate is provided in writing with a complete itemized breakdown before move day.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2: Pricing -->
                    <div class="accordion-item faq-item" data-category="pricing">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="bi bi-shield-x text-orange me-2"></i> Are there any hidden charges, gate fees, or surprise unloading demands?
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#relocationFaq">
                            <div class="accordion-body">
                                <p><strong>Absolutely not.</strong> We have a strict zero-hidden-surcharge corporate policy. What is committed in your official quotation sheet is the final payable amount. Unlike unorganized operators who quote low initially and demand unexpected "stairs fees", "toll supplements", or "parking surcharges" before releasing goods, our quotes are 100% all-inclusive.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3: Booking -->
                    <div class="accordion-item faq-item" data-category="all">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="bi bi-calendar-check text-orange me-2"></i> How much advance notice is recommended for booking a move?
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#relocationFaq">
                            <div class="accordion-body">
                                <p>For standard local home shifting within the same city, booking <strong>24 to 48 hours in advance</strong> is sufficient. For interstate or long-distance relocation across India, we advise confirming your slot <strong>3 to 5 days prior</strong> so that dedicated closed containers, transit permits, and verified packing supervisors are scheduled specifically for your shipment.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4: Packing -->
                    <div class="accordion-item faq-item" data-category="packing">
                        <h3 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="bi bi-box-seam text-orange me-2"></i> What protective packaging materials do you use for fragile goods?
                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#relocationFaq">
                            <div class="accordion-body">
                                <p>We never use recycled grocery cartons or old newspapers. We employ a standardized 5-tier packaging protocol:</p>
                                <ul>
                                    <li><strong>7-Ply Virgin Corrugated Boxes:</strong> High-density crush-resistant cartons for crockery, kitchenware, and books.</li>
                                    <li><strong>Air-Bubble Cushioning Film:</strong> Shock-absorbent wraps for glass tables, television screens, and mirrors.</li>
                                    <li><strong>Waterproof Stretch &amp; Foam Film:</strong> Protects upholstered fabric sofas, mattresses, and wardrobe items from highway dust and moisture.</li>
                                    <li><strong>Reinforced Corner Protectors:</strong> Heavy-gauge corrugated edge-buffers for furniture corners.</li>
                                    <li><strong>Custom Wooden Crates:</strong> Heavy crating built on demand for expensive glass artworks, marble temples, and oversized LED panels.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5: Packing -->
                    <div class="accordion-item faq-item" data-category="packing">
                        <h3 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <i class="bi bi-tools text-orange me-2"></i> Do you provide dismantling and reassembly of bulky furniture?
                            </button>
                        </h3>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#relocationFaq">
                            <div class="accordion-body">
                                <p><strong>Yes, our in-house crew includes experienced carpenters.</strong> We carefully dismantle modular beds, multi-door wardrobes, dining table tops, and wall-mounted televisions at the origin. Upon delivery at your new home, our team reassembles and positions each piece in your designated rooms.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6: Insurance -->
                    <div class="accordion-item faq-item" data-category="insurance">
                        <h3 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <i class="bi bi-shield-fill-check text-orange me-2"></i> How does your transit insurance protect my goods?
                            </button>
                        </h3>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#relocationFaq">
                            <div class="accordion-body">
                                <p>We offer comprehensive <strong>All-Risk Transit Insurance</strong> underwritten by leading national insurance corporations. This covers accidental transit damages, highway mishaps, fire, vehicle overturning, or theft during transit. You receive an official policy declaration with policy number before the container is dispatched.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 7: Transit -->
                    <div class="accordion-item faq-item" data-category="transit">
                        <h3 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <i class="bi bi-geo-alt-fill text-orange me-2"></i> Can I track my moving container vehicle in real time?
                            </button>
                        </h3>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#relocationFaq">
                            <div class="accordion-body">
                                <p>Yes. Every highway container vehicle in our fleet is equipped with satellite GPS tracking. In addition, you are assigned a dedicated <strong>Personal Relocation Coordinator</strong> who provides proactive daily transit milestones and ETA updates via call and WhatsApp until final unloading.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 8: Packing -->
                    <div class="accordion-item faq-item" data-category="packing">
                        <h3 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                <i class="bi bi-exclamation-triangle-fill text-orange me-2"></i> What items are strictly restricted or prohibited from being packed?
                            </button>
                        </h3>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#relocationFaq">
                            <div class="accordion-body">
                                <p>For safety and transport compliance, the following items cannot be transported in cargo trucks:</p>
                                <ul>
                                    <li><strong>Inflammable Substances:</strong> Gas cylinders, kerosene, petrol, motor fuel, thinners, and firecrackers.</li>
                                    <li><strong>Perishable Food Items:</strong> Fresh vegetables, cooked food, or dairy that spoil over multi-day transit.</li>
                                    <li><strong>Valuables &amp; Sensitive Documents:</strong> Jewelry, cash, original property deeds, passbooks, and identity cards must be carried personally by the customer.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 9: Transit -->
                    <div class="accordion-item faq-item" data-category="transit">
                        <h3 class="accordion-header" id="headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                <i class="bi bi-building-lock text-orange me-2"></i> Do you offer short-term or long-term warehousing facilities?
                            </button>
                        </h3>
                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#relocationFaq">
                            <div class="accordion-body">
                                <p>Yes, we operate modern, CCTV-monitored, 24x7 secured warehousing facilities across major Indian transit hubs. Goods are stored on raised wooden pallets with moisture barriers and routine pest protection. Flexible weekly and monthly storage plans are available.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 10: Insurance -->
                    <div class="accordion-item faq-item" data-category="insurance">
                        <h3 class="accordion-header" id="headingTen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                <i class="bi bi-award-fill text-orange me-2"></i> What is the claim settlement process in the rare event of damage?
                            </button>
                        </h3>
                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#relocationFaq">
                            <div class="accordion-body">
                                <p>In the rare event of transit damage, our coordinator initiates an expedited claim directly with the insurance underwriter:</p>
                                <ul>
                                    <li>Notify our team within 48 hours of delivery with photos/videos of the damaged item.</li>
                                    <li>A joint inspection report or digital survey is completed within 2 business days.</li>
                                    <li>Claim assessment and reimbursement/repair compensation is expedited directly to your bank account without tedious bureaucracy.</li>
                                </ul>
                            </div>
                        </div>
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
                    Still Have Questions? Speak With <span class="text-orange"><?= htmlspecialchars($company3) ?></span>
                </h3>
                <p class="about-consult-desc mx-auto">
                    Our relocation supervisors are available 24x7 to answer your specific queries, clarify vehicle slots, or provide a free customized quote.
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