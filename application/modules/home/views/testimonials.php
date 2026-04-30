<section class="testimonial-section py-4">
    <div class="container">

         <div class="text-center mb-3">
                <span class="section-label">TESTIMONIAL</span>
            </div>
        <div class="text-center mb-4">
            <span class="section-title fs-2">What Our Clients Say</span>
            <p class="section-subtitle">Trusted by our happy customers</p>
        </div>

        <div class="testimonial-slider d-flex gap-4">

            <?php foreach ($testimonials as $testimonial): ?>
                <div class="testimonial-item">
                    <div class="card testimonial-card h-100 shadow-sm">
                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center mb-3">

                                <span class="badge bg-primary-subtle text-dark">
                                    <?= html_escape($testimonial['service']); ?>
                                </span>
                            </div>

                            <div class="testimonial-rating mb-2">
                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                    <span class="<?= $i <= $testimonial['rating'] ? 'star-filled' : 'star-empty'; ?>">★</span>
                                <?php endfor; ?>
                            </div>

                            <p class="testimonial-message">
                                <?= html_escape($testimonial['text']); ?>
                            </p>

                            <div class="testimonial-meta mb-3">
                                <small class="text-muted">
                                    <?= html_escape($testimonial['location']); ?> •
                                    <?= html_escape($testimonial['date']); ?>
                                </small>
                            </div>

                            <div class="d-flex align-items-center">
                                <div class="testimonial-initial me-3">
                                    <?= strtoupper(substr($testimonial['name'], 0, 1)); ?>
                                </div>
                                <div>
                                    <h6 class="mb-0"><?= html_escape($testimonial['name']); ?></h6>
                                    <small class="text-muted"><?= html_escape($testimonial['role']); ?></small>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>


    </div>
</section>



<style>
    .testimonial-section {
        background-color: #f8f9fa;
    }

    .section-title {
        font-weight: 700;
        color: #212529;
    }

    .section-subtitle {
        color: #6c757d;
        font-size: 16px;
    }

    .testimonial-rating {
        font-size: 18px;
        letter-spacing: 2px;
    }

    .star-filled {
        color: #ffc107;
    }

    .star-empty {
        color: #dee2e6;
    }

    .testimonial-meta {
        font-size: 14px;
    }

    .testimonial-card {
        border: none;
        border-radius: 16px;
        background-color: #ffffff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .testimonial-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
    }

    .quote-mark {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: var(--primary-color);
        color: #ffffff;
        font-size: 28px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .testimonial-message {
        color: #495057;
        font-size: 15px;
        line-height: 1.7;
        min-height: 90px;
    }

    .testimonial-initial {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: var(--primary-light);
        color: #ffffff;
        font-size: 22px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .testimonial-slider {
        overflow-x: auto;
        scroll-behavior: smooth;
        padding-bottom: 10px;
    }

    /* hide scrollbar (optional) */
    .testimonial-slider::-webkit-scrollbar {
        display: none;
    }

    .testimonial-item {
        flex: 0 0 350px;
    }
</style>
<script>
    const slider = document.querySelector('.testimonial-slider');

    if (slider) {
        setInterval(() => {
            slider.scrollBy({
                left: 350,
                behavior: 'smooth'
            });
        }, 2500);
    }

</script>