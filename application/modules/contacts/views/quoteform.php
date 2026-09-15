  <div class="hero-quote-card-container" itemscope itemtype="https://schema.org/QuoteAction">
    <div class="hero-quote-white-card">
      <!-- Top Header Bar inside Card -->
      <div class="hero-quote-header-bar d-flex align-items-center">
        <div class="quote-header-title-box d-flex align-items-center gap-2">
          <span class="quote-bolt-badge"><i class="bi bi-lightning-charge-fill"></i></span>
          <div>
            <h3 class="hero-quote-title m-0" itemprop="name">Get Instant Moving Estimate</h3>
            <p class="hero-quote-subtitle m-0" itemprop="description">Fast &amp; transparent relocation quote</p>
          </div>
        </div>
      </div>
      
      <!-- Card Body / Form -->
      <div class="card-body-form">
        <form id="quoteform" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="quoteformresults" onsubmit="return false;">
          
          <div class="quote-form-vertical-grid">
            <!-- Row 1: Name & Phone in 2 Columns -->
            <div class="quote-form-row-2col">
              <!-- Column 1: Name -->
              <div class="quote-input-col">
                <div class="quote-input-box">
                  <div class="quote-input-icon">
                    <i class="bi bi-person-fill"></i>
                  </div>
                  <div class="quote-input-content quote-floating-group">
                    <input type="text" name="name" id="q_name" class="quote-field-input" placeholder=" " required>
                    <label for="q_name" class="quote-floating-label">Your Name</label>
                  </div>
                </div>
              </div>

              <!-- Column 2: Phone -->
              <div class="quote-input-col">
                <div class="quote-input-box">
                  <div class="quote-input-icon">
                    <i class="bi bi-telephone-fill"></i>
                  </div>
                  <div class="quote-input-content quote-floating-group">
                    <input type="tel" name="phone" id="q_phone" class="quote-field-input" placeholder=" " required>
                    <label for="q_phone" class="quote-floating-label">Phone Number</label>
                  </div>
                </div>
              </div>
            </div>

            <!-- Input 3: Service Selection -->
            <div class="quote-input-col w-100">
              <div class="quote-input-box w-100">
                <div class="quote-input-icon">
                  <i class="bi bi-truck"></i>
                </div>
                <div class="quote-input-content quote-floating-group">
                  <select name="mtype" id="q_mtype" class="quote-field-select" required>
                    <option value="" disabled selected hidden></option>
                    <option>House Shifting</option>
                    <option>Office Relocation</option>
                    <option>Car Transportation</option>
                    <option>Bike Transportation</option>
                    <option>Warehousing & Storage</option>
                    <option>Local Shifting</option>
                    <option>Intercity Moving</option>
                  </select>
                  <label for="q_mtype" class="quote-floating-label">Moving Service</label>
                </div>
              </div>
            </div>

            <!-- Row 2: Moving From & Moving To in 2 Columns -->
            <div class="quote-form-row-2col">
              <!-- Column 4: Moving From -->
              <div class="quote-input-col">
                <div class="quote-input-box">
                  <div class="quote-input-icon">
                    <i class="bi bi-geo-alt-fill"></i>
                  </div>
                  <div class="quote-input-content quote-floating-group">
                    <input type="text" name="mfrom" id="q_mfrom" class="quote-field-input" value="<?= @$city ?>" placeholder=" " required>
                    <label for="q_mfrom" class="quote-floating-label">From (Pickup)</label>
                  </div>
                </div>
              </div>

              <!-- Column 5: Moving To -->
              <div class="quote-input-col">
                <div class="quote-input-box">
                  <div class="quote-input-icon">
                    <i class="bi bi-pin-map-fill"></i>
                  </div>
                  <div class="quote-input-content quote-floating-group">
                    <input type="text" name="mto" id="q_mto" class="quote-field-input" placeholder=" " required>
                    <label for="q_mto" class="quote-floating-label">To (Destination)</label>
                  </div>
                </div>
              </div>
            </div>

            <!-- Action Button: Get Free Quote -->
            <div class="quote-btn-box w-100">
              <button type="submit" class="quote-submit-btn w-100">
                <span>Get Free Estimate</span>
                <span class="quote-btn-arrow"><i class="bi bi-arrow-right"></i></span>
              </button>
            </div>

            <!-- Micro Trust Line -->
            <div class="quote-micro-trust text-center">
              <i class="bi bi-shield-check text-success"></i>
              <span>100% Free &amp; Secure • No Hidden Charges</span>
            </div>
          </div>
          
          <div id="quoteformresults"></div>
        </form>
      </div>
    </div>
  </div>