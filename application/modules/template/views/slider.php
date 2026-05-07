<section class="hero-wrapper container-fluid p-0">

    <div id="heroCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="<?= base_url('assets/images/slider/slider-1.webp') ?>" alt="<?= $companyname ?> providing premium packing and moving services in India" class="hero-image" loading="lazy">
            </div>

            <div class="carousel-item">
                <img src="<?= base_url('assets/images/slider/slider-2.webp') ?>" alt="Safe and secure household shifting with <?= $companyname ?>" class="hero-image" loading="lazy">
            </div>

            <div class="carousel-item">
                <img src="<?= base_url('assets/images/slider/slider-3.webp') ?>" alt="Professional office relocation services by <?= $companyname ?>" class="hero-image" loading="lazy">
            </div>

        </div>

        <button class="side carousel-control-prev custom-arrow" type="button" data-bs-target="#heroCarousel"
            data-bs-slide="prev" aria-label="left side">
            <span class="arrow-icon"><i class="bi bi-chevron-left arrow-icon"></i></span>
        </button>

        <button class="side carousel-control-next custom-arrow" type="button" data-bs-target="#heroCarousel"
            data-bs-slide="next" aria-label="right side">
            <span class="arrow-icon"><i class="bi bi-chevron-right arrow-icon"></i></span>
        </button>

    </div>

    <div class="slider-overlay"></div>

    <div class="slider-content text-white text-center">
        <div class="text-center mb-3">
            <span class="section-label text-white">Trusted Relocation Partner Across India</span>
        </div>


        <h1 class="fw-bold mt-3">
            <?= $companyname ?> In India
        </h1>

        <p class="mt-3">
            <?= $companyname ?> offers reliable home shifting, office relocation, and vehicle transportation
            services across India.Our experienced team ensures safe packing, secure handling, and timely delivery, making your move smooth,
            efficient, and completely stress-free.
        </p>

        <div class="d-flex justify-content-center gap-2 mt-4 flex-wrap">
            <a href="#" class="btn btn-danger rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#qteModal">Get Quote</a>
            <a href="<?= site_url('contacts') ?>" class="btn btn-outline-light rounded-pill px-3">Contact Us</a>
        </div>

    </div>
</section>

<style>
    .slider-content h1 {
        white-space: nowrap;
    }

    .hero-wrapper {
        position: relative;
        overflow: hidden;
        border-radius: 5px;
    }

    .hero-image {
        width: 100%;
        height: 450px;
        object-fit: cover;
    }

    .side {
        background-color: var(--primary-color);
    }

    .slider-overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        top: 0;
        left: 0;
        z-index: 1;
    }

    .slider-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 90%;
        max-width: 800px;
        padding: 30px;
        border-radius: 50px 0px 50px 0px;
        backdrop-filter: blur(5px);
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .custom-arrow {
        width: 50px;
        height: 50px;
        background: var(--primary-dark);
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
        z-index: 4;
    }

    .arrow-icon {
        color: #fff;
        font-size: 22px;
    }

    @media (max-width: 768px) {
        .slider-content h1 {
            white-space: normal;
        }

        .hero-image {
            height: 600px;
        }

        .slider-content .d-flex {
            flex-wrap: nowrap !important;
        }

        .slider-content .btn {
            padding: 6px 12px;
            font-size: 15px;
        }

        .slider-content {
            position: absolute;
            top: 9%;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            width: 90%;
            z-index: 2;
        }

        .slider-content h1 {
            font-size: 22px;
        }

        .slider-content p {
            font-size: 14px;
        }

        .slider-form-wide {
            position: relative;
            bottom: auto;
            transform: none;
            width: 100%;
            margin-top: -118px;
            z-index: 5;
            left: 0;
            right: 0;
            margin-left: auto;
            margin-right: auto;
        }

        .slider-form-wide::before {
            content: "";
            position: absolute;
            inset: 0;
            backdrop-filter: blur(6px);
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            z-index: -1;
        }
    }
</style>
