<section class="breadcrumb-hero"
    style="background: url('<?= base_url("assets/images/slider/slider-3.webp") ?>') center/cover no-repeat;">
    <div class="circle c1"></div>
    <div class="circle c2"></div>
    <div class="container d-flex justify-content-center">
        <div class="hero-box text-center">
            <h1 class="page-title d-block">Why Choose Us</h1>
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
                    <span>Choose Us</span>
                </li>
            </ol>
        </div>
    </div>
</section>
<section class="why-top py-5">
    <div class="container">

        <!-- TOP ICON ROW -->
        <div class="row text-center mb-5">

            <div class="col-3">
                <i class="bi bi-shield-check why-icon"></i>
                <p>Safety</p>
            </div>

            <div class="col-3">
                <i class="bi bi-gear why-icon"></i>
                <p>Efficient</p>
            </div>

            <div class="col-3">
                <i class="bi bi-bullseye why-icon"></i>
                <p>Precision</p>
            </div>

            <div class="col-3">
                <i class="bi bi-lightbulb why-icon"></i>
                <p>Innovation</p>
            </div>

        </div>

        <hr>

        <!-- MAIN CONTENT -->
        <div class="row align-items-center mt-5">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6 mb-4">

                <h6 class="text-muted">Why Choose Us</h6>

                <h2 class="fw-bold mb-3">
                    Why You Should Choose Our Company
                </h2>

                <p class="text-muted">
                    We provide reliable and secure relocation services with a focus
                    on customer satisfaction. Our experienced team ensures smooth
                    shifting with proper planning and safe handling.
                </p>

            </div>

            <!-- RIGHT CARDS -->
            <div class="col-lg-6">

                <div class="row g-3">

                    <!-- VISION -->
                    <div class="col-6">
                        <div class="info-box">
                            <i class="bi bi-eye"></i>
                            <h6>Vision</h6>
                            <p>
                                To provide reliable and innovative relocation services.
                            </p>
                        </div>
                    </div>

                    <!-- MISSION -->
                    <div class="col-6">
                        <div class="info-box">
                            <i class="bi bi-bullseye"></i>
                            <h6>Mission</h6>
                            <p>
                                To deliver safe and efficient moving solutions.
                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>
<style>
    .why-top {
        background: #f8f9fa;
    }

    /* ICON ROW */
    .why-icon {
        font-size: 28px;
        color: var(--primary-color);
        margin-bottom: 5px;
    }

    /* INFO BOX */
    .info-box {
        background: #eef2f7;
        padding: 20px;
        border-radius: 15px;
        text-align: center;
        transition: 0.3s;
    }

    .info-box i {
        font-size: 30px;
        color: var(--primary-color);
    }

    .info-box h6 {
        margin-top: 10px;
        font-weight: 600;
    }

    .info-box p {
        font-size: 13px;
        color: #666;
    }

    /* HOVER */
    .info-box:hover {
        transform: translateY(-5px);
        background: #fff;
    }
</style>

<section class="unique-section py-4">
    <div class="container text-center">

        <!-- TITLE -->
        <h6 class="unique-subtitle">OUR FEATURES</h6>
        <h2 class="unique-title mb-3">The things that make us unique</h2>

        <p class="text-muted mb-5">
            We deliver a smooth and reliable relocation experience with
            quality service, safety and customer satisfaction.
        </p>

        <!-- CARDS -->
        <div class="row g-4">

            <div class="col-md-6 col-lg-3">
                <div class="unique-card">
                    <div class="icon-box">
                        <i class="bi bi-arrow-repeat"></i>
                    </div>
                    <h6>Safe Delivery</h6>
                    <p>We ensure your goods reach safely without damage.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="unique-card">
                    <div class="icon-box">
                        <i class="bi bi-file-earmark-check"></i>
                    </div>
                    <h6>Easy Process</h6>
                    <p>Simple and hassle-free booking process.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="unique-card">
                    <div class="icon-box">
                        <i class="bi bi-truck"></i>
                    </div>
                    <h6>Fast Moving</h6>
                    <p>Quick and on-time delivery services.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="unique-card">
                    <div class="icon-box">
                        <i class="bi bi-headset"></i>
                    </div>
                    <h6>24/7 Support</h6>
                    <p>Always available to assist your needs.</p>
                </div>
            </div>

        </div>

    </div>
</section>

<style>
    .unique-section {
        background: #f7f8fc;
    }

    /* TITLE */
    .unique-subtitle {
        font-size: 12px;
        letter-spacing: 1px;
        color: var(--primary-color);
        font-weight: 600;
    }

    .unique-title {
        font-size: 32px;
        font-weight: 700;
    }

    /* CARD */
    .unique-card {
        background: #fff;
        padding: 30px 20px;
        border-radius: 18px;
        transition: 0.3s;
        height: 100%;
        position: relative;
        border: 1px solid #eee;
    }

    /* ICON BOX */
    .icon-box {
        width: 60px;
        height: 60px;
        margin: auto;
        background: rgba(128, 0, 0, 0.08);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .icon-box i {
        font-size: 24px;
        color: var(--primary-color);
    }

    /* TEXT */
    .unique-card h6 {
        margin-top: 15px;
        font-weight: 600;
    }

    .unique-card p {
        font-size: 13px;
        color: #666;
    }

    /* HOVER EFFECT */
    .unique-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }

    .active-card p {
        color: #eee;
    }

    .active-card .icon-box {
        background: rgba(255, 255, 255, 0.2);
    }

    .active-card i {
        color: #fff;
    }
</style>

<?php
  $title = "Why Choose Our Company";
  $content = "Choosing the right packers and movers is very important when it comes to relocating your home or office. At our company, we focus on delivering a smooth, safe, and stress-free moving experience for every customer.We understand that every move is different, which is why we offer customized solutions based on your needs. From careful packing using high-quality materials to secure transportation and timely delivery, every step is handled with proper planning and attention.Our experienced team ensures that your belongings are treated with care and reach their destination without damage. We believe in transparency, so there are no hidden charges, and you always know what you are paying for.Customer satisfaction is our top priority. We stay connected with you throughout the process and provide support whenever needed. With our reliable service, professional team, and commitment to quality, you can trust us to make your relocation simple and hassle-free.";
?>

<section class="simple-box-section py-5">
    <div class="container">

        <div class="simple-box">

            <span><?= $title; ?></span>

            <p><?= $content; ?></p>

        </div>

    </div>
</section>

<style>
    .simple-box-section {
        background: #f8f9fa;
    }

    .simple-box {
        background: #fff;
        padding: 40px 25px;
        border-radius: 15px;
        /* max-width: 800px; */
        margin: auto;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    }

    .simple-box span {
        font-weight: 700;
        font-size: 30px;
        margin-bottom: 15px;
        color: var(--primary-color);
    }

    .simple-box p {
        color: #666;
        font-size: 15px;
    }
</style>