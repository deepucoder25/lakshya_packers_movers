<body>
  <?php
  $megaWhatsappLink = !empty($whatsapphtml) ? $whatsapphtml : 'https://wa.me/918260207030';
  $navPhone = !empty($phone) ? $phone : '+91 8260207030';
  $navPhoneClean = preg_replace('/[^0-9+]/', '', $navPhone);

  $ci =& get_instance();
  $class = strtolower($ci->router->fetch_class());
  $method = strtolower($ci->router->fetch_method());
  $segment1 = $ci->uri->segment(1);

  // Determine active tab
  $active_tab = '';
  if (empty($segment1) || $segment1 === 'home' || $class === 'home') {
    $active_tab = 'home';
  } elseif ($segment1 === 'pricing' || $segment1 === 'price' || ($class === 'about' && $method === 'price')) {
    $active_tab = 'pricing';
  } elseif ($class === 'about' || in_array($segment1, ['about-us', 'why-choose-us', 'faqs', 'testimonials'])) {
    $active_tab = 'about';
  } elseif ($class === 'services' || in_array($segment1, ['our-services', 'house-shifting', 'home-shifting', 'office-relocation', 'car-transportation', 'bike-transportation', 'warehousing-and-storage', 'warehouse-and-storage', 'local-shifting', 'intercity-moving', 'intercity-shifting'])) {
    $active_tab = 'services';
  } elseif ($class === 'packers_movers' || $segment1 === 'our-branches' || in_array($segment1, ['bihar', 'delhi', 'west-bengal', 'odisha', 'gujarat', 'punjab', 'maharashtra', 'haryana', 'rajasthan', 'uttar-pradesh', 'jharkhand', 'assam', 'karnataka', 'tamil-nadu'])) {
    $active_tab = 'branches';
  } elseif ($class === 'blog' || $segment1 === 'blog') {
    $active_tab = 'blog';
  } elseif ($class === 'contacts' || $segment1 === 'contact-us') {
    $active_tab = 'contact';
  } elseif ($class === 'tracking' || $segment1 === 'tracking') {
    $active_tab = 'tracking';
  }
  ?>

  <!-- SEO Friendly SiteNavigationElement Schema -->
  <?php
  $nav_schema = [
    "@context" => "https://schema.org",
    "@graph" => [
      ["@type" => "SiteNavigationElement", "name" => "Home", "url" => site_url()],
      ["@type" => "SiteNavigationElement", "name" => "Tracking", "url" => site_url('tracking')],
      ["@type" => "SiteNavigationElement", "name" => "Services", "url" => site_url('our-services')],
      ["@type" => "SiteNavigationElement", "name" => "About Us", "url" => site_url('about-us')],
      ["@type" => "SiteNavigationElement", "name" => "Blog", "url" => site_url('blog')],
      ["@type" => "SiteNavigationElement", "name" => "Contact Us", "url" => site_url('contact-us')],
      ["@type" => "SiteNavigationElement", "name" => "Branches", "url" => site_url('our-branches')]
    ]
  ];
  ?>
  <script type="application/ld+json">
  <?= json_encode($nav_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) ?>
  </script>

  <!-- Site Header (Top Announcement Bar + Main Navbar) -->
  <header class="site-header position-relative w-100 bg-white" id="siteHeader">
    <!-- Topbar Banner Matching Screenshot -->
    <div class="site-topbar py-2 text-white">
      <div class="container">
        <div class="topbar-capsule d-flex align-items-center justify-content-between rounded px-3 py-1 w-100">
          <div class="topbar-item d-inline-flex align-items-center gap-2 text-nowrap">
            <i class="bi bi-truck topbar-icon"></i>
            <span>FREE Survey &amp; Packing Estimate &mdash; Call Now!</span>
          </div>

          <span class="topbar-sep px-1 user-select-none d-none d-md-inline">|</span>

          <div class="topbar-item d-inline-flex align-items-center gap-2 text-nowrap">
            <i class="bi bi-percent topbar-icon"></i>
            <span><strong class="topbar-highlight">10%</strong> OFF on your first move</span>
          </div>

          <span class="topbar-sep px-1 user-select-none d-none d-lg-inline">|</span>

          <div class="topbar-item d-none d-lg-inline-flex align-items-center gap-2 text-nowrap">
            <i class="bi bi-shield-check topbar-icon"></i>
            <span>Safe, Insured &amp; On-Time Delivery</span>
          </div>

          <span class="topbar-sep px-1 user-select-none d-none d-xl-inline">|</span>

          <div class="topbar-item d-none d-xl-inline-flex align-items-center gap-2 text-nowrap">
            <i class="bi bi-buildings topbar-icon"></i>
            <span>House Shifting, Office &amp; Vehicle Transport</span>
          </div>

          <span class="topbar-sep px-1 user-select-none">|</span>

          <div class="topbar-item d-inline-flex align-items-center gap-2 text-nowrap">
            <i class="bi bi-telephone-outbound topbar-icon"></i>
            <span>24/7 Support: <a href="tel:<?= $navPhoneClean ?>" class="text-white text-decoration-none fw-semibold"><?= $navPhone ?></a></span>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Navigation Bar - Zero Margin & Padding On Container -->
    <nav class="site-main-navbar w-100 bg-white border-bottom shadow-sm m-0 p-0" id="mainNavbar">
      <div class="container">
        <div class="navbar-inner d-flex align-items-center justify-content-between w-100">
          <!-- Logo -->
          <a href="<?= site_url() ?>" class="site-logo-link d-inline-flex align-items-center text-decoration-none" title="Lakshya Packers and Movers">
            <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="Lakshya Packers and Movers Logo" class="site-logo-img">
          </a>

          <!-- Desktop Nav Menu -->
          <ul class="desktop-nav-menu d-none d-lg-flex align-items-center list-unstyled m-0 p-0">
            <li class="desktop-nav-item position-relative d-inline-flex align-items-center">
              <a href="<?= site_url() ?>" class="desktop-nav-link d-inline-flex align-items-center text-uppercase text-decoration-none rounded <?= ($active_tab === 'home') ? 'active' : '' ?>">HOME</a>
            </li>

            <li class="desktop-nav-item position-relative d-inline-flex align-items-center">
              <a href="<?= site_url('our-services') ?>" class="desktop-nav-link d-inline-flex align-items-center text-uppercase text-decoration-none rounded <?= ($active_tab === 'services') ? 'active' : '' ?>">
                SERVICES <i class="bi bi-chevron-down nav-arrow"></i>
              </a>
              <ul class="nav-dropdown position-absolute start-0 list-unstyled m-0 rounded-3 shadow-lg bg-white">
                <li><a href="<?= site_url('house-shifting') ?>" class="dropdown-item-link d-flex align-items-center text-decoration-none rounded px-3 py-2"><i class="bi bi-house-door-fill"></i> House Shifting</a></li>
                <li><a href="<?= site_url('office-relocation') ?>" class="dropdown-item-link d-flex align-items-center text-decoration-none rounded px-3 py-2"><i class="bi bi-briefcase-fill"></i> Office Relocation</a></li>
                <li><a href="<?= site_url('car-transportation') ?>" class="dropdown-item-link d-flex align-items-center text-decoration-none rounded px-3 py-2"><i class="bi bi-car-front-fill"></i> Car Transportation</a></li>
                <li><a href="<?= site_url('bike-transportation') ?>" class="dropdown-item-link d-flex align-items-center text-decoration-none rounded px-3 py-2"><i class="bi bi-bicycle"></i> Bike Transportation</a></li>
                <li><a href="<?= site_url('warehousing-and-storage') ?>" class="dropdown-item-link d-flex align-items-center text-decoration-none rounded px-3 py-2"><i class="bi bi-box-seam-fill"></i> Warehousing &amp; Storage</a></li>
                <li><a href="<?= site_url('local-shifting') ?>" class="dropdown-item-link d-flex align-items-center text-decoration-none rounded px-3 py-2"><i class="bi bi-geo-alt-fill"></i> Local Shifting</a></li>
                <li><a href="<?= site_url('intercity-moving') ?>" class="dropdown-item-link d-flex align-items-center text-decoration-none rounded px-3 py-2"><i class="bi bi-signpost-2-fill"></i> Intercity Moving</a></li>
              </ul>
            </li>

            <li class="desktop-nav-item position-relative d-inline-flex align-items-center">
              <a href="<?= site_url('pricing') ?>" class="desktop-nav-link d-inline-flex align-items-center text-uppercase text-decoration-none rounded <?= ($active_tab === 'pricing') ? 'active' : '' ?>">PRICING</a>
            </li>

            <li class="desktop-nav-item position-relative d-inline-flex align-items-center">
              <a href="<?= site_url('about-us') ?>" class="desktop-nav-link d-inline-flex align-items-center text-uppercase text-decoration-none rounded <?= ($active_tab === 'about') ? 'active' : '' ?>">
                ABOUT US <i class="bi bi-chevron-down nav-arrow"></i>
              </a>
              <ul class="nav-dropdown position-absolute start-0 list-unstyled m-0 rounded-3 shadow-lg bg-white">
                <li><a href="<?= site_url('about-us') ?>" class="dropdown-item-link d-flex align-items-center text-decoration-none rounded px-3 py-2"><i class="bi bi-building"></i> About Company</a></li>
                <li><a href="<?= site_url('why-choose-us') ?>" class="dropdown-item-link d-flex align-items-center text-decoration-none rounded px-3 py-2"><i class="bi bi-award-fill"></i> Why Choose Us</a></li>
                <li><a href="<?= site_url('faqs') ?>" class="dropdown-item-link d-flex align-items-center text-decoration-none rounded px-3 py-2"><i class="bi bi-question-circle-fill"></i> FAQs</a></li>
                <li><a href="<?= site_url('testimonials') ?>" class="dropdown-item-link d-flex align-items-center text-decoration-none rounded px-3 py-2"><i class="bi bi-star-fill"></i> Testimonials</a></li>
                <li><a href="<?= site_url('photo-gallery') ?>" class="dropdown-item-link d-flex align-items-center text-decoration-none rounded px-3 py-2"><i class="bi bi-images"></i> Photo Gallery</a></li>
              </ul>
            </li>

            <li class="desktop-nav-item position-relative d-inline-flex align-items-center">
              <a href="<?= site_url('blog') ?>" class="desktop-nav-link d-inline-flex align-items-center text-uppercase text-decoration-none rounded <?= ($active_tab === 'blog') ? 'active' : '' ?>">BLOG</a>
            </li>

            <li class="desktop-nav-item position-relative d-inline-flex align-items-center">
              <a href="<?= site_url('contact-us') ?>" class="desktop-nav-link d-inline-flex align-items-center text-uppercase text-decoration-none rounded <?= ($active_tab === 'contact') ? 'active' : '' ?>">CONTACT</a>
            </li>

            <li class="desktop-nav-item position-relative d-inline-flex align-items-center">
              <a href="<?= site_url('our-branches') ?>" class="desktop-nav-link d-inline-flex align-items-center text-uppercase text-decoration-none rounded <?= ($active_tab === 'branches') ? 'active' : '' ?>">
                <i class="bi bi-buildings me-1"></i> BRANCHES
              </a>
            </li>

            <li class="desktop-nav-item position-relative d-inline-flex align-items-center">
              <a href="<?= site_url('tracking') ?>" class="desktop-nav-link d-inline-flex align-items-center text-uppercase text-decoration-none rounded <?= ($active_tab === 'tracking') ? 'active' : '' ?>">TRACKING</a>
            </li>
          </ul>

          <!-- Right CTA Button Matching Screenshot -->
          <a href="<?= site_url('contact-us') ?>" class="btn-nav-quote d-none d-lg-inline-flex align-items-center rounded-pill text-white text-decoration-none fw-bold text-nowrap">
            <i class="bi bi-file-earmark-text-fill"></i>
            <span>Get a Free Quote</span>
            <i class="bi bi-chevron-right btn-chevron"></i>
          </a>

          <!-- Mobile Hamburger Toggle -->
          <div class="mobile-nav-actions d-lg-none d-flex align-items-center">
            <button class="mobile-menu-toggle d-inline-flex flex-column justify-content-center align-items-center rounded border p-0" id="openMobileDrawer" aria-label="Toggle navigation menu">
              <span></span>
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <!-- Mobile Offcanvas Drawer & Backdrop Overlay -->
  <div class="mobile-drawer-overlay position-fixed top-0 start-0 w-100 h-100" id="mobileDrawerOverlay"></div>
  <aside class="mobile-drawer position-fixed top-0 end-0 h-100 bg-white d-flex flex-column shadow-lg" id="mobileDrawer" aria-label="Mobile Navigation">
    <div class="drawer-header d-flex align-items-center justify-content-between px-3 py-3 border-bottom bg-white">
      <a href="<?= site_url() ?>" class="site-logo-link d-inline-flex align-items-center text-decoration-none">
        <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="Lakshya Packers and Movers" class="site-logo-img">
      </a>
      <button class="btn-drawer-close rounded-circle d-inline-flex align-items-center justify-content-center border p-0" id="closeMobileDrawer" aria-label="Close menu">&times;</button>
    </div>

    <div class="drawer-body flex-grow-1 overflow-auto p-3">
      <ul class="mobile-nav-list list-unstyled m-0 p-0 d-flex flex-column gap-1">
        <li class="mobile-nav-item">
          <a href="<?= site_url() ?>" class="mobile-nav-link d-flex align-items-center justify-content-between w-100 rounded text-decoration-none border-0 bg-transparent <?= ($active_tab === 'home') ? 'active' : '' ?>">
            <span class="mobile-nav-text d-inline-flex align-items-center gap-2"><i class="bi bi-house-door-fill"></i> HOME</span>
          </a>
        </li>

        <li class="mobile-nav-item has-dropdown">
          <button type="button" class="mobile-dropdown-btn d-flex align-items-center justify-content-between w-100 rounded text-decoration-none border-0 bg-transparent">
            <span class="mobile-nav-text d-inline-flex align-items-center gap-2"><i class="bi bi-box-seam-fill"></i> SERVICES</span>
            <i class="bi bi-chevron-down arrow-icon"></i>
          </button>
          <ul class="mobile-dropdown-menu list-unstyled rounded-3">
            <li><a href="<?= site_url('house-shifting') ?>" class="mobile-sub-link d-flex align-items-center text-decoration-none rounded px-2 py-2"><i class="bi bi-house-door"></i> House Shifting</a></li>
            <li><a href="<?= site_url('office-relocation') ?>" class="mobile-sub-link d-flex align-items-center text-decoration-none rounded px-2 py-2"><i class="bi bi-briefcase"></i> Office Relocation</a></li>
            <li><a href="<?= site_url('car-transportation') ?>" class="mobile-sub-link d-flex align-items-center text-decoration-none rounded px-2 py-2"><i class="bi bi-car-front"></i> Car Transportation</a></li>
            <li><a href="<?= site_url('bike-transportation') ?>" class="mobile-sub-link d-flex align-items-center text-decoration-none rounded px-2 py-2"><i class="bi bi-bicycle"></i> Bike Transportation</a></li>
            <li><a href="<?= site_url('warehousing-and-storage') ?>" class="mobile-sub-link d-flex align-items-center text-decoration-none rounded px-2 py-2"><i class="bi bi-box-seam"></i> Warehousing &amp; Storage</a></li>
            <li><a href="<?= site_url('local-shifting') ?>" class="mobile-sub-link d-flex align-items-center text-decoration-none rounded px-2 py-2"><i class="bi bi-geo-alt"></i> Local Shifting</a></li>
            <li><a href="<?= site_url('intercity-moving') ?>" class="mobile-sub-link d-flex align-items-center text-decoration-none rounded px-2 py-2"><i class="bi bi-signpost-2"></i> Intercity Moving</a></li>
          </ul>
        </li>

        <li class="mobile-nav-item">
          <a href="<?= site_url('pricing') ?>" class="mobile-nav-link d-flex align-items-center justify-content-between w-100 rounded text-decoration-none border-0 bg-transparent <?= ($active_tab === 'pricing') ? 'active' : '' ?>">
            <span class="mobile-nav-text d-inline-flex align-items-center gap-2"><i class="bi bi-tag-fill"></i> PRICING</span>
          </a>
        </li>

        <li class="mobile-nav-item has-dropdown">
          <button type="button" class="mobile-dropdown-btn d-flex align-items-center justify-content-between w-100 rounded text-decoration-none border-0 bg-transparent">
            <span class="mobile-nav-text d-inline-flex align-items-center gap-2"><i class="bi bi-info-circle-fill"></i> ABOUT US</span>
            <i class="bi bi-chevron-down arrow-icon"></i>
          </button>
          <ul class="mobile-dropdown-menu list-unstyled rounded-3">
            <li><a href="<?= site_url('about-us') ?>" class="mobile-sub-link d-flex align-items-center text-decoration-none rounded px-2 py-2"><i class="bi bi-building"></i> About Company</a></li>
            <li><a href="<?= site_url('why-choose-us') ?>" class="mobile-sub-link d-flex align-items-center text-decoration-none rounded px-2 py-2"><i class="bi bi-award"></i> Why Choose Us</a></li>
            <li><a href="<?= site_url('faqs') ?>" class="mobile-sub-link d-flex align-items-center text-decoration-none rounded px-2 py-2"><i class="bi bi-question-circle"></i> FAQs</a></li>
            <li><a href="<?= site_url('testimonials') ?>" class="mobile-sub-link d-flex align-items-center text-decoration-none rounded px-2 py-2"><i class="bi bi-star"></i> Testimonials</a></li>
            <li><a href="<?= site_url('photo-gallery') ?>" class="mobile-sub-link d-flex align-items-center text-decoration-none rounded px-2 py-2"><i class="bi bi-images"></i> Photo Gallery</a></li>
          </ul>
        </li>

        <li class="mobile-nav-item">
          <a href="<?= site_url('blog') ?>" class="mobile-nav-link d-flex align-items-center justify-content-between w-100 rounded text-decoration-none border-0 bg-transparent <?= ($active_tab === 'blog') ? 'active' : '' ?>">
            <span class="mobile-nav-text d-inline-flex align-items-center gap-2"><i class="bi bi-newspaper"></i> BLOG</span>
          </a>
        </li>

        <li class="mobile-nav-item">
          <a href="<?= site_url('contact-us') ?>" class="mobile-nav-link d-flex align-items-center justify-content-between w-100 rounded text-decoration-none border-0 bg-transparent <?= ($active_tab === 'contact') ? 'active' : '' ?>">
            <span class="mobile-nav-text d-inline-flex align-items-center gap-2"><i class="bi bi-envelope-fill"></i> CONTACT</span>
          </a>
        </li>

        <li class="mobile-nav-item">
          <a href="<?= site_url('our-branches') ?>" class="mobile-nav-link d-flex align-items-center justify-content-between w-100 rounded text-decoration-none border-0 bg-transparent <?= ($active_tab === 'branches') ? 'active' : '' ?>">
            <span class="mobile-nav-text d-inline-flex align-items-center gap-2"><i class="bi bi-buildings-fill"></i> BRANCHES</span>
          </a>
        </li>

        <li class="mobile-nav-item">
          <a href="<?= site_url('tracking') ?>" class="mobile-nav-link d-flex align-items-center justify-content-between w-100 rounded text-decoration-none border-0 bg-transparent <?= ($active_tab === 'tracking') ? 'active' : '' ?>">
            <span class="mobile-nav-text d-inline-flex align-items-center gap-2"><i class="bi bi-truck"></i> TRACKING</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="drawer-footer p-3 border-top d-flex flex-column gap-3">
      <a href="<?= site_url('contact-us') ?>" class="btn-nav-quote d-inline-flex align-items-center rounded-pill text-white text-decoration-none fw-bold text-nowrap w-100 justify-content-center">
        <i class="bi bi-file-earmark-text-fill"></i>
        <span>Get a Free Quote</span>
        <i class="bi bi-chevron-right btn-chevron"></i>
      </a>

      <div class="drawer-contact-grid d-grid gap-2">
        <a href="tel:<?= $navPhoneClean ?>" class="drawer-contact-btn btn-call d-inline-flex align-items-center justify-content-center rounded fw-bold text-decoration-none border py-2 px-2">
          <i class="bi bi-telephone-fill"></i>
          <span>Call Now</span>
        </a>
        <a href="<?= $megaWhatsappLink ?>" target="_blank" rel="noopener noreferrer" class="drawer-contact-btn btn-whatsapp d-inline-flex align-items-center justify-content-center rounded fw-bold text-decoration-none border py-2 px-2">
          <i class="bi bi-whatsapp"></i>
          <span>WhatsApp</span>
        </a>
      </div>
    </div>
  </aside>

  <!-- Interactive JavaScript for Navigation -->
  <script>
    (function() {
      const openBtn = document.getElementById('openMobileDrawer');
      const closeBtn = document.getElementById('closeMobileDrawer');
      const drawer = document.getElementById('mobileDrawer');
      const overlay = document.getElementById('mobileDrawerOverlay');
      const header = document.getElementById('siteHeader');

      function openMenu() {
        drawer.classList.add('active');
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
      }

      function closeMenu() {
        drawer.classList.remove('active');
        overlay.classList.remove('active');
        document.body.style.overflow = '';
      }

      if (openBtn) openBtn.addEventListener('click', openMenu);
      if (closeBtn) closeBtn.addEventListener('click', closeMenu);
      if (overlay) overlay.addEventListener('click', closeMenu);

      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeMenu();
      });

      // Mobile Dropdown Accordions
      document.querySelectorAll('.mobile-dropdown-btn').forEach(function(btn) {
        btn.addEventListener('click', function(e) {
          e.preventDefault();
          const parentItem = this.closest('.mobile-nav-item');
          
          // Close other open accordion items
          document.querySelectorAll('.mobile-nav-item.has-dropdown').forEach(function(item) {
            if (item !== parentItem) {
              item.classList.remove('open');
            }
          });

          parentItem.classList.toggle('open');
        });
      });

      // Sticky Header Scroll Effect
      window.addEventListener('scroll', function() {
        if (window.scrollY > 40) {
          header.classList.add('sticky-header');
        } else {
          header.classList.remove('sticky-header');
        }
      }, { passive: true });
    })();
  </script>