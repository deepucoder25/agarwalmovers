<?php
    include 'data/states.php';
?>

<?php
$states_arr = array(
    array('title' => 'Maharashtra', 'img' => 'assets/images/state/maharashtra.webp', 'href' => 'maharashtra'),
    array('title' => 'Delhi', 'img' => 'assets/images/state/delhi.webp', 'href' => 'delhi'),
    array('title' => 'Uttar Pradesh', 'img' => 'assets/images/state/uttarpradesh.webp', 'href' => 'uttarpradesh'),
    array('title' => 'Punjab', 'img' => 'assets/images/state/punjab.webp', 'href' => 'punjab'),
);
?>
<div class="st-service-area pt-50 pb-5" data-animate="bottom" data-delay="1">
    <div class="container">
        <div class="row">
            <?php foreach ($states_arr as $city): ?>
                <div class="col-lg-3 col-md-6 mt-4 wow fadeInUp">
                    <a href="<?= site_url('/') . $city['href']; ?>" alt="<?= $city['title']; ?>">
                        <div class="st__service__box">
                            <div class="st__service__thumb">
                                <img src="<?= base_url() . $city['img']; ?>" alt="<?= $city['title']; ?>" loading="lazy" />
                            </div>
                            <div class="st__service__content">
                                <span class="state_title"> <?= $city['title']; ?> </span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<style>
    .st-service-area {
    background: linear-gradient(180deg, #f8f9fa, #eef2f7);
}

/* card */
.st__service__box {
    border-radius: 20px;
    overflow: hidden;
    background: rgba(255,255,255,0.7);
    backdrop-filter: blur(12px);
    transition: 0.4s;

    box-shadow: 0 10px 30px rgba(0,0,0,0.06);
    border: 1px solid rgba(255,255,255,0.4);

    position: relative;
}

/* image */
.st__service__thumb img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    transition: 0.5s;
}

/* content */
.st__service__content {
    padding: 18px;
    text-align: center;
}

/* title */
.state_title {
    font-size: 18px;
    font-weight: 600;
    color: #222;
    transition: 0.3s;
}

/* 🔥 modern hover */
.st__service__box:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(0,0,0,0.1);
}

/* image zoom */
.st__service__box:hover img {
    transform: scale(1.08);
}

/* subtle glow border */
.st__service__box::after {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: 20px;
    padding: 1px;
    background: linear-gradient(45deg, #ff3c3c, transparent, #ff6a6a);
    -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    opacity: 0;
    transition: 0.3s;
}

.st__service__box:hover::after {
    opacity: 1;
}

/* title hover */
.st__service__box:hover .state_title {
    color: #ff3c3c;
}

/* link fix */
.st-service-area a {
    text-decoration: none;
}

</style>