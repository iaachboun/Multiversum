$(document).ready(function () {
    $('.ActieProducten-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.ActieProducten-nav'
    });
    $('.ActieProducten-nav').slick({
        asNavFor: '.ActieProducten-for',
        centerMode: true,
        focusOnSelect: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        dots: true,
        autoplaySpeed: 4000,
        arrows: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false
                }
            },
        ]
    });
    /*$('.slick-prev').html('<i class="fas fa-chevron-left fa-md"></i>');
    $('.slick-next').html('<i class="fas fa-chevron-right fa-md"></i>');*/
});
