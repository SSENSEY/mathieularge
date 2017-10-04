$('.button-menu').on('click', function() {
    if ($('.menu-big').hasClass('active')) {
        $('.menu-big').removeClass('active');
    } else {
        $('.menu-big').addClass('active');
    }
});

$('.button-menu').on('click', function() {
    if ($('.button-menu').hasClass('active')) {
        $('.button-menu').removeClass('active');
    } else {
        $('.button-menu').addClass('active');
    }
});