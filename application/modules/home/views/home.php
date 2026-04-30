<div class="container quote-form-area">
    <?php $this->load->view('contacts/quoteform.php'); ?>
</div>
<style>
    .quote-form-area {
        margin-top: -60px;
        position: relative;
        z-index: 10;
    }

    @media (max-width: 768px) {
        .quote-form-area {
            margin-top: -90px;
            position: relative;
            z-index: 10;
        }
    }
</style>
<section class="py-5 about-section position-relative overflow-hidden">
    <div class="container">
        <div class="about-bg-shapes">
            <span class="circle circle-1"></span>
            <span class="circle circle-half"></span>
        </div>

        <div class="row align-items-center g-4">

            <!-- Left Image -->
            <div class="col-md-6">
                <div class="about-img">
                    <img src="<?= base_url('assets/images/home/Loading_Unloading.jpg'); ?>"
                        alt="Agarwal Packers and Movers team providing relocation services"
                        loading="lazy" class="img-fluid rounded-4 w-100">
                </div>
            </div>

            <!-- Right Content -->
            <div class="col-md-6">
                <div class="mb-3">
                    <span class="section-label d-inline-block">ABOUT US</span>
                </div>


                <h2 class="fw-bold fs-2 mb-3">
                    We make relocation simple, safe and stress-free for every customer
                </h2>

                <p class="text-muted mb-4">
                    Agarwal Packers and Movers is dedicated to providing reliable and efficient
                    relocation services for homes, offices, and vehicles. Our experienced team
                    ensures careful packing, secure transportation, and timely delivery so that
                    you can move without any worries.
                </p>

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

            </div>

        </div>
    </div>
</section>

<?php

$data['services'] = [
    [
        "icon" => "bi-house-door",
        "link" => "home-shifting",
        "title" => "Home Shifting Services",
        "description" => "We provide safe and secure home shifting services. Our trained team packs all household items including furniture, kitchen items, electronics, and fragile goods with multi-layer protection.",
        "features" => ["Door-to-door service", "Safe packing material"]
    ],
    [
        "icon" => "bi-building",
        "link" => "office-shifting",
        "title" => "Office Shifting Services",
        "description" => "Complete office shifting solution with minimal downtime. We handle office furniture, IT equipment, files, documents, and sensitive devices with professional care.",
        "features" => ["Weekend shifting available", "Quick setup at new location"]
    ],
    [
        "icon" => "bi-truck",
        "link" => "courier-service",
        "title" => "Courier & Cargo Services",
        "description" => "We offer reliable intercity and domestic shifting across India. Our fleet of GPS-enabled trucks ensures safe and timely transportation of your belongings.",
        "features" => ["Real-time updates", "Insurance coverage"]
    ],
    [
        "icon" => "bi-globe",
        "link" => "luggage-delivery",
        "title" => "Luggage Delivery",
        "description" => "Moving abroad? We handle international packing, custom clearance, documentation, and door-to-door delivery to any country worldwide.",
        "features" => ["Export quality packing", "Doorstep delivery worldwide"]
    ],
    [
        "icon" => "bi-box-seam",
        "link" => "packing-unpacking-service",
        "title" => "Packing & Unpacking",
        "description" => "Professional packing and unpacking services using high-quality materials. We use bubble wrap, corrugated sheets, thermocol, and wooden crating for maximum protection.",
        "features" => ["Multi-layer packing", "Fragile item care"]
    ],
    [
        "icon" => "bi-car-front",
        "link" => "car-shifting",
        "title" => "Car Transportation Services",
        "description" => "Safe vehicle transportation using enclosed car carriers and bike trolleys. We ensure zero-scratch delivery of your car or two-wheeler across cities.",
        "features" => ["Enclosed carriers", "Full insurance cover"]
    ],
    [
        "icon" => "bi-archive",
        "link" => "loading-unloading-service",
        "title" => "Loading and Unloading",
        "description" => "Short-term and long-term warehousing solutions with 24x7 CCTV surveillance. Clean, pest-free, and climate-controlled storage units available.",
        "features" => ["Flexible duration", "Easy access anytime"]
    ],
    [
        "icon" => "bi-shield-check",
        "link" => "insurance-service",
        "title" => "Goods Insurance",
        "description" => "We offer comprehensive transit insurance for your goods. In case of any damage during transportation, your items are fully covered under our insurance policy.",
        "features" => ["Full value coverage", "Easy claim process"]
    ],
    [
        "icon" => "bi-shop",
        "link" => "iba-approved",
        "title" => "IBA Approved Transporters",
        "description" => "We handle commercial and industrial shifting including showroom shifting, factory relocation, shop shifting, and heavy machinery transportation.",
        "features" => ["Heavy machinery moving", "Trained labor team"]
    ]
];

$this->load->view('home/service_widget.php', $data);


?>

<?php include 'choose_widget.php' ?>
<?php include 'achivement.php' ?>
<?php include 'process_widget.php' ?>
<?php include 'table_widget.php' ?>

<?php
$cities_home = [
    ['city' => 'Delhi', 'state' => 'Delhi'],
    ['city' => 'Mumbai', 'state' => 'Maharashtra'],
    ['city' => 'Pune', 'state' => 'Maharashtra'],
    ['city' => 'Nagpur', 'state' => 'Maharashtra'],
    ['city' => 'Nashik', 'state' => 'Maharashtra'],

    ['city' => 'Patna', 'state' => 'Bihar'],
    ['city' => 'Gaya', 'state' => 'Bihar'],
    ['city' => 'Muzaffarpur', 'state' => 'Bihar'],

    ['city' => 'Kolkata', 'state' => 'West Bengal'],
    ['city' => 'Siliguri', 'state' => 'West Bengal'],
    ['city' => 'Durgapur', 'state' => 'West Bengal'],

    ['city' => 'Jaipur', 'state' => 'Rajasthan'],
    ['city' => 'Udaipur', 'state' => 'Rajasthan'],
    ['city' => 'Jodhpur', 'state' => 'Rajasthan'],

    ['city' => 'Lucknow', 'state' => 'Uttar Pradesh'],
    ['city' => 'Kanpur', 'state' => 'Uttar Pradesh'],
    ['city' => 'Varanasi', 'state' => 'Uttar Pradesh'],
    ['city' => 'Noida', 'state' => 'Uttar Pradesh'],
    ['city' => 'Ghaziabad', 'state' => 'Uttar Pradesh'],

    ['city' => 'Bhopal', 'state' => 'Madhya Pradesh'],
    ['city' => 'Indore', 'state' => 'Madhya Pradesh'],
    ['city' => 'Gwalior', 'state' => 'Madhya Pradesh'],

    ['city' => 'Chennai', 'state' => 'Tamil Nadu'],
    ['city' => 'Coimbatore', 'state' => 'Tamil Nadu'],
    ['city' => 'Madurai', 'state' => 'Tamil Nadu'],

    ['city' => 'Bangalore', 'state' => 'Karnataka'],
    ['city' => 'Mysore', 'state' => 'Karnataka'],
    ['city' => 'Hubli', 'state' => 'Karnataka'],

    ['city' => 'Hyderabad', 'state' => 'Telangana'],
    ['city' => 'Warangal', 'state' => 'Telangana'],

    ['city' => 'Ahmedabad', 'state' => 'Gujarat'],
    ['city' => 'Surat', 'state' => 'Gujarat'],
    ['city' => 'Vadodara', 'state' => 'Gujarat'],
    ['city' => 'Rajkot', 'state' => 'Gujarat'],

    ['city' => 'Chandigarh', 'state' => 'Chandigarh'],
    ['city' => 'Ludhiana', 'state' => 'Punjab'],
    ['city' => 'Amritsar', 'state' => 'Punjab'],

    ['city' => 'Dehradun', 'state' => 'Uttarakhand'],
    ['city' => 'Haridwar', 'state' => 'Uttarakhand'],

    ['city' => 'Ranchi', 'state' => 'Jharkhand'],
    ['city' => 'Jamshedpur', 'state' => 'Jharkhand'],

    ['city' => 'Raipur', 'state' => 'Chhattisgarh'],
    ['city' => 'Bilaspur', 'state' => 'Chhattisgarh'],

    ['city' => 'Bhubaneswar', 'state' => 'Odisha'],
    ['city' => 'Cuttack', 'state' => 'Odisha'],

    ['city' => 'Thiruvananthapuram', 'state' => 'Kerala'],
    ['city' => 'Kochi', 'state' => 'Kerala'],

    ['city' => 'Panaji', 'state' => 'Goa'],
];
include 'local_city.php' ?>

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
        "question" => "What types of moving services do you offer?",
        "answer" => "We offer home relocation, office shifting, car transport, bike transport, and packing/unpacking services."
    ],
    [
        "question" => "Are your packing materials safe?",
        "answer" => "Yes, we use high-quality and durable packing materials to ensure complete safety of your goods."
    ],
    [
        "question" => "How do I book your service?",
        "answer" => "You can book by calling us or filling out the contact form on our website."
    ],
    [
        "question" => "Do you provide insurance?",
        "answer" => "Yes, we provide transit insurance for added protection of your belongings."
    ]
];

$this->load->view('home/fags_widget.php', $data);
?>