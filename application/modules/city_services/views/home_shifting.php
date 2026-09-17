<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_current' => "Home Shifting in $city",
    'bc_title_white' => 'Home Shifting in',
    'bc_title_orange' => $city,
    'bc_desc' => "Verified, IBA-approved, and affordable household relocation services in $city with 100% transit safety."
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
                        <span class="service-highlight-pill"><i class="bi bi-shield-check"></i> 100% Safe Transit</span>
                        <span class="service-highlight-pill"><i class="bi bi-box-seam"></i> Multi-Layer Packing</span>
                        <span class="service-highlight-pill"><i class="bi bi-truck"></i> Dedicated Container</span>
                        <span class="service-highlight-pill"><i class="bi bi-clock-history"></i> On-Time Delivery</span>
                        <span class="service-highlight-pill"><i class="bi bi-award"></i> IBA Approved</span>
                    </div>

                    <h2 class="service-section-title">Hassle-Free Home Shifting in <?= $city ?> for a Smooth Move</h2>
                    <div class="about-service-text">
                        <p>
                            Looking for reputed and trusted packers and movers to fulfill your house shifting requirement in <?= $city ?>? Look no further! <strong><?= $company3 ?></strong> is a leading provider of professional home relocation services in <?= $city ?>. As one of the most trusted brands in the logistics sector, we handle every house move with utmost accuracy, care, and punctuality in <?= $city ?>.
                        </p>
                        <p>
                            Our certified moving crew is dedicated to safeguarding your precious household belongings at every touchpoint. Each stage of your home relocation in <?= $city ?> is systematically planned—from pre-move survey and high-grade packing to careful loading, GPS-tracked transportation, and doorstep reassembly. We optimize manpower, packing materials, and route planning to deliver top-tier residential shifting at the most affordable price in <?= $city ?>.
                        </p>

                        <h3>Comprehensive Household Relocation Solutions in <?= $city ?></h3>
                        <p>
                            Today, <strong><?= $company3 ?></strong> is an ISO 9001:2015 certified logistics leader with over <?= $yearsExperience ?> years of industry excellence. We have relocated thousands of happy families across <?= $city ?> and pan-India. Our full-spectrum house shifting covers everything: fragile kitchen glassware, heavy electronic appliances (LED TVs, refrigerators, washing machines), bulky furniture dismantling, and delicate wardrobe items.
                        </p>
                        <p>
                            We employ only heavy-duty corrugated cartons, bubble wrap, foam rolls, edge guards, and stretch film. Moreover, our optional transit insurance gives you complete peace of mind against unforeseen road risks, backed by quick claims settlement and round-the-clock tracking assistance in <?= $city ?>.
                        </p>

                        <!-- SEO Pricing Table -->
                        <div class="service-pricing-card">
                            <div class="service-pricing-header">
                                <h4><i class="bi bi-tag-fill text-warning"></i> Estimated House Shifting Rates in <?= $city ?></h4>
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
                    <h2 class="service-section-title mt-5">Our Home Shifting Process in <?= $city ?></h2>
                    <p class="text-muted">Our trained moving specialists follow a proven 4-stage protocol for maximum efficiency:</p>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h3>Dismantling &amp; Packing</h3>
                            <p>We disassemble double beds, wardrobes, and modular units, wrapping each item in premium bubble wrap and corrugated sheets.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h3>Secure Loading</h3>
                            <p>Using hydraulic dollies and safety belts, heavy furniture is loaded at base levels and fragile boxes are cushioned on top.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h3>Safe Transit</h3>
                            <p>Goods travel in sealed, weather-proof container vehicles with active GPS tracking for punctual delivery across <?= $city ?>.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h3>Unloading &amp; Setup</h3>
                            <p>Our staff unloads, unpacks, and reassembles beds and dining tables in designated rooms at your new address.</p>
                        </div>
                    </div>

                    <!-- Why Choose Us Grid -->
                    <h2 class="service-section-title mt-5">Why Choose Us in <?= $city ?></h2>
                    <div class="why-choose-grid">
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-box-seam-fill"></i></div>
                            <div class="choose-content">
                                <h3>5-Layer Protective Packing</h3>
                                <p>Heavy-duty cardboard cartons, bubble wrap, foam, waterproof sheets, and corner protectors.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-tools"></i></div>
                            <div class="choose-content">
                                <h3>Free Furniture Reassembly</h3>
                                <p>Skilled carpenters for quick dismantling and setup of beds, tables, and cabinets.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-person-check-fill"></i></div>
                            <div class="choose-content">
                                <h3>Verified Background-Checked Crew</h3>
                                <p>Polite, uniformed, and experienced relocation specialists who treat your items like their own.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-cash-stack"></i></div>
                            <div class="choose-content">
                                <h3>Transparent All-Inclusive Pricing</h3>
                                <p>Clear upfront quotations with zero hidden surprises or surprise surcharge fees.</p>
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
                            "We shifted our entire 3 BHK from <?= $city ?>. From the beginning, <?= $company3 ?> was prompt and meticulous. The boys carefully dismantled our hydraulic king bed, wrapped each delicate item in bubble film, and delivered everything without a single scratch. Five stars!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">R</div>
                            <div class="user-name">
                                <div class="fw-bold text-dark fs-6">Rohit Sharma</div>
                                <span>Homeowner in <?= $city ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- FAQs Accordion -->
                    <h2 class="service-section-title mt-5">Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-hs-1" aria-expanded="false" role="button">
                                <i class="bi bi-question-circle-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do you dismantle and reassemble double beds and wardrobes in <?= $city ?>?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-hs-1" class="collapse">
                                <div class="faq-card-body">
                                    Yes, absolutely. Our packing crew comes equipped with all necessary tools (screwdrivers, allen keys, wrenches) to safely disassemble beds, modular wardrobes, and dining tables, and reassembles them at your destination home in <?= $city ?>.
                                </div>
                            </div>
                        </div>

                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-hs-2" aria-expanded="false" role="button">
                                <i class="bi bi-question-circle-fill faq-card-icon"></i>
                                <span class="flex-grow-1">What items are restricted and cannot be transported?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-hs-2" class="collapse">
                                <div class="faq-card-body">
                                    For safety and regulatory compliance, we do not transport flammable chemicals, petrol/kerosene, gas cylinders, fireworks, perishable food, loose cash, gold jewelry, or legal property deeds. We recommend carrying jewelry and personal deeds personally.
                                </div>
                            </div>
                        </div>

                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-hs-3" aria-expanded="false" role="button">
                                <i class="bi bi-question-circle-fill faq-card-icon"></i>
                                <span class="flex-grow-1">How many days in advance should I book home shifting in <?= $city ?>?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-hs-3" class="collapse">
                                <div class="faq-card-body">
                                    We advise booking at least 2 to 4 days ahead for local shifting in <?= $city ?> and 4 to 7 days in advance for domestic long-distance moves to reserve optimal time slots, packing materials, and container vehicles. Same-day emergency moves are also accommodated subject to fleet availability.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Quick Booking CTA Banner -->
                    <div class="service-quick-cta-banner">
                        <div>
                            <h3>Planning Your Home Move in <?= $city ?>?</h3>
                            <p>Book with <?= $company3 ?> today and get up to 20% discount on advance bookings.</p>
                        </div>
                        <div class="cta-action-btns">
                            <a href="<?= $phonehtml ?>" class="btn-banner-call">
                                <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
                            </a>
                            <button type="button" class="btn-banner-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                                <i class="bi bi-calculator"></i> Get Free Quote
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('city_services/city_service_sidebar', ['active_service' => 'home-shifting-in-'.$ctlink]); ?>
            </div>
        </div>
    </div>
</section>
