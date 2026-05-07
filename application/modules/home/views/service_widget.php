<section class="services-section py-5">
    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <span class="badge section-badge mb-3">Our Services</span>
                <h2 class="section-title">What We Offer</h2>
                <p class="section-subtitle">
                   We provide complete packing and moving support so you don’t have to arrange different services separately.
                </p>
            </div>
        </div>

        <?php if (!empty($services)): ?>
            <div class="row g-4">
                <?php foreach ($services as $index => $service): ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card service-card h-100">
                            <div class="card-body">

                                <div class="service-icon-wrapper mb-3">
                                    <i class="bi <?= html_escape($service['icon']); ?> service-icon"></i>
                                </div>

                                <h4 class="service-title"><?= html_escape($service['title']); ?></h4>

                                <p class="service-description">
                                    <?= html_escape($service['description']); ?>
                                </p>

                                <?php if (!empty($service['features'])): ?>
                                    <ul class="service-features">
                                        <?php foreach ($service['features'] as $feature): ?>
                                            <li>
                                                <i class="bi bi-check-circle-fill feature-check"></i>
                                                <?= html_escape($feature); ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <a href="<?= base_url('index.php/' .$service['link']); ?>" class="btn btn-service mt-3"  aria-label="Learn more about <?= html_escape($service['title']); ?>">
                                    <?= $service['button_text'] ?? 'Learn More' ?>
                                    <i class="bi bi-arrow-right ms-1"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="text-center">
                <p class="text-muted">No services available at the moment.</p>
            </div>
        <?php endif; ?>

    </div>
</section>

<style>
    .services-section {
        background-color: #f8f9fa;
    }

    .section-badge {
        background-color: #e8f0fe;
        color: var(--primary-color);
        font-size: 14px;
        font-weight: 600;
        padding: 8px 20px;
        border-radius: 50px;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .section-title {
        font-weight: 800;
        color: #1a1a2e;
        font-size: 32px;
    }

    .section-subtitle {
        color: #6c757d;
        font-size: 16px;
        line-height: 1.7;
        max-width: 700px;
        margin: 0 auto;
    }

    .service-card {
        border: none;
        border-radius: 16px;
        background-color: #ffffff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
        border-top: 4px solid transparent;
    }

    .service-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.08);
        border-top-color: var(--primary-dark);
    }

    .service-icon-wrapper {
        width: 70px;
        height: 70px;
        border-radius: 16px;
        background-color: #e8f0fe;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s ease;
    }

    .service-card:hover .service-icon-wrapper {
        background-color: var(--primary-dark);
    }

    .service-icon {
        font-size: 30px;
        color: var(--primary-color);
        transition: color 0.3s ease;
    }

    .service-card:hover .service-icon {
        color: #ffffff;
    }

    .service-title {
        font-weight: 700;
        color: #1a1a2e;
        font-size: 20px;
        margin-top: 10px;
    }

    .service-description {
        color: #6c757d;
        font-size: 14px;
        line-height: 1.7;
    }

    .service-features {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .service-features li {
        color: #495057;
        font-size: 14px;
        padding: 4px 0;
        display: flex;
        align-items: center;
    }

    .feature-check {
        color: #198754;
        font-size: 14px;
        margin-right: 8px;
        flex-shrink: 0;
    }

    .btn-service {
        background-color: transparent;
        color: var(--primary-light);
        font-weight: 600;
        font-size: 14px;
        padding: 8px 20px;
        border: 2px solid var(--primary-dark);
        border-radius: 50px;
        transition: all 0.3s ease;
    }

    .btn-service:hover {
        background-color: var(--primary-dark);
        color: #ffffff;
    }

    .cta-box {
        background-color: var(--primary-light);
        border-radius: 20px;
        padding: 40px 30px;
    }

    .cta-title {
        color: #ffffff;
        font-weight: 700;
        font-size: 26px;
    }

    .cta-text {
        color: #d6e4ff;
        font-size: 16px;
        margin-bottom: 20px;
    }

    .btn-cta {
        background-color: #ffffff;
        color: var(--primary-color);
        font-weight: 600;
        padding: 10px 28px;
        border-radius: 50px;
        font-size: 15px;
        transition: all 0.3s ease;
    }

    .btn-cta:hover {
        background-color: #d6e4ff;
        color: #0d6efd;
    }

    .btn-cta-outline {
        background-color: transparent;
        color: #ffffff;
        font-weight: 600;
        padding: 10px 28px;
        border-radius: 50px;
        font-size: 15px;
        border: 2px solid #ffffff;
        transition: all 0.3s ease;
    }

    .btn-cta-outline:hover {
        background-color: #ffffff;
        color: var(--primary-light);
    }

    @media (max-width: 768px) {
        .section-title {
            font-size: 24px;
        }

        .cta-title {
            font-size: 20px;
        }

        .cta-box {
            padding: 30px 20px;
        }

        .btn-cta,
        .btn-cta-outline {
            display: block;
            width: 100%;
        }

        /* Section heading center */
        .services-section .text-center {
            text-align: center !important;
        }

        /* Card content center */
        .service-card {
            text-align: center;
        }

        /* Icon center */
        .service-icon-wrapper {
            margin: 0 auto;
        }

        /* Title + description */
        .service-title,
        .service-description {
            text-align: center;
        }

        /* Features list center */
        .service-features {
            padding-left: 0;
        }

        .service-features li {
            justify-content: center;
        }

        /* Button center */
        .btn-service {
            display: inline-block;
            margin: 0 auto;
        }

    }
    }
</style>