<?php include_once dirname(__FILE__) . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?> | <?php echo SITE_NAME; ?></title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Lightbox2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet">

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/styles/main.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/styles/responsive.css">
</head>

<body class="<?php echo $current_page != 'index.php' ? 'sub-page' : ''; ?>">

    <!-- Header / Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top <?php echo $current_page != 'index.php' ? 'navbar-dark-bg' : ''; ?>"
        id="mainNav">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="<?php echo SITE_URL; ?>/index.php">
                <img src="<?php echo SITE_URL; ?>/images/logo.png" alt="Golden Thread Studios" class="logo-img">
            </a>

            <!-- Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Nav Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $current_page == 'index.php' ? 'active' : ''; ?>"
                            href="<?php echo SITE_URL; ?>/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $current_page == 'about.php' ? 'active' : ''; ?>"
                            href="<?php echo SITE_URL; ?>/about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo $current_page == 'services.php' ? 'active' : ''; ?>"
                            href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="<?php echo SITE_URL; ?>/services/ad-film-making.php">Ad
                                    Film Making</a></li>
                            <li><a class="dropdown-item"
                                    href="<?php echo SITE_URL; ?>/services/digital-marketing.php">Digital Marketing</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?php echo SITE_URL; ?>/services.php">All Services</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $current_page == 'portfolio.php' ? 'active' : ''; ?>"
                            href="<?php echo SITE_URL; ?>/portfolio.php">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $current_page == 'gallery.php' ? 'active' : ''; ?>"
                            href="<?php echo SITE_URL; ?>/gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $current_page == 'contact.php' ? 'active' : ''; ?>"
                            href="<?php echo SITE_URL; ?>/contact.php">Contact</a>
                    </li>
                </ul>

                <!-- Social Icons -->
                <div class="nav-social ms-lg-3">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </nav>