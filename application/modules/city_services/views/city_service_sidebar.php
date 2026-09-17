<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<aside class="service-sidebar" aria-label="City Services and Support Sidebar">
    <!-- Services Navigation Menu -->
    <div class="sidebar-widget widget-services">
        <h3 class="widget-title">City Relocation Services</h3>
        <ul class="sidebar-services-list" id="sidebarServiceList">
            <?php
            $sidebar_services = [
                ['slug' => 'home-shifting-in-' . $ctlink,              'name' => "Home Shifting in $city",              'icon' => 'bi-house-heart'],
                ['slug' => 'office-shifting-in-' . $ctlink,            'name' => "Office Relocation in $city",          'icon' => 'bi-building-gear'],
                ['slug' => 'car-transport-in-' . $ctlink,              'name' => "Car Transportation in $city",         'icon' => 'bi-car-front'],
                ['slug' => 'bike-transport-in-' . $ctlink,             'name' => "Bike Transportation in $city",        'icon' => 'bi-bicycle'],
                ['slug' => 'local-shifting-in-' . $ctlink,             'name' => "Local Shifting in $city",             'icon' => 'bi-geo-alt'],
                ['slug' => 'warehousing-and-storage-in-' . $ctlink,    'name' => "Warehousing & Storage in $city",     'icon' => 'bi-box-seam'],
            ];

            foreach ($sidebar_services as $index => $s):
                $is_active = ($active_service === $s['slug']) ? 'active' : '';
            ?>
                <li>
                    <a href="<?= site_url($s['slug']) ?>" class="<?= $is_active ?>">
                        <span class="d-flex align-items-center gap-2">
                            <i class="bi <?= $s['icon'] ?> service-icon"></i>
                            <span class="service-name"><?= $s['name'] ?></span>
                        </span>
                        <i class="bi bi-chevron-right arrow-icon"></i>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Contact & Action CTA Widget -->
    <div class="sidebar-widget widget-contact-cta text-center">
        <div class="cta-inner-card">
            <div class="cta-badge-online">Online Booking Active</div>
            <div class="cta-icon-box">
                <i class="bi bi-headset"></i>
            </div>
            <h3 class="cta-title">Need Urgent Shifting in <?= $city ?>?</h3>
            <p class="cta-desc">Get an immediate free survey &amp; best quote from our <?= $city ?> moving team.</p>
            
            <div class="cta-buttons d-flex flex-column gap-3">
                <a <?= $phonehtml ?> class="btn-sidebar-cta btn-sidebar-call">
                    <i class="bi bi-telephone-fill me-2"></i> Call: <?= $phone ?>
                </a>
                
                <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn-sidebar-cta btn-sidebar-whatsapp">
                    <i class="bi bi-whatsapp me-2"></i> WhatsApp Support
                </a>
                
                <button type="button" class="btn-sidebar-cta btn-sidebar-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                    <i class="bi bi-file-earmark-text me-2"></i> Instant Quote
                </button>
            </div>
        </div>
    </div>

    <!-- Trusted Badge Widget -->
    <div class="sidebar-widget widget-trusted-badges">
        <h4 class="widget-sub-title">Why Choose <?= $company3 ?> in <?= $city ?>?</h4>
        <ul class="trusted-points-list">
            <li class="trusted-point-item">
                <i class="bi bi-patch-check-fill text-success trusted-point-icon"></i>
                <div>
                    <strong><?= $yearsExperience ?> Years Experience</strong>
                    <p>Relocating homes and businesses since <?= $startYear ?>.</p>
                </div>
            </li>
            <li class="trusted-point-item">
                <i class="bi bi-people-fill text-primary trusted-point-icon"></i>
                <div>
                    <strong><?= $happyClients ?> Happy Moves</strong>
                    <p>Highly rated 5-star customer satisfaction in <?= $city ?>.</p>
                </div>
            </li>
            <li class="trusted-point-item">
                <i class="bi bi-shield-check text-warning trusted-point-icon"></i>
                <div>
                    <strong>100% Certified &amp; Licensed</strong>
                    <p>IBA approved &amp; ISO 9001:2015 certified company.</p>
                </div>
            </li>
            <li class="trusted-point-item">
                <i class="bi bi-file-earmark-lock-fill text-danger trusted-point-icon"></i>
                <div>
                    <strong><?= $secureShifting ?> Transit Insurance</strong>
                    <p>Full cargo damage protection for peaceful relocation.</p>
                </div>
            </li>
        </ul>
    </div>
</aside>
