<section class="breadcrumb-hero"
    style="background: url('<?= base_url("assets/images/slider/slider-3.webp") ?>') center/cover no-repeat;">
    <div class="circle c1"></div>
    <div class="circle c2"></div>
    <div class="container d-flex justify-content-center">
        <div class="hero-box text-center">
            <h1 class="page-title d-block">Testimonial</h1>
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
                    <span>Testimonial</span>
                </li>
            </ol>
        </div>
    </div>
</section>
<section class="testimonial-page py-5">
    <div class="container">

        <div class="text-center mb-5">
            <span class="section-subtitle">Testimonial</span>
            <h2 class="section-title">What Our Customers Say</h2>
            <p class="text-muted">
                Real experiences from our happy customers across India.
            </p>
        </div>

        <?php
        $testimonials = [
            ["name" => "Rahul Sharma", "text" => "Very professional service. Everything was handled smoothly and safely.", "rating" => 5],
            ["name" => "Amit Verma", "text" => "Safe and fast delivery. Highly satisfied with the service.", "rating" => 4],
            ["name" => "Priya Singh", "text" => "Affordable pricing and great team support.", "rating" => 5],
            ["name" => "Neha Gupta", "text" => "Very smooth relocation experience. Highly recommend.", "rating" => 5],
            ["name" => "Rohit Kumar", "text" => "Excellent packing and timely delivery. Great experience.", "rating" => 5],
            ["name" => "Sneha Patel", "text" => "Team was polite and very helpful throughout the move.", "rating" => 4]
        ];
        ?>

        <div class="row">

            <?php foreach ($testimonials as $t): ?>
                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="testimonial-card">

                        <div class="user-avatar">
                            <?= strtoupper(substr($t['name'], 0, 1)); ?>
                        </div>

                        <h5 class="client-name"><?= $t['name']; ?></h5>

                        <div class="stars mb-2">
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <?php if ($i <= $t['rating']): ?>
                                    <i class="bi bi-star-fill"></i>
                                <?php else: ?>
                                    <i class="bi bi-star"></i>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </div>

                        <p class="testimonial-text">
                            “<?= $t['text']; ?>”
                        </p>

                    </div>

                </div>
            <?php endforeach; ?>

        </div>

    </div>
</section>

<style>
    .testimonial-page {
        background: #f8f9fa;
    }

    .section-subtitle {
        color: var(--primary-color);
        font-weight: 600;
    }

    .section-title {
        font-size: 34px;
        font-weight: 700;
    }

    .testimonial-card {
        background: #fff;
        border-radius: 15px;
        padding: 25px 20px;
        text-align: center;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: 0.3s;
        height: 100%;
    }

    .testimonial-card:hover {
        transform: translateY(-8px);
    }

    .user-avatar {
        width: 65px;
        height: 65px;
        border-radius: 50%;
        background: var(--primary-color);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        font-weight: 600;
        margin: 0 auto 12px;
    }

    .client-name {
        font-weight: 600;
    }

    .stars i {
        color: #ffc107;
        font-size: 14px;
    }

    .testimonial-text {
        font-size: 14px;
        color: #666;
        margin-top: 10px;
    }
</style>