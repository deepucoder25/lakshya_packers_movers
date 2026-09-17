<!-- Review Modal -->
<div class="modal fade custom-modal" id="rvwmdl" tabindex="-1" role="dialog" aria-labelledby="rvwmdl" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content reviews-modal-content p-3 p-md-4">
            <div class="reviews-modal-header mb-3">
                <div class="row align-items-center">
                    <div class="col-10">
                        <div class="reviews-modal-title">
                            <span class="reviews-modal-title-icon"><i class="bi bi-chat-heart-fill"></i></span>
                            <span>Leave us Feedback, Suggestion, or Complaints</span>
                        </div>
                    </div>
                    <div class="col-2 text-end">
                        <button type="button" class="close reviews-modal-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
                        </button>
                    </div>
                </div>
            </div>
            <form method="post" id="reviewsform" onsubmit="return false">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating rvw-floating">
                            <input type="text" class="form-control" id="rvw_name" name="name" placeholder="Full Name" required>
                            <label for="rvw_name"><i class="bi bi-person me-1"></i> Full Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating rvw-floating">
                            <input type="email" class="form-control" id="rvw_email" name="email" placeholder="name@example.com" required>
                            <label for="rvw_email"><i class="bi bi-envelope me-1"></i> Email Address</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating rvw-floating">
                            <input type="text" class="form-control" id="rvw_title" name="title" placeholder="Review Title">
                            <label for="rvw_title"><i class="bi bi-chat-left-dots me-1"></i> Review Title</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="rvw-rating-card">
                            <div class="rvw-rating-card-label">
                                <span class="micro-label"><i class="bi bi-star-fill text-warning"></i> Your Rating</span>
                                <span class="rating-status-text" id="ratingStatusText">5.0 ★ Excellent</span>
                            </div>
                            <div class="reviews-rating">
                                <input type="radio" name="stars" value="5" id="rating-5" checked><label for="rating-5" title="5 stars - Excellent"></label>
                                <input type="radio" name="stars" value="4" id="rating-4"><label for="rating-4" title="4 stars - Very Good"></label>
                                <input type="radio" name="stars" value="3" id="rating-3"><label for="rating-3" title="3 stars - Good"></label>
                                <input type="radio" name="stars" value="2" id="rating-2"><label for="rating-2" title="2 stars - Fair"></label>
                                <input type="radio" name="stars" value="1" id="rating-1"><label for="rating-1" title="1 star - Poor"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating rvw-floating">
                            <textarea class="form-control" id="rvw_desc" name="desc" placeholder="Write Your Experience" required></textarea>
                            <label for="rvw_desc"><i class="bi bi-chat-left-text me-1"></i> Write Your Experience & Feedback...</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="rvw-upload-card">
                            <div class="rvw-upload-info">
                                <i class="bi bi-camera-fill"></i>
                                <div>
                                    <strong class="d-block text-dark">Add a Photo <span class="text-muted fw-normal">(Optional)</span></strong>
                                    <small class="text-muted">Upload shifting or delivery proof (JPG, PNG)</small>
                                </div>
                            </div>
                            <input type="file" name="img" class="form-control rvw-file-input" id="rvw_image" accept="image/*">
                        </div>
                    </div>
                    <div class="col-12 text-center pt-2">
                        <div id="result"></div>
                        <div class="d-flex justify-content-center gap-2 flex-wrap">
                            <button id="submitbtn" type="submit" class="theme-btn reviews-modal-submit">
                                <span>Submit Review</span> <i class="bi bi-send-fill ms-1"></i>
                            </button>
                            <button onclick="var r = document.getElementById('result'); if(r) r.innerHTML=''; var st = document.getElementById('ratingStatusText'); if(st) st.textContent='5.0 ★ Excellent';" type="reset" class="theme-btn reviews-modal-clear">
                                <span>Clear</span> <i class="bi bi-arrow-counterclockwise ms-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
 </div>
 <script>
    (function() {
        function initReviewForm() {
            var submitBtn = document.getElementById('submitbtn');
            var form = document.getElementById('reviewsform');
            var resultDiv = document.getElementById('result');

            if (!submitBtn || !form) return;

            // Live update rating label
            var ratingStatusMap = {
                '5': '5.0 ★ Excellent',
                '4': '4.0 ★ Very Good',
                '3': '3.0 ★ Good',
                '2': '2.0 ★ Fair',
                '1': '1.0 ★ Poor'
            };
            var ratingInputs = form.querySelectorAll('input[name="stars"]');
            var ratingStatusEl = document.getElementById('ratingStatusText');
            ratingInputs.forEach(function(radio) {
                radio.addEventListener('change', function() {
                    if (ratingStatusEl && ratingStatusMap[this.value]) {
                        ratingStatusEl.textContent = ratingStatusMap[this.value];
                    }
                });
            });

            function doSubmit(e) {
                if (e) e.preventDefault();

                var formData = new FormData(form);
                var name = (formData.get('name') || '').trim();
                var email = (formData.get('email') || '').trim();
                var desc = (formData.get('desc') || '').trim();

                if (!name) {
                    if (resultDiv) resultDiv.innerHTML = '<div class="alert alert-danger py-2">Please enter your full name.</div>';
                    return;
                }
                if (!email) {
                    if (resultDiv) resultDiv.innerHTML = '<div class="alert alert-danger py-2">Please enter your email address.</div>';
                    return;
                }
                if (!desc) {
                    if (resultDiv) resultDiv.innerHTML = '<div class="alert alert-danger py-2">Please write your experience or feedback.</div>';
                    return;
                }

                submitBtn.disabled = true;
                if (resultDiv) {
                    resultDiv.innerHTML = '<p class="text-primary my-2"><span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>Submitting your review...</p>';
                }

                fetch('<?= site_url("reviews/review") ?>', {
                    method: 'POST',
                    body: formData
                })
                .then(function(res) {
                    return res.json();
                })
                .then(function(data) {
                    submitBtn.disabled = false;
                    if (data && data.err === 0) {
                        if (resultDiv) {
                            resultDiv.innerHTML = '<div class="alert alert-success py-2"><p class="text-success m-0 fw-semibold"><i class="bi bi-check-circle-fill me-1"></i> ' + (data.msg || 'Success! Thank you for your review!') + '</p></div>';
                        }
                        form.reset();
                        setTimeout(function() {
                            window.location.reload();
                        }, 1200);
                    } else {
                        var errMsg = (data && data.msg) ? data.msg : 'An error occurred while posting your review.';
                        if (resultDiv) {
                            resultDiv.innerHTML = '<div class="alert alert-danger py-2">' + errMsg + '</div>';
                        }
                    }
                })
                .catch(function(err) {
                    submitBtn.disabled = false;
                    console.error('Review submit error:', err);
                    if (resultDiv) {
                        resultDiv.innerHTML = '<div class="alert alert-danger py-2">An error occurred while posting your review. Please try again later.</div>';
                    }
                });
            }

            submitBtn.addEventListener('click', doSubmit);
            form.addEventListener('submit', doSubmit);
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initReviewForm);
        } else {
            initReviewForm();
        }
    })();
 </script>

 

