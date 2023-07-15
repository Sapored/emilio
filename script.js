$(function() {
    $(document).scroll(function() {
        var $nav = $(".navbar-fixed-top");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
});

/* Animacion de la flechita del inicio */
$(function() {
    $(".indicator a").on('click', function() {
        $("html, body").animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });
});

$(function() {
    $(".scrol a").on('click', function() {
        $("html, body").animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });
});

$(function() {
    $(".boton").on('click', function() {
        $("html, body").animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });
});

function myFunction(x) {
    x.classList.toggle("change");
}

function leftNav() {
    navSize = document.getElementById("sidebar").style.left;
    if (navSize == '0px') {
        return closeNav();
    }
    return openNav();
}

function openLan() {
    document.getElementById('nav-contact').style.display = "none";
    document.getElementById('lanNew').style.display = "block";
}

function closeLan() {
    document.getElementById('nav-contact').style.display = "block";
    document.getElementById('lanNew').style.display = "none";
}

function openNav() {
    document.getElementById("sidebar").style.left = "0px";
    document.getElementsByTagName('body')[0].style.overflowY = 'hidden';
    $('#sidebarBlur').fadeIn();
    openLan();
}

function closeNav() {
    document.getElementById("sidebar").style.left = "-100%";
    document.getElementsByTagName('body')[0].style.overflowY = 'visible';
    $('#sidebarBlur').fadeOut();
    closeLan();
}


function clickBlur() {
    document.getElementById("sidebar").style.left = "-100%";
    document.getElementsByTagName('body')[0].style.overflowY = 'visible';
    document.getElementById('dropdown').classList.toggle("change");
    $('#sidebarBlur').fadeOut();
    closeLan();
}

$(document).ready(function() {
    $('.owl-sof').owlCarousel({
        items: 1,
        loop: true,
        lazyLoad: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        dots: true,
    });
    $('.owl-kiosk').owlCarousel({
        items: 1,
        loop: true,
        lazyLoad: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        dots: true,
    });
    $('.owl-flotas').owlCarousel({
        items: 1,
        loop: true,
        lazyLoad: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        dots: true,
    });
    $('.owl-arcos').owlCarousel({
        items: 1,
        loop: true,
        lazyLoad: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        dots: true,
    });
    $('#ofre1').owlCarousel({
        items: 1,
        lazyLoad: true,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: false,
        dots: true,
    });
    $('#ofre2').owlCarousel({
        items: 1,
        lazyLoad: true,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: false,
        dots: true,
    });
    $('#ofre3').owlCarousel({
        items: 1,
        lazyLoad: true,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: false,
        dots: true,
    });
    $('#ofre4').owlCarousel({
        items: 1,
        lazyLoad: true,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: false,
        dots: true,
    });
});

function solution(sol) {
    localStorage.setItem("SOLUTION", sol);
    console.log(sol);
}


// Consumiendo webservices
function postRequest() {
    axios.get('http://34.68.94.2:3100/test', {
            headers: {
                'Content-Type': 'application/json',
            }
        })
        .then(function(response) {
            console.log(response);
        })
        .catch(function(error) {
            console.log(error);
        })
        .then(function() {});
}

postRequest()