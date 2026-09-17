<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_current' => "Car Transportation in $city",
    'bc_title_white' => 'Car Transportation in',
    'bc_title_orange' => $city,
    'bc_desc' => "Safest, enclosed carrier car transportation services in $city with door-to-door delivery and live GPS tracking."
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
                        <span class="service-highlight-pill"><i class="bi bi-shield-check"></i> Zero-Scratch Guarantee</span>
                        <span class="service-highlight-pill"><i class="bi bi-truck-front"></i> Enclosed Car Carrier</span>
                        <span class="service-highlight-pill"><i class="bi bi-geo-alt"></i> Real-Time GPS Tracking</span>
                        <span class="service-highlight-pill"><i class="bi bi-door-open"></i> Doorstep Pickup &amp; Drop</span>
                        <span class="service-highlight-pill"><i class="bi bi-file-earmark-medical"></i> 100% Transit Insurance</span>
                    </div>

                    <h2 class="service-section-title">Reliable Car Transportation &amp; Relocation in <?= $city ?></h2>
                    <div class="about-service-text">
                        <p>
                            Are you looking for reliable and damage-free car transportation services in <?= $city ?>? <strong><?= $company3 ?></strong> offers the safest, IBA-approved vehicle relocation solutions for sedans, hatchbacks, luxury SUVs, and vintage cars in <?= $city ?> and across India.
                        </p>
                        <p>
                            We treat your car as a valuable asset. Whether you are moving across town or shifting interstate to Delhi, Mumbai, Bengaluru, Hyderabad, or Kolkata, our specialized open and closed double-deck car carriers ensure zero wear-and-tear, stone chip damage, or unnecessary odometer mileage during transit in <?= $city ?>.
                        </p>

                        <h3>Why Ship Your Car with <?= $company3 ?> in <?= $city ?>?</h3>
                        <p>
                            Driving thousands of kilometers on highways exposes your personal vehicle to extreme road fatigue, tire punctures, speeding hazards, and high toll taxes. With <strong><?= $company3 ?></strong>, your vehicle is secured onto a dedicated automotive carrier fitted with hydraulic ramps and four-point wheel tie-down safety locks.
                        </p>
                        <p>
                            Before loading, our certified technician conducts a thorough pre-move car inspection report, detailing existing body conditions, odometer readings, and battery status. You receive live SMS/WhatsApp location alerts until the car is handed back to you in pristine condition.
                        </p>

                        <!-- SEO Pricing Table -->
                        <div class="service-pricing-card">
                            <div class="service-pricing-header">
                                <h4><i class="bi bi-car-front text-warning"></i> Estimated Car Transportation Charges in <?= $city ?></h4>
                                <span class="pricing-badge">Vehicle Rates</span>
                            </div>
                            <div class="table-responsive">
                                <table class="table service-pricing-table table-hover text-center align-middle">
                                    <thead>
                                        <tr>
                                            <th>Car Category</th>
                                            <th>100 - 350 KM</th>
                                            <th>350 - 750 KM</th>
                                            <th>750 - 1200 KM</th>
                                            <th>1200 - 2000 KM</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="fw-bold text-start ps-3">Hatchback (Swift, i10, Tiago)</td>
                                            <td>Rs. 5,500 - 10,000</td>
                                            <td>Rs. 7,500 - 13,500</td>
                                            <td>Rs. 9,500 - 16,000</td>
                                            <td class="rate-highlight">Rs. 11,500 - 19,000</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold text-start ps-3">Sedan (Dzire, City, Verna)</td>
                                            <td>Rs. 7,000 - 11,500</td>
                                            <td>Rs. 9,500 - 15,000</td>
                                            <td>Rs. 12,000 - 18,000</td>
                                            <td class="rate-highlight">Rs. 14,000 - 22,000</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold text-start ps-3">Compact SUV / Crossover (Creta, Brezza)</td>
                                            <td>Rs. 8,500 - 13,000</td>
                                            <td>Rs. 11,500 - 17,000</td>
                                            <td>Rs. 14,000 - 20,500</td>
                                            <td class="rate-highlight">Rs. 16,500 - 24,500</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold text-start ps-3">Large SUV / Luxury (Fortuner, BMW, Merc)</td>
                                            <td>Rs. 12,000 - 18,000</td>
                                            <td>Rs. 15,500 - 23,000</td>
                                            <td>Rs. 19,000 - 27,000</td>
                                            <td class="rate-highlight">Rs. 22,500 - 32,000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p class="pricing-note"><i class="bi bi-info-circle me-1"></i> Car carrier rates depend on car dimensions, carrier choice (open vs closed container), and doorstep handover distance.</p>
                        </div>
                    </div>

                    <!-- Step-by-Step Moving Process -->
                    <h2 class="service-section-title mt-5">Our Car Transportation Process in <?= $city ?></h2>
                    <p class="text-muted">A disciplined 4-stage vehicle transit protocol guaranteeing zero transit damage:</p>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h3>Doorstep Inspection &amp; Audit</h3>
                            <p>We document tire condition, fuel levels, and existing exterior marks on a digital car condition audit sheet with photos.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h3>Parts Cushioning &amp; Prep</h3>
                            <p>Side-view mirrors, antenna, spoilers, and delicate trims are wrapped with thick protective foam layers to avoid rub-scratches.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h3>Hydraulic Deck Loading</h3>
                            <p>The car is driven onto the trailer ramp and clamped securely with heavy-duty wheel chocks and ratchet tie-down straps.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h3>Doorstep Delivery &amp; Signoff</h3>
                            <p>We unload and hand over your car at your destination doorstep. You cross-check all parameters with the initial audit report.</p>
                        </div>
                    </div>

                    <!-- Why Choose Us Grid -->
                    <h2 class="service-section-title mt-5">Why Choose Us in <?= $city ?></h2>
                    <div class="why-choose-grid">
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-shield-fill-check"></i></div>
                            <div class="choose-content">
                                <h3>Hydraulic Ramp &amp; Wheel Chocks</h3>
                                <p>Specialized wheel anchors prevent any forward or sideways vehicle movement inside the carrier.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-truck-flatbed"></i></div>
                            <div class="choose-content">
                                <h3>Modern Covered Car Carriers</h3>
                                <p>Weatherproof, enclosed trailer containers protecting vehicles from sun, rain, and highway dust.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-geo-alt-fill"></i></div>
                            <div class="choose-content">
                                <h3>Real-Time GPS Route Tracking</h3>
                                <p>Track your vehicle's interstate journey 24/7 with dedicated customer support updates.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-file-earmark-lock-fill"></i></div>
                            <div class="choose-content">
                                <h3>Transit Insurance Assurance</h3>
                                <p>Comprehensive cargo transit insurance guaranteeing total financial protection against any road incident.</p>
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
                            "I shipped my Hyundai Creta from <?= $city ?> to Pune using <?= $company3 ?>. The team was courteous, provided a clear inspection copy, and delivered my car right outside my apartment complex without a single scratch or extra kilometer driven. Truly professional!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">P</div>
                            <div class="user-name">
                                <div class="fw-bold text-dark fs-6">Priya Mehta</div>
                                <span>Car Owner in <?= $city ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- FAQs Accordion -->
                    <h2 class="service-section-title mt-5">Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ct-1" aria-expanded="false" role="button">
                                <i class="bi bi-question-circle-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Can I keep personal luggage or household goods inside the car?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ct-1" class="collapse">
                                <div class="faq-card-body">
                                    No. Loading luggage or heavy items inside the car is strictly forbidden by RTO interstate transit rules. Loose goods can also bounce and damage interior windshields or upholstery during highway turns.
                                </div>
                            </div>
                        </div>

                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ct-2" aria-expanded="false" role="button">
                                <i class="bi bi-question-circle-fill faq-card-icon"></i>
                                <span class="flex-grow-1">What documents are mandatory for car transportation in <?= $city ?>?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ct-2" class="collapse">
                                <div class="faq-card-body">
                                    You need to submit copies of: 1) Vehicle Registration Certificate (RC Book), 2) Valid Car Insurance Policy, 3) Pollution Under Control (PUC) certificate, and 4) Owner ID Proof (Aadhaar/PAN).
                                </div>
                            </div>
                        </div>

                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ct-3" aria-expanded="false" role="button">
                                <i class="bi bi-question-circle-fill faq-card-icon"></i>
                                <span class="flex-grow-1">How much fuel should remain in the car tank before dispatch?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ct-3" class="collapse">
                                <div class="faq-card-body">
                                    Please keep approximately 10 to 15 liters (around 1/4th tank) of fuel. This is adequate for loading, unloading, and local doorstep delivery while minimizing fire hazard and weight inside the carrier.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Quick Booking CTA Banner -->
                    <div class="service-quick-cta-banner">
                        <div>
                            <h3>Need Safe Car Transportation in <?= $city ?>?</h3>
                            <p>Get a guaranteed quote with free doorstep vehicle pickup today.</p>
                        </div>
                        <div class="cta-action-btns">
                            <a href="<?= $phonehtml ?>" class="btn-banner-call">
                                <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
                            </a>
                            <button type="button" class="btn-banner-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                                <i class="bi bi-calculator"></i> Car Moving Quote
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('city_services/city_service_sidebar', ['active_service' => 'car-transport-in-'.$ctlink]); ?>
            </div>
        </div>
    </div>
</section>
