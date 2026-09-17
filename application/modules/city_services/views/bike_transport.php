<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_current' => "Bike Transportation in $city",
    'bc_title_white' => 'Bike Transportation in',
    'bc_title_orange' => $city,
    'bc_desc' => "Safe, scratch-proof two-wheeler parcel and bike transportation services in $city with dedicated carrier trucks."
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
                        <span class="service-highlight-pill"><i class="bi bi-shield-check"></i> Scratch-Proof Packing</span>
                        <span class="service-highlight-pill"><i class="bi bi-bicycle"></i> All Two-Wheeler Models</span>
                        <span class="service-highlight-pill"><i class="bi bi-truck"></i> Enclosed Bike Carriers</span>
                        <span class="service-highlight-pill"><i class="bi bi-geo-alt"></i> Doorstep Pickup &amp; Drop</span>
                        <span class="service-highlight-pill"><i class="bi bi-file-earmark-check"></i> Transit Insurance</span>
                    </div>

                    <h2 class="service-section-title">Reliable Bike &amp; Two-Wheeler Transportation in <?= $city ?></h2>
                    <div class="about-service-text">
                        <p>
                            Need safe and guaranteed bike shifting services in <?= $city ?>? <strong><?= $company3 ?></strong> provides specialized two-wheeler parcel and transportation solutions ensuring prompt, scratch-free delivery of your motorcycle or scooter across India. Whether relocating an executive commuter bike, a sports motorcycle, or a heavy cruiser like a Royal Enfield, our experienced team treats every ride with utmost precision in <?= $city ?>.
                        </p>
                        <p>
                            We utilize 4-layer specialized packaging—comprising high-density bubble wrap, corrugated sheets, foam pads, and waterproof stretch wrap—protecting all delicate painted panels, rearview mirrors, headlamps, and silencers from vibrations and road friction.
                        </p>

                        <h3>Why Choose <?= $company3 ?> for Bike Relocation in <?= $city ?>?</h3>
                        <p>
                            Riding a motorcycle across long national highways exposes you and your vehicle to high accident hazards, heavy rains, mechanical breakdowns, and severe fatigue. Our dedicated bike transport carriers are engineered with specialized wheel stands and heavy-duty nylon ratchet harness belts that lock your two-wheeler upright and immobile throughout the highway journey.
                        </p>
                        <p>
                            We provide doorstep pickup from any locality in <?= $city ?>, create an upfront pre-transport vehicle condition sheet, and deliver directly to your new address with zero unnecessary mileage added to your speedometer.
                        </p>

                        <!-- SEO Pricing Table -->
                        <div class="service-pricing-card">
                            <div class="service-pricing-header">
                                <h4><i class="bi bi-bicycle text-warning"></i> Estimated Bike Shifting Charges in <?= $city ?></h4>
                                <span class="pricing-badge">Two-Wheeler Rates</span>
                            </div>
                            <div class="table-responsive">
                                <table class="table service-pricing-table table-hover text-center align-middle">
                                    <thead>
                                        <tr>
                                            <th>Two-Wheeler Type</th>
                                            <th>Up to 400 KM</th>
                                            <th>400 - 800 KM</th>
                                            <th>800 - 1400 KM</th>
                                            <th>1400 - 2000 KM</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="fw-bold text-start ps-3">Scooter / Scooty (Activa, Jupiter)</td>
                                            <td>Rs. 2,000 - 3,200</td>
                                            <td>Rs. 2,800 - 3,800</td>
                                            <td>Rs. 3,400 - 4,500</td>
                                            <td class="rate-highlight">Rs. 4,000 - 5,200</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold text-start ps-3">Standard Commuter Bike (100cc - 150cc)</td>
                                            <td>Rs. 2,200 - 3,500</td>
                                            <td>Rs. 3,000 - 4,000</td>
                                            <td>Rs. 3,600 - 4,600</td>
                                            <td class="rate-highlight">Rs. 4,200 - 5,400</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold text-start ps-3">Premium Sports Bike (150cc - 250cc)</td>
                                            <td>Rs. 2,800 - 4,200</td>
                                            <td>Rs. 3,600 - 4,800</td>
                                            <td>Rs. 4,200 - 5,500</td>
                                            <td class="rate-highlight">Rs. 4,800 - 6,200</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold text-start ps-3">Cruiser / Royal Enfield (350cc - 650cc)</td>
                                            <td>Rs. 3,500 - 5,000</td>
                                            <td>Rs. 4,200 - 5,800</td>
                                            <td>Rs. 5,000 - 6,800</td>
                                            <td class="rate-highlight">Rs. 5,800 - 7,800</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p class="pricing-note"><i class="bi bi-info-circle me-1"></i> Charges include complete 4-layer packing, loading, highway toll taxes, and doorstep delivery in <?= $city ?>.</p>
                        </div>
                    </div>

                    <!-- Step-by-Step Moving Process -->
                    <h2 class="service-section-title mt-5">Our Bike Relocation Process in <?= $city ?></h2>
                    <p class="text-muted">A proven 4-stage packaging and shipping method for guaranteed vehicle security:</p>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h3>Inspection &amp; Verification</h3>
                            <p>Our team records the bike's physical condition, checks fuel level, and validates RC and insurance photocopies.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h3>4-Layer Protective Packing</h3>
                            <p>Headlamps, mirrors, tank, and indicators are wrapped with thick bubble film, foam lining, and corrugated cardboard.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h3>Upright Belt Anchoring</h3>
                            <p>The bike is wheeled into the container and fastened with 4-point industrial ratchet belts so it cannot tilt or slide.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h3>Doorstep Delivery &amp; Unpacking</h3>
                            <p>We deliver the two-wheeler directly to your destination home, remove outer packing materials, and assist with initial start-up.</p>
                        </div>
                    </div>

                    <!-- Why Choose Us Grid -->
                    <h2 class="service-section-title mt-5">Why Choose Us in <?= $city ?></h2>
                    <div class="why-choose-grid">
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-shield-fill-check"></i></div>
                            <div class="choose-content">
                                <h3>Multi-Layer Cushioning</h3>
                                <p>Heavy-duty bubble film and foam sheets ensure zero scratches on tank, mirrors, and paintwork.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-truck"></i></div>
                            <div class="choose-content">
                                <h3>Enclosed Vehicle Trucks</h3>
                                <p>Weatherproof sealed containers protect your bike against heavy rains, mud, and highway grit.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-clock-history"></i></div>
                            <div class="choose-content">
                                <h3>Guaranteed Punctual Delivery</h3>
                                <p>Committed delivery timeframes backed by regular GPS location updates during transit.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-shield-lock-fill"></i></div>
                            <div class="choose-content">
                                <h3>Transit Risk Cover</h3>
                                <p>Full transit insurance option safeguarding you against any unforeseen road mishap.</p>
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
                            "I shipped my Royal Enfield Classic 350 from <?= $city ?> to Bengaluru. The packing done at my doorstep was top-notch—they used double bubble sheets and thick carton wrapping around the fuel tank. The bike arrived in mint condition without a single blemish!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">A</div>
                            <div class="user-name">
                                <div class="fw-bold text-dark fs-6">Anand Sharma</div>
                                <span>Royal Enfield Owner in <?= $city ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- FAQs Accordion -->
                    <h2 class="service-section-title mt-5">Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-bt-1" aria-expanded="false" role="button">
                                <i class="bi bi-question-circle-fill faq-card-icon"></i>
                                <span class="flex-grow-1">What documents do I need to provide for bike shifting from <?= $city ?>?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-bt-1" class="collapse">
                                <div class="faq-card-body">
                                    You need to provide clear photocopies of: 1) Vehicle Registration Certificate (RC), 2) Active Two-Wheeler Insurance Policy, 3) Valid PUC Certificate, and 4) Owner Government ID (Aadhaar or Driving License).
                                </div>
                            </div>
                        </div>

                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-bt-2" aria-expanded="false" role="button">
                                <i class="bi bi-question-circle-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Does the petrol tank need to be drained before transport?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-bt-2" class="collapse">
                                <div class="faq-card-body">
                                    Yes, as per cargo safety regulations, the petrol tank should be nearly empty (around 0.5 to 1 liter of fuel is sufficient). This prevents flammable gas buildup and fuel spillages inside the truck carrier.
                                </div>
                            </div>
                        </div>

                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-bt-3" aria-expanded="false" role="button">
                                <i class="bi bi-question-circle-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do you provide doorstep pickup and delivery in <?= $city ?>?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-bt-3" class="collapse">
                                <div class="faq-card-body">
                                    Yes. Our logistics executives will come directly to your residence in <?= $city ?>, pack the bike in front of you, load it onto our carrier, and deliver it straight to your new doorstep at the destination address.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Quick Booking CTA Banner -->
                    <div class="service-quick-cta-banner">
                        <div>
                            <h3>Transport Your Bike Safely from <?= $city ?>!</h3>
                            <p>Get a fast and transparent estimate with zero hidden extras.</p>
                        </div>
                        <div class="cta-action-btns">
                            <a href="<?= $phonehtml ?>" class="btn-banner-call">
                                <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
                            </a>
                            <button type="button" class="btn-banner-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                                <i class="bi bi-calculator"></i> Bike Shifting Quote
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('city_services/city_service_sidebar', ['active_service' => 'bike-transport-in-'.$ctlink]); ?>
            </div>
        </div>
    </div>
</section>
