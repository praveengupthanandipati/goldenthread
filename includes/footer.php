<?php include_once dirname(__FILE__) . '/config.php'; ?>
<!-- Footer -->
<footer class="footer pt-5 mt-5">
    <div class="container">
        <div class="row">
            <!-- Column 1: Company Info -->
            <div class="col-lg-3 col-md-6 mb-4">
                <img src="<?php echo SITE_URL; ?>/images/logo.png" alt="Golden Thread Studios" class="footer-logo mb-3">
                <p class="footer-text">Weaving Stories That Connect Brands & Audiences. Helping brands tell stories with
                    clarity, creativity, and purpose.</p>
                <div class="footer-social mt-3">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="footer-heading">Quick Links</h5>
                <ul class="footer-links">
                    <li><a href="<?php echo SITE_URL; ?>/index.php">Home</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/about.php">About Us</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/portfolio.php">Portfolio</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/gallery.php">Gallery</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/contact.php">Contact Us</a></li>
                </ul>
            </div>

            <!-- Column 3: Services -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="footer-heading">Services</h5>
                <ul class="footer-links">
                    <li><a href="<?php echo SITE_URL; ?>/services/ad-film-making.php">Ad Film Making</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/services/digital-marketing.php">Digital Marketing</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/services/ad-film-making.php">Corporate Films</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/services/digital-marketing.php">SEO & PPC</a></li>
                </ul>
            </div>

            <!-- Column 4: Contact -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="footer-heading">Contact Info</h5>
                <p class="footer-text">
                    <i class="fas fa-map-marker-alt me-2 text-gold"></i> <?php echo CONTACT_ADDRESS; ?><br>
                    <i class="fas fa-phone-alt me-2 text-gold mt-2"></i> <?php echo CONTACT_PHONE; ?><br>
                    <i class="fas fa-envelope me-2 text-gold mt-2"></i> <?php echo CONTACT_EMAIL; ?>
                </p>
            </div>
        </div>

        <hr class="footer-divider">

        <div class="row pb-3">
            <div class="col-md-6">
                <p class="copyright">&copy;
                    <?php echo date('Y'); ?>
                    <?php echo SITE_NAME; ?>. All rights reserved.
                </p>
            </div>
            <div class="col-md-6 text-md-end">
                <ul class="footer-bottom-links">
                    <li><span class="designed-by">Designed by Golden Thread</span></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Go to Top -->
<a href="#" class="back-to-top" id="backToTop"><i class="fas fa-chevron-up"></i></a>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php echo SITE_URL; ?>/js/main.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });
</script>
</body>

</html>