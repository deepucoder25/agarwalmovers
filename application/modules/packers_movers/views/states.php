<main class="main">
    <section class="breadcrumb-hero" style="background: url('<?= base_url("assets/images/slider/slider-3.webp") ?>') center/cover no-repeat;">

        <div class="circle c1"></div>
        <div class="circle c2"></div>

        <div class="container d-flex justify-content-center">

            <div class="hero-box text-center">

                <h1 class="page-title d-block">Our Branches</h1>

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
                        <span>Branches</span>
                    </li>

                </ol>

            </div>

        </div>
    </section>
    <?php $this->view('packers_movers/states_widget.php'); ?>
</main>
