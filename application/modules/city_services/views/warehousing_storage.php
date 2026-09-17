<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_current' => "Warehousing & Storage in $city",
    'bc_title_white' => 'Warehousing & Storage in',
    'bc_title_orange' => $city,
    'bc_desc' => "Secure, 24/7 CCTV-monitored household goods storage and commercial warehousing services in $city with climate control."
]); 
?>

<!-- Main Page Content Section -->
<section class="service-details-section">
    <div class="container">
        <div class="row">
            <!-- Left Side Content -->
            <div class="col-lg-8">
                <div class="service-main-content">
                    <!-- Service Highlights Badges -->
                    <div class="service-highlights-bar">
                        <span class="service-highlight-pill"><i class="bi bi-camera-video"></i> 24/7 CCTV Surveillance</span>
                        <span class="service-highlight-pill"><i class="bi bi-shield-check"></i> Pest &amp; Moisture Controlled</span>
                        <span class="service-highlight-pill"><i class="bi bi-box-seam"></i> Raised Wooden Pallets</span>
                        <span class="service-highlight-pill"><i class="bi bi-calendar3"></i> Flexible Monthly Plans</span>
                        <span class="service-highlight-pill"><i class="bi bi-truck"></i> Doorstep Pickup &amp; Return</span>
                    </div>

                    <h2 class="service-section-title">Safe, CCTV-Secured Warehousing &amp; Storage in <?= $city ?></h2>
                    <div class="about-service-text">
                        <p>
                            Need temporary or long-term secure storage for your household furniture, home appliances, or commercial goods in <?= $city ?>? <strong><?= $company3 ?></strong> provides state-of-the-art, clean, and 24/7 CCTV-monitored warehouse facilities.
                        </p>
                        <p>
                            Whether you are renovating your existing home, relocating overseas for an assignment, awaiting possession of your new apartment, or managing excess corporate inventory, our modern storage facilities in <?= $city ?> offer raised wooden pallets, advanced fire safety systems, regular pest management, and round-the-clock physical security guards.
                        </p>

                        <h3>Why Choose Our Storage Facilities in <?= $city ?>?</h3>
                        <p>
                            We pick up goods straight from your doorstep in <?= $city ?>, pack them with heavy-duty waterproof stretch film and bubble sheets, barcode/inventory every single carton, and store them securely in your dedicated, locked storage bay.
                        </p>
                        <p>
                            Whenever you are ready to move into your new premises, we deliver all items back to your doorstep, unpack, and arrange everything in place.
                        </p>

                        <!-- SEO Pricing Table -->
                        <div class="service-pricing-card">
                            <div class="service-pricing-header">
                                <h4><i class="bi bi-box-seam text-warning"></i> Estimated Storage &amp; Warehousing Rates in <?= $city ?></h4>
                                <span class="pricing-badge">Monthly Plans</span>
                            </div>
                            <div class="table-responsive">
                                <table class="table service-pricing-table table-hover text-center align-middle">
                                    <thead>
                                        <tr>
                                            <th>Storage Volume</th>
                                            <th>Approximate Area</th>
                                            <th>Monthly Rental</th>
                                            <th>Security Deposit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="fw-bold text-start ps-3">Few Cartons &amp; Small Items</td>
                                            <td>50 - 120 Sq. Ft.</td>
                                            <td class="rate-highlight">Rs. 1,500 - 2,500 / mo</td>
                                            <td>1 Month Refundable</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold text-start ps-3">1 BHK Complete Household Storage</td>
                                            <td>150 - 250 Sq. Ft.</td>
                                            <td class="rate-highlight">Rs. 2,500 - 4,500 / mo</td>
                                            <td>1 Month Refundable</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold text-start ps-3">2 BHK Complete Household Storage</td>
                                            <td>250 - 450 Sq. Ft.</td>
                                            <td class="rate-highlight">Rs. 4,500 - 7,500 / mo</td>
                                            <td>1 Month Refundable</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold text-start ps-3">3 BHK Household / Corporate Inventory</td>
                                            <td>450 - 750 Sq. Ft.</td>
                                            <td class="rate-highlight">Rs. 7,000 - 11,500 / mo</td>
                                            <td>1 Month Refundable</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p class="pricing-note"><i class="bi bi-info-circle me-1"></i> Flexible short-term (1-3 months) and long-term (6-24 months) contracts available with special discounts on annual advance payments.</p>
                        </div>
                    </div>

                    <!-- Step-by-Step Moving Process -->
                    <h2 class="service-section-title mt-5">Our Warehousing &amp; Storage Process in <?= $city ?></h2>
                    <p class="text-muted">A structured 4-step storage custody process for complete peace of mind:</p>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h3>Doorstep Pickup &amp; Packing</h3>
                            <p>Our staff packs your furniture and goods with heavy-duty stretch wrap and moisture-proof coverings at your doorstep.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h3>Barcoding &amp; Inventorying</h3>
                            <p>Each box and item is catalogued on an itemized storage receipt with duplicate copies provided to you for complete verification.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h3>Raised Pallet Staging</h3>
                            <p>Goods are stacked on treated wooden pallets inside pest-controlled bays, 6 inches above floor level to avoid moisture absorption.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h3>Safe Return &amp; Re-Delivery</h3>
                            <p>When you need your goods back, inform us 48 hours in advance, and our crew will deliver and arrange everything at your new home.</p>
                        </div>
                    </div>

                    <!-- Why Choose Us Grid -->
                    <h2 class="service-section-title mt-5">Why Choose Us in <?= $city ?></h2>
                    <div class="why-choose-grid">
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-camera-video-fill"></i></div>
                            <div class="choose-content">
                                <h3>24/7 CCTV &amp; Security Guards</h3>
                                <p>Round-the-clock camera monitoring and guarded premises with biometric access control.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-shield-fill-check"></i></div>
                            <div class="choose-content">
                                <h3>Termite &amp; Moisture Protection</h3>
                                <p>Periodic chemical fumigation and humidity management ensure items stay completely clean and mold-free.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-fire"></i></div>
                            <div class="choose-content">
                                <h3>Automated Fire Safety</h3>
                                <p>Industrial smoke detectors, overhead water sprinklers, and portable fire extinguishers on every aisle.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-file-earmark-lock-fill"></i></div>
                            <div class="choose-content">
                                <h3>Insurance Coverage</h3>
                                <p>Full warehouse risk protection safeguarding your valuables against accidental hazards.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Client Review Slice -->
                    <div class="service-reviews-slice">
                        <div class="rating-row">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="review-text">
                            "We had to vacate our rented flat in <?= $city ?> while our new villa was still under construction. We kept our entire 3 BHK furniture with <?= $company3 ?> for 4 months. When we received the delivery, not a single mattress or sofa had any dust or dampness. Super clean warehouse!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">M</div>
                            <div class="user-name">
                                <div class="fw-bold text-dark fs-6">Manoj Kulkarni</div>
                                <span>Homeowner in <?= $city ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- FAQs Accordion -->
                    <h2 class="service-section-title mt-5">Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ws-1" aria-expanded="false" role="button">
                                <i class="bi bi-question-circle-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Can I access my stored items in <?= $city ?> whenever needed?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ws-1" class="collapse">
                                <div class="faq-card-body">
                                    Yes. By notifying our facility manager 24 hours in advance, you can visit our warehouse during standard business hours to inspect or retrieve any particular items from your storage bay.
                                </div>
                            </div>
                        </div>

                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ws-2" aria-expanded="false" role="button">
                                <i class="bi bi-question-circle-fill faq-card-icon"></i>
                                <span class="flex-grow-1">What is the minimum storage duration in <?= $city ?>?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ws-2" class="collapse">
                                <div class="faq-card-body">
                                    Our minimum storage tenure is just 15 days to 1 month. You can renew or extend month-by-month as per your convenience without any lock-in penalties.
                                </div>
                            </div>
                        </div>

                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ws-3" aria-expanded="false" role="button">
                                <i class="bi bi-question-circle-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Is insurance included for stored items?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ws-3" class="collapse">
                                <div class="faq-card-body">
                                    Yes, comprehensive warehouse storage insurance is available to protect against unforeseen incidents including accidental fire, natural calamities, or transit damage during pickup/drop.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Quick Booking CTA Banner -->
                    <div class="service-quick-cta-banner">
                        <div>
                            <h3>Need Secure Storage Space in <?= $city ?>?</h3>
                            <p>Book your storage unit now with free doorstep pickup options.</p>
                        </div>
                        <div class="cta-action-btns">
                            <a href="<?= $phonehtml ?>" class="btn-banner-call">
                                <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
                            </a>
                            <button type="button" class="btn-banner-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                                <i class="bi bi-calculator"></i> Storage Quote
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('city_services/city_service_sidebar', ['active_service' => 'warehousing-and-storage-in-'.$ctlink]); ?>
            </div>
        </div>
    </div>
</section>
