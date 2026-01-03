$(function () {
    "use strict";

    // Navbar scroll effect
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#mainNav').addClass('scrolled');
            $('#backToTop').addClass('show');
        } else {
            $('#mainNav').removeClass('scrolled');
            $('#backToTop').removeClass('show');
        }
    });

    // Hover Dropdown for Desktop
    if ($(window).width() > 991) {
        $('.navbar .dropdown').hover(function () {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(100).fadeIn(200);
        }, function () {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(100).fadeOut(200);
        });
    }

    // Hero Swiper
    const heroSwiper = new Swiper('.heroSwiper', {
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    // Testimonial Swiper
    const testimonialSwiper = new Swiper('.testimonialSwiper', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 30,
        autoplay: {
            delay: 4000,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1200: {
                slidesPerView: 3,
            }
        }
    });

    // Smooth scroll for anchor links
    $('a.nav-link[href^="#"]').on('click', function (event) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 80
            }, 1000);
        }
    });

    // Portfolio Filtering (Simple)
    $('.filter-btn').on('click', function () {
        var filterValue = $(this).attr('data-filter');
        $('.filter-btn').removeClass('active');
        $(this).addClass('active');

        if (filterValue === 'all') {
            $('.portfolio-item-wrapper').show(400);
        } else {
            $('.portfolio-item-wrapper').hide(400);
            $('.portfolio-item-wrapper[data-category="' + filterValue + '"]').show(400);
        }
    });

    // Contact Form Validation
    $('#contactForm').on('submit', function (e) {
        var isValid = true;
        $(this).find('input, textarea, select').each(function () {
            if ($(this).prop('required') && !$(this).val()) {
                isValid = false;
                $(this).addClass('is-invalid');
            } else {
                $(this).removeClass('is-invalid');
            }
        });

        if (!isValid) {
            e.preventDefault();
        }
    });

    // Mobile menu Auto-close
    $('.navbar-nav>.nav-item>a:not(.dropdown-toggle)').on('click', function () {
        $('.navbar-collapse').collapse('hide');
    });

});
