<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_current' => "Local Shifting in $city",
    'bc_title_white' => 'Local Shifting in',
    'bc_title_orange' => $city,
    'bc_desc' => "Fast, affordable same-day local home and office shifting services in $city with trained neighborhood movers."
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
                        <span class="service-highlight-pill"><i class="bi bi-clock"></i> Same-Day Relocation</span>
                        <span class="service-highlight-pill"><i class="bi bi-truck"></i> Dedicated City Mini-Trucks</span>
                        <span class="service-highlight-pill"><i class="bi bi-shield-check"></i> Damage-Free Guarantee</span>
                        <span class="service-highlight-pill"><i class="bi bi-tools"></i> Free Furniture Dismantling</span>
                        <span class="service-highlight-pill"><i class="bi bi-cash-coin"></i> Zero Hidden Costs</span>
                    </div>

                    <h2 class="service-section-title">Swift &amp; Reliable Same-Day Local Shifting in <?= $city ?></h2>
                    <div class="about-service-text">
                        <p>
                            Moving within <?= $city ?> to a new apartment, housing society, or commercial office? <strong><?= $company3 ?></strong> delivers fast, dependable, and budget-friendly same-day local shifting solutions across <?= $city ?> and neighboring localities.
                        </p>
                        <p>
                            Even for short distances within the same city, relocating heavy double beds, wardrobes, refrigerators, washing machines, and fragile crockery requires professional equipment and trained handlers. Our dedicated <?= $city ?> relocation crew takes complete care of every step—from morning packing and loading to quick transit and complete evening room arrangement at your new destination.
                        </p>

                        <h3>Why Choose <?= $company3 ?> for Local Relocation in <?= $city ?>?</h3>
                        <p>
                            With dedicated closed-body mini trucks (Tata Ace, Mahindra Bolero Maxi Truck, 14ft containers), experienced neighborhood packing staff, and complete transit care, <strong><?= $company3 ?></strong> guarantees an effortless moving experience across <?= $city ?>.
                        </p>
                        <p>
                            We provide clear, all-inclusive quotations covering packing materials, labor, loading, stairs/lift transit, and vehicle fuel with 100% pricing transparency.
                        </p>                        <!-- SEO Pricing Table -->
                        <div class="service-pricing-card">
                            <div class="service-pricing-header">
                                <h4><i class="bi bi-tag-fill text-warning"></i> Estimated Local Shifting Rates in <?= $city ?></h4>
                                <span class="pricing-badge">Updated Pricing</span>
                            </div>
                            <div class="table-responsive">
                                <table class="table service-pricing-table text-center align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-start ps-3">Move Type</th>
                                            <th>Up to 10 km</th>
                                            <th>10 - 25 km</th>
                                            <th>25 km+</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="fw-bold text-start ps-3">1 RK / Few Items Relocation</td>
                                            <td>Rs. 2,500 - 4,500</td>
                                            <td>Rs. 3,500 - 6,000</td>
                                            <td class="rate-highlight">Rs. 5,000 - 8,500</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold text-start ps-3">1 BHK House Relocation</td>
                                            <td>Rs. 3,500 - 6,500</td>
                                            <td>Rs. 5,500 - 8,500</td>
                                            <td class="rate-highlight">Rs. 7,500 - 11,500</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold text-start ps-3">2 BHK House Relocation</td>
                                            <td>Rs. 6,000 - 9,500</td>
                                            <td>Rs. 8,500 - 12,500</td>
                                            <td class="rate-highlight">Rs. 11,000 - 15,500</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold text-start ps-3">3 BHK House Relocation</td>
                                            <td>Rs. 9,000 - 14,000</td>
                                            <td>Rs. 12,500 - 17,500</td>
                                            <td class="rate-highlight">Rs. 15,500 - 21,000</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold text-start ps-3">4+ BHK / Villa Move</td>
                                            <td>Rs. 13,000 - 19,000</td>
                                            <td>Rs. 17,000 - 23,000</td>
                                            <td class="rate-highlight">Rs. 21,000 - 28,000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p class="pricing-note"><i class="bi bi-info-circle me-1"></i> Exact quotation may vary based on exact floor, lift availability, packing layers, and distance.</p>
                        </div>
                    </div>

                    <!-- Step-by-Step Moving Process -->
                    <h2 class="service-section-title mt-5">Our Local Shifting Process in <?= $city ?></h2>
                    <p class="text-muted">A streamlined same-day 4-step moving timeline designed for your ease:</p>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h3>Morning Arrival &amp; Packing</h3>
                            <p>Our team arrives at your doorstep with carton boxes, bubble wrap, and adhesive tape to pack all items systematically.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h3>Furniture Dismantling</h3>
                            <p>Large double beds, dining tables, and wardrobes are dismantled by skilled carpenters to ensure easy passage through doorways.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h3>Fast City Transit</h3>
                            <p>Goods are loaded into dedicated closed container trucks and transported swiftly across <?= $city ?> via optimal traffic routes.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h3>Unloading &amp; Reassembly</h3>
                            <p>We unload every box, place furniture into respective rooms, reassemble beds, and remove discarded packing debris.</p>
                        </div>
                    </div>

                    <!-- Why Choose Us Grid -->
                    <h2 class="service-section-title mt-5">Why Choose Us in <?= $city ?></h2>
                    <div class="why-choose-grid">
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-lightning-charge-fill"></i></div>
                            <div class="choose-content">
                                <h3>Guaranteed Same-Day Move</h3>
                                <p>We start in the morning and have you fully settled into your new <?= $city ?> home by evening.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-box-seam"></i></div>
                            <div class="choose-content">
                                <h3>Quality Packaging Materials</h3>
                                <p>Heavy-duty cardboard cartons, bubble wrap, and moving blankets to keep electronics and mirrors safe.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-people-fill"></i></div>
                            <div class="choose-content">
                                <h3>Polite &amp; Trained Crew</h3>
                                <p>Background-verified, punctual local movers who treat your personal goods with utmost care.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-currency-rupee"></i></div>
                            <div class="choose-content">
                                <h3>Transparent Flat Quotation</h3>
                                <p>Upfront pricing covering labor, fuel, and stairs handling with zero surprise charges on moving day.</p>
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
                            "I shifted my 2 BHK apartment within <?= $city ?>. The <?= $company3 ?> team was super fast and efficient. They arrived at 9:00 AM, packed everything neatly in sturdy boxes, and had all our furniture assembled in the new flat by 3:00 PM. Highly recommend their local moving service!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">V</div>
                            <div class="user-name">
                                <div class="fw-bold text-dark fs-6">Vikram Joshi</div>
                                <span>Resident in <?= $city ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- FAQs Accordion -->
                    <h2 class="service-section-title mt-5">Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ls-1" aria-expanded="false" role="button">
                                <i class="bi bi-question-circle-fill faq-card-icon"></i>
                                <span class="flex-grow-1">How many days in advance should I book local shifting in <?= $city ?>?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ls-1" class="collapse">
                                <div class="faq-card-body">
                                    We recommend booking 2 to 3 days in advance to secure your preferred morning time slot. However, we also provide urgent same-day booking options depending on daily fleet availability in <?= $city ?>.
                                </div>
                            </div>
                        </div>

                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ls-2" aria-expanded="false" role="button">
                                <i class="bi bi-question-circle-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Are loading, labor, and stairs handling charges included?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ls-2" class="collapse">
                                <div class="faq-card-body">
                                    Yes, our written quotation is 100% comprehensive and includes all loading, packing materials, labor, stairs/lift transit, and unloading charges with zero hidden surprises.
                                </div>
                            </div>
                        </div>

                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ls-3" aria-expanded="false" role="button">
                                <i class="bi bi-question-circle-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do you assist with dismantling and assembling furniture?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ls-3" class="collapse">
                                <div class="faq-card-body">
                                    Yes! Our crew comes equipped with screwdrivers, wrenches, and allen keys to dismantle double beds, wardrobes, and modular dining tables, and reassembles them at your new house.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Quick Booking CTA Banner -->
                    <div class="service-quick-cta-banner">
                        <div>
                            <h3>Planning a Quick Local Move in <?= $city ?>?</h3>
                            <p>Call our local dispatch team for an instant quote and same-day slot availability.</p>
                        </div>
                        <div class="cta-action-btns">
                            <a href="<?= $phonehtml ?>" class="btn-banner-call">
                                <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
                            </a>
                            <button type="button" class="btn-banner-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                                <i class="bi bi-calculator"></i> Local Move Quote
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('city_services/city_service_sidebar', ['active_service' => 'local-shifting-in-'.$ctlink]); ?>
            </div>
        </div>
    </div>
</section>
