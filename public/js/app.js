$(window).scroll(function () {
    if ($(document).scrollTop() > 0) {
        $('nav').addClass('shrink');
    } else {
        $('nav').removeClass('shrink');
    }
    if ($(document).scrollTop() > 0) {
        $('a.navbar-brand > img').addClass('shrink2');
    } else {
        $('a.navbar-brand > img').removeClass('shrink2');
    }
});