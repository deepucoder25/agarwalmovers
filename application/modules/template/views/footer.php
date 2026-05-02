<footer class="footer-section text-white pt-5">

    <div class="container">
        <div class="row gy-4 justify-content-center">

            <div class="col-lg-3 col-md-6">
                <span class="fw-bold fs-5 d-block mb-3 border-bottom pb-2">
                    <?= $companyname ?>
                </span>

                <p class="fs-6">
                    Box courier service in Gurugram, Haryana provides Home & Household Shifting,
                    Office Shifting, Car & Bike Transport, Packing & Unpacking, and safe relocation services.
                </p>

                <div class="d-flex align-items-center gap-3 mt-4">
                    <a href="<?= $facebookhtml ?> " aria-label="Go to facebook" class="social"><i
                            class="bi bi-facebook"><span class="visually-hidden">Facebook</span></i></a>
                    <a href="<?= $twitterhtml ?>" aria-label="Go to twitter" class="social"><i
                            class="bi bi-twitter"></i><span class="visually-hidden">twitter</span></a>
                    <a href="<?= $instagramhtml ?>" aria-label="Go to instagram" class="social"><i
                            class="bi bi-instagram"></i><span class="visually-hidden">instagram</span></a>
                    <a href="<?= $linkedinhtml ?>" aria-label="Go to linkedin" class="social"><i
                            class="bi bi-linkedin"></i><span class="visually-hidden">linkedin</span></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-6">
                <span class="fw-bold fs-5 d-block mb-3 border-bottom pb-2">OUR SERVICES</span>

                <ul class="list-unstyled fs-6">
                    <li><a href="<?= site_url('bike-service') ?>">› Bike Service</a></li>
                    <li><a href="<?= site_url('car-shifting') ?>">› Car Shifting</a></li>
                    <li><a href="<?= site_url('home-relocation') ?>">› Home Relocation</a></li>
                    <li><a href="<?= site_url('packing-unpacking-service') ?>">› Packing and Unpacking Service</a></li>
                    <li><a href="<?= site_url('warehousing-service') ?>">› Warehouse Service</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-6">
                <span class="fw-bold fs-5 d-block mb-3 border-bottom pb-2">QUICK LINKS</span>

                <ul class="list-unstyled fs-6">
                    <li><a href="<?= site_url('home') ?>">› Home</a></li>
                    <li><a href="<?= site_url('about') ?>">› About Us</a></li>
                    <li><a href="<?= site_url('branches') ?>">› Our Branches</a></li>
                    <li><a href="<?= site_url('contacts') ?>">› Contact</a></li>
                    <li><a href="<?= site_url('gallery') ?>">› Gallery</a></li>
                    <li><a href="<?= site_url('testimonials') ?>">› Testimonials</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <span class="fw-bold fs-5 d-block mb-3 border-bottom pb-2">GET IN TOUCH</span>

                <div class="d-flex gap-3 mb-3">
                    <i class="bi bi-telephone-fill fs-5"></i>
                    <div>
                        <span class="fw-semibold fs-6 d-block">Call Us</span>
                        <a href="<?= $phonehtml ?>" class="fs-6 text-white text-decoration-none">
                            <?= $phone ?>
                        </a>
                    </div>
                </div>

                <div class="d-flex gap-3 mb-3">
                    <i class="bi bi-envelope-fill fs-5"></i>
                    <div>
                        <span class="fw-semibold fs-6 d-block">Email Us</span>
                        <a href="<?= $mailhtml ?>" class="fs-6 text-white text-decoration-none">
                            <?= $mail ?>
                        </a>

                    </div>
                </div>

                <div class="d-flex gap-3">
                    <i class="bi bi-geo-alt-fill fs-5"></i>
                    <div>
                        <span class="fw-semibold fs-6 d-block">Address</span>
                        <span class="fs-6">
                            Shop 6, Block F, Carterpuri Village,<br>
                            Sector 23A, Gurugram, Haryana
                        </span>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="footer-bottom py-3 mt-4">
        <div class="container d-flex justify-content-between flex-wrap">

            <span class="fs-6">
                © <?= date('Y') ?> <?= $companyname ?>. All rights reserved.
            </span>

            <div class="footer-bottom-links">
                <a href="<?= site_url('terms-and-condition')?>">Terms & Condition</a>
                <a href="<?= site_url('privacy-policy') ?>">Privacy</a>
            </div>

        </div>
    </div>

</footer>
<style>
    .footer-section {
        background: var(--primary-dark);
    }

    .footer-section a {
        color: #ddd;
        text-decoration: none;
        transition: 0.3s;
        display: block;
        padding: 4px 0;
    }

    .footer-section a:hover {
        color: #fff;
        transform: translateX(6px);
    }

    .social {
        width: 42px;
        height: 42px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        color: #fff;
        transition: all 0.3s ease;
    }

    .social i {
        font-size: 18px;
        line-height: 0;
    }

    .social:hover {
        background: var(--primary-dark);
        transform: translateY(-5px);
    }


    .footer-bottom {
        background: var(--primary-dark);
    }

    .footer-bottom-links a {
        margin-left: 20px;
        font-size: 15px;
        display: inline-block;
    }

    .footer-bottom-links a:hover {
        color: #fff;
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/js/script.js') ?>"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    // Attach submit handler to ALL forms with class .ajax-form
    document.querySelectorAll(".ajax-form").forEach(form => {

        form.addEventListener("submit", function (e) {
            e.preventDefault();

            const url = this.getAttribute("data-url");
            const resultBoxId = this.getAttribute("data-result");
            const resultBox = document.getElementById(resultBoxId);
            const formData = new FormData(this);

            // Show loader
            resultBox.innerHTML = "<p style='color:red'>Please wait...</p>";

            fetch(url, {
                method: "POST",
                body: formData
            })
            .then(res => res.text())
            .then(data => {

                if (data.trim() === "1") {
                    data = `
                        <div class='alert alert-success'>
                        <p style='color:green;'>Thank you! Your request has been submitted successfully.</p>
                        </div>
                    `;
                    form.reset();
                }

                resultBox.innerHTML = data;

                setTimeout(() => resultBox.innerHTML = "", 8000);
            })
            .catch(err => {
                resultBox.innerHTML = "<p style='color:red'>Something went wrong!</p>";
            });

        });

    });

});
</script>
</body>

</html>