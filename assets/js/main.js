$(document).ready(function () {
    $(".slick-center").attr("id","SomeID");
	// Testimonial Carousel
	$(".testimonial-active").slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		centerMode: true,
		autoplaySpeed: 10500,
		fade: true,
		dots: false,
		asNavFor: ".testimonial-nav",
	});
	$(".testimonial-nav").slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: ".testimonial-active",
		dots: false,
		arrows: true,
		autoplay: true,
		centerMode: true,
		autoplaySpeed: 10500,
		focusOnSelect: true,
		centerPadding: 0,
		prevArrow: ".prev",
		nextArrow: ".next",
		
	});

	$(".brand").slick({
		dots: false,
		autoplay: true,
		autoplaySpeed: 2500,
		infinite: true,
		slidesToShow: 6,
		slidesToScroll: 2,
		nextArrow: '',
		prevArrow: '',
		responsive: [
			{
				breakpoint: 1324,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 2,
					infinite: true,
					dots: true,
				},
			},
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: true,
				},
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				},
			},
		],
	});
});

$('#video').on('show.bs.modal', function (e) {
	$(e.relatedTarget).data('id');
	$('#video .modal-body').html('<iframe class="video-info" src="https://www.youtube.com/embed/8evDJtPFTp0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
});

$('#video').on('hidden.bs.modal', function () {
	$('#video .modal-body').empty();
});