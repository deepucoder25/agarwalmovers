<section class="top-section section" data-animate="bottom" data-delay="1">
    <div class="container form-backgr text-white rounded-top shadow">
        <div class="row align-items-center">
            <!-- Phone Icon -->
            <div class="col-lg-1 col-2 text-center mt-3 position-relative">
                <a href="<?=$phonehtml?>" aria-label="Phone-number">
                    <i class="fa-solid fa-phone phone-mar"></i>
                </a>
            </div>

            <!-- Phone Number -->
            <div class="col-lg-3 col-8 mt-3 phone-num text-lg-start text-center">
                <a href="<?=$phonehtml?>" class="text-white text-decoration-none">
                    <p class="h5 mb-0 fw-bold"><?=$phone?></p>
                </a>
                <p class="small mb-0">Shifting House & Vehicle</p>
            </div>

            <!-- Service Menu -->
            <div class="col-lg-7 mt-lg-0 mt-3 py-3">
                <div class="row g-2 justify-content-center">
                    <div class="col-lg-1-5 col-3">
                        <div class="btn-manual position-relative">
                            <span class="selected-label">Selected</span>
                            <a class="form-service-icon" href="#"><i class="fa-solid fa-truck-moving"></i></a>
                            <a href="#" class="service-btn" data-service="Domestic Shifting">
                                Domestic Shifting
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-3">
                        <div class="btn-manual position-relative">
                            <span class="selected-label">Selected</span>
                            <a class="form-service-icon" href="#"><i class="fa-solid fa-location-dot"></i></a>
                            <a href="#" class="service-btn" data-service="Local Shifting">
                                Local Shifting
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-3">
                        <div class="btn-manual position-relative">
                            <span class="selected-label">Selected</span>
                            <a class="form-service-icon" href="#"><i class="fa-solid fa-car-rear"></i></a>
                            <a href="#" class="service-btn" data-service="Car Transport">
                                Car Transport
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-3">
                        <div class="btn-manual position-relative">
                            <span class="selected-label">Selected</span>
                            <a class="form-service-icon" href="#"><i class="fa-solid fa-motorcycle"></i></a>
                            <a href="#" class="service-btn" data-service="Bike Transport">
                                Bike Transport
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-3">
                        <div class="btn-manual position-relative">
                            <span class="selected-label">Selected</span>
                            <a class="form-service-icon" href="#"><i class="fa-solid fa-building"></i></a>
                            <a href="#" class="service-btn" data-service="Office Relocation">
                                Office Relocation
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-3">
                        <div class="btn-manual position-relative">
                            <span class="selected-label">Selected</span>
                            <a class="form-service-icon" href="#"><i class="fa-solid fa-coins"></i></a>
                            <a href="#" class="service-btn" data-service="Commercial Moving">
                                Commercial Moving
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-3">
                        <div class="btn-manual position-relative">
                            <span class="selected-label">Selected</span>
                            <a class="form-service-icon" href="#"><i class="fa-solid fa-plane"></i></a>
                            <a href="#" class="service-btn" data-service="International Moving">
                                International Moving
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-3">
                        <div class="btn-manual position-relative">
                            <span class="selected-label">Selected</span>
                            <a class="form-service-icon" href="#"><i class="fa-solid fa-warehouse"></i></a>
                            <a href="#" class="service-btn" data-service="Storage & Warehousing">
                                Storage & Warehousing
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quote Form -->
    <div class="container bg-white shadow-sm rounded-bottom quote-background">
        <div class="quote-form-container py-4 px-3">
            <h2 class="h5 fw-bold text-center text-black mb-4">
                Get a free <span id="service-title" class="text-danger">Domestic Shifting</span> quote
            </h2>

            <form method="post" id="qteform1" action="get">
                <input type="hidden" name="category" id="category">
                <input type="hidden" name="page_url" value="">

                <div class="row g-3">
                    <div class="col-lg-3 col-6">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="col-lg-3 col-6">
                        <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone No." required>
                    </div>
                    <div class="col-lg-3 col-6">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" required>
                    </div>
                    <div class="col-lg-3 col-6">
                        <input type="text" name="mf" id="mf" class="form-control" placeholder="Moving From" required>
                    </div>
                    <div class="col-lg-3 col-6">
                        <input type="text" name="mt" id="mt" class="form-control" placeholder="Moving To" required>
                    </div>
                    <div class="col-lg-3 col-6">
                        <input type="date" name="dt" id="moving-date" class="form-control" required>
                    </div>
                    <div class="col-lg-3">
                        <textarea name="message" id="message" class="form-control" rows="1" placeholder="Message"></textarea>
                    </div>
                    <div class="col-lg-3">
                        <div id="result4" class="small mb-2"></div>
                        <button id="submitbtn4" type="button" class="btn btn-danger bg-dark-red w-100 fw-bold py-2">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {
        // Date initialization
        let today = new Date().toISOString().split('T')[0];
        $('#moving-date').val(today).attr('min', today);
        $('#category').val($('#service-title').text());

        // Service select - first one selected by default
        $(".btn-manual").first().addClass("selected-btn");
        $(".btn-manual").first().find(".selected-label").show();

        // Service button click handler - use event delegation and prevent all navigation
        $(document).on('click', '.service-btn, .form-service-icon', function (e) {
            e.preventDefault();
            e.stopPropagation();
            
            let $btnManual = $(this).closest(".btn-manual");
            
            $(".btn-manual").removeClass("selected-btn");
            $(".selected-label").hide();
            $btnManual.addClass("selected-btn");
            $btnManual.find(".selected-label").show();

            let serviceName = $btnManual.find(".service-btn").data("service");
            $("#service-title").text(serviceName);
            $("#category").val(serviceName);
            
            return false;
        });

        // // Form submission handler
        // $("#submitbtn4").click(function(e) {
        //     e.preventDefault();
            
        //     // Clear previous messages
        //     $("#result4").html('');
            
        //     // Basic validation
        //     let name = $("#name").val().trim();
        //     let phone = $("#phone").val().trim();
        //     let email = $("#email").val().trim();
        //     let movingFrom = $("#mf").val().trim();
        //     let movingTo = $("#mt").val().trim();
        //     let movingDate = $("#moving-date").val();
            
        //     // Validation checks
        //     if (name === '') {
        //         $("#result4").html('<span class="text-danger">Please enter your name</span>');
        //         return;
        //     }
            
        //     if (phone === '') {
        //         $("#result4").html('<span class="text-danger">Please enter your phone number</span>');
        //         return;
        //     }
            
        //     // Basic phone validation (at least 10 digits)
        //     if (phone.replace(/\D/g, '').length < 10) {
        //         $("#result4").html('<span class="text-danger">Please enter a valid phone number</span>');
        //         return;
        //     }
            
        //     if (email === '') {
        //         $("#result4").html('<span class="text-danger">Please enter your email</span>');
        //         return;
        //     }
            
        //     // Basic email validation
        //     let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        //     if (!emailPattern.test(email)) {
        //         $("#result4").html('<span class="text-danger">Please enter a valid email address</span>');
        //         return;
        //     }
            
        //     if (movingFrom === '') {
        //         $("#result4").html('<span class="text-danger">Please enter moving from location</span>');
        //         return;
        //     }
            
        //     if (movingTo === '') {
        //         $("#result4").html('<span class="text-danger">Please enter moving to location</span>');
        //         return;
        //     }
            
        //     if (movingDate === '') {
        //         $("#result4").html('<span class="text-danger">Please select a moving date</span>');
        //         return;
        //     }
            
        //     // Disable submit button during processing
        //     $(this).prop('disabled', true).html('Submitting...');
            
        //     // Collect form data
        //     let formData = {
        //         name: name,
        //         phone: phone,
        //         email: email,
        //         moving_from: movingFrom,
        //         moving_to: movingTo,
        //         moving_date: movingDate,
        //         message: $("#message").val().trim(),
        //         category: $("#category").val(),
        //         page_url: $("input[name='page_url']").val()
        //     };
            
        //     // Log form data to console (for demo purposes)
        //     console.log('Form Data:', formData);
            
        //     // Simulate AJAX submission (replace with actual AJAX call to your backend)
        //     setTimeout(function() {
        //         // Success message
        //         $("#result4").html('<span class="success-message">✓ Quote request submitted successfully!</span>');
                
        //         // Reset form
        //         $("#qteform1")[0].reset();
                
        //         // Reset date to today
        //         $('#moving-date').val(today);
                
        //         // Re-enable button
        //         $("#submitbtn4").prop('disabled', false).html('Submit');
                
        //         // Clear success message after 5 seconds
        //         setTimeout(function() {
        //             $("#result4").html('');
        //         }, 5000);
        //     }, 1000);
            
        //     /* 
        //     // Uncomment this for actual AJAX submission to your backend:
        //     $.ajax({
        //         url: 'your-backend-url.php', // Replace with your actual URL
        //         type: 'POST',
        //         data: formData,
        //         dataType: 'json',
        //         success: function(response) {
        //             if (response.success) {
        //                 $("#result4").html('<span class="success-message">✓ Quote request submitted successfully!</span>');
        //                 $("#qteform1")[0].reset();
        //                 $('#moving-date').val(today);
        //             } else {
        //                 $("#result4").html('<span class="text-danger">' + response.message + '</span>');
        //             }
        //             $("#submitbtn4").prop('disabled', false).html('Submit');
        //         },
        //         error: function() {
        //             $("#result4").html('<span class="text-danger">Error submitting form. Please try again.</span>');
        //             $("#submitbtn4").prop('disabled', false).html('Submit');
        //         }
        //     });
        //     */
        // });
    });
</script>
