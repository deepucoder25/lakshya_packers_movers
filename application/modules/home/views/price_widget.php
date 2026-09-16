<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- =========================================================================
     PRICING SECTION WIDGET (Local House Shifting Charges)
     ========================================================================= -->
<section class="pricing-section position-relative overflow-hidden py-5" id="pricingSection">
    <div class="container position-relative z-2">
        <!-- Section Header (reusing service section heading classes as requested) -->
        <div class="text-center svc-header-wrapper mb-4 mb-lg-5">
            <!-- Eyebrow Pill Badge -->
            <div class="svc-pill-badge d-inline-flex align-items-center justify-content-center mb-3">
                <span class="svc-badge-dots" aria-hidden="true">
                    <i></i><i></i><i></i><i></i><i></i>
                </span>
                <span class="svc-badge-title">TRANSPARENT PRICING</span>
                <span class="svc-badge-dots" aria-hidden="true">
                    <i></i><i></i><i></i><i></i><i></i>
                </span>
            </div>

            <!-- Main Heading -->
            <h2 class="svc-main-title fw-bolder mb-2">
                Local house shifting charges in <span class="svc-highlight-text"><?= isset($city) && !empty($city) ? htmlspecialchars($city) : 'Kolkata' ?></span>
            </h2>

            <!-- Center Diamond Divider -->
            <div class="svc-diamond-separator d-flex align-items-center justify-content-center my-3" aria-hidden="true">
                <span class="sep-line"></span>
                <span class="sep-diamond"></span>
                <span class="sep-line"></span>
            </div>

            <!-- Subtitle -->
            <p class="svc-subtitle text-muted mx-auto mb-0">
                A local shift means both addresses are inside <?= isset($city) && !empty($city) ? htmlspecialchars($city) : 'Kolkata' ?> and the greater metro — Salt Lake to New Town, Behala to Garia, Howrah to Dum Dum. Distance still matters, so the price list below is split into three bands.
            </p>
        </div>

        <!-- Pricing Table Card Container (Normal Container Width) -->
        <div class="pricing-table-container">
            <div class="pricing-card shadow-sm">
                <div class="table-responsive">
                    <table class="table pricing-table align-middle mb-0">
                        <caption class="visually-hidden">
                            Local house shifting charges in <?= isset($city) && !empty($city) ? htmlspecialchars($city) : 'Kolkata' ?> by home size and distance bands
                        </caption>
                        <thead>
                            <tr>
                                <th scope="col" class="pricing-th-size">
                                    <i class="bi bi-house-door-fill text-warning me-1"></i> Home size
                                </th>
                                <th scope="col" class="pricing-th-dist">
                                    <i class="bi bi-geo-alt-fill text-warning me-1"></i> Up to 10 km
                                </th>
                                <th scope="col" class="pricing-th-dist">
                                    <i class="bi bi-speedometer2 text-warning me-1"></i> 10 &ndash; 25 km
                                </th>
                                <th scope="col" class="pricing-th-dist">
                                    <i class="bi bi-map-fill text-warning me-1"></i> 25 km+
                                </th>
                                <th scope="col" class="pricing-th-action text-center">
                                    <i class="bi bi-lightning-charge-fill text-warning me-1"></i> Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Row 1: 1 RK / few items -->
                            <tr>
                                <th scope="row" class="pricing-cell-size">
                                    <div class="size-item-wrapper d-flex align-items-center">
                                        <div class="size-icon-avatar avatar-blue me-3">
                                            <i class="bi bi-box-seam"></i>
                                        </div>
                                        <div>
                                            <div class="size-title">1 RK / few items</div>
                                            <div class="size-sub text-muted small">Mini / Few Items</div>
                                        </div>
                                    </div>
                                </th>
                                <td class="pricing-cell-val" data-label="Up to 10 km">
                                    <span class="price-tag-chip">&#8377;2,500 &ndash; 4,500</span>
                                </td>
                                <td class="pricing-cell-val" data-label="10 – 25 km">
                                    <span class="price-tag-chip">&#8377;3,500 &ndash; 6,000</span>
                                </td>
                                <td class="pricing-cell-val" data-label="25 km+">
                                    <span class="price-tag-chip price-chip-highlight">&#8377;5,000 &ndash; 8,500</span>
                                </td>
                                <td class="pricing-cell-action text-center">
                                    <button type="button" class="btn-table-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                                        Book Move <i class="bi bi-arrow-right-short"></i>
                                    </button>
                                </td>
                            </tr>

                            <!-- Row 2: 1 BHK -->
                            <tr>
                                <th scope="row" class="pricing-cell-size">
                                    <div class="size-item-wrapper d-flex align-items-center">
                                        <div class="size-icon-avatar avatar-indigo me-3">
                                            <i class="bi bi-house"></i>
                                        </div>
                                        <div>
                                            <div class="size-title">1 BHK</div>
                                            <div class="size-sub text-muted small">Standard 1 Bedroom</div>
                                        </div>
                                    </div>
                                </th>
                                <td class="pricing-cell-val" data-label="Up to 10 km">
                                    <span class="price-tag-chip">&#8377;3,500 &ndash; 6,500</span>
                                </td>
                                <td class="pricing-cell-val" data-label="10 – 25 km">
                                    <span class="price-tag-chip">&#8377;5,500 &ndash; 8,500</span>
                                </td>
                                <td class="pricing-cell-val" data-label="25 km+">
                                    <span class="price-tag-chip price-chip-highlight">&#8377;7,500 &ndash; 11,500</span>
                                </td>
                                <td class="pricing-cell-action text-center">
                                    <button type="button" class="btn-table-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                                        Book Move <i class="bi bi-arrow-right-short"></i>
                                    </button>
                                </td>
                            </tr>

                            <!-- Row 3: 2 BHK (Featured / Most Popular) -->
                            <tr class="row-featured-popular">
                                <th scope="row" class="pricing-cell-size">
                                    <div class="size-item-wrapper d-flex align-items-center">
                                        <div class="size-icon-avatar avatar-orange me-3">
                                            <i class="bi bi-heart-fill"></i>
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <span class="size-title">2 BHK</span>
                                                <span class="badge-most-popular">Most Popular</span>
                                            </div>
                                            <div class="size-sub text-muted small">Family 2 Bedroom</div>
                                        </div>
                                    </div>
                                </th>
                                <td class="pricing-cell-val" data-label="Up to 10 km">
                                    <span class="price-tag-chip price-chip-popular">&#8377;6,000 &ndash; 9,500</span>
                                </td>
                                <td class="pricing-cell-val" data-label="10 – 25 km">
                                    <span class="price-tag-chip price-chip-popular">&#8377;8,500 &ndash; 12,500</span>
                                </td>
                                <td class="pricing-cell-val" data-label="25 km+">
                                    <span class="price-tag-chip price-chip-popular-highlight">&#8377;11,000 &ndash; 15,500</span>
                                </td>
                                <td class="pricing-cell-action text-center">
                                    <button type="button" class="btn-table-quote btn-popular-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                                        Book Move <i class="bi bi-arrow-right-short"></i>
                                    </button>
                                </td>
                            </tr>

                            <!-- Row 4: 3 BHK -->
                            <tr>
                                <th scope="row" class="pricing-cell-size">
                                    <div class="size-item-wrapper d-flex align-items-center">
                                        <div class="size-icon-avatar avatar-teal me-3">
                                            <i class="bi bi-buildings"></i>
                                        </div>
                                        <div>
                                            <div class="size-title">3 BHK</div>
                                            <div class="size-sub text-muted small">Spacious 3 Bedroom</div>
                                        </div>
                                    </div>
                                </th>
                                <td class="pricing-cell-val" data-label="Up to 10 km">
                                    <span class="price-tag-chip">&#8377;9,000 &ndash; 14,000</span>
                                </td>
                                <td class="pricing-cell-val" data-label="10 – 25 km">
                                    <span class="price-tag-chip">&#8377;12,500 &ndash; 17,500</span>
                                </td>
                                <td class="pricing-cell-val" data-label="25 km+">
                                    <span class="price-tag-chip price-chip-highlight">&#8377;15,500 &ndash; 21,000</span>
                                </td>
                                <td class="pricing-cell-action text-center">
                                    <button type="button" class="btn-table-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                                        Book Move <i class="bi bi-arrow-right-short"></i>
                                    </button>
                                </td>
                            </tr>

                            <!-- Row 5: 4 BHK / villa -->
                            <tr>
                                <th scope="row" class="pricing-cell-size">
                                    <div class="size-item-wrapper d-flex align-items-center">
                                        <div class="size-icon-avatar avatar-purple me-3">
                                            <i class="bi bi-gem"></i>
                                        </div>
                                        <div>
                                            <div class="size-title">4 BHK / villa</div>
                                            <div class="size-sub text-muted small">Luxury Villa / Large Home</div>
                                        </div>
                                    </div>
                                </th>
                                <td class="pricing-cell-val" data-label="Up to 10 km">
                                    <span class="price-tag-chip">&#8377;13,000 &ndash; 19,000</span>
                                </td>
                                <td class="pricing-cell-val" data-label="10 – 25 km">
                                    <span class="price-tag-chip">&#8377;17,000 &ndash; 23,000</span>
                                </td>
                                <td class="pricing-cell-val" data-label="25 km+">
                                    <span class="price-tag-chip price-chip-highlight">&#8377;21,000 &ndash; 28,000</span>
                                </td>
                                <td class="pricing-cell-action text-center">
                                    <button type="button" class="btn-table-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                                        Book Move <i class="bi bi-arrow-right-short"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Attractive Indicative Bottom Note & Quick CTA Banner -->
            <div class="pricing-bottom-bar d-flex flex-column flex-md-row align-items-center justify-content-between p-3 p-md-4 rounded-4 mt-4 gap-3">
                <div class="d-flex align-items-start gap-3">
                    <div class="pricing-info-badge rounded-circle flex-shrink-0 d-flex align-items-center justify-content-center">
                        <i class="bi bi-info-circle-fill"></i>
                    </div>
                    <p class="pricing-note-text mb-0">
                        <strong>Note:</strong> Indicative all-inclusive ranges for 2026. Your final figure depends on actual volume, floor and lift access, whether the truck can reach your gate, and the packing level you choose. A free pre-move survey fixes the number before you commit.
                    </p>
                </div>
                <div class="flex-shrink-0">
                    <button type="button" class="btn-calc-quote text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">
                        <i class="bi bi-calculator me-1"></i> Get Exact Estimate
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
