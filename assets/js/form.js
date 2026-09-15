document.addEventListener("DOMContentLoaded", function () {
    // Inject custom validation styles
    if (!document.getElementById("validation-custom-styles")) {
        const style = document.createElement("style");
        style.id = "validation-custom-styles";
        style.innerHTML = `
            .quote-input-box.input-error-highlight,
            .input-error-highlight {
                border-color: #ff4d4d !important;
                box-shadow: 0 0 0 3px rgba(255, 77, 77, 0.35) !important;
                transition: all 0.25s ease-in-out !important;
            }
            .quote-input-box .quote-field-input.input-error-highlight,
            .quote-input-box .quote-field-select.input-error-highlight {
                border: none !important;
                box-shadow: none !important;
            }
            .field-error-msg {
                color: #ff6b6b !important;
                font-size: 0.72rem !important;
                font-weight: 700 !important;
                margin-top: 2px !important;
                margin-bottom: 4px !important;
                text-align: left !important;
                padding-left: 6px !important;
                display: flex !important;
                align-items: center !important;
                gap: 5px !important;
                text-shadow: 0 1px 3px rgba(0, 0, 0, 0.9) !important;
                animation: fieldErrorFadeIn 0.25s ease-out !important;
            }
            .field-wrap .field-ico {
                top: 14px !important;
            }
            .field-wrap.top-ico .field-ico {
                top: 14px !important;
            }
            @keyframes fieldErrorFadeIn {
                from { opacity: 0; transform: translateY(-4px); }
                to { opacity: 1; transform: translateY(0); }
            }
        `;
        document.head.appendChild(style);
    }

    // Attach submit handler to ALL forms with class .ajax-form
    document.querySelectorAll(".ajax-form").forEach(form => {

        // Auto clear error when user interacts with field
        form.querySelectorAll("input, select, textarea").forEach(inputEl => {
            const clearError = function () {
                const boxContainer = this.closest(".quote-input-box") || this.closest(".field-wrap") || this.closest(".form-group") || this;
                boxContainer.classList.remove("input-error-highlight");
                this.classList.remove("input-error-highlight");
                
                const colWrapper = this.closest(".quote-input-col");
                if (colWrapper) {
                    colWrapper.querySelectorAll(".field-error-msg").forEach(el => el.remove());
                } else {
                    const nextEl = boxContainer.nextElementSibling;
                    if (nextEl && nextEl.classList.contains("field-error-msg")) {
                        nextEl.remove();
                    }
                }
            };
            inputEl.addEventListener("input", clearError);
            inputEl.addEventListener("change", clearError);
        });

        form.addEventListener("submit", function (e) {
            e.preventDefault();

            // Clear previous errors and highlights
            form.querySelectorAll(".input-error-highlight").forEach(el => el.classList.remove("input-error-highlight"));
            form.querySelectorAll(".field-error-msg").forEach(el => el.remove());

            const url = this.getAttribute("data-url");
            const resultBoxId = this.getAttribute("data-result");
            const resultBox = document.getElementById(resultBoxId);
            
            // Get fields
            const nameInput = form.querySelector('input[name="name"]');
            const phoneInput = form.querySelector('input[name="phone"]');

            let hasErrors = false;

            // Helper to show field error cleanly inside its own column
            function showError(inputEl, message) {
                if (!inputEl) return;
                
                const boxContainer = inputEl.closest(".quote-input-box") || inputEl.closest(".field-wrap") || inputEl.closest(".form-group") || inputEl;
                boxContainer.classList.add("input-error-highlight");
                
                const errorDiv = document.createElement("div");
                errorDiv.className = "field-error-msg";
                errorDiv.innerHTML = `<i class="bi bi-exclamation-circle-fill"></i> ${message}`;
                
                // If wrapped in .quote-input-col, append directly under that specific column
                const colWrapper = inputEl.closest(".quote-input-col");
                if (colWrapper) {
                    colWrapper.appendChild(errorDiv);
                } else if (boxContainer.parentNode) {
                    boxContainer.parentNode.insertBefore(errorDiv, boxContainer.nextSibling);
                }
            }

            // Validate Name
            if (nameInput) {
                const val = nameInput.value.trim();
                if (!val) {
                    showError(nameInput, "Please enter your name.");
                    hasErrors = true;
                }
            }

            // Validate Phone
            if (phoneInput) {
                const val = phoneInput.value.trim();
                if (!val) {
                    showError(phoneInput, "Please enter mobile number.");
                    hasErrors = true;
                } else if (!/^\d+$/.test(val)) {
                    showError(phoneInput, "Must contain only digits.");
                    hasErrors = true;
                } else if (val.length !== 10) {
                    showError(phoneInput, "Must be exactly 10 digits.");
                    hasErrors = true;
                }
            }

            if (hasErrors) {
                if (resultBox) {
                    resultBox.innerHTML = ""; // Clear loader/previous messages
                }
                return; // Stop form submission
            }

            const formData = new FormData(this);

            // Show loader
            if (resultBox) {
                resultBox.innerHTML = "<p style='color:orange; font-weight:bold; font-size:0.9rem; padding: 10px;'>Please wait...</p>";
            }

            fetch(url, {
                method: "POST",
                body: formData
            })
            .then(res => res.text())
            .then(data => {

                if (data.trim() === "1") {
                    data = `
                        <div class='alert alert-success' style='margin-top: 15px;'>
                        <p style='color:green; font-weight:bold; margin-bottom: 0;'>Thank you! Your request has been submitted successfully.</p>
                        </div>
                    `;
                    form.reset();
                }

                if (resultBox) {
                    resultBox.innerHTML = data;
                    setTimeout(() => resultBox.innerHTML = "", 8000);
                }
            })
            .catch(err => {
                if (resultBox) {
                    resultBox.innerHTML = "<p style='color:red; font-weight:bold;'>Something went wrong!</p>";
                }
            });

        });

    });

});
