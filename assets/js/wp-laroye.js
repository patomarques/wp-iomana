jQuery(document).ready(function ($) {
    $.noConflict();
    console.log("jQuery is still working!", $);

    $('.slick-js').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        adaptiveHeight: true,
        autoplay: true,
        centerMode: false,   
    });
});
