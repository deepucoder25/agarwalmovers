<?php
$footer_services = [
    ['label' => 'Home Shifting', 'url' => site_url('home-shifting')],
    ['label' => 'Office Shifting', 'url' => site_url('office-shifting')],
    ['label' => 'Car Transportation', 'url' => site_url('car-shifting')],
    ['label' => 'Loading & Unloading', 'url' => site_url('loading-unloading-service')],
    ['label' => 'Packing & Unpacking', 'url' => site_url('packing-unpacking-service')],
    ['label' => 'Luggage Delivery', 'url' => site_url('luggage-delivery')],
];

$footer_links = [
    ['label' => 'Home', 'url' => site_url('home')],
    ['label' => 'About Us', 'url' => site_url('about')],
    ['label' => 'Our Branches', 'url' => site_url('branches')],
    ['label' => 'Contact', 'url' => site_url('contacts')],
    ['label' => 'Gallery', 'url' => site_url('gallery')],
    ['label' => 'Testimonials', 'url' => site_url('testimonials')],
];

$social_links = [
    ['url' => $facebookhtml, 'icon' => 'facebook', 'label' => 'Facebook'],
    ['url' => $twitterhtml, 'icon' => 'twitter-x', 'label' => 'Twitter'],
    ['url' => $instagramhtml, 'icon' => 'instagram', 'label' => 'Instagram'],
    ['url' => $linkedinhtml, 'icon' => 'linkedin', 'label' => 'LinkedIn'],
];
?>

<footer class="footer-section text-white">

    <div class="container footer-main">
        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <div class="footer-panel footer-brand-panel">
                    <span class="footer-title"><?= $companyname ?></span>
                    <p class="footer-brand-text">
                        <?= $companyname ?> delivers dependable relocation support with home shifting,
                        office moving, vehicle transport, loading and unloading, and packing help across
                        <?= $addressRegion ?>, <?= $companystate ?> and nearby service areas.
                    </p>

                    <?php if (array_filter(array_column($social_links, 'url'))): ?>
                        <div class="footer-socials">
                            <?php foreach ($social_links as $social): ?>
                                <?php if (!empty($social['url'])): ?>
                                    <a href="<?= $social['url'] ?>" aria-label="Visit our <?= strtolower($social['label']) ?> page" class="social">
                                        <i class="bi bi-<?= $social['icon'] ?>"></i>
                                        <span class="visually-hidden"><?= $social['label'] ?></span>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-lg-2 col-md-6">
                <div class="footer-panel">
                    <span class="footer-title">Our Services</span>
                    <ul class="footer-list">
                        <?php foreach ($footer_services as $service): ?>
                            <li>
                                <a href="<?= $service['url'] ?>">
                                    <i class="bi bi-chevron-right"></i>
                                    <span><?= $service['label'] ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6">
                <div class="footer-panel">
                    <span class="footer-title">Quick Links</span>
                    <ul class="footer-list">
                        <?php foreach ($footer_links as $link): ?>
                            <li>
                                <a href="<?= $link['url'] ?>">
                                    <i class="bi bi-chevron-right"></i>
                                    <span><?= $link['label'] ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="footer-panel">
                    <span class="footer-title">Get In Touch</span>

                    <div class="footer-contact-card">
                        <div class="footer-contact-item">
                            <span class="footer-contact-icon"><i class="bi bi-telephone-fill"></i></span>
                            <div>
                                <span class="footer-contact-label">Call Us</span>
                                <a href="<?= $phonehtml ?>" class="footer-contact-value"><?= $phone ?></a>
                            </div>
                        </div>

                        <div class="footer-contact-item">
                            <span class="footer-contact-icon"><i class="bi bi-envelope-fill"></i></span>
                            <div>
                                <span class="footer-contact-label">Email Us</span>
                                <a href="<?= $mailhtml ?>" class="footer-contact-value"><?= $mail ?></a>
                            </div>
                        </div>

                        <div class="footer-contact-item footer-contact-item-address">
                            <span class="footer-contact-icon"><i class="bi bi-geo-alt-fill"></i></span>
                            <div>
                                <span class="footer-contact-label">Address</span>
                                <address class="footer-contact-value">
                                    <?= $address1 ?><br>
                                    <?= $address2 ?>, <?= $addressRegion ?><br>
                                    <?= $companystate ?> <?= $postalCode ?>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="footer-bottom">
        <div class="container footer-bottom-inner">
            <span class="footer-copy">
                &copy; <?= date('Y') ?> <?= $companyname ?>. All rights reserved.
            </span>

            <div class="footer-bottom-links">
                <a href="<?= site_url('terms-and-condition') ?>">Terms &amp; Condition</a>
                <a href="<?= site_url('privacy-policy') ?>">Privacy</a>
            </div>
        </div>
    </div>

</footer>
<style>
    .footer-section {
        background:
            radial-gradient(circle at top left, rgba(255, 255, 255, 0.08), transparent 28%),
            linear-gradient(135deg, #8f1712 0%, #b61f17 45%, #8c140f 100%);
        color: #fff;
        margin-top: 40px;
    }

    .footer-main {
        padding-top: 56px;
        padding-bottom: 34px;
    }

    .footer-panel {
        height: 100%;
    }

    .footer-brand-panel {
        padding-right: 18px;
    }

    .footer-title {
        display: inline-block;
        position: relative;
        font-size: 1.3rem;
        font-weight: 800;
        margin-bottom: 22px;
        padding-bottom: 12px;
    }

    .footer-title::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 72px;
        height: 2px;
        background: rgba(255, 255, 255, 0.8);
    }

    .footer-brand-text {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1rem;
        line-height: 1.8;
        max-width: 420px;
        margin-bottom: 0;
    }

    .footer-socials {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 28px;
    }

    .footer-section .social {
        width: 44px;
        height: 44px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        color: #fff;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.18);
        transition: transform 0.3s ease, background 0.3s ease, border-color 0.3s ease;
    }

    .footer-section .social:hover {
        color: #fff;
        background: rgba(255, 255, 255, 0.18);
        border-color: rgba(255, 255, 255, 0.38);
        transform: translateY(-3px);
    }

    .footer-section .social i {
        font-size: 1.05rem;
        line-height: 1;
    }

    .footer-list {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .footer-list li + li {
        margin-top: 10px;
    }

    .footer-list a {
        display: inline-flex;
        align-items: flex-start;
        gap: 10px;
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        line-height: 1.6;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .footer-list a:hover {
        color: #fff;
        transform: translateX(4px);
    }

    .footer-list i {
        font-size: 0.8rem;
        margin-top: 5px;
        flex-shrink: 0;
    }

    .footer-contact-card {
        background: rgba(0, 0, 0, 0.12);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: 20px;
        padding: 22px 22px 18px;
        backdrop-filter: blur(3px);
    }

    .footer-contact-item {
        display: flex;
        align-items: flex-start;
        gap: 14px;
    }

    .footer-contact-item + .footer-contact-item {
        margin-top: 18px;
        padding-top: 18px;
        border-top: 1px solid rgba(255, 255, 255, 0.12);
    }

    .footer-contact-icon {
        width: 42px;
        height: 42px;
        min-width: 42px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 14px;
        background: rgba(255, 255, 255, 0.12);
        color: #fff;
        font-size: 1.05rem;
    }

    .footer-contact-label {
        display: block;
        font-size: 0.95rem;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .footer-contact-value {
        display: inline-block;
        margin: 0;
        color: rgba(255, 255, 255, 0.92);
        text-decoration: none;
        line-height: 1.75;
        word-break: break-word;
    }

    .footer-contact-value:hover {
        color: #fff;
    }

    .footer-bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.12);
        padding: 18px 0;
    }

    .footer-bottom-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 18px;
        flex-wrap: wrap;
    }

    .footer-copy {
        color: rgba(255, 255, 255, 0.9);
        font-size: 0.97rem;
    }

    .footer-bottom-links {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 18px;
    }

    .footer-bottom-links a {
        color: rgba(255, 255, 255, 0.88);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .footer-bottom-links a:hover {
        color: #fff;
    }

    @media (max-width: 991px) {
        .footer-main {
            padding-top: 44px;
        }

        .footer-brand-panel {
            padding-right: 0;
        }
    }

    @media (max-width: 767px) {
        .footer-main {
            padding-top: 38px;
            padding-bottom: 24px;
        }

        .footer-title {
            font-size: 1.15rem;
        }

        .footer-brand-text,
        .footer-list a,
        .footer-contact-value,
        .footer-copy {
            font-size: 0.95rem;
        }

        .footer-bottom-inner {
            justify-content: center;
            text-align: center;
        }

        .footer-bottom-links {
            justify-content: center;
        }
    }
</style>

<!-- MOBILE FLOATING ACTION BAR -->
<div class="mobile-action-bar d-lg-none">
  <div class="action-bar-container">
    <a href="<?=$phonehtml?>" class="action-item" aria-label="Call Unicorn Packers Support">
      <div class="action-icon float-animation"><i class="bi bi-telephone-fill"></i></div>
      <span>Call</span>
    </a>
    <a href="https://wa.me/<?=preg_replace('/\D/', '', $phone)?>" target="_blank" rel="noopener" class="action-item" aria-label="Chat with us on WhatsApp">
      <div class="action-icon whatsapp-btn float-animation whatsapp-pulse"><i class="bi bi-whatsapp"></i></div>
      <span>WhatsApp</span>
    </a>
    <a href="#" data-bs-toggle="modal" data-bs-target="#qteModal" class="action-item main-cta" aria-label="Request an instant moving quote">
      <div class="action-icon pulse-animation"><i class="bi bi-lightning-fill"></i></div>
      <span>Instant Quote</span>
    </a>
  </div>
</div>

<style>
/* STYLISH 3D PILL ACTION BAR */
.mobile-action-bar {
  position: fixed;
  bottom: 20px;
  left: 20px;
  right: 20px;
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(15px);
  -webkit-backdrop-filter: blur(15px);
  border: 1px solid rgba(255, 255, 255, 0.5);
  border-radius: 50px;
  padding: 8px 12px;
  z-index: 9999;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15), 
              inset 0 1px 1px rgba(255, 255, 255, 0.8);
  animation: floatIn 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

@keyframes floatIn {
  from { transform: translateY(100px) scale(0.8); opacity: 0; }
  to { transform: translateY(0) scale(1); opacity: 1; }
}

.action-bar-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 400px;
  margin: 0 auto;
}

.action-item {
  display: flex;
  align-items: center;
  gap: 8px;
  text-decoration: none;
  padding: 8px 12px;
  border-radius: 40px;
  transition: all 0.3s ease;
}

.action-icon {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(145deg, red, #303f9f);
  color: #fff;
  font-size: 18px;
  box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1), 
              -1px -1px 3px rgba(255, 255, 255, 0.3);
}

.whatsapp-btn {
  background: linear-gradient(145deg, #25D366, #128C7E);
}

.action-item span {
  font-size: 10px;
  font-weight: 800;
  color: #1e3a8a;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  display: none; /* Hide labels for ultra-clean 3D look, or show for usability */
}

/* Show labels only for the main CTA or on wider screens */
.action-item.main-cta span {
  display: block;
}

/* PREMIUM 3D CTA */
.action-item.main-cta {
  background: red;
  box-shadow: 0 10px 20px rgba(63, 81, 181, 0.3);
}

.action-item.main-cta .action-icon {
  background: transparent;
  box-shadow: none;
  width: 24px;
  height: 24px;
}

.action-item.main-cta span {
  color: #fff;
}

/* ANIMATIONS */
.pulse-animation {
  animation: pulse-blue 2s infinite;
}

.whatsapp-pulse {
  animation: pulse-green 2s infinite;
}

.float-animation {
  animation: slowFloat 3s ease-in-out infinite;
}

@keyframes pulse-blue {
  0% { box-shadow: 0 0 0 0 rgba(63, 81, 181, 0.6); }
  70% { box-shadow: 0 0 0 12px rgba(63, 81, 181, 0); }
  100% { box-shadow: 0 0 0 0 rgba(63, 81, 181, 0); }
}

@keyframes pulse-green {
  0% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.6); }
  70% { box-shadow: 0 0 0 12px rgba(37, 211, 102, 0); }
  100% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0); }
}

@keyframes slowFloat {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-5px); }
}

@keyframes pulse-3d {
  0% { box-shadow: 0 0 0 0 rgba(63, 81, 181, 0.5); }
  70% { box-shadow: 0 0 0 12px rgba(63, 81, 181, 0); }
  100% { box-shadow: 0 0 0 0 rgba(63, 81, 181, 0); }
}

.action-item:active {
  transform: translateY(2px) scale(0.95);
}

/* Body padding adjustment */
@media (max-width: 991px) {
  body {
    padding-bottom: 95px !important;
  }
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/js/script.js') ?>"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    // Attach submit handler to ALL forms with class .ajax-form
    document.querySelectorAll(".ajax-form").forEach(form => {

        form.addEventListener("submit", function (e) {
            e.preventDefault();

            const url = this.getAttribute("data-url");
            const resultBoxId = this.getAttribute("data-result");
            const resultBox = document.getElementById(resultBoxId);
            const formData = new FormData(this);

            // Show loader
            resultBox.innerHTML = "<p style='color:red'>Please wait...</p>";

            fetch(url, {
                method: "POST",
                body: formData
            })
            .then(res => res.text())
            .then(data => {

                if (data.trim() === "1") {
                    data = `
                        <div class='alert alert-success'>
                        <p style='color:green;'>Thank you! Your request has been submitted successfully.</p>
                        </div>
                    `;
                    form.reset();
                }

                resultBox.innerHTML = data;

                setTimeout(() => resultBox.innerHTML = "", 8000);
            })
            .catch(err => {
                resultBox.innerHTML = "<p style='color:red'>Something went wrong!</p>";
            });

        });

    });

});
</script>
</body>

</html>
