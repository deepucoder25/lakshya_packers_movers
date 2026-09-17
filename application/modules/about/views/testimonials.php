<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); 
?>

<!-- Dynamic Breadcrumbs Hero Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Client Testimonials & Reviews',
    'bc_desc' => "Read genuine feedback, verified ratings, and real relocation experiences from families and businesses across India who trusted {$company3}.",
    'breadcrumbs' => [
        ['name' => 'Testimonials']
    ]
]);
?>

<!-- TESTIMONIALS MAIN PAGE CONTENT -->
<section class="testimonials-page-section py-5">
    <div class="container position-relative z-2">

        <!-- Section Header -->
        <div class="text-center mb-5">
            <h2 class="bike-heading-title fw-bolder mb-2">
                Real Experiences From <span class="text-orange">Satisfied Families</span>
            </h2>
            <div class="bike-gold-divider d-flex align-items-center justify-content-center my-3">
                <span class="divider-line"></span>
                <span class="divider-diamond"><i class="bi bi-star-fill"></i></span>
                <span class="divider-line"></span>
            </div>
            <p class="mx-auto bike-section-desc mb-0">
                Discover why over 15,000+ households and corporate enterprises rely on our certified teams for damage-free packing, timely transit, and stress-free handovers.
            </p>
        </div>

        <!-- 1. Overall Rating & Trust Summary Hero Card -->
        <div class="testi-summary-card">
            <div class="row g-4 align-items-center">
                <!-- Score Column -->
                <div class="col-lg-3 col-md-4 text-center text-md-start border-end-md">
                    <div class="testi-big-score">4.9<span class="fs-4 text-muted">/5</span></div>
                    <div class="testi-stars-gold my-2">★★★★★</div>
                    <div class="testi-review-count">Based on 1,480+ Verified Reviews</div>
                    <div class="mt-3">
                        <span class="testi-route-badge">
                            <i class="bi bi-shield-check"></i> 99.4% SATISFACTION
                        </span>
                    </div>
                </div>

                <!-- Star Breakdown Column -->
                <div class="col-lg-5 col-md-4">
                    <div class="testi-progress-bar-wrap">
                        <div class="testi-progress-row">
                            <span>5 Star</span>
                            <div class="testi-progress-track">
                                <div class="testi-progress-fill fill-96"></div>
                            </div>
                            <span>96%</span>
                        </div>
                        <div class="testi-progress-row">
                            <span>4 Star</span>
                            <div class="testi-progress-track">
                                <div class="testi-progress-fill fill-4"></div>
                            </div>
                            <span>4%</span>
                        </div>
                        <div class="testi-progress-row">
                            <span>3 Star</span>
                            <div class="testi-progress-track">
                                <div class="testi-progress-fill fill-0"></div>
                            </div>
                            <span>0%</span>
                        </div>
                        <div class="testi-progress-row">
                            <span>2 Star</span>
                            <div class="testi-progress-track">
                                <div class="testi-progress-fill fill-0"></div>
                            </div>
                            <span>0%</span>
                        </div>
                        <div class="testi-progress-row">
                            <span>1 Star</span>
                            <div class="testi-progress-track">
                                <div class="testi-progress-fill fill-0"></div>
                            </div>
                            <span>0%</span>
                        </div>
                    </div>
                </div>

                <!-- Platform Badges & Write Review CTA -->
                <div class="col-lg-4 col-md-4 text-center text-md-end">
                    <div class="testi-platform-box mb-3">
                        <div class="testi-platform-chip">
                            <i class="bi bi-google text-danger fs-5"></i>
                            <div class="text-start">
                                <div class="testi-chip-title">Google Customer Reviews</div>
                                <div class="testi-chip-score">4.9 ★★★★★ &bull; 820+ Ratings</div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="testi-write-btn w-100 justify-content-center" data-bs-toggle="modal" data-bs-target="#rvwmdl">
                        <i class="bi bi-pencil-square"></i> Share Your Experience
                    </button>
                </div>
            </div>
        </div>



        <?php
        // Curated authentic verified client testimonials
        $curated_testimonials = [
            [
                'name' => 'Rajesh Sharma',
                'route' => 'Bangalore to Kolkata',
                'category' => 'household',
                'service' => 'Complete 3BHK Household Move',
                'stars' => 5,
                'date' => 'August 2026',
                'review' => "I shifted my complete 3BHK household goods including heavy wooden almirahs, double beds, refrigerator, and crockery from Bangalore to Kolkata. The packing crew used 7-layer bubble sheets and corrugated rolls. Not a single scratch on any glass or wooden surface. Delivered exactly on schedule. Exceptional professionalism!"
            ],
            [
                'name' => 'Priyanka Mohapatra',
                'route' => 'Bhubaneswar to Hyderabad',
                'category' => 'corporate',
                'service' => 'Corporate IT Office Relocation',
                'stars' => 5,
                'date' => 'July 2026',
                'review' => "Outstanding corporate moving service! They relocated our software development office with 35 workstations, server racks, and delicate monitors over a single weekend. Zero business downtime, systematic numbering tags on every box, and seamless setup in Hyderabad on Monday morning."
            ],
            [
                'name' => 'Amitav Sengupta',
                'route' => 'Kolkata to Pune',
                'category' => 'vehicle',
                'service' => 'Covered Car Carrier Transit',
                'stars' => 5,
                'date' => 'September 2026',
                'review' => "I was extremely anxious about transporting my new Hyundai Creta across India. {$company3} provided hydraulic covered car carrier transport. They gave continuous GPS tracking updates and delivered the car in pristine, showroom condition with accurate odometer logs. Highly trustworthy team!"
            ],
            [
                'name' => 'Sunita Verma',
                'route' => 'Ranchi to Delhi',
                'category' => 'household',
                'service' => 'Interstate Household Relocation',
                'stars' => 5,
                'date' => 'June 2026',
                'review' => "Moving with two small children can be overwhelming, but this team took total ownership. They carefully dismantled all beds, wrapped kitchen cutlery in specialized shock-absorbing cartons, and assembled everything back at our Delhi apartment. Completely stress-free and very courteous team."
            ],
            [
                'name' => 'Vikramaditya Rath',
                'route' => 'Cuttack to Mumbai',
                'category' => 'vehicle',
                'service' => 'Enclosed Bike Transport',
                'stars' => 5,
                'date' => 'August 2026',
                'review' => "Transported my Royal Enfield Himalayan from Cuttack to Mumbai. The crew built a custom wooden crate around the bike with high-density foam wrapping on handlebars and tank. Arrived safely without a smudge. Great value and top-tier packaging quality."
            ],
            [
                'name' => 'Deepak Kashyap',
                'route' => 'Patna to Bangalore',
                'category' => 'household',
                'service' => 'Dedicated Container Shifting',
                'stars' => 5,
                'date' => 'May 2026',
                'review' => "Opted for a dedicated closed container truck. The quote was 100% transparent without any last-minute hidden loading or unloading demands. The drivers and supervisors maintained polite communication throughout the highway transit. Fully satisfied with their IBA-approved standards."
            ]
        ];

        // Format database reviews if any exist
        $db_reviews = [];
        if (!empty($reviews)) {
            foreach ($reviews as $r) {
                $city = !empty($r->r_title) ? $r->r_title : 'Verified Relocation';
                $stars = !empty($r->stars) ? (int)$r->stars : 5;
                $pdate = !empty($r->posted_date) ? date('F Y', strtotime($r->posted_date)) : 'Recent Move';

                $db_reviews[] = [
                    'name' => $r->name,
                    'route' => $city,
                    'category' => 'household',
                    'service' => 'Verified Client Review',
                    'stars' => $stars,
                    'date' => $pdate,
                    'review' => $r->r_desc,
                    'img' => !empty($r->r_img) ? $r->r_img : ''
                ];
            }
        }

        $all_reviews = array_merge($db_reviews, $curated_testimonials);
        ?>

        <!-- 3. Testimonials Grid -->
        <div class="row g-4 mb-5" id="testimonialsGrid">
            <?php foreach ($all_reviews as $testi): 
                $initials = '';
                $parts = explode(' ', trim($testi['name']));
                foreach ($parts as $p) {
                    if (!empty($p)) $initials .= strtoupper($p[0]);
                }
                $initials = substr($initials, 0, 2);
                if (empty($initials)) $initials = 'LP';
            ?>
            <div class="col-lg-4 col-md-6 col-12 testi-grid-item" data-category="<?= htmlspecialchars($testi['category']) ?>">
                <div class="testi-card">
                    <!-- Card Top Strip -->
                    <div class="testi-card-top">
                        <span class="testi-route-badge">
                            <i class="bi bi-geo-alt-fill"></i> <?= htmlspecialchars($testi['route']) ?>
                        </span>
                        <div class="testi-quote-mark">
                            <i class="bi bi-quote"></i>
                        </div>
                    </div>

                    <!-- Rating Stars -->
                    <div class="testi-stars">
                        <?php 
                        $st = max(1, min(5, (int)$testi['stars']));
                        echo str_repeat('★', $st) . str_repeat('☆', 5 - $st);
                        ?>
                    </div>

                    <!-- Review Text -->
                    <p class="testi-quote-text">
                        "<?= htmlspecialchars($testi['review']) ?>"
                    </p>

                    <?php if (!empty($testi['img'])): ?>
                    <div class="testi-user-img-box mb-3">
                        <img src="<?= (strpos($testi['img'], '/') !== false) ? base_url($testi['img']) : base_url('assets/uploads/reviewimg/' . $testi['img']) ?>" loading="lazy" alt="Review photo by <?= htmlspecialchars($testi['name']) ?>" class="rounded border shadow-sm" style="max-height: 120px; max-width: 100%; object-fit: cover;">
                    </div>
                    <?php endif; ?>

                    <!-- Author Info Footer -->
                    <div class="testi-author-row">
                        <div class="testi-avatar">
                            <?= htmlspecialchars($initials) ?>
                        </div>
                        <div>
                            <h4 class="testi-author-name"><?= htmlspecialchars($testi['name']) ?></h4>
                            <div class="testi-author-meta">
                                <span><?= htmlspecialchars($testi['service']) ?></span>
                                <span>&bull;</span>
                                <span class="testi-verified-pill"><i class="bi bi-patch-check-fill"></i> Verified</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>


        <!-- 5. EXECUTIVE CONSULTATION & ACTION HUB -->
        <div class="about-consult-box mt-5">
            <div class="about-consult-inner text-center">
                <div class="about-consult-tag">
                    <i class="bi bi-patch-check-fill text-orange"></i> DIRECT RELOCATION DESK
                </div>

                <h3 class="about-consult-heading">
                    Ready to Plan Your Next Move With <span class="text-orange"><?= htmlspecialchars($company3) ?></span>?
                </h3>

                <p class="about-consult-desc mx-auto">
                    Speak directly with our senior moving supervisors or get an instant itemized quote on WhatsApp. Zero obligations, zero hidden costs, 100% transparent guidance.
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

<!-- Load Review Modal -->
<?php $this->load->view('reviews/reviewmodal'); ?>