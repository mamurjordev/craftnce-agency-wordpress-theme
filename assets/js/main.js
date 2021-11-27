$(document).ready(function(){
    // Testimonial Carousel
    $('.testimonial-active').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        centerMode: true,
        fade: true,
        dots: false,
        asNavFor: '.testimonial-nav'
    });
    $('.testimonial-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.testimonial-active',
        dots: false,
        arrows: true,
        autoplay:true,
        centerMode: true,
        focusOnSelect: true,
        centerPadding: 0,
        prevArrow: '.prev',
        nextArrow: '.next'
    });

    $('.testimonial-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.testimonial-active',
        dots: false,
        arrows: true,
        autoplay:true,
        centerMode: true,
        focusOnSelect: true,
        centerPadding: 0,
        prevArrow: '.prev',
        nextArrow: '.next'
    });

    $('.brand').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 2,
        responsive: [
            {
                breakpoint: 1324,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 1024,
                settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                slidesToShow: 2,
                slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                slidesToShow: 2,
                slidesToScroll: 1
                }
            }
        ]
    });
});