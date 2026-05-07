<section class="py-4 bg-light">
    <div class="container py-lg-4">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <span class="section-label">How its Work</span>
                <h2 class="display-6 fw-bold mb-3">Our Simple Moving Process</h2>
                <p class="text-muted fs-6 mb-0">
                    <?= $companyname ?> follows a step-by-step process
                    to make your relocation safe, smooth, and stress-free.
                </p>
            </div>
        </div>

        <div class="row g-4 step-row justify-content-center">

            <div class="col-6 col-lg step-col">
                <div class="text-center">
                    <div class="step-box mx-auto mb-4 shadow-sm">
                        <i class="bi bi-telephone fs-3"></i>
                        <span class="step-num">01</span>
                    </div>
                    <h3 class="fw-bold fs-5 mb-2">Book Your Move</h3>
                    <p class="text-muted small mb-0">
                        Contact us by call or fill the inquiry form to share your shifting needs.
                    </p>
                </div>
            </div>

            <div class="col-6 col-lg step-col">
                <div class="text-center">
                    <div class="step-box mx-auto mb-4 shadow-sm">
                        <i class="bi bi-clipboard-check fs-3"></i>
                        <span class="step-num">02</span>
                    </div>
                    <h3 class="fw-bold fs-5 mb-2">Get a Free Quote</h3>
                    <p class="text-muted small mb-0">
                        We check the goods volume and provide the best estimated moving quote.
                    </p>
                </div>
            </div>

            <div class="col-6 col-lg step-col">
                <div class="text-center">
                    <div class="step-box mx-auto mb-4 shadow-sm">
                        <i class="bi bi-box-seam fs-3"></i>
                        <span class="step-num">03</span>
                    </div>
                    <h3 class="fw-bold fs-5 mb-2">Packing & Loading</h3>
                    <p class="text-muted small mb-0">
                        We use quality packing materials and load your items with proper care.
                    </p>
                </div>
            </div>

            <div class="col-6 col-lg step-col">
                <div class="text-center">
                    <div class="step-box mx-auto mb-4 shadow-sm">
                        <i class="bi bi-truck fs-3"></i>
                        <span class="step-num">04</span>
                    </div>
                    <h3 class="fw-bold fs-5 mb-2">Safe Transport</h3>
                    <p class="text-muted small mb-0">
                        Your belongings are transported safely through our trusted logistics network.
                    </p>
                </div>
            </div>

            <div class="col-6 col-lg step-col">
                <div class="text-center">
                    <div class="step-box mx-auto mb-4 shadow-sm">
                        <i class="bi bi-house-check fs-3"></i>
                        <span class="step-num">05</span>
                    </div>
                    <h3 class="fw-bold fs-5 mb-2">Delivery & Setup</h3>
                    <p class="text-muted small mb-0">
                        We unload, unpack, and arrange everything at your new home or office.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<style>
    .step-box {
        width: 110px;
        height: 110px;
        border-radius: 24px;
        background: #ffffff;
        border: 2px solid rgba(220, 53, 69, 0.12);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 6px;
        color: var(--primary-color);
        position: relative;
        transition: all 0.35s ease;
    }

    .step-box:hover {
        transform: translateY(-8px);
        border-color: var(--primary-dark);
        box-shadow: 0 1rem 2rem rgba(220, 53, 69, 0.15) !important;
    }

    .step-num {
        font-size: 14px;
        font-weight: 700;
        color: var(--primary-color);
        background: rgba(220, 53, 69, 0.1);
        padding: 2px 10px;
        border-radius: 50px;
        line-height: 1.4;
    }

    .step-col {
        position: relative;
    }

    .step-col::after {
        content: "";
        position: absolute;
        top: 55px;
        right: -8px;
        width: calc(100% - 110px);
        height: 3px;
        background: repeating-linear-gradient(90deg,
                #dc3545 0px,
                #dc3545 8px,
                transparent 8px,
                transparent 14px);
        z-index: 0;
        transform: translateX(50%);
    }

    .step-row .step-col:last-child::after {
        display: none;
    }

    @media (max-width: 991.98px) {
        .step-col::after {
            display: none;
        }
    }

    @media (max-width: 575.98px) {
        .step-box {
            width: 90px;
            height: 90px;
            border-radius: 20px;
        }

        .step-box i {
            font-size: 1.2rem !important;
        }

        .step-num {
            font-size: 12px;
        }
    }
</style>
