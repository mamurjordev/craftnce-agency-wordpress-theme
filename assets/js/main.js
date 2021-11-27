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