$(document).ready(function($) {

	$(".imgDiv #applianceImg").on('mouseenter mouseleave', function(event) {
		$(this).find('.applianceOptions').toggle();
	});

	$(".modal-body label").change(function(event) {
		$(".modal-body label").removeClass('bg-gray');
		$(this).addClass('bg-gray');
	});

	$(".iconButton i").on('click', function(even) {

		$.post('./php/GetAvailableChannels.php', function(data) {
			var _data = JSON.parse(data);

			$("#addAppliance select").find('option').remove();
			for(var i = 0; i < _data.length; i++) {
				$("#addAppliance select").append('<option>'+ _data[i] +'</option>');
			}
		});

	});


});