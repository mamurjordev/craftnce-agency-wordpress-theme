$(document).ready(function () {
	// Portfolio Filter
	$('.filter-btn').click(function () {
		const data_attr = $(this).attr('data-filter');

		if (data_attr == 'all') {
			$('.portfo-box').show('1000')
		} else {
			$('.portfo-box').not('.'+data_attr).hide('1000');
			$('.portfo-box').filter('.'+data_attr).show('1000');
		}
	});

	$('.filter-btn').click(function () {
		$(this).addClass('filter-active').siblings().removeClass('filter-active');
	});
});

$('#video').on('show.bs.modal', function (e) {
	$(e.relatedTarget).data('id');
	$('#video .modal-body').html('<iframe class="video-info" src="https://www.youtube.com/embed/8evDJtPFTp0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
});

$('#video').on('hidden.bs.modal', function () {
	$('#video .modal-body').empty();
});

// AOS Init
AOS.init({
	duration: 1000,
});