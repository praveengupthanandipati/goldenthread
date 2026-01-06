<?php include 'header.php'; ?>



<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area bg-gradient text-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Contact 
    ============================================= -->
<div class="contact-area default-padding">
    <div class="container">
        <div class="contact-content">
            <div class="row">
                <div class="col-lg-5 contact-info">
                    <div class="content card-shadow">
                        <h4 class="sub-title">Contact Info</h4>
                        <h2 class="title" style="color: #d1b06b;">Get in touch with us</h2>
                        <p>
                            Have a project in mind? We'd love to hear from you. Reach out to us through any of the
                            following channels or fill out the form.
                        </p>
                        <ul class="contact-list">
                            <li class="wow fadeInUp" data-wow-delay="300ms">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <h5>Address</h5>
                                    <p>Hyderabad, India</p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="500ms">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="info">
                                    <h5>Email</h5>
                                    <p>gtstudios.26@gmail.com</p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="700ms">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info">
                                    <h5>Phone</h5>
                                    <p>+91-9949606434</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 contact-form">
                    <div class="form-box card-shadow wow fadeInRight">
                        <!-- Alert Message -->
                        <div id="message" class="alert-msg mb-4"></div>

                        <form action="assets/mail/contact.php" method="POST" class="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group custom-input mb-4">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text"
                                            required>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group custom-input mb-4">
                                        <input class="form-control" id="email" name="email" placeholder="Email*"
                                            type="email" required>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group custom-input mb-4">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone"
                                            type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments custom-input mb-4">
                                        <textarea class="form-control" id="comments" name="comments"
                                            placeholder="Tell Us About Project *" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit"
                                        class="btn btn-theme effect btn-md w-100"
                                        style="background: #d1b06b; border: none;">
                                        Send Message <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->

<style>
    .card-shadow {
        background: #fff;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 15px 45px rgba(0, 0, 0, 0.06);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .card-shadow:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 55px rgba(0, 0, 0, 0.1);
    }

    .custom-input .form-control {
        border: 1px solid #f0f0f0;
        border-radius: 12px;
        padding: 18px 25px;
        height: auto;
        background: #fdfdfd;
        transition: all 0.3s ease;
    }

    .custom-input .form-control:focus {
        border-color: #d1b06b;
        background: #fff;
        box-shadow: 0 10px 25px rgba(209, 176, 107, 0.1);
    }

    .contact-list {
        padding: 0;
        margin-top: 30px;
    }

    .contact-list li {
        display: flex;
        align-items: center;
        margin-bottom: 30px;
        transition: all 0.3s ease;
    }

    .contact-list li:hover {
        transform: translateX(10px);
    }

    .contact-list .icon {
        background: #d1b06b;
        color: #fff;
        min-width: 55px;
        height: 55px;
        line-height: 55px;
        text-align: center;
        border-radius: 15px;
        margin-right: 20px;
        font-size: 1.2rem;
        box-shadow: 0 8px 15px rgba(209, 176, 107, 0.2);
    }

    .contact-list .info h5 {
        margin-bottom: 2px;
        font-weight: 700;
        font-size: 1.1rem;
    }

    .contact-list .info p {
        margin-bottom: 0;
        color: #666;
    }
</style>

<!-- Start Google Maps 
    ============================================= -->
<div class="maps-area">
    <div class="google-maps">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121821.11189917637!2d78.29348825852509!3d17.4161474944985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb99daeaebd2c7%3A0xae93b7836249b024!2sHyderabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1704407000000!5m2!1sen!2sin"></iframe>
    </div>
</div>
<!-- End Google Maps -->

<?php include 'footer.php'; ?>