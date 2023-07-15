$(document).ready(function() {
    $('.owl-kioscos').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5

            }
        }
    });
    $('.owl-arco-landing').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 1500,
        autoplayHoverPause: true,

        responsive: {
            0: {
                items: 1
            },
            300: {
                items: 1
            },
            601: {
                items: 3
            },
            1000: {
                items: 5

            }
        }
    });
    $('.owl-histo').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            900: {
                items: 2
            },
            1300: {
                items: 3
            }
        }
    });
    $('.owl-histo2').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            900: {
                items: 3
            },
            1300: {
                items: 4
            }
        }
    });

    $('#owl-arco').owlCarousel({
        loop: true,
        margin: 12,
        nav: true,
        responsiveClass: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            740: {
                items: 1,
                nav: true

            },
            1000: {
                items: 1,
                nav: true
            }
        }
    })
    $('#owl-arco2').owlCarousel({
        loop: true,
        margin: 12,
        nav: true,
        responsiveClass: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            740: {
                items: 1,
                nav: true,

            },
            1000: {
                items: 1,
                nav: true,
                loop: true
            }
        }

    })

    $('#owl-arco3').owlCarousel({
        loop: true,
        margin: 12,
        responsiveClass: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            740: {
                items: 1,
                nav: true
            },
            1000: {
                items: 1,
                nav: true,
                loop: true
            }
        }

    })

    $('#owl4').owlCarousel({
        loop: true,
        margin: 12,
        responsiveClass: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
            },
            740: {
                items: 1,
                nav: true,
                loop: true
            },
            1000: {
                items: 1,
                nav: true,
                loop: true
            }
        }
    })
});