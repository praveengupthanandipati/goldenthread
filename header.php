<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="GOLDEN THREAD STUDIOS - Advertising Film Production & Digital Marketing">

    <!-- ========== Page Title ========== -->
    <title>GOLDEN THREAD STUDIOS - Creative Advertising & Digital Marketing</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/elegant-icons.css" rel="stylesheet">
    <link href="assets/css/flaticon-set.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/validnavs.css" rel="stylesheet">
    <link href="assets/css/helper.css" rel="stylesheet">
    <link href="assets/css/unit-test.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->

    <?php
    $current_page = basename($_SERVER['PHP_SELF']);
    if ($current_page != 'index.php' && $current_page != ''):
        ?>
        <style>
            @media (min-width: 992px) {
                body {
                    padding-top: 110px;
                }

                .navbar.dark ul.nav>li>a,
                .navbar.dark .attr-nav ul li a,
                .navbar.dark .navbar-toggle {
                    color: #fff !important;
                }

                .navbar.dark .navbar-brand img.logo-scrolled {
                    display: block !important;
                }
            }
        </style>
    <?php endif; ?>

    <style>
        /* Global Project Card Equal Height Styles */
        .project-area .row,
        .projects-box .row {
            display: flex;
            flex-wrap: wrap;
        }

        .project-area [class*="col-"],
        .projects-box [class*="col-"] {
            display: flex;
            flex-direction: column;
        }

        .project-style-one {
            display: flex;
            flex-direction: column;
            height: 100%;
            width: 100%;
            margin-bottom: 30px;
        }

        .project-style-one .thumb {
            height: 280px;
            width: 100%;
            overflow: hidden;
        }

        .project-style-one .thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.5s;
        }

        .project-style-one .content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            padding: 25px 30px !important;
            position: relative;
        }

        /* Gallery Equal Height Styles */
        .gallery-area .row {
            display: flex;
            flex-wrap: wrap;
        }

        .gallery-area [class*="col-"] {
            display: flex;
            flex-direction: column;
        }

        .gallery-style-one {
            display: flex;
            flex-direction: column;
            height: 100%;
            width: 100%;
            margin-bottom: 30px;
        }

        .gallery-style-one .thumb {
            height: 300px;
            /* Fixed height for gallery uniformity */
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .gallery-style-one .thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.5s;
        }

        /* Reduced Header Height */
        .breadcrumb-area {
            padding: 80px 0 !important;
            padding-top: 130px !important;
        }

        @media only screen and (max-width: 767px) {
            .breadcrumb-area {
                padding: 60px 0 !important;
                padding-top: 100px !important;
            }
        }
    </style>
</head>

<body>

    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Start Preloader 
    ============================================= -->
    <div id="preloader">
        <div id="ambrox-preloader" class="ambrox-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="G" class="letters-loading">
                        G
                    </span>
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                </div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Header 
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <?php
        $current_page = basename($_SERVER['PHP_SELF']);
        $nav_extra_class = ($current_page == 'index.php' || $current_page == '') ? 'white no-background' : 'dark bg-gradient';
        ?>
        <nav
            class="navbar mobile-sidenav navbar-sticky navbar-default validnavs navbar-fixed <?php echo $nav_extra_class; ?>">



            <div class="container d-flex justify-content-between align-items-center">


                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/img/logo-golden.png" class="logo logo-display" alt="Logo">
                        <img src="assets/img/logo-golden.png" class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <img src="assets/img/logo-golden.png" alt="Logo">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-times"></i>
                    </button>

                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a>
                            <ul class="dropdown-menu">
                                <li><a href="ad-film-making.php">Ad Film Making</a></li>
                                <li><a href="digital-marketing.php">Digital Marketing</a></li>
                                <li><a href="web-development.php">Web Development</a></li>
                            </ul>
                        </li>
                        <li><a href="project.php">Projects</a></li>
                        <!-- <li><a href="gallery.php">Gallery</a></li> -->
                        <li><a href="contact-us.php">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="attr-right">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>

                            <li class="side-menu">
                                <a href="#">
                                    <span class="bar-1"></span>
                                    <span class="bar-2"></span>
                                    <span class="bar-3"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->

                    <!-- Start Side Menu -->
                    <div class="side">
                        <a href="#" class="close-side"><i class="icon_close"></i></a>
                        <div class="widget">
                            <div class="logo">
                                <img src="assets/img/logo-golden.png" alt="Logo">
                            </div>
                            <p>
                                GOLDEN THREAD STUDIOS is a professionally managed creative studio specializing in
                                advertising film production and digital marketing services.
                            </p>
                        </div>
                        <div class="widget address">
                            <div>
                                <ul>
                                    <li>
                                        <div class="content">
                                            <p>Address</p>
                                            <strong>Hyderabad, India</strong>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <p>Email</p>
                                            <strong>info@goldenthreadstudios.com</strong>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <p>Contact</p>
                                            <strong>+91-XXXX-XXXXXX</strong>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget social">
                            <ul class="link">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- End Side Menu -->


                </div>
                <!-- Main Nav -->
            </div>

            <!-- Overlay screen for menu -->
            <div class="overlay-screen"></div>
            <!-- End Overlay screen for menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->