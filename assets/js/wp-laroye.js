jQuery(document).ready(function ($) {
    $.noConflict();
    console.log("jQuery is still working!", $);

    $('.slick-js').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        adaptiveHeight: true,
        autoplay: true,
        centerMode: false,   
    });

     $('.slick-js-person').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        adaptiveHeight: true,
        autoplay: true,
        centerMode: false,   
    });
});
