<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<header class="page-header">
    <div class="container" data-aos="fade-up">
        <h1 class="display-3 fw-bold">Our Work</h1>
        <p class="lead">A collection of stories we've woven</p>
    </div>
</header>

<!-- Portfolio Filter -->
<section class="portfolio-grid section-padding">
    <div class="container">
        <div class="filter-controls text-center mb-5" data-aos="fade-up">
            <button class="btn btn-outline-dark mx-1 filter-btn active" data-filter="all">All Projects</button>
            <button class="btn btn-outline-dark mx-1 filter-btn" data-filter="adfilms">Ad Films</button>
            <button class="btn btn-outline-dark mx-1 filter-btn" data-filter="digital">Digital Campaigns</button>
        </div>

        <div class="row g-4 portfolio-container">
            <!-- Project 1 -->
            <div class="col-lg-4 col-md-6 portfolio-item-wrapper" data-category="adfilms" data-aos="zoom-in">
                <div class="portfolio-item shadow-lg">
                    <img src="images/portfolio/portfolio1.jpg" alt="Project 1" class="img-fluid portfolio-img">
                    <div class="portfolio-overlay">
                        <h4 class="text-gold">Aura Automotive</h4>
                        <p>Luxury Car Ad Film</p>
                        <a href="#" class="btn btn-sm btn-gold mt-2" data-bs-toggle="modal"
                            data-bs-target="#projectModal1">View Story</a>
                    </div>
                </div>
            </div>
            <!-- Duplicate for demo -->
            <div class="col-lg-4 col-md-6 portfolio-item-wrapper" data-category="digital" data-aos="zoom-in"
                data-aos-delay="100">
                <div class="portfolio-item shadow-lg">
                    <img src="images/portfolio/portfolio1.jpg" alt="Project 2" class="img-fluid portfolio-img">
                    <div class="portfolio-overlay">
                        <h4 class="text-gold">Tech Pulse</h4>
                        <p>Social Media Strategy</p>
                        <a href="#" class="btn btn-sm btn-gold mt-2">View Story</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item-wrapper" data-category="adfilms" data-aos="zoom-in"
                data-aos-delay="200">
                <div class="portfolio-item shadow-lg">
                    <img src="images/portfolio/portfolio1.jpg" alt="Project 3" class="img-fluid portfolio-img">
                    <div class="portfolio-overlay">
                        <h4 class="text-gold">Nature's Essence</h4>
                        <p>Product Video</p>
                        <a href="#" class="btn btn-sm btn-gold mt-2">View Story</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item-wrapper" data-category="digital" data-aos="zoom-in"
                data-aos-delay="300">
                <div class="portfolio-item shadow-lg">
                    <img src="images/portfolio/portfolio1.jpg" alt="Project 4" class="img-fluid portfolio-img">
                    <div class="portfolio-overlay">
                        <h4 class="text-gold">Eco Flow</h4>
                        <p>Google Ads Campaign</p>
                        <a href="#" class="btn btn-sm btn-gold mt-2">View Story</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item-wrapper" data-category="adfilms" data-aos="zoom-in"
                data-aos-delay="400">
                <div class="portfolio-item shadow-lg">
                    <img src="images/portfolio/portfolio1.jpg" alt="Project 5" class="img-fluid portfolio-img">
                    <div class="portfolio-overlay">
                        <h4 class="text-gold">Urban Living</h4>
                        <p>Real Estate Film</p>
                        <a href="#" class="btn btn-sm btn-gold mt-2">View Story</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item-wrapper" data-category="digital" data-aos="zoom-in"
                data-aos-delay="500">
                <div class="portfolio-item shadow-lg">
                    <img src="images/portfolio/portfolio1.jpg" alt="Project 6" class="img-fluid portfolio-img">
                    <div class="portfolio-overlay">
                        <h4 class="text-gold">Glow Beauty</h4>
                        <p>Influencer Marketing</p>
                        <a href="#" class="btn btn-sm btn-gold mt-2">View Story</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Modal Demo -->
<div class="modal fade" id="projectModal1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-dark text-white border-gold">
            <div class="modal-header border-secondary">
                <h5 class="modal-title text-gold">Aura Automotive - The Journey Reimagined</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-7">
                        <img src="images/portfolio/portfolio1.jpg" class="img-fluid rounded mb-3" alt="Project">
                    </div>
                    <div class="col-md-5">
                        <h6>Challenge</h6>
                        <p class="small">Positioning a new luxury sedan in a crowded market.</p>
                        <h6>Solution</h6>
                        <p class="small">A cinematic 60-second film focusing on emotion and heritage.</p>
                        <h6>Results</h6>
                        <p class="small">1M+ views and 20% increase in pre-bookings.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>