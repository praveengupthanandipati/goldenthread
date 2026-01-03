<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<header class="page-header">
    <div class="container" data-aos="fade-up">
        <h1 class="display-3 fw-bold">Gallery</h1>
        <p class="lead">Behind the scenes at Golden Thread Studios</p>
    </div>
</header>

<!-- Gallery Grid -->
<section class="gallery-section section-padding">
    <div class="container">
        <div class="row g-3">
            <!-- Item 1 -->
            <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                <a href="images/hero-bg.jpg" data-lightbox="gallery" data-title="Studio Session 1">
                    <div class="gallery-item position-relative overflow-hidden">
                        <img src="images/hero-bg.jpg" class="img-fluid rounded shadow h-100 object-fit-cover"
                            alt="Gallery 1">
                        <div class="gallery-overlay d-flex align-items-center justify-content-center">
                            <span class="text-white fs-4"><i class="fas fa-search-plus"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Item 2 -->
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <a href="images/hero-bg.jpg" data-lightbox="gallery" data-title="Studio Session 2">
                    <div class="gallery-item position-relative overflow-hidden">
                        <img src="images/hero-bg.jpg" class="img-fluid rounded shadow h-100 object-fit-cover"
                            alt="Gallery 2">
                        <div class="gallery-overlay d-flex align-items-center justify-content-center">
                            <span class="text-white fs-4"><i class="fas fa-search-plus"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Item 3 -->
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <a href="images/hero-bg.jpg" data-lightbox="gallery" data-title="Studio Session 3">
                    <div class="gallery-item position-relative overflow-hidden">
                        <img src="images/hero-bg.jpg" class="img-fluid rounded shadow h-100 object-fit-cover"
                            alt="Gallery 3">
                        <div class="gallery-overlay d-flex align-items-center justify-content-center">
                            <span class="text-white fs-4"><i class="fas fa-search-plus"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Item 4 -->
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <a href="images/hero-bg.jpg" data-lightbox="gallery" data-title="Studio Session 4">
                    <div class="gallery-item position-relative overflow-hidden">
                        <img src="images/hero-bg.jpg" class="img-fluid rounded shadow h-100 object-fit-cover"
                            alt="Gallery 4">
                        <div class="gallery-overlay d-flex align-items-center justify-content-center">
                            <span class="text-white fs-4"><i class="fas fa-search-plus"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Item 5 -->
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <a href="images/hero-bg.jpg" data-lightbox="gallery" data-title="Studio Session 5">
                    <div class="gallery-item position-relative overflow-hidden">
                        <img src="images/hero-bg.jpg" class="img-fluid rounded shadow h-100 object-fit-cover"
                            alt="Gallery 5">
                        <div class="gallery-overlay d-flex align-items-center justify-content-center">
                            <span class="text-white fs-4"><i class="fas fa-search-plus"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Item 6 -->
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                <a href="images/hero-bg.jpg" data-lightbox="gallery" data-title="Studio Session 6">
                    <div class="gallery-item position-relative overflow-hidden">
                        <img src="images/hero-bg.jpg" class="img-fluid rounded shadow h-100 object-fit-cover"
                            alt="Gallery 6">
                        <div class="gallery-overlay d-flex align-items-center justify-content-center">
                            <span class="text-white fs-4"><i class="fas fa-search-plus"></i></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Custom Styles for Gallery -->
<style>
    .gallery-item {
        cursor: pointer;
        min-height: 250px;
    }

    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(212, 175, 55, 0.7);
        opacity: 0;
        transition: all 0.3s ease;
    }

    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }

    .gallery-item img {
        transition: transform 0.5s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.1);
    }
</style>

<?php include 'includes/footer.php'; ?>