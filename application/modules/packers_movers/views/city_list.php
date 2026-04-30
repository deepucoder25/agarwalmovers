<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
?>

<main class="main">
    <section class="breadcrumb-hero" style="background: url('<?= base_url("assets/images/slider/slider-3.webp") ?>') center/cover no-repeat;">

        <div class="circle c1"></div>
        <div class="circle c2"></div>

        <div class="container d-flex justify-content-center">

            <div class="hero-box text-center">

                <h1 class="page-title d-block">Packers Movers in <?= $state?></h1>

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
                    <li class="breadcrumb-item active text-white">
                        <span><?= $state?></span>
                    </li>

                </ol>

            </div>

        </div>
    </section>

    <div class="container feature-content-section py-3">
        <div class="row">
            <?php
            $st = str_replace(" ", "-", $state);
            foreach ($cities as $ct):
                $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="<?= site_url("$link-packers-movers-$statename") ?>"
                        class="city-card-link d-block h-100 text-decoration-none">
                        <div class="city-card card border-0 shadow h-100">
                            <div class="city-card-body d-flex align-items-center justify-content-center gap-1 py-2">
                                <div class="icon">
                                    <i class="bi bi-truck fs-3"></i>
                                </div>
                                <div class="city-name">
                                    <span class="fw-semibold">Packers and Movers <b><?= $ct['nm'] ?></b></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<style>
.city-card{
    border-radius: 12px;
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.06);
}

.city-card-body{
    transition: all 0.3s ease;
}

.city-card .icon{
    color: var(--primary-color);
    transition: all 0.3s ease;
}

.city-name span{
    font-size: 15px;
    color: #333;
    transition: 0.3s;
}

.city-card:hover{
    transform: translateY(-6px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.08);
    border-color: var(--primary-color);
}

.city-card:hover .city-name span{
    color: var(--primary-color);
}



@media (max-width: 576px){
    .city-card-body{
        justify-content: start !important;
        padding: 12px;
    }
}
</style>