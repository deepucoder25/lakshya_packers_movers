<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Packers and Movers in ' . ucwords($state),
    'bc_desc' => 'Verified local shifting teams, GPS container fleets, and instant free quotes across ' . ucwords($state) . '.',
    'breadcrumbs' => [
        ['name' => 'Our Branches', 'url' => site_url('our-branches')],
        ['name' => ucwords($state)],
    ]
]);
?>

<section class="city-list-section py-5">
    <div class="container">

        <!-- Header Intro -->
        <div class="city-list-header text-center mb-5">
            <span class="city-badge">
                <i class="bi bi-geo-alt-fill text-orange"></i> <?= ucwords($state) ?> Branch Network
            </span>
            <h2 class="city-heading mt-2">
                Packers and Movers Across <span class="city-heading-highlight"><?= ucwords($state) ?></span>
            </h2>
            <p class="city-subheading">
                Select your city below to get verified local moving teams, transparent quotes, and doorstep relocation services.
            </p>
            <div class="city-count-pill mt-3">
                <i class="bi bi-check-circle-fill text-success me-1"></i> <?= count($cities) ?> Active Service Locations Available
            </div>
        </div>

        <!-- City Cards Grid -->
        <div class="row g-3 g-md-4">
            <?php
            $st = str_replace(" ", "-", $state);
            foreach ($cities as $ct):
                $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
                ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <a href="<?= site_url("$link-packers-movers-$statename") ?>" class="city-box-link text-decoration-none d-block h-100">
                        <div class="city-box-card">
                            <div class="city-box-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="city-truck-svg">
                                    <path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"/>
                                    <path d="M15 18H9"/>
                                    <path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"/>
                                    <circle cx="17" cy="18" r="2"/>
                                    <circle cx="7" cy="18" r="2"/>
                                </svg>
                            </div>
                            <div class="city-box-content">
                                <span class="city-box-sub">PACKERS AND MOVERS</span>
                                <h5 class="city-box-name mb-0"><?= htmlspecialchars($ct['nm']) ?></h5>
                            </div>
                            <div class="city-box-arrow">
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>