<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); 
?>

<!-- Dynamic Breadcrumbs Hero Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Our Photo Gallery',
    'bc_desc' => "Explore authentic moments of our packing standards, specialized vehicle carriers, and smooth relocations across India by {$company3}.",
    'breadcrumbs' => [
        ['name' => 'Photo Gallery']
    ]
]);
?>

<!-- PHOTO GALLERY MAIN SECTION -->
<section class="gallery-page-section py-5">
    <div class="container position-relative z-2">

        <!-- Section Header -->
        <div class="text-center mb-5">
            <h2 class="bike-heading-title fw-bolder mb-2">
                Moments of <span class="text-orange">Excellence in Motion</span>
            </h2>
            <div class="bike-gold-divider d-flex align-items-center justify-content-center my-3">
                <span class="divider-line"></span>
                <span class="divider-diamond"><i class="bi bi-camera-fill"></i></span>
                <span class="divider-line"></span>
            </div>
            <p class="mx-auto bike-section-desc mb-0">
                Take a visual tour through our daily packing and moving operations, fleet transit, and verified customer deliveries across India.
            </p>
        </div>


        <!-- Pure Photo Gallery Grid (Dynamically Populated From Admin Panel) -->
        <?php if (!empty($photos)): ?>
            <div class="row g-3 g-md-4 mb-5" id="galleryGrid">
                <?php foreach ($photos as $index => $photo): 
                    $img_src = base_url('assets/uploads/gallery/' . $photo->image);
                    $img_thumb = (!empty($photo->image) && file_exists(FCPATH . 'assets/uploads/gallery/thumb/' . $photo->image))
                        ? base_url('assets/uploads/gallery/thumb/' . $photo->image)
                        : $img_src;
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="gallery-photo-card" data-img="<?= $img_src ?>" data-index="<?= $index ?>">
                        <div class="gallery-photo-box">
                            <img loading="lazy" src="<?= $img_thumb ?>" class="gallery-photo-img" alt="Gallery Photo <?= $index + 1 ?>">
                            <div class="gallery-photo-overlay">
                                <span class="gallery-zoom-icon">
                                    <i class="bi bi-arrows-fullscreen"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="gallery-empty-box text-center py-5">
                <i class="bi bi-images text-muted fs-1 mb-3 d-block"></i>
                <h4 class="fw-bold text-dark mb-2">No Gallery Photos Yet</h4>
                <p class="text-secondary mb-0">Photos uploaded via your Admin Panel will appear here automatically.</p>
            </div>
        <?php endif; ?>

        <!-- EXECUTIVE CONSULTATION & ACTION HUB -->
        <div class="about-consult-box mt-5">
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

<!-- Fullscreen Clean Lightbox Modal (Top-Level Container) -->
<div class="gallery-lightbox-modal" id="galleryLightbox" role="dialog" aria-modal="true" aria-label="Photo Preview Lightbox">
    <button type="button" class="gallery-lightbox-close" id="lightboxClose" aria-label="Close Lightbox">
        <i class="bi bi-x-lg"></i>
    </button>
    <button type="button" class="gallery-lightbox-nav gallery-lightbox-prev" id="lightboxPrev" aria-label="Previous Photo">
        <i class="bi bi-chevron-left"></i>
    </button>
    <button type="button" class="gallery-lightbox-nav gallery-lightbox-next" id="lightboxNext" aria-label="Next Photo">
        <i class="bi bi-chevron-right"></i>
    </button>

    <div class="gallery-lightbox-dialog">
        <div class="gallery-lightbox-img-box">
            <img id="lightboxImg" src="" loading="lazy" alt="Gallery Preview">
        </div>
    </div>
</div>

<!-- Pure Vanilla JS for Dynamic Lightbox -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.gallery-photo-card');
    const modal = document.getElementById('galleryLightbox');
    const modalImg = document.getElementById('lightboxImg');
    const btnClose = document.getElementById('lightboxClose');
    const btnPrev = document.getElementById('lightboxPrev');
    const btnNext = document.getElementById('lightboxNext');

    let currentIndex = 0;
    const galleryImages = [];

    cards.forEach((card, idx) => {
        const src = card.getAttribute('data-img');
        if (src) {
            galleryImages.push(src);
            card.addEventListener('click', function() {
                openLightbox(idx);
            });
        }
    });

    function openLightbox(index) {
        if (!galleryImages[index]) return;
        currentIndex = index;
        modalImg.src = galleryImages[currentIndex];
        modal.classList.add('active');
        document.body.classList.add('gallery-lightbox-open');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        modal.classList.remove('active');
        document.body.classList.remove('gallery-lightbox-open');
        document.body.style.overflow = '';
    }

    function nextPhoto() {
        if (galleryImages.length === 0) return;
        currentIndex = (currentIndex + 1) % galleryImages.length;
        openLightbox(currentIndex);
    }

    function prevPhoto() {
        if (galleryImages.length === 0) return;
        currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
        openLightbox(currentIndex);
    }

    if (btnClose) btnClose.addEventListener('click', closeLightbox);
    if (btnNext) btnNext.addEventListener('click', nextPhoto);
    if (btnPrev) btnPrev.addEventListener('click', prevPhoto);

    // Close on backdrop click
    if (modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeLightbox();
            }
        });
    }

    // Keyboard controls
    document.addEventListener('keydown', function(e) {
        if (!modal.classList.contains('active')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowRight') nextPhoto();
        if (e.key === 'ArrowLeft') prevPhoto();
    });
});
</script>
