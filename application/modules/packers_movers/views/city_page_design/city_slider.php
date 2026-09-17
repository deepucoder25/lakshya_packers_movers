<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ==========================================================================
     City Hero Glassmorphism Slider Section - Matching Home Page Design
     ========================================================================== -->
<section class="hero-slider-section position-relative" id="mainHeroSlider">
  <!-- Background Image Carousel -->
  <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6500" data-bs-pause="hover">
    <!-- Carousel Indicators -->
    <div class="carousel-indicators hero-indicators">
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>

    <!-- Carousel Slides (Background Images) -->
    <div class="carousel-inner">
      <div class="carousel-item active hero-slide-item" style="background-image: url('<?= base_url("assets/img/hero_slider_bg.jpg") ?>');"></div>
      <div class="carousel-item hero-slide-item" style="background-image: url('<?= base_url("assets/img/hero_slider_bg2.jpg") ?>');"></div>
    </div>

    <div class="hero-dark-overlay"></div>

    <!-- Carousel Nav Buttons -->
    <button class="carousel-control-prev hero-carousel-arrow" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" aria-label="Previous Slide">
      <span class="hero-arrow-pill"><i class="bi bi-chevron-left"></i></span>
    </button>
    <button class="carousel-control-next hero-carousel-arrow" type="button" data-bs-target="#heroCarousel" data-bs-slide="next" aria-label="Next Slide">
      <span class="hero-arrow-pill"><i class="bi bi-chevron-right"></i></span>
    </button>
  </div>

  <!-- Foreground Unified Content & Form Container (Form loaded ONLY ONCE) -->
  <div class="hero-slider-overlay-wrap">
    <div class="container hero-container position-relative">
      <div class="hero-glass-card hero-glass-card-wide">
        <div class="row align-items-center g-4 g-lg-5 w-100 m-0">
          
          <!-- Left Side: Content Box Inside Glass Box (Synced Carousel) -->
          <div class="col-lg-7 hero-split-left p-0 pe-lg-3">

            <!-- Breadcrumb Navigation on Blur Slider -->
            <div class="city-slider-bc-wrap mb-3 text-start">
              <nav class="city-slider-bc" aria-label="Breadcrumb">
                <a href="<?= site_url() ?>" class="city-sbc-item">
                  Home
                </a>
                <span class="city-sbc-sep">&rsaquo;</span>
                <a href="<?= site_url('our-branches') ?>" class="city-sbc-item">Our Branches</a>
                <span class="city-sbc-sep">&rsaquo;</span>
                <span class="city-sbc-item">
                  <span><?= htmlspecialchars($state) ?></span>
                </span>
                <span class="city-sbc-sep">&rsaquo;</span>
                <span class="city-sbc-current">
                  <span><?= htmlspecialchars($city) ?></span>
                </span>
              </nav>
            </div>

            <div id="heroTextCarousel" class="carousel slide carousel-fade" data-bs-interval="false">
              <div class="carousel-inner">
                <!-- Slide 1 Content -->
                <div class="carousel-item active">
                  <div class="hero-content-wrapper">
                    <!-- Trust Badge Pill -->
                    <div class="hero-badge-wrapper text-start">
                      <div class="hero-trust-badge">
                        <span class="badge-icon"><i class="bi bi-shield-fill-check"></i></span>
                        <span class="badge-text">Top Rated Packers &amp; Movers in <?= htmlspecialchars($city) ?></span>
                      </div>
                    </div>

                    <!-- Main Heading -->
                    <h1 class="hero-glass-title text-start">
                      PACKERS &amp; MOVERS IN <span class="text-highlight-orange"><?= strtoupper(htmlspecialchars($city)) ?></span>
                    </h1>

                    <!-- Subtitle Description -->
                    <p class="hero-glass-desc text-start ms-0">
                      Professional household shifting, office relocation, and vehicle transport across <?= htmlspecialchars($city) ?> and <?= htmlspecialchars($state) ?>. 100% safe packing, GPS fleet, and on-time doorstep delivery.
                    </p>

                    <!-- 4 Features Grid -->
                    <div class="hero-features-grid text-start">
                      <!-- Feature 1: Safe Packing -->
                      <div class="hero-feature-item">
                        <div class="hero-feature-icon icon-orange">
                          <i class="bi bi-shield-check"></i>
                        </div>
                        <div class="hero-feature-text">
                          <div class="feature-title">Safe Packing</div>
                          <div class="feature-sub">100% Secure</div>
                        </div>
                      </div>

                      <!-- Feature 2: On-Time Delivery -->
                      <div class="hero-feature-item">
                        <div class="hero-feature-icon icon-blue">
                          <i class="bi bi-truck"></i>
                        </div>
                        <div class="hero-feature-text">
                          <div class="feature-title">On-Time Delivery</div>
                          <div class="feature-sub">Across <?= htmlspecialchars($city) ?></div>
                        </div>
                      </div>

                      <!-- Feature 3: Experienced Team -->
                      <div class="hero-feature-item">
                        <div class="hero-feature-icon icon-orange">
                          <i class="bi bi-box-seam-fill"></i>
                        </div>
                        <div class="hero-feature-text">
                          <div class="feature-title">Local Experts</div>
                          <div class="feature-sub">Verified Moving Team</div>
                        </div>
                      </div>

                      <!-- Feature 4: Affordable Prices -->
                      <div class="hero-feature-item">
                        <div class="hero-feature-icon icon-blue">
                          <i class="bi bi-currency-rupee"></i>
                        </div>
                        <div class="hero-feature-text">
                          <div class="feature-title">Best Rates</div>
                          <div class="feature-sub">Zero Hidden Fees</div>
                        </div>
                      </div>
                    </div>

                    <!-- CTA Actions Buttons -->
                    <div class="hero-actions text-start justify-content-start">
                      <a <?= $phonehtml ?> class="btn-hero-primary text-decoration-none" title="Call Now">
                        <span>Call <?= $phone ?></span>
                        <span class="btn-icon-circle">
                          <i class="bi bi-telephone-fill"></i>
                        </span>
                      </a>
                      <a href="<?= site_url('contact-us') ?>" class="btn-hero-secondary text-decoration-none" title="Get Free Quote">
                        Get Free Quote
                      </a>
                    </div>
                  </div>
                </div>

                <!-- Slide 2 Content -->
                <div class="carousel-item">
                  <div class="hero-content-wrapper">
                    <!-- Trust Badge Pill -->
                    <div class="hero-badge-wrapper text-start">
                      <div class="hero-trust-badge">
                        <span class="badge-icon"><i class="bi bi-patch-check-fill"></i></span>
                        <span class="badge-text">Door-to-Door Relocation Across <?= htmlspecialchars($city) ?>, <?= htmlspecialchars($state) ?></span>
                      </div>
                    </div>

                    <!-- Main Heading -->
                    <h2 class="hero-glass-title text-start">
                      SAFE &amp; RELIABLE SHIFTING <span class="text-highlight-orange">IN <?= strtoupper(htmlspecialchars($city)) ?></span>
                    </h2>

                    <!-- Subtitle Description -->
                    <p class="hero-glass-desc text-start ms-0">
                      Multi-layer premium packing materials and dedicated moving fleets in <?= htmlspecialchars($city) ?>. Experience damage-free shifting with <?= htmlspecialchars($company3) ?>.
                    </p>

                    <!-- 4 Features Grid -->
                    <div class="hero-features-grid text-start">
                      <div class="hero-feature-item">
                        <div class="hero-feature-icon icon-orange">
                          <i class="bi bi-house-door-fill"></i>
                        </div>
                        <div class="hero-feature-text">
                          <div class="feature-title">Home Shifting</div>
                          <div class="feature-sub">Local &amp; Intercity</div>
                        </div>
                      </div>

                      <div class="hero-feature-item">
                        <div class="hero-feature-icon icon-blue">
                          <i class="bi bi-shield-lock-fill"></i>
                        </div>
                        <div class="hero-feature-text">
                          <div class="feature-title">Transit Insurance</div>
                          <div class="feature-sub">100% Protection</div>
                        </div>
                      </div>

                      <div class="hero-feature-item">
                        <div class="hero-feature-icon icon-orange">
                          <i class="bi bi-car-front-fill"></i>
                        </div>
                        <div class="hero-feature-text">
                          <div class="feature-title">Vehicle Moving</div>
                          <div class="feature-sub">Car &amp; Bike Carrier</div>
                        </div>
                      </div>

                      <div class="hero-feature-item">
                        <div class="hero-feature-icon icon-blue">
                          <i class="bi bi-headset"></i>
                        </div>
                        <div class="hero-feature-text">
                          <div class="feature-title">24/7 Support</div>
                          <div class="feature-sub">Dedicated Manager</div>
                        </div>
                      </div>
                    </div>

                    <!-- CTA Actions Buttons -->
                    <div class="hero-actions text-start justify-content-start">
                      <a <?= $phonehtml ?> class="btn-hero-primary text-decoration-none" title="Call Now">
                        <span>Call <?= $phone ?></span>
                        <span class="btn-icon-circle">
                          <i class="bi bi-telephone-fill"></i>
                        </span>
                      </a>
                      <a href="<?= site_url('contact-us') ?>" class="btn-hero-secondary text-decoration-none" title="Contact Us">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Right Side: Quote Form Inside Glass Box (LOADED ONLY ONCE) -->
          <div class="col-lg-5 hero-split-right p-0 ps-lg-3">
            <?php $this->load->view('contacts/quoteform'); ?>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var heroCarousel = document.getElementById('heroCarousel');
  var heroTextCarousel = document.getElementById('heroTextCarousel');
  if (heroCarousel && heroTextCarousel) {
    heroCarousel.addEventListener('slide.bs.carousel', function(e) {
      var bsText = bootstrap.Carousel.getOrCreateInstance(heroTextCarousel);
      bsText.to(e.to);
    });
  }
});
</script>