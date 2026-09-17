<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_current' => 'Video Gallery',
    'bc_title_white' => 'Video',
    'bc_title_orange' => 'Gallery',
    'bc_desc' => 'Watch our step-by-step cargo handling processes, transport safety standards, and global freight forwarding in action.'
]); 
?>

<!-- VIDEO GALLERY MAIN SECTION -->
<section class="gallery-page-section py-5 mb-5">
    <div class="container position-relative z-2">

        <!-- Section Header -->
        <div class="text-center mb-5">
            <h2 class="bike-heading-title fw-bolder mb-2">
                Logistics &amp; Relocation <span class="text-orange">Operations in Action</span>
            </h2>
            <div class="bike-gold-divider d-flex align-items-center justify-content-center my-3">
                <span class="divider-line"></span>
                <span class="divider-diamond"><i class="bi bi-play-circle-fill"></i></span>
                <span class="divider-line"></span>
            </div>
            <p class="mx-auto bike-section-desc mb-0">
                Watch our field videos showing real packaging techniques, vehicle container transit, and dedicated shifting operations by <?= $company3 ?>.
            </p>
        </div>

        <!-- Videos Grid -->
        <?php if (!empty($videos)): ?>
            <div class="row g-4 mb-5">
                <?php foreach ($videos as $video): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden gallery-video-card">
                        <div class="ratio ratio-16x9">
                            <iframe src="<?= htmlspecialchars($video->video_url) ?>" title="<?= htmlspecialchars($video->title) ?>" allowfullscreen class="border-0"></iframe>
                        </div>
                        <div class="card-body p-3">
                            <h5 class="fw-bold mb-1 gallery-title-sm"><?= htmlspecialchars($video->title) ?></h5>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="gallery-empty-box text-center py-5">
                <i class="bi bi-camera-video text-muted fs-1 mb-3 d-block"></i>
                <h4 class="fw-bold text-dark mb-2">No Video Clips Yet</h4>
                <p class="text-secondary mb-0">Operational videos uploaded via your Admin Panel will appear here automatically.</p>
            </div>
        <?php endif; ?>

        <!-- Quality commitment banner -->
        <div class="p-4 bg-light border-start border-5 border-warning rounded-4 mb-5 shadow-sm">
            <h5 class="fw-bold text-dark mb-2"><i class="bi bi-shield-check text-warning me-2"></i>Our Authentic Operational Footage</h5>
            <p class="mb-0 text-muted small">
                All video clips shown are recorded on-site during actual shifting operations. We do not use simulated or stock footage, ensuring that what you see represents the true quality of service you will receive.
            </p>
        </div>

        <!-- EXECUTIVE CONSULTATION & ACTION HUB -->
        <div class="about-consult-box">
            <div class="about-consult-inner text-center">
                <div class="about-consult-tag">
                    <i class="bi bi-patch-check-fill text-orange"></i> DIRECT RELOCATION DESK
                </div>

                <h3 class="about-consult-heading">
                    Require Professional Packing &amp; Moving for <span class="text-orange">Your Upcoming Shift?</span>
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
