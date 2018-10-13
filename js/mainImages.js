$(document).ready(function($) {

	$(".imgDiv img").on('mouseenter mouseleave', function(event) {
		$(this).siblings('.applianceOptions').toggle();
	});
	

});