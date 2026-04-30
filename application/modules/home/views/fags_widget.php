<section class="faq-section py-4">
    <div class="container">

        <div class="text-center mb-5">
            <span class="section-label">FAQS</span>
            <h2 class="faq-title">Frequently Asked Questions</h2>
        </div>

        <div class="row align-items-center">

            <!-- LEFT SIDE IMAGE -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="<?= base_url('assets/images/faq/faqs (2).jpg') ?>" alt="FAQ Image" loading="lazy"
                    class="img-fluid rounded faq-img">
            </div>

            <!-- RIGHT SIDE FAQ -->
            <div class="col-lg-6">
                <div class="accordion custom-faq" id="faqAccordion">

                    <?php foreach ($faqs as $index => $faq): ?>
                        <div class="accordion-item mb-3">

                            <h2 class="accordion-header">
                                <button class="accordion-button <?= $index != 0 ? 'collapsed' : '' ?>" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq<?= $index ?>">

                                    <?= $faq['question']; ?>

                                </button>
                            </h2>

                            <div id="faq<?= $index ?>" class="accordion-collapse collapse <?= $index == 0 ? 'show' : '' ?>"
                                data-bs-parent="#faqAccordion">

                                <div class="accordion-body">
                                    <?= $faq['answer']; ?>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>

        </div>

    </div>
</section>

<style>
    .faq-section {
        background: #f8f9fa;
    }

    .faq-subtitle {
        color: var(--primary-color);
        font-weight: 600;
    }

    .faq-title {
        font-size: 32px;
        font-weight: 700;
    }

    .faq-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 12px;
    }

    .custom-faq .accordion-item {
        border: none;
        border-radius: 10px;
        overflow: hidden;
    }

    .custom-faq .accordion-button {
        background: #e9e9ef;
        color: #333;
        font-weight: 500;
        border-radius: 10px !important;
        padding: 15px 20px;
    }

    .custom-faq .accordion-button:not(.collapsed) {
        background: var(--primary-color);
        color: #fff;
    }

    .custom-faq .accordion-button::after {
        background-image: none;
        content: "+";
        font-size: 18px;
        font-weight: bold;
    }

    .custom-faq .accordion-button:not(.collapsed)::after {
        content: "-";
    }

    .custom-faq .accordion-body {
        background: #fff;
        color: #666;
        font-size: 14px;
        border-radius: 0 0 10px 10px;
    }

    @media (max-width: 768px) {
        .faq-section .row {
            flex-direction: column-reverse;
        }
    }
</style>