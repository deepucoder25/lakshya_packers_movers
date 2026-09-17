<?php
$footerWeb = !empty($website) ? $website : 'www.lakshyapackersmovers.com';
?>

<!-- ==========================================================================
     Main Site Footer (High Contrast, Crystal Clear Text & Background Visibility)
     ========================================================================== -->
<footer class="site-footer position-relative text-white">
  <div class="footer-backdrop-pattern"></div>
  
  <div class="container position-relative z-2">
    <!-- Top Main Footer Grid (4 Columns) -->
    <div class="row g-4 footer-main-row pt-5 pb-4">
      <!-- Column 1: Brand Logo, About & Highlights -->
      <div class="col-lg-3 col-md-6 col-12 footer-col">
        <div class="footer-brand mb-3">
          <a href="<?= site_url() ?>" class="d-inline-block text-decoration-none">
            <div class="footer-logo-wrapper bg-white p-2 rounded-3 shadow-sm d-inline-flex align-items-center">
              <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="<?= htmlspecialchars($company3) ?>" class="footer-logo img-fluid">
            </div>
          </a>
        </div>
        <p class="footer-desc mb-3 text-light">
          <?= htmlspecialchars($company3) ?> is a premier and IBA-approved relocation company providing safe, fast, and affordable packing, moving, vehicle transportation, and warehousing services across India.
        </p>
        <div class="d-flex flex-wrap gap-2 mb-3">
          <span class="badge bg-white bg-opacity-10 text-white border border-light border-opacity-25 py-1 px-2 d-inline-flex align-items-center gap-1">
            <i class="bi bi-patch-check-fill text-warning"></i> ISO 9001:2015
          </span>
          <span class="badge bg-white bg-opacity-10 text-white border border-light border-opacity-25 py-1 px-2 d-inline-flex align-items-center gap-1">
            <i class="bi bi-shield-check text-info"></i> 100% Insured
          </span>
          <span class="badge bg-white bg-opacity-10 text-white border border-light border-opacity-25 py-1 px-2 d-inline-flex align-items-center gap-1">
            <i class="bi bi-truck text-success"></i> All India Move
          </span>
        </div>
      </div>

      <!-- Column 2: Quick Links (From Navbar) -->
      <div class="col-lg-2 col-md-6 col-6 footer-col">
        <h3 class="footer-heading text-uppercase fw-bold text-white mb-3">QUICK LINKS</h3>
        <ul class="footer-links-list list-unstyled m-0 p-0 d-flex flex-column gap-2">
          <li><a href="<?= site_url() ?>" class="text-decoration-none d-inline-flex align-items-center"><i class="bi bi-chevron-right me-1"></i> Home</a></li>
          <li><a href="<?= site_url('about-us') ?>" class="text-decoration-none d-inline-flex align-items-center"><i class="bi bi-chevron-right me-1"></i> About Us</a></li>
          <li><a href="<?= site_url('pricing') ?>" class="text-decoration-none d-inline-flex align-items-center"><i class="bi bi-chevron-right me-1"></i> Pricing</a></li>
          <li><a href="<?= site_url('testimonials') ?>" class="text-decoration-none d-inline-flex align-items-center"><i class="bi bi-chevron-right me-1"></i> Testimonials</a></li>
          <li><a href="<?= site_url('photo-gallery') ?>" class="text-decoration-none d-inline-flex align-items-center"><i class="bi bi-chevron-right me-1"></i> Photo Gallery</a></li>
          <li><a href="<?= site_url('blog') ?>" class="text-decoration-none d-inline-flex align-items-center"><i class="bi bi-chevron-right me-1"></i> Blog</a></li>
          <li><a href="<?= site_url('faqs') ?>" class="text-decoration-none d-inline-flex align-items-center"><i class="bi bi-chevron-right me-1"></i> FAQs</a></li>
          <li><a href="<?= site_url('tracking') ?>" class="text-decoration-none d-inline-flex align-items-center"><i class="bi bi-chevron-right me-1"></i> Tracking</a></li>
          <li><a href="<?= site_url('contact-us') ?>" class="text-decoration-none d-inline-flex align-items-center"><i class="bi bi-chevron-right me-1"></i> Contact Us</a></li>
          <li><a href="<?= site_url('our-branches') ?>" class="text-decoration-none d-inline-flex align-items-center"><i class="bi bi-chevron-right me-1"></i> Our Branches</a></li>
        </ul>
      </div>

      <!-- Column 3: Our Services (From Navbar) -->
      <div class="col-lg-2 col-md-6 col-6 footer-col">
        <h3 class="footer-heading text-uppercase fw-bold text-white mb-3">OUR SERVICES</h3>
        <ul class="footer-services-list list-unstyled m-0 p-0 d-flex flex-column gap-2">
          <li>
            <a href="<?= site_url('house-shifting') ?>" class="d-flex align-items-center gap-2 text-decoration-none">
              <span class="footer-svc-icon"><i class="bi bi-house-door"></i></span>
              <span>House Shifting</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('office-relocation') ?>" class="d-flex align-items-center gap-2 text-decoration-none">
              <span class="footer-svc-icon"><i class="bi bi-building"></i></span>
              <span>Office Relocation</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('car-transportation') ?>" class="d-flex align-items-center gap-2 text-decoration-none">
              <span class="footer-svc-icon"><i class="bi bi-car-front"></i></span>
              <span>Vehicle Transportation</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('bike-transportation') ?>" class="d-flex align-items-center gap-2 text-decoration-none">
              <span class="footer-svc-icon"><i class="bi bi-bicycle"></i></span>
              <span>Bike Transportation</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('warehousing-and-storage') ?>" class="d-flex align-items-center gap-2 text-decoration-none">
              <span class="footer-svc-icon"><i class="bi bi-box-seam"></i></span>
              <span>Storage Solutions</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('local-shifting') ?>" class="d-flex align-items-center gap-2 text-decoration-none">
              <span class="footer-svc-icon"><i class="bi bi-geo-alt"></i></span>
              <span>Local Shifting</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('intercity-moving') ?>" class="d-flex align-items-center gap-2 text-decoration-none">
              <span class="footer-svc-icon"><i class="bi bi-signpost-2"></i></span>
              <span>Intercity Moving</span>
            </a>
          </li>
        </ul>
      </div>

      <!-- Column 4: Branches & Legal -->
      <div class="col-lg-2 col-md-6 col-12 footer-col">
        <div class="row">
          <div class="col-lg-12 col-6">
            <h3 class="footer-heading text-uppercase fw-bold text-white mb-3">BRANCHES</h3>
            <ul class="footer-links-list list-unstyled m-0 p-0 d-flex flex-column gap-2">
              <li><a href="<?= site_url('west-bengal') ?>" class="text-decoration-none d-inline-flex align-items-center"><i class="bi bi-chevron-right me-1"></i> West Bengal</a></li>
              <li><a href="<?= site_url('jharkhand') ?>" class="text-decoration-none d-inline-flex align-items-center"><i class="bi bi-chevron-right me-1"></i> Jharkhand</a></li>
              <li><a href="<?= site_url('odisha') ?>" class="text-decoration-none d-inline-flex align-items-center"><i class="bi bi-chevron-right me-1"></i> Odisha</a></li>
            </ul>
          </div>

          <div class="col-lg-12 col-6 mt-lg-4">
            <h3 class="footer-heading text-uppercase fw-bold text-white mb-3">POLICIES</h3>
            <ul class="footer-links-list list-unstyled m-0 p-0 d-flex flex-column gap-2">
              <li><a href="<?= site_url('privacy-policy') ?>" class="text-decoration-none d-inline-flex align-items-center"><i class="bi bi-chevron-right me-1"></i> Privacy Policy</a></li>
              <li><a href="<?= site_url('terms-and-conditions') ?>" class="text-decoration-none d-inline-flex align-items-center"><i class="bi bi-chevron-right me-1"></i> Terms &amp; Conditions</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Column 5: Contact Us -->
      <div class="col-lg-3 col-md-6 col-12 footer-col">
        <h3 class="footer-heading text-uppercase fw-bold text-white mb-3">CONTACT US</h3>
        <div class="d-flex flex-column gap-3 mb-4">
          <div class="d-flex align-items-start gap-3">
            <span class="footer-contact-icon rounded-circle flex-shrink-0 d-inline-flex align-items-center justify-content-center"><i class="bi bi-geo-alt-fill"></i></span>
            <span class="footer-contact-text"><?= htmlspecialchars($address) ?></span>
          </div>

          <div class="d-flex align-items-center gap-3">
            <span class="footer-contact-icon rounded-circle flex-shrink-0 d-inline-flex align-items-center justify-content-center"><i class="bi bi-telephone-fill"></i></span>
            <div class="footer-contact-text">
              <a <?= $phonehtml ?> class="text-decoration-none"><?= $phone ?></a>
            </div>
          </div>

          <div class="d-flex align-items-center gap-3">
            <span class="footer-contact-icon rounded-circle flex-shrink-0 d-inline-flex align-items-center justify-content-center"><i class="bi bi-envelope-fill"></i></span>
            <a href="mailto:<?= $mailhtml ?>" class="footer-contact-text text-decoration-none"><?= $mail ?></a>
          </div>

          <div class="d-flex align-items-center gap-3">
            <span class="footer-contact-icon rounded-circle flex-shrink-0 d-inline-flex align-items-center justify-content-center"><i class="bi bi-globe"></i></span>
            <a href="<?= site_url() ?>" class="footer-contact-text text-decoration-none"><?= $footerWeb ?></a>
          </div>
        </div>
      </div>
    </div>

    <!-- Cities We Serve Across India (Modern Frosted Glass Chip Badges) -->
    <?php
    $footer_cities = [
      ['city' => 'Agartala', 'state' => 'Tripura'],
      ['city' => 'Angul', 'state' => 'Odisha'],
      ['city' => 'Arambagh', 'state' => 'West Bengal'],
      ['city' => 'Balasore', 'state' => 'Odisha'],
      ['city' => 'Baripada', 'state' => 'Odisha'],
      ['city' => 'Berhampur', 'state' => 'Odisha'],
      ['city' => 'Bhadrak', 'state' => 'Odisha'],
      ['city' => 'Bhopal', 'state' => 'Madhya Pradesh'],
      ['city' => 'Bokaro', 'state' => 'Jharkhand'],
      ['city' => 'Cuttack', 'state' => 'Odisha'],
      ['city' => 'Deoghar', 'state' => 'Jharkhand'],
      ['city' => 'Dhanbad', 'state' => 'Jharkhand'],
      ['city' => 'Durgapur', 'state' => 'West Bengal'],
      ['city' => 'Giridih', 'state' => 'Jharkhand'],
      ['city' => 'Guwahati', 'state' => 'Assam'],
      ['city' => 'Hazaribagh', 'state' => 'Jharkhand'],
      ['city' => 'Indore', 'state' => 'Madhya Pradesh'],
      ['city' => 'Jaipur', 'state' => 'Rajasthan'],
      ['city' => 'Jamshedpur', 'state' => 'Jharkhand'],
      ['city' => 'Jodhpur', 'state' => 'Rajasthan'],
      ['city' => 'Khammam', 'state' => 'Telangana'],
      ['city' => 'Kochi', 'state' => 'Kerala'],
      ['city' => 'Krishnanagar', 'state' => 'West Bengal'],
      ['city' => 'Nagpur', 'state' => 'Maharashtra'],
      ['city' => 'Paradeep', 'state' => 'Odisha'],
      ['city' => 'Puri', 'state' => 'Odisha'],
      ['city' => 'Raipur', 'state' => 'Chhattisgarh'],
      ['city' => 'Ramgarh', 'state' => 'Jharkhand'],
      ['city' => 'Rourkela', 'state' => 'Odisha'],
      ['city' => 'Sambalpur', 'state' => 'Odisha'],
      ['city' => 'Siliguri', 'state' => 'West Bengal'],
      ['city' => 'Vadodara', 'state' => 'Gujarat']
    ];
    ?>
    <div class="footer-cities-card rounded-4 p-4 my-4">
      <div class="footer-cities-header d-flex align-items-center justify-content-center text-center mb-4">
        <div class="footer-cities-heading-capsule d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill">
          <span class="cities-pulse-icon d-inline-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
            <i class="bi bi-geo-alt-fill"></i>
          </span>
          <span class="footer-cities-title text-uppercase">
            <span>PACKERS &amp; MOVERS ACROSS INDIA</span>
            <span class="footer-cities-badge">CITIES WE SERVE</span>
          </span>
        </div>
      </div>
      <div class="footer-cities-chips d-flex flex-wrap justify-content-center gap-2">
        <?php foreach ($footer_cities as $item): 
          $link = urlencode(strtolower(str_replace(" ", "-", $item['city'])));
          $statename = urlencode(strtolower(str_replace(" ", "-", $item['state'])));
        ?>
          <a href="<?= site_url("$link-packers-movers-$statename") ?>" class="footer-city-chip" title="Packers and Movers in <?= $item['city'] ?>, <?= $item['state'] ?>">
            <i class="bi bi-geo-alt-fill city-dot"></i>
            <span>Packers and Movers <?= $item['city'] ?></span>
          </a>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Middle Feature Trust Bar (Pill Card) -->
    <div class="footer-trust-card rounded-4 p-4 my-4">
      <div class="row g-3 align-items-center justify-content-between">
        <!-- 1. Safe & Secure -->
        <div class="col-xl col-md-4 col-sm-6 col-12 trust-item-col">
          <div class="trust-badge-item d-flex align-items-center gap-3">
            <div class="trust-icon-badge rounded-circle flex-shrink-0 d-inline-flex align-items-center justify-content-center">
              <i class="bi bi-shield-check"></i>
            </div>
            <div class="trust-text-group">
              <div class="trust-title text-uppercase fw-bold text-white">SAFE &amp; SECURE</div>
              <div class="trust-sub">Your belongings are in safe hands</div>
            </div>
          </div>
        </div>

        <!-- 2. On Time Delivery -->
        <div class="col-xl col-md-4 col-sm-6 col-12 trust-item-col">
          <div class="trust-badge-item d-flex align-items-center gap-3">
            <div class="trust-icon-badge rounded-circle flex-shrink-0 d-inline-flex align-items-center justify-content-center">
              <i class="bi bi-clock-history"></i>
            </div>
            <div class="trust-text-group">
              <div class="trust-title text-uppercase fw-bold text-white">ON TIME DELIVERY</div>
              <div class="trust-sub">Timely service, every time</div>
            </div>
          </div>
        </div>

        <!-- 3. Happy Customers -->
        <div class="col-xl col-md-4 col-sm-6 col-12 trust-item-col">
          <div class="trust-badge-item d-flex align-items-center gap-3">
            <div class="trust-icon-badge rounded-circle flex-shrink-0 d-inline-flex align-items-center justify-content-center">
              <i class="bi bi-people-fill"></i>
            </div>
            <div class="trust-text-group">
              <div class="trust-title text-uppercase fw-bold text-white">HAPPY CUSTOMERS</div>
              <div class="trust-sub"><?= $happyClients ?> satisfied customers</div>
            </div>
          </div>
        </div>

        <!-- 4. 5+ Years Experience -->
        <div class="col-xl col-md-6 col-sm-6 col-12 trust-item-col">
          <div class="trust-badge-item d-flex align-items-center gap-3">
            <div class="trust-icon-badge rounded-circle flex-shrink-0 d-inline-flex align-items-center justify-content-center">
              <i class="bi bi-award-fill"></i>
            </div>
            <div class="trust-text-group">
              <div class="trust-title text-uppercase fw-bold text-white"><?= $yearsExperience ?> YEARS EXPERIENCE</div>
              <div class="trust-sub">Trusted service with experienced team</div>
            </div>
          </div>
        </div>

        <!-- 5. 24/7 Support -->
        <div class="col-xl col-md-6 col-sm-6 col-12 trust-item-col">
          <div class="trust-badge-item d-flex align-items-center gap-3">
            <div class="trust-icon-badge rounded-circle flex-shrink-0 d-inline-flex align-items-center justify-content-center">
              <i class="bi bi-headset"></i>
            </div>
            <div class="trust-text-group">
              <div class="trust-title text-uppercase fw-bold text-white">24/7 SUPPORT</div>
              <div class="trust-sub">We are always here to help you</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Footer Bar (Copyright, Pledge & Payment/Social Actions) -->
    <div class="footer-bottom-bar border-top border-white border-opacity-15 py-3">
      <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
        <!-- Left: Copyright & Security Pledge -->
        <div class="d-flex align-items-center flex-wrap gap-2 gap-md-3">
          <div class="footer-copyright small">
            &copy; <?= date('Y') ?> <?= htmlspecialchars($company3) ?>. All Rights Reserved.
          </div>
          <span class="text-white-50 d-none d-md-inline">|</span>
          <div class="footer-pledge d-inline-flex align-items-center gap-1.5 small">
            <i class="bi bi-shield-lock-fill text-cyan"></i>
            <span><strong>Your Move, Our Responsibility.</strong> <span class="text-cyan">Safe &amp; Timely.</span></span>
          </div>
        </div>

        <!-- Right: Payment & Social Badges -->
        <div class="footer-bottom-actions d-flex align-items-center gap-3 flex-wrap">
          <div class="footer-payment-group d-flex align-items-center gap-2">
            <span class="footer-pay-label small">We Accept</span>
            <div class="footer-pay-badges d-flex align-items-center gap-1">
              <span class="pay-badge visa">VISA</span>
              <span class="pay-badge mastercard"><span class="mc-circle red"></span><span class="mc-circle yellow"></span></span>
              <span class="pay-badge amex">AMEX</span>
              <span class="pay-badge upi">UPI <i class="bi bi-lightning-charge-fill"></i></span>
            </div>
          </div>

          <div class="footer-bottom-social d-flex align-items-center gap-2">
            <span class="footer-pay-label small">Follow Us</span>
            <div class="d-flex align-items-center gap-1">
              <a href="<?= $facebookhtml ?>" target="_blank" rel="noopener noreferrer" class="footer-mini-social d-inline-flex align-items-center justify-content-center rounded-circle text-decoration-none" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
              <a href="<?= $instagramhtml ?>" target="_blank" rel="noopener noreferrer" class="footer-mini-social d-inline-flex align-items-center justify-content-center rounded-circle text-decoration-none" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
              <a href="<?= $twitterhtml ?>" target="_blank" rel="noopener noreferrer" class="footer-mini-social d-inline-flex align-items-center justify-content-center rounded-circle text-decoration-none" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
              <a href="<?= $youtubehtml ?>" target="_blank" rel="noopener noreferrer" class="footer-mini-social d-inline-flex align-items-center justify-content-center rounded-circle text-decoration-none" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Quote Modal Component -->
<?php $this->load->view('contacts/quotemodal'); ?>

<!-- Floating Action Buttons Widget (Call, Get Quote, WhatsApp) -->
<?php $this->load->view('template/floating_button_widget'); ?>

<!-- Bootstrap Bundle JS & Form Submission Handler -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/js/form.js') ?>"></script>
</body>
</html>
