<?php
include 'includes/header.php';

$message_sent = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    $to = CONTACT_EMAIL;
    $subject = "New Inquiry from " . $name;
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nService: $service\n\nMessage:\n$message";
    $headers = "From: $email";

    // mail($to, $subject, $body, $headers); // Uncomment for production
    $message_sent = true;
}
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container" data-aos="fade-up">
        <h1 class="display-3 fw-bold">Contact Us</h1>
        <p class="lead">Let's discuss your next big project</p>
    </div>
</header>

<section class="contact-section section-padding">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Form -->
            <div class="col-lg-7" data-aos="fade-right">
                <div class="contact-form-wrapper p-5 bg-light rounded shadow-sm">
                    <h3 class="mb-4">Send a Message</h3>

                    <?php if ($message_sent): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Thank you!</strong> Your message has been sent successfully. We will get back to you
                            soon.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <form action="contact.php" method="POST" id="contactForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" name="phone" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Service Interest</label>
                                <select name="service" class="form-select">
                                    <option value="Ad Film Making">Ad Film Making</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="Both">Both Services</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Your Message</label>
                                <textarea name="message" class="form-control" rows="5" required></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-gold btn-lg w-100">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-5" data-aos="fade-left">
                <div class="contact-info-wrapper ps-lg-4">
                    <h3 class="mb-4">Get in Touch</h3>
                    <div class="info-item d-flex mb-4">
                        <div class="icon-box me-3">
                            <i class="fas fa-map-marker-alt fa-2x text-gold"></i>
                        </div>
                        <div>
                            <h5>Our Studio</h5>
                            <p class="text-muted">
                                <?php echo CONTACT_ADDRESS; ?>
                            </p>
                        </div>
                    </div>
                    <div class="info-item d-flex mb-4">
                        <div class="icon-box me-3">
                            <i class="fas fa-phone-alt fa-2x text-gold"></i>
                        </div>
                        <div>
                            <h5>Call Us</h5>
                            <p class="text-muted">
                                <?php echo CONTACT_PHONE; ?>
                            </p>
                        </div>
                    </div>
                    <div class="info-item d-flex mb-4">
                        <div class="icon-box me-3">
                            <i class="fas fa-envelope fa-2x text-gold"></i>
                        </div>
                        <div>
                            <h5>Email Us</h5>
                            <p class="text-muted">
                                <?php echo CONTACT_EMAIL; ?>
                            </p>
                        </div>
                    </div>

                    <hr class="my-5">

                    <h4 class="mb-3">Business Hours</h4>
                    <p class="mb-1"><strong>Monday - Friday:</strong> 9AM - 6PM</p>
                    <p class="mb-1"><strong>Saturday:</strong> 10AM - 4PM</p>
                    <p class="mb-0"><strong>Sunday:</strong> Closed</p>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Full Width Google Map -->
<section class="map-section mt-5" data-aos="fade-up">
    <div class="container-fluid p-0">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.284815451978!2d78.406979!3d17.446059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTfCsDI2JzQ1LjgiTiA3OMKwMjQnMjUuMSJF!5e0!3m2!1sen!2sin!4v1625000000000!5m2!1sen!2sin"
            width="100%" height="450" style="border:0; display:block;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

<?php include 'includes/footer.php'; ?>