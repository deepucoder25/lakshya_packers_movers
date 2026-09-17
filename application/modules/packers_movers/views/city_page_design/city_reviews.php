<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

$city_reviews = [
    [
        'name'      => 'Rahul Sen',
        'initials'  => 'RS',
        'theme'     => 'orange',
        'tag'       => '3BHK Flat Shifting',
        'tag_icon'  => 'bi-house-heart-fill',
        'location'  => 'Shifted within ' . htmlspecialchars($city),
        'stars'     => 5,
        'date'      => '2 weeks ago',
        'quote'     => 'I shifted my entire 3BHK flat within ' . htmlspecialchars($city) . ' with ' . htmlspecialchars($company3) . '. The crew arrived punctually at 8 AM, packed our delicate crockery, refrigerator, and double beds with 3 layers of bubble wrap. Not a single scratch on any item. Highly recommended for anyone in ' . htmlspecialchars($city) . '!'
    ],
    [
        'name'      => 'Ananya Banerjee',
        'initials'  => 'AB',
        'theme'     => 'blue',
        'tag'       => 'Intercity Relocation',
        'tag_icon'  => 'bi-truck-flatbed',
        'location'  => htmlspecialchars($city) . ' to Bangalore',
        'stars'     => 5,
        'date'      => '1 month ago',
        'quote'     => 'Superb intercity moving experience! We relocated from ' . htmlspecialchars($city) . ' to Bangalore. The moving coordinator kept me updated via GPS throughout the transit. The consignment arrived exactly on the committed day and the unloading team assembled everything quickly. Very polite and professional staff.'
    ],
    [
        'name'      => 'Amitabh Roy',
        'initials'  => 'AR',
        'theme'     => 'green',
        'tag'       => 'Corporate Office Move',
        'tag_icon'  => 'bi-building-check',
        'location'  => 'IT Office Shift in ' . htmlspecialchars($city),
        'stars'     => 5,
        'date'      => '3 weeks ago',
        'quote'     => 'We hired ' . htmlspecialchars($company3) . ' for our 25-seater IT office relocation in ' . htmlspecialchars($city) . '. They completed the move over the weekend so our work resumed on Monday without any downtime. Their server and desktop packing was top-notch. Truly five-star service!'
    ],
    [
        'name'      => 'Priyanka Das',
        'initials'  => 'PD',
        'theme'     => 'purple',
        'tag'       => 'Bike Transport',
        'tag_icon'  => 'bi-bicycle',
        'location'  => htmlspecialchars($city) . ' to Pune',
        'stars'     => 5,
        'date'      => 'Just now',
        'quote'     => 'Sent my Royal Enfield Meteor from ' . htmlspecialchars($city) . ' to Pune. They used specialized steel crating with heavy bubble wrap around the fuel tank and mirrors. Bike reached without a single scratch or grease spot. Transparent tracking and polite customer service!'
    ],
    [
        'name'      => 'Subhashis Mukherjee',
        'initials'  => 'SM',
        'theme'     => 'amber',
        'tag'       => 'Villa & Fragile Goods',
        'tag_icon'  => 'bi-box-seam-fill',
        'location'  => 'Relocated in ' . htmlspecialchars($city),
        'stars'     => 5,
        'date'      => '4 days ago',
        'quote'     => 'We shifted our antique teakwood furniture, Italian marble table, and oversized mirrors in ' . htmlspecialchars($city) . '. The supervisor inspected every corner before loading. Their heavy-duty blankets and foam padding protected everything flawlessly. 10/10 service!'
    ],
    [
        'name'      => 'Vikramaditya Sharma',
        'initials'  => 'VS',
        'theme'     => 'cyan',
        'tag'       => 'Car Carrier Transit',
        'tag_icon'  => 'bi-car-front-fill',
        'location'  => htmlspecialchars($city) . ' to New Delhi',
        'stars'     => 5,
        'date'      => '2 weeks ago',
        'quote'     => 'Booked enclosed car carrier service for my Honda City from ' . htmlspecialchars($city) . ' to Delhi. Odometer readings and exterior photos were properly documented before departure. Delivered right outside my new society without any delay. Highly trustworthy!'
    ],
    [
        'name'      => 'Sneha Ganguly',
        'initials'  => 'SG',
        'theme'     => 'pink',
        'tag'       => 'Same-Day Local Move',
        'tag_icon'  => 'bi-lightning-charge-fill',
        'location'  => 'Local Shift across ' . htmlspecialchars($city),
        'stars'     => 5,
        'date'      => '5 days ago',
        'quote'     => 'Needed an emergency same-day 1BHK relocation in ' . htmlspecialchars($city) . '. Called their coordinator at 10 AM, by 12:30 PM the crew was at my doorstep with boxes and tape! Shift was fully completed by 5 PM. Very polite boys and extremely reasonable charges.'
    ],
];
?>

<!-- =========================================================================
     CITY REVIEWS / TESTIMONIALS SECTION (Light Luxury Trust Theme + Infinite Stream)
     ========================================================================= -->
<section class="crev-section position-relative overflow-hidden" id="cityReviewsSection">
    <div class="container position-relative z-2">
        <!-- Section Header -->
        <div class="text-center crev-header mb-3">
            <!-- Eyebrow Tag -->
            <div class="cproc-eyebrow mb-2">
                <span class="cproc-dash">—</span>
                <span class="cproc-dot">•</span>
                <span class="cproc-eyebrow-text">VERIFIED EXPERIENCES</span>
                <span class="cproc-dot">•</span>
                <span class="cproc-dash">—</span>
            </div>

            <!-- Main Heading -->
            <h2 class="cproc-heading fw-bolder mb-2">
                Loved by Customers in <span class="cproc-highlight"><?= htmlspecialchars($city) ?></span>
            </h2>

            <!-- Subtitle -->
            <p class="cproc-subheading text-muted mx-auto mb-3">
                Real relocation stories from families, business owners, and vehicle owners who experienced hassle-free moving with <?= htmlspecialchars($company3) ?>.
            </p>

        </div>
    </div>

    <!-- Continuous Right-to-Left Auto-Scrolling Review Stream (Paused on Cursor Hover) -->
    <div class="crev-marquee-container position-relative">
        <div class="crev-marquee-track">
            <?php foreach (array_merge($city_reviews, $city_reviews) as $idx => $rev): ?>
                <div class="crev-marquee-item crev-theme-<?= $rev['theme'] ?>">
                    <div class="crev-card w-100 d-flex flex-column">
                        <!-- Top Accent Stripe -->
                        <div class="crev-card-top-bar"></div>

                        <!-- Decorative Quotation Watermark SVG -->
                        <svg class="crev-quote-bg" width="54" height="54" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>

                        <!-- Card Header: Stars & Relocation Tag -->
                        <div class="d-flex align-items-center justify-content-between mb-3 position-relative z-1">
                            <div class="text-warning small d-flex gap-1">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <span class="crev-tag-badge d-inline-flex align-items-center gap-1">
                                <i class="bi <?= $rev['tag_icon'] ?>"></i>
                                <span><?= htmlspecialchars($rev['tag']) ?></span>
                            </span>
                        </div>

                        <!-- Review Text -->
                        <p class="crev-quote-text flex-grow-1 position-relative z-1 mb-4">
                            “<?= htmlspecialchars($rev['quote']) ?>”
                        </p>

                        <!-- Author Profile Footer -->
                        <div class="crev-author-wrap pt-3 mt-auto d-flex align-items-center justify-content-between position-relative z-1">
                            <div class="d-flex align-items-center gap-3">
                                <!-- Avatar with Gradient -->
                                <div class="crev-avatar">
                                    <?= $rev['initials'] ?>
                                </div>
                                <div>
                                    <div class="crev-author-name mb-0"><?= htmlspecialchars($rev['name']) ?></div>
                                    <div class="crev-author-location">
                                        <i class="bi bi-geo-alt-fill text-danger me-1"></i><?= htmlspecialchars($rev['location']) ?>
                                    </div>
                                </div>
                            </div>
                            <!-- Source Badge -->
                            <div class="text-end">
                                <div class="crev-source d-inline-flex align-items-center gap-1">
                                    <svg width="13" height="13" viewBox="0 0 48 48">
                                        <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>
                                        <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
                                        <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/>
                                        <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
                                    </svg>
                                    <span class="small fw-semibold text-muted">Review</span>
                                </div>
                                <div class="crev-date text-muted"><?= htmlspecialchars($rev['date']) ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="container position-relative z-2">
        <!-- Trust Assurance & Direct Assistance Bar -->
        <div class="crev-bottom-bar mt-4 p-4 rounded-4 shadow-sm bg-white border d-flex flex-column flex-lg-row align-items-center justify-content-between gap-3">
            <div class="d-flex flex-wrap align-items-center gap-4">
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-shield-fill-check text-success fs-4"></i>
                    <div>
                        <div class="fw-bold text-dark small">Zero Damage Guarantee</div>
                        <div class="crev-trust-subtext">Multi-layer bubble & foam protection</div>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-clock-history text-primary fs-4"></i>
                    <div>
                        <div class="fw-bold text-dark small">On-Time Doorstep Pickup</div>
                        <div class="crev-trust-subtext">Punctual dedicated crew in <?= htmlspecialchars($city) ?></div>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-cash-coin text-warning fs-4"></i>
                    <div>
                        <div class="fw-bold text-dark small">Transparent Flat Pricing</div>
                        <div class="crev-trust-subtext">No hidden last-minute surcharges</div>
                    </div>
                </div>
            </div>

            <!-- Call to Action Buttons -->
            <div class="crev-actions-wrap">
                <a <?= $phonehtml ?> class="crev-phone-btn">
                    <i class="bi bi-telephone-fill"></i>
                    <span>Call <?= htmlspecialchars($phone) ?></span>
                </a>
                <button type="button" class="crev-cta-btn" data-bs-toggle="modal" data-bs-target="#qteModal">
                    <span>Get Free Quote</span>
                    <i class="bi bi-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>



