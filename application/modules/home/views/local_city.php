<section class="city-section py-4">
    <div class="container text-center cities-home">
        <div class="text-center mb-3">
            <span class="section-label">OUR SERVICES LOCATION</span>
        </div>
        <h2 class="fw-bold city-title mb-2">
            <?= $companyname ?> Services in Major Cities Across India
        </h2>

        <p class="city-subtitle mb-4">
            Explore our trusted relocation services available in all major cities with safe packing, fast delivery, and
            affordable pricing.
        </p>

        <input type="checkbox" id="toggleCities">

        <div class="row g-3 city-list">

            <?php foreach ($cities_home as $index => $item): ?>

                <?php
                $city_slug = url_title($item['city'], 'dash', TRUE);
                $state_slug = url_title($item['state'], 'dash', TRUE);

                $final_url = $city_slug . '-packers-movers-' . $state_slug;
                ?>

                <div class="col-md-3 city-item <?= $index >= 8 ? 'extra-city' : '' ?>">

                    <a href="<?= site_url($final_url) ?>" class="city-box d-flex justify-content-between align-items-center"
                        aria-label="Packers and movers in <?= $item['city'] ?> <?= $item['state'] ?>">

                        <span>
                            Packers And Movers In <?= $item['city'] ?>
                        </span>

                        <i class="bi bi-arrow-up-right"></i>

                    </a>

                </div>

            <?php endforeach; ?>

        </div>

        <label for="toggleCities" class="toggle-btn mt-4">
            <span class="btn-inner">
                <span class="show-more">View All Cities</span>
                <span class="show-less">Show Less</span>
                <i class="bi bi-chevron-down arrow"></i>
            </span>
        </label>

    </div>
</section>
<style>
    .city-section {
        background: #f8f9fa;
    }

    .city-title {
        font-size: 32px;
        color: #1a1a2e;
        font-weight: 800;
    }

    .city-subtitle {
        color: #6c757d;
        max-width: 700px;
        margin: 0 auto;
    }

    .city-box {
        background: #fff;
        padding: 14px 18px;
        border-radius: 12px;
        font-size: 14px;
        text-decoration: none;
        color: #333;
        transition: 0.3s ease;
        border: 1px solid #eee;
    }

    .city-box:hover {
        background: rgba(128, 0, 0, 0.05);
        border: 1px solid var(--primary-dark);
        color: var(--primary-color);
        transform: translateY(-3px);
    }

    .city-box i {
        background: var(--primary-dark);
        color: #fff;
        padding: 6px;
        border-radius: 60%;
        /* font-size: 12px; */
        transition: 0.3s;
    }
    #toggleCities {
        display: none;
    }

    .city-list {
        max-height: 160px;
        overflow: hidden;
        transition: max-height 0.9s ease-in-out;
    }

    #toggleCities:checked~.city-list {
        max-height: 5000px;
    }

    .toggle-btn {
        display: inline-block;
        cursor: pointer;
    }

    /* Button design */
    .btn-inner {
        background: var(--primary-color);
        color: #fff;
        padding: 10px 26px;
        border-radius: 50px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-weight: 600;
        transition: 0.3s ease;
    }

    .btn-inner:hover {
        background: var(--primary-dark);
        transform: translateY(-2px);
    }

    .arrow {
        transition: 0.3s;
    }

    #toggleCities:checked~.toggle-btn .arrow {
        transform: rotate(180deg);
    }

    .show-less {
        display: none;
    }

    #toggleCities:checked~.toggle-btn .show-more {
        display: none;
    }

    #toggleCities:checked~.toggle-btn .show-less {
        display: inline;
    }
</style>
