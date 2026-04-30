<section class="breadcrumb-hero"
    style="background: url('<?= base_url("assets/images/slider/slider-3.webp") ?>') center/cover no-repeat;">
    <div class="circle c1"></div>
    <div class="circle c2"></div>
    <div class="container d-flex justify-content-center">
        <div class="hero-box text-center">
            <h1 class="page-title d-block">Contact Us</h1>
            <p class="page-description d-block mb-3">
                Expert packers and movers ensuring safe, timely, and hassle-free relocations in every city.
            </p>
            <ol class="breadcrumb breadcrumb-custom justify-content-center mb-0">
                <li class="breadcrumb-item">
                    <a href="<?= site_url() ?>">
                        <i class="fas fa-home"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="breadcrumb-item active text-white">
                    <span>Contact Us</span>
                </li>
            </ol>
        </div>
    </div>
</section>

<div class="content py-3">
    <div class="container">
        <div class="row align-items-center row-gap-4">
            <div class="col-lg-6">
                <div class="mb-4 mb-lg-0">
                    <div class="mb-4">
                        <span class="section-label">GET IN TOUCH</span>
                        <h2 class="mb-2"><span class="dark-red">Get in Touch</span> With Our Expert Team</h2>
                        <p>Have questions about your relocation? Our support team is always ready to assist you with the
                            best solutions. Whether it’s home shifting, office relocation, or vehicle transport, we
                            ensure a smooth and hassle-free experience.</p>
                    </div>
                    <div class="contact-box mb-3">
                        <i class="bi bi-envelope-fill"></i>
                        <div>
                            <p>Email Address</p>
                            <a href="<?= $mailhtml?>"><?= $mail?></a>
                        </div>
                    </div>

                    <div class="contact-box mb-3">
                        <i class="bi bi-telephone-fill"></i>
                        <div>
                            <p>Phone Number</p>
                            <a href="<?= $phonehtml?>"><?= $phone?></a>
                        </div>
                    </div>
                    <div class="contact-box">
                        <i class="bi bi-geo-alt-fill"></i>
                        <div>
                            <p>Our Address</p>
                            <span><?= $address?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card bg-gray shadow-none mb-0">
                    <div class="card-body p-3">
                        <div class="mb-3">
                            <h3 class="mb-1 fw-bold">Send Us a Massage</h3>
                            <p class="text-black fs-16 mb-1">How we can help you? Please write down your query</p>
                        </div>
                        <form method="post" id="getintouchform" onsubmit="return false" class="row flex-column">
                            <div class="col-12 form_box mb-3">
                                <i class="bi bi-person"></i>
                                <label class="form-label"><b>Full Name</b> <span class="text-danger">*</span></label>
                                <input type="text" name="name" placeholder="Full Name" class="form-control">
                            </div>
                            <div class="col-12 form_box mb-3">
                                <i class="bi bi-envelope-paper"></i>
                                <label class="form-label"><b>Email</b> <span class="text-danger">*</span></label>
                                <input type="email" name="email" placeholder="Email Address" class="form-control">
                            </div>
                            <div class="col-12 form_box mb-3">
                                <i class="bi bi-phone"></i>
                                <label class="form-label"><b>Phone</b> <span class="text-danger">*</span></label>
                                <input type="tel" name="phone" placeholder="Phone Number" class="form-control">
                            </div>
                            <div class="col-12 form_box mb-3">
                                <i class="bi bi-chat-dots"></i>
                                <label class="form-label"><b>Message</b> <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="message" placeholder="Your Message"
                                    rows="3"></textarea>
                            </div>
                            <div class="col-12 form_box">
                                <div class="d-flex my-3">
                                    <button type="button" id="submitcontactbtn" class="btn btn-danger text-white">
                                        Send Message &nbsp;<i class="fa-solid fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-12" id="resulttouch"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="map-grid py-3">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3867495.57970536!2d74.1275402681546!3d18.8047856661642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcfc41e9c9cd6f9%3A0x1b2f22924be04fb6!2sMaharashtra!5e0!3m2!1sen!2sin!4v1760679431085!5m2!1sen!2sin"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        $('#submitcontactbtn').click(function () {
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('contacts/contact'); ?>", // Update with your endpoint
                data: $("#getintouchform").serialize(),
                beforeSend: function () {
                    $('#resulttouch').html('<p style="color:red">Please wait...</p>');
                },
                success: function (data) {
                    $('#resulttouch').empty();
                    if (data == '1') {
                        data = "<div class='alert alert-success'><h4>Success! Your message has been submitted successfully. We will contact you soon.</h4></div>";
                        $("#getintouchform").trigger('reset');
                    }
                    $('#resulttouch').html(data);
                    setTimeout(function () {
                        $('#resulttouch').fadeOut('slow', function () {
                            $(this).empty().show();
                        });
                    }, 2000);
                }
            });
        });
    });
</script>

