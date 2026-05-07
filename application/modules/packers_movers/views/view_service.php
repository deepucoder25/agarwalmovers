<?php
// $this->load->database();
$this->load->helper('text');
$st = strtolower(str_replace(" ", "-", $state));
$this->load->helper('text');
include 'city_content.php';
$ctlink = strtolower(str_replace(" ", "-", $city));
if (file_exists("./application/modules/packers_movers/views/data/$st.php")) {
    include "data/$st.php";
} else {
    redirect("error?Invalid+Request");
}
foreach ($cities as $ct) {
    if (@$ct['nm'] == $city) {
        $lat = $ct['lat'];
        $lon = $ct['lon'];
        $state_code = $ct['sc'];
        break;
    }
} ?>

<section class="hero-wrapper container-fluid p-0">

    <div id="heroCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="<?= base_url('assets/images/slider/city_slider.jpg') ?>" class="hero-image" alt="Trusted packers and movers in <?= $city ?> for safe relocation" loading="lazy">
            </div>

        </div>

    </div>

    <div class="slider-overlay"></div>

    <div class="slider-content text-white text-center">

        <div class="slider-inner">
            <h1 class="fw-bold mb-2">
                <?= $companyname ?> in <span class="text-warning"><?= $city ?></span>
            </h1>

            <p class="mb-3">
                Professional packing, secure transportation, and reliable relocation services in <?= $state ?>.
            </p>
            <ol class="breadcrumb breadcrumb-custom justify-content-center mb-0">

                <li class="breadcrumb-item">
                    <a href="<?= site_url() ?>">
                        <i class="fas fa-home"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="<?= site_url('branches') ?>">Branches</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="<?= site_url(strtolower($state)) ?>"><?= $state ?></a>
                </li>
                <li class="breadcrumb-item active text-white">
                    <?= $city ?>
                </li>

            </ol>

            <div class="d-flex justify-content-center flex-wrap gap-2 pt-4">

                <span class="hero-badge">
                    <i class="bi bi-gem me-1"></i> Premium Handling
                </span>

                <span class="hero-badge">
                    <i class="bi bi-clock me-1"></i> On-Time Guarantee
                </span>

                <span class="hero-badge">
                    <i class="bi bi-shield-check me-1"></i> Insurance Coverage
                </span>

                <span class="hero-badge">
                    ⭐ 5-Star Rated
                </span>

            </div>

        </div>

    </div>
</section>
<div class="container quote-form-area">
    <?php $this->load->view('contacts/quoteform.php'); ?>
</div>

<section class="py-4 about-section position-relative overflow-hidden">
    <div class="container">
        <div class="about-bg-shapes">
            <span class="circle circle-1"></span>
            <span class="circle circle-half"></span>
        </div>

        <div class="row align-items-center g-4">

            <div class="col-md-6">
                <div class="about-img">
                    <img src="<?= base_url('assets/images/about/about-safe.webp'); ?>"
                        alt="<?= $companyname ?> team providing relocation services" loading="lazy"
                        class="img-fluid rounded-4 w-100">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <span class="section-label text-dark d-inline-block">ABOUT US</span>
                </div>
                <?= $htmlcontent ?>

                <div class="row mt-4">

                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-emoji-smile fs-5 stats-icon"></i>
                            <p class="mb-0 fw-semibold text-dark">High customer satisfaction</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-truck fs-5 stats-icon"></i>
                            <p class="mb-0 fw-semibold text-dark">Safe goods transport</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-box-seam fs-5 stats-icon"></i>
                            <p class="mb-0 fw-semibold text-dark">Quality packing</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-clock-history fs-5 stats-icon"></i>
                            <p class="mb-0 fw-semibold text-dark">On-time delivery</p>
                        </div>
                    </div>

                </div>
                <div class="d-flex flex-wrap gap-2">

                    <a href="<?= site_url('about') ?>" class="btn btn-danger px-4 py-2 rounded-pill fw-semibold">
                        About Us
                    </a>

                    <a href="<?= $phonehtml ?>" class="btn btn-danger px-4 rounded-pill fw-semibold">
                        <i class="bi bi-telephone-fill me-2"></i> <?= $phone ?>
                    </a>

                </div>

            </div>
            <div class="col-12 pt-4">
                <?= $htmlcontent1?>
            </div>

        </div>
    </div>
</section>
<?php $this->load->view('home/process_widget.php'); ?>
<section class="city-section py-4">
    <div class="container">

        <div class="text-center mb-3">
            <span class="section-label text-dark">NATIONWIDE MOVING SUPPORT</span>
        </div>

        <div class="row align-items-center g-4">

            <div class="col-md-7">
                <div class="city-box p-4 h-100">
                    <?= $htmlcontent2?>

                </div>
            </div>

            <div class="col-md-5">
                <img src="<?= base_url('assets/images/service/service-section-img.webp'); ?>" loading="lazy"
                    class="img-fluid rounded-3 w-100" alt="packers movers <?= $city ?>">
            </div>

        </div>

    </div>
</section>


<section class="city-highlight py-4">
    <div class="container">

        <div class="highlight-box p-4 p-md-5 shadow-sm">
            <?= $htmlcontent3?>
        </div>

    </div>
</section>

<?php $this->load->view('home/table_widget.php'); ?>

<section class="relocation-section py-4">
    <div class="container">

        <div class="text-center">
            <span class="section-label text-dark">PROFESSIONAL RELOCATION SERVICES</span>
        </div>
        <div class="card border-0 shadow-sm relocation-box p-4">
            <?= $htmlcontent4 ?>

        </div>

    </div>
</section>
<section class="keyword-section py-4">
    <div class="container">

        <div class="keyword-box">
            <h3 class="keyword-heading">
                Related Keywords in <?= $city?>
            </h3>

            <div class="keyword-list">
                <span>Local movers in <?= $city?></span>
                <span>Best packers and movers in <?= $city?></span>
                <span>Cheap movers <?= $city?></span>
                <span>Packers movers <?= $city?></span>
                <span>Top 5 Packers in <?= $city?></span>
                <span>Moving services in <?= $city?></span>

                <span>Packers and movers in <?= $city?></span>
                <span>House movers <?= $city?></span>
                <span>Cheap movers in <?= $city?></span>
                <span>Moving services near <?= $city?></span>
                <span>Movers <?= $city?></span>
                <span>Removal companies in <?= $city?></span>

                <span>Packers and movers near me <?= $city?></span>
                <span>Professional movers in <?= $city?></span>
                <span>Top movers in <?= $city?></span>
                <span>Affordable movers <?= $city?></span>
                <span>International movers from <?= $city?></span>

                <span>Best moving <?= $city?></span>
                <span>Moving companies near me <?= $city?></span>
                <span>Cheap moving companies in <?= $city?></span>
                <span>House removals <?= $city?></span>
                <span>Movers near me <?= $city ?></span>

                <span>International moving companies in <?= $city?></span>
                <span>Top 5 movers in <?= $city?></span>
                <span>House movers near <?= $city?></span>
                <span>Local moving companies in <?= $city?></span>
                <span>Top 10 Packers in <?= $city?></span>
            </div>
        </div>

    </div>
</section>


<?php
$data['testimonials'] = [
    [
        "name" => "Rahul Sharma",
        "role" => "Home Shifting Customer",
        "service" => "House Relocation",
        "location" => "Delhi",
        "rating" => 5,
        "date" => "12 Jan 2025",
        "text" => "Very professional service. Everything was handled smoothly and safely. The packing quality was excellent, the staff was polite, and all items reached on time without any damage."
    ],
    [
        "name" => "Amit Verma",
        "role" => "Office Relocation Client",
        "service" => "Office Shifting",
        "location" => "Noida",
        "rating" => 5,
        "date" => "28 Jan 2025",
        "text" => "Safe and fast delivery. Highly satisfied with the service. Their team managed office furniture, files, and equipment very carefully and completed the shifting before deadline."
    ],
    [
        "name" => "Priya Singh",
        "role" => "Apartment Moving Customer",
        "service" => "Local Shifting",
        "location" => "Gurgaon",
        "rating" => 4,
        "date" => "05 Feb 2025",
        "text" => "Affordable pricing and great team support. I really liked the transparent quotation and quick response from the support team. Overall, it was a stress-free experience."
    ],
    [
        "name" => "Neha Gupta",
        "role" => "Family Relocation Client",
        "service" => "Domestic Relocation",
        "location" => "Faridabad",
        "rating" => 5,
        "date" => "17 Feb 2025",
        "text" => "Very smooth relocation experience. Highly recommend this company for family shifting. The team packed kitchen items, furniture, and electronics with proper care and professionalism."
    ],
    [
        "name" => "Rohit Kumar",
        "role" => "Flat Shifting Customer",
        "service" => "Packing and Moving",
        "location" => "Ghaziabad",
        "rating" => 5,
        "date" => "02 Mar 2025",
        "text" => "Excellent packing and timely delivery. Great experience from start to finish. The movers were punctual, well-trained, and made the entire shifting process simple and convenient."
    ],
    [
        "name" => "Sneha Malhotra",
        "role" => "Working Professional",
        "service" => "Intercity Relocation",
        "location" => "Chandigarh",
        "rating" => 4,
        "date" => "14 Mar 2025",
        "text" => "I shifted from one city to another and the service was very reliable. My belongings were packed securely, and the team kept me updated throughout the transportation process."
    ]
];

$this->load->view('home/testimonials.php', $data);
?>

<?php
$data['faqs'] = [
    [
        "question" => "What are the packers and movers in $city price?",
        "answer" => "It depends on distance, number of items, and type of shifting."
    ],
    [
        "question" => "How long does shifting take?",
        "answer" => "Most local shifting is completed within a day."
    ],
    [
        "question" => "Are items packed safely?",
        "answer" => "Yes, packing is done based on item type with proper materials."
    ],
    [
        "question" => "Where can I check packers and movers in $city reviews?",
        "answer" => "You can check online reviews or ask for recent customer feedback."
    ],
    [
        "question" => "Do you provide packing materials?",
        "answer" => "Yes, materials are included in the service."
    ],
    [
        "question" => "Is vehicle transport available?",
        "answer" => "Yes, car and bike transport is available."
    ],
    [
        "question" => "Do you offer packers and movers in $city near me?",
        "answer" => "Yes, services cover all areas of $city and nearby locations."
    ]
];

$this->load->view('home/fags_widget.php', $data);
?>
