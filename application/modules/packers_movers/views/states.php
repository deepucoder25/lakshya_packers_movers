<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Our Branches',
    'bc_desc' => '',
    'breadcrumbs' => [
        ['name' => 'Our Branches']
    ]
]);
?>

<?php
$state = [
    [
        "image" => "odisha.jpg",
        "category" => "Odisha",
        "link" => "odisha"
    ],
    [
        "image" => "west-bengal.jpg",
        "category" => "West Bengal",
        "link" => "west-bengal"
    ],
    [
        "image" => "jharkhand.jpg",
        "category" => "Jharkhand",
        "link" => "jharkhand"
    ],
];
?>

<!-- Modern Branch Section -->
<section class="st-branches-section py-5">
    <div class="container">

        <!-- Section Heading -->
        <div class="text-center mb-5 st-header-wrap">
            <h2 class="st-sec-title">
                Our Presence Across <span class="st-title-highlight">India</span>
            </h2>
            <p class="st-sec-desc">
                Reliable packing and moving services available in major states.
            </p>
        </div>

        <!-- 3 Modern Cards in a Centered Row -->
        <div class="row g-4 justify-content-center">
            <?php foreach ($state as $item): ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="st-card h-100">

                        <!-- Image Container with Hover Zoom & Badge -->
                        <div class="st-img-box">
                            <img src="<?= base_url('assets/img/state/' . $item['image']) ?>" loading="lazy" alt="<?= htmlspecialchars($item['category']) ?>" class="st-img">
                            <div class="st-img-overlay"></div>
                            <span class="st-hub-badge">
                                <i class="bi bi-geo-alt-fill text-orange"></i> <?= htmlspecialchars($item['category']) ?>
                            </span>
                        </div>

                        <!-- Card Content Body (Clean & Minimal) -->
                        <div class="st-body">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h3 class="st-name mb-0">
                                    <a href="<?= site_url($item['link']) ?>"><?= htmlspecialchars($item['category']) ?></a>
                                </h3>
                                <span class="st-active-dot">
                                    <span class="st-dot-core"></span>
                                    Active Branch
                                </span>
                            </div>

                            <!-- Card Action Button -->
                            <div class="st-btn-wrap mt-auto">
                                <a href="<?= site_url($item['link']) ?>" class="st-action-btn">
                                    <span>View Cities</span>
                                    <i class="bi bi-arrow-right-short"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>