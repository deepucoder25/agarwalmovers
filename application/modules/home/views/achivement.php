<section class="achievement-section">
    <div class="container">

        <h2 class="main-heading">Our Achievements</h2>

        <div class="row justify-content-center">

            <!-- 1 -->
            <div class="col">
                <span class="fs-1 fw-bold"><span class="counter" data-target="25">0</span>+</span>
                <h5>Years of Experience</h5>
                <p>Reliable packers and movers with 25+ years of proven industry expertise.</p>
            </div>

            <!-- 2 -->
            <div class="col">
                <span class="fs-1 fw-bold"><span class="counter" data-target="3000">0</span>+</span>
                <h5>Clients Served</h5>
                <p>More than 3,000 satisfied clients from various industries rely on us.</p>
            </div>

            <!-- 3 -->
            <div class="col">
                <span class="fs-1 fw-bold"><span class="counter" data-target="100">0</span>%</span>
                <h5>Client Satisfaction</h5>
                <p>Outstanding service designed to deliver total client satisfaction consistently.</p>
            </div>

        </div>
    </div>
</section>

<style>
.achievement-section {
    background: linear-gradient(to right, var(--primary-dark), var(--primary-color));
    color: #fff;
    text-align: center;
    padding: 60px 20px;
}

.main-heading {
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 40px;
}


.col {
    flex: 1;
    min-width: 250px;
    padding: 20px;
}


.col p {
    font-size: 14px;
    color: #f1f1f1;
    max-width: 300px;
    margin: 0 auto;
}

/* Responsive */
@media (max-width: 768px) {
    .col h1 {
        font-size: 40px;
    }
}
</style>

<script>
const counters = document.querySelectorAll('.counter');

counters.forEach(counter => {
    const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;

        const increment = target / 80;

        if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCount, 20);
        } else {
            counter.innerText = target;
        }
    };

    updateCount();
});
</script>
