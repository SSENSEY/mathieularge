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

// Wrap every letter in a span
$('.ml12').each(function(){
    $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});

anime.timeline({loop: true})
    .add({
        targets: '.ml12 .letter',
        translateX: [40,0],
        translateZ: 0,
        opacity: [0,1],
        easing: "easeOutExpo",
        duration: 1200,
        delay: function(el, i) {
            return 500 + 30 * i;
        }
    }).add({
    targets: '.ml12 .letter',
    translateX: [0,-30],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 1100,
    delay: function(el, i) {
        return 100 + 30 * i;
    }
});

$(window).load(function () {
    //  isotope
    var $container = $('.portfolio_container');
    $container.isotope({
        filter: '*',
    });

    $('.portfolio_filter a').click(function () {
        $('.portfolio_filter .active').removeClass('active');
        $(this).addClass('active');

        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 500,
                animationEngine: "jquery"
            }
        });
        return false;
    });
});