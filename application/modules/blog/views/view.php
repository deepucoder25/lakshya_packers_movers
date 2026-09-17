<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<main class="main">
    <!-- Breadcrumbs Section -->
    <?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_current' => '',
    'bc_title_white' => 'Blog',
    'bc_title_orange' => 'Details',
    'bc_desc' => ''
]); 
?>

    <!-- Blog Single Post -->
    <section class="blog-details-section py-5 bg-light">
        <div class="container my-3">
            <div class="row ">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm">
                        <!-- Image (Only displayed if uploaded from admin) -->
                        <?php 
                        $main_img = null;
                        if (!empty(@$query[0]->image)) {
                            $raw_img = @$query[0]->image;
                            if (substr($raw_img, 0, 4) === 'http') {
                                $main_img = $raw_img;
                            } elseif (file_exists(FCPATH . 'assets/uploads/blog/' . $raw_img)) {
                                $main_img = base_url('assets/uploads/blog/' . $raw_img);
                            } elseif (file_exists(FCPATH . 'uploads/blogs/' . $raw_img)) {
                                $main_img = base_url('uploads/blogs/' . $raw_img);
                            }
                        }
                        if (!empty($main_img)): ?>
                            <div class="mb-4 rounded-4 overflow-hidden shadow-sm position-relative">
                                <img src="<?= $main_img ?>" alt="<?= htmlspecialchars(@$query[0]->title) ?>" class="img-fluid w-100 blog-details-img">
                            </div>
                        <?php endif; ?>
                        
                        <!-- Meta Info -->
                        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4 pb-3 border-bottom">
                            <div class="d-flex gap-3 text-muted small">
                                <span class="d-flex align-items-center gap-2"><i class="bi bi-calendar-event blog-icon-primary"></i> <?= date('M d, Y', strtotime(@$query[0]->created_at)) ?></span>
                                <span class="d-flex align-items-center gap-2"><i class="bi bi-person-circle text-success"></i> By <?= !empty(@$query[0]->author) ? htmlspecialchars(@$query[0]->author) : 'Admin' ?></span>
                            </div>
                            <div>
                                <button class="btn btn-sm px-3 rounded-pill fw-bold blog-btn-share" data-bs-toggle="modal" data-bs-target="#shareModal">
                                    <i class="bi bi-share me-1"></i> Share Post
                                </button>
                            </div>
                        </div>

                        <!-- Blog Details -->
                        <h2 class="fw-bold mb-4 blog-details-title"><?= @$query[0]->title ?></h2>
                        <div class="blog-content-wrapper text-muted">
                            <?= nl2br(@$query[0]->content) ?>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <aside class="blog-sidebar sticky-top blog-sidebar-sticky">
                        <!-- Recent Posts Widget -->
                        <div class="sidebar-widget widget-recent-posts mb-4">
                            <div class="widget-header-line d-flex align-items-center justify-content-between mb-3">
                                <h3 class="widget-title mb-0">
                                    <i class="bi bi-newspaper text-orange me-2"></i>Recent Posts
                                </h3>
                                <span class="badge-post-count"><?= count($recent_posts) ?> Updates</span>
                            </div>
                            <div class="recent-posts-list">
                                <?php if (!empty($recent_posts)): ?>
                                    <?php foreach ($recent_posts as $post_arr): $post = (object)$post_arr; ?>
                                        <?php
                                        $image_file = $post->image;
                                        $post_img = null;
                                        if (!empty($image_file)) {
                                            if (substr($image_file, 0, 4) === 'http') {
                                                $post_img = $image_file;
                                            } elseif (file_exists(FCPATH . 'assets/uploads/blog/' . $image_file)) {
                                                $post_img = base_url('assets/uploads/blog/' . $image_file);
                                            } elseif (file_exists(FCPATH . 'uploads/blogs/' . $image_file)) {
                                                $post_img = base_url('uploads/blogs/' . $image_file);
                                            }
                                        }
                                        $custom_slug = !empty($post->slug) ? $post->slug : rtrim(str_replace("--", "-", urlencode(str_replace(" ", "-", str_replace(",", " ", $post->title)))), "-");
                                        $is_active = (isset($query[0]->id) && $query[0]->id == $post->id) || (isset($query[0]->b_id) && $query[0]->b_id == $post->id);
                                        ?>
                                        <a href="<?= site_url('blog/'.$custom_slug) ?>" class="recent-post-card <?= $is_active ? 'active-post' : '' ?>">
                                            <?php if (!empty($post_img)): ?>
                                                <div class="recent-post-thumb-wrap">
                                                    <img src="<?= $post_img ?>" alt="<?= htmlspecialchars($post->title) ?>" class="recent-post-thumb" loading="lazy">
                                                    <span class="thumb-overlay-icon"><i class="bi bi-arrow-right-short"></i></span>
                                                </div>
                                            <?php else: ?>
                                                <div class="recent-post-thumb-wrap post-thumb-icon">
                                                    <i class="bi bi-newspaper"></i>
                                                </div>
                                            <?php endif; ?>
                                            <div class="recent-post-body">
                                                <h4 class="recent-post-title text-truncate-2"><?= htmlspecialchars($post->title) ?></h4>
                                                <div class="recent-post-meta">
                                                    <span class="meta-date"><i class="bi bi-calendar3 me-1"></i><?= date('M d, Y', strtotime($post->created_at)) ?></span>
                                                    <span class="meta-dot">&bull;</span>
                                                    <span class="meta-read"><i class="bi bi-clock me-1"></i>3 min</span>
                                                </div>
                                            </div>
                                        </a>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <div class="empty-recent-posts p-4 text-center text-muted">
                                        <i class="bi bi-journal-x fs-3 d-block mb-2 text-muted"></i>
                                        <p class="mb-0 small">No other posts available.</p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Modern Need Help Relocation CTA Widget -->
                        <div class="sidebar-widget widget-blog-cta text-center">
                            <div class="cta-inner-card">
                                <div class="cta-badge-online">Fast Response Guaranteed</div>
                                <div class="cta-icon-box">
                                    <i class="bi bi-headset"></i>
                                </div>
                                <h3 class="cta-title">Need Moving Help?</h3>
                                <p class="cta-desc">Get a quick, customized estimate for your home or office relocation from our verified moving experts.</p>
                                
                                <div class="cta-buttons d-flex flex-column gap-3">
                                    <button type="button" class="btn-sidebar-cta btn-sidebar-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                                        <i class="bi bi-file-earmark-text me-2"></i> Get a Free Quote
                                    </button>
                                    <a href="<?= isset($phonehtml) ? $phonehtml : 'tel:' . (isset($phone) ? $phone : '') ?>" class="btn-sidebar-cta btn-sidebar-call">
                                        <i class="bi bi-telephone-fill me-2"></i> Call: <?= isset($phone) ? $phone : 'Direct Support' ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Share Modal -->
<div class="modal fade" id="shareModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 shadow-lg">
            <div class="modal-header border-bottom-0 pb-0">
                <h5 class="modal-title fw-bold blog-icon-primary">Share this post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <div class="d-grid gap-3 social-buttons">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=YOUR_URL" target="_blank" class="btn text-white py-2 rounded-3 fw-bold blog-bg-fb">
                        <i class="bi bi-facebook me-2"></i> Share on Facebook
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=YOUR_URL" target="_blank" class="btn text-white py-2 rounded-3 fw-bold blog-bg-tw">
                        <i class="bi bi-twitter me-2"></i> Share on Twitter
                    </a>
                    <a href="https://api.whatsapp.com/send?text=YOUR_URL" target="_blank" class="btn text-white py-2 rounded-3 fw-bold blog-bg-wa">
                        <i class="bi bi-whatsapp me-2"></i> Share on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var currentUrl = window.location.href;
    document.querySelectorAll('.social-buttons a').forEach(function(btn) {
        var shareUrl = btn.getAttribute('href');
        btn.setAttribute('href', shareUrl.replace('YOUR_URL', encodeURIComponent(currentUrl)));
    });
</script>



<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": "<?= addslashes(@$query[0]->title) ?>",
    "image": [
        "<?= @$query[0]->image ? base_url('uploads/blogs/' . @$query[0]->image) : base_url('assets/images/about/packers_movers.jpg') ?>"
    ],
    "datePublished": "<?= date('c', strtotime(@$query[0]->created_at)) ?>",
    "author": {
        "@type": "Person",
        "name": "Admin"
    },
    "publisher": {
        "@type": "Organization",
        "name": "<?= isset($company3) ? $company3 : 'MyCompany' ?>",
        "logo": {
            "@type": "ImageObject",
            "url": "<?= base_url('assets/img/logo/logo.png') ?>"
        }
    },
    "description": "<?= addslashes(substr(strip_tags(@$query[0]->description), 0, 160)) ?>",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?= current_url() ?>"
    }
}
</script>