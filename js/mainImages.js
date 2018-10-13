$(document).ready(function($) {

	$(".imgDiv #applianceImg").on('mouseenter mouseleave', function(event) {
		$(this).find('.applianceOptions').toggle();
	});

	$(".modal-body label").change(function(event) {
		$(".modal-body label").removeClass('bg-gray');
		$(this).addClass('bg-gray');
	});

	$(".iconButton i").on('click', function(even) {
		$("#applianceProcess").val("add");

		$.post('./php/GetAvailableChannels.php', function(data) {
			var _data = JSON.parse(data);

			$("#addAppliance select").find('option').remove();
			for(var i = 0; i < _data.length; i++) {
				$("#addAppliance select").append('<option>'+ _data[i] +'</option>');
			}
		});

	});

	$("#saveAddAppliance").on('click', function(event) {
		
		var _pic = $("input[name='appPic[]']:checked").val();
		var _name = $("#addApplianceName").val();
		var _location = $("#addApplianceLocation").val();
		var _wattage = $("#addApplianceWattage").val();
		var _channel = $("#addApplianceChannel").val();

		
		if ($("#applianceProcess").val() == "add") {
			$.post('./php/AddAppliance.php', {pic: _pic, name: _name, location: _location, wattage: _wattage, channel: _channel}, function(data, textStatus, xhr) {
				$.notify("Appliance Successfully Added!", {position: "top center", className: "success"});
			});
		} 
		else {

		}
		

	});

	$(".applianceOptions i").on('click', function(event) {

		var _appId = $(this).parent().parent().parent().siblings('#appID').val();

		$.post('./php/GetAppliance.php', {appID: _appId}, function(data) {
			var _data = JSON.parse(data);

			$("#applianceProcess").val("edit");
			$("#applianceID").val(_data['appID']);
			$("#addApplianceName").val(_data['appName']);
			$("#addApplianceLocation").val(_data['appPlace']);
			$("#addApplianceWattage").val(_data['appWatts']);

			
			$("#addAppliance select").find('option').remove();
			$("#addAppliance select")
			.append('<option>'+ _data['channelNumber'] +'</option>');

		});
	});


});