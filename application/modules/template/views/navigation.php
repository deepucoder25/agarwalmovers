<?= $this->load->view('contacts/quotemodal.php'); ?>

<div class="topbar-new">
    <div class="container">
        <div class="topbar-inner">

            <!-- LEFT -->
            <div class="top-left">
                <a href="#">Agarwal Packers and Movers</a>
                <span class="divider"></span>
                <a href="<?= site_url('branches')?>">Our Network</a>
                <span class="divider"></span>
                <a href="#" class="highlight">
                    <i class="bi bi-truck me-1"></i> Tracking
                </a>
            </div>

            

            <!-- RIGHT -->
            <div class="top-right">
                <a href="<?= site_url('contacts')?>">Payment</a>
                <span class="divider"></span>
                <a href="<?= $mailhtml?>"><i class="bi bi-envelope"></i> <?= $mail?></a>
                <span class="divider"></span>
                <a href="<?= $phonehtml?>"><i class="bi bi-telephone"></i> <?= $phone?></a>
            </div>

        </div>
    </div>
</div>



<nav class="navbar navbar-expand-lg main-navbar">
    <div class="container">

        <a class="navbar-brand fw-bold text-danger" href="#">
            <?= $companyname ?>
        </a>

        <button class="navbar-toggler border-0 ms-2" type="button" id="menuToggle" aria-label="Menu">
            <i class="bi bi-list fs-2 text-danger"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

            <ul class="navbar-nav align-items-lg-center">
                <li class="nav-item"><a class="nav-link" href="<?= site_url('home') ?>">Home</a></li>
                <li class="nav-item dropdown position-relative"><a class="nav-link dropdown-toggle" href="#">About</a>
                    <ul class="dropdown-menu custom-dropdown">
                        <li><a class="dropdown-item" href="<?= site_url('about') ?>">About us</a></li>
                        <li><a class="dropdown-item" href="<?= site_url('testimonials') ?>">Testimonials</a></li>
                        <li><a class="dropdown-item" href="<?= site_url('privacy-policy') ?>">Privacy</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown position-relative">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown">
                        Services
                    </a>

                    <ul class="dropdown-menu custom-dropdown">
                        <li><a class="dropdown-item" href="<?= site_url('home-shifting') ?>">Home Shifting Services</a>
                        </li>
                        <li><a class="dropdown-item" href="<?= site_url('office-shifting') ?>">Office Shifting
                                Services</a></li>
                        <li><a class="dropdown-item" href="<?= site_url('car-shifting') ?>">Car Transportation
                                Services</a></li>
                        <li><a class="dropdown-item" href="<?= site_url('packing-unpacking-service') ?>">Packing and
                                Unpacking Services</a></li>
                        <li><a class="dropdown-item" href="<?= site_url('courier-service') ?>">Courier & Cargo
                                Services</a></li>
                        <li><a class="dropdown-item" href="<?= site_url('luggage-delivery') ?>">Luggage Delivery</a>
                        </li>
                        <li><a class="dropdown-item" href="<?= site_url('insurance-service') ?>">Goods Insurance</a>
                        </li>
                        <li><a class="dropdown-item" href="<?= site_url('iba-approved') ?>">IBA Approved
                                Transporters</a></li>
                        <li><a class="dropdown-item" href="<?= site_url('loading-unloading-service') ?>">Loading and
                                Unloading</a></li>
                        <li><a class="dropdown-item" href="<?= site_url('packing-unpacking-service') ?>">Packing and
                                Unpacking</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="<?= site_url('gallery') ?>">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= site_url('branches') ?>"> Our Branch</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= site_url('contacts') ?>">Contact</a></li>
            </ul>
            <div class="ms-lg-3 mt-2 mt-lg-0">
                <a href="#" class="btn btn-danger get-quote-btn" data-bs-toggle="modal" data-bs-target="#qteModal">
                    Get A Quote
                </a>
            </div>
        </div>
    </div>
</nav>

<div class="mobile-menu-overlay" id="mobileMenu">

    <div class="menu-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0 text-dark ms-2">Agarwal Packers and Movers</h4>
        <span class="close-btn btn-dark" id="closeMenu">&times;</span>
    </div>

    <div class="menu-body container">
        <div class="row">

            <div class="col-6 text-dark">
                <span class="fs-2 fw-bold text-dark">Company</span>
                <a href="<?= site_url('home') ?>">
                    <i class="bi bi-house-door me-2"></i> Home
                </a>
                <a href="<?= site_url('about') ?>">
                    <i class="bi bi-info-circle me-2"></i> About Us
                </a>
                <a href="<?= site_url('branches') ?>">
                    <i class="bi bi-diagram-3 me-2"></i> Our Branches
                </a>
                <a href="<?= site_url('contacts') ?>">
                     <i class="bi bi-telephone me-2"></i> Contact Us
                </a>
                <a href="<?= site_url('gallery') ?>">
                    <i class="bi bi-images me-2"></i> Gallery
                </a>
                <a href="<?= site_url('testimonials') ?>">
                    <i class="bi bi-chat-dots me-2"></i> Testimonials
                </a>
                <a href="<?= site_url('privacy-policy') ?>">
                    <i class="bi bi-shield-lock me-2"></i> Privacy
                </a>
            </div>

            <div class="col-6 text-dark">
                <span class="fs-2 fw-bold text-dark">All Services</span>
                <a href="<?= site_url('bike-service') ?>">
                    <i class="bi bi-bicycle me-2"></i> Bike Service
                </a>
                <a href="<?= site_url('car-shifting') ?>">
                    <i class="bi bi-car-front me-2"></i> Car Shifting
                </a>
                <a href="<?= site_url('home-relocation') ?>">
                    <i class="bi bi-house me-2"></i> Home Relocation
                </a>
                <a href="<?= site_url('packing-unpacking-service') ?>">
                    <i class="bi bi-box-seam me-2"></i> Packing and Unpacking Services
                </a>
                <a href="<?= site_url('warehousing-service') ?>">
                    <i class="bi bi-building me-2"></i> Warehouse Service
                </a>
            </div>

        </div>
    </div>

    <div class="menu-social text-center">
        <a href="<?= $facebookhtml ?>"><i class="bi bi-facebook"></i></a>
        <a href="<?= $instagramhtml ?>"><i class="bi bi-instagram"></i></a>
        <a href="<?= $twitterhtml ?>"><i class="bi bi-twitter"></i></a>
    </div>

</div>

<style>
   
    .topbar-new {
        background: #2b2b2b;
        color: #fff;
        font-size: 13px;
        padding: 6px 0;
    }

    .topbar-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .top-left,
    .top-right {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .top-left {
        margin-left: 80px;
    }

    .top-right {
        margin-right: 80px;
    }

    .topbar-inner a {
        text-decoration: none;
        transition: 0.3s;
    }

    .topbar-inner a:hover {
        color: var(--primary-color);
    }

    .divider {
        width: 1px;
        height: 14px;
        background: rgba(255, 255, 255, 0.3);
    }

    .highlight {
        background: #fff;
        color: #000;
        padding: 5px 18px;
        border-radius: 10px 0px 10px 0px;
        font-weight: 500;
        position: relative;
    }


    .highlight::before {
        left: -6px;
        transform: skewX(-20deg);
    }

    .highlight::after {
        right: -6px;
        transform: skewX(-20deg);
    }

    .highlight:hover {
        color: var(--primary-color);
    }

    @media (max-width: 768px) {
        .topbar-inner {
            flex-direction: column;
            gap: 6px;
        }

        .top-left,
        .top-right {
            justify-content: center;
            margin: 0;
        }

        .divider {
            display: none;
        }
    }
    .main-navbar .container {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .navbar-collapse {
        flex-grow: 1;
        display: flex;
        align-items: center;
    }

    .navbar-nav {
        margin: 0 auto;
    }

    .get-quote-btn {
        margin-left: auto;
    }


    .get-quote-btn {
        margin-left: 30px;
    }

    .main-navbar {
        background: var(--white);
        position: sticky;
        justify-content: space-between;
        top: 0;
        z-index: 999;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar .nav-link {
        color: black;
        font-weight: 500;
    }

    .navbar .nav-link:hover {
        color: var(--primary-color);
    }

    .btn-danger {
        background: var(--primary-color);
        border: none;
    }

    .custom-dropdown {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background: white;
        min-width: 220px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        padding: 10px 0;
    }

    .nav-item.dropdown:hover .custom-dropdown {
        display: block;
    }

    .custom-dropdown .dropdown-item {
        padding: 10px 20px;
        color: black;
        transition: 0.3s;
    }

    .custom-dropdown .dropdown-item:hover {
        background: var(--primary-color);
        color: white;
    }

    @media (max-width: 991px) {

        .topbar-new {
            display: none;
        }

        .navbar-collapse {
            background: white;
            padding: 15px;
            margin-top: 10px;
            border-radius: 8px;
        }

        .navbar-nav .nav-link {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }
    }


    .mobile-menu-overlay {
        position: fixed;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100vh;
        z-index: 9999;
        transition: 0.4s ease;
        background: var(--white);
        display: flex;
        flex-direction: column;
        position: fixed;
    }

    .mobile-menu-overlay.active {
        left: 0;
    }

    .close-btn {
        font-size: 30px;
        cursor: pointer;
        color: black;
        border-radius: 50%;
        width: 38px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .menu-header {
        border-bottom: 1px solid #eee;
        padding-bottom: 12px;
    }

    .menu-header h4 {
        color: var(--primary-color);
        font-weight: 700;
    }


    .menu-body {
        flex: 1;
        overflow-y: auto;
        padding-bottom: 80px;
    }

    .menu-body a {
        display: block;
        padding: 10px 12px;
        margin-bottom: 6px;
        border-radius: 6px;
        color: #333;
        text-decoration: none;
        transition: 0.3s;
    }

    .menu-body a:hover {
        background: rgba(128, 0, 0, 0.08);
        color: var(--primary-color);
        transform: translateX(5px);
    }

    .menu-body i {
        color: var(--primary-color);
    }

    .menu-body span {
        color: var(--primary-dark);
        border-bottom: 2px solid var(--primary-light);
        display: inline-block;
        margin-bottom: 10px;
    }

    .menu-social {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background: #fff;
        border-top: 1px solid #eee;
    }

    .menu-social a {
        display: inline-block;
        margin: 10px 8px;
        width: 40px;
        height: 40px;
        background: rgba(128, 0, 0, 0.1);
        color: var(--primary-color);
        border-radius: 50%;
        line-height: 40px;
        transition: 0.3s;
    }

    .menu-social a:hover {
        background: var(--primary-color);
        color: #fff;
    }

    body.menu-open {
        overflow: hidden;
    }
</style>


<script>
    const menuToggle = document.getElementById("menuToggle");
    const mobileMenu = document.getElementById("mobileMenu");
    const closeMenu = document.getElementById("closeMenu");

    menuToggle.onclick = function () {
        mobileMenu.classList.add("active");
    }

    closeMenu.onclick = function () {
        mobileMenu.classList.remove("active");
    }
</script>