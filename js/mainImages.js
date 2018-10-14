$(document).ready(function($) {

	// $("#contentHolder").load('./php/Appliances.php');


	$(".imgDiv #applianceImg").on('mouseenter mouseleave', function(event) {
		$(this).find('.applianceOptions').toggle();
	});

	$(".modal-body label").change(function(event) {
		$(".modal-body label").removeClass('bg-gray');
		$(this).addClass('bg-gray');
	});

	$(".iconButton i").on('click', function(even) {
		$("#applianceProcess").val("add");

		clearModal();

		$.post('./php/GetAvailableChannels.php', function(data) {
			var _data = JSON.parse(data);

			$("#addAppliance select").find('option').remove();
			for(var i = 0; i < _data.length; i++) {
				$("#addAppliance select").append('<option>'+ _data[i] +'</option>');
			}
		});

	});

	$("#saveAddAppliance").on('click', function(event) {
		
		var _appID = $("#applianceID").val();
		var _pic = $("input[name='appPic[]']:checked").val();
		var _name = $("#addApplianceName").val();
		var _location = $("#addApplianceLocation").val();
		var _wattage = $("#addApplianceWattage").val();
		var _channel = $("#addApplianceChannel").val();
		
		if ($("#applianceProcess").val() == "add") {
			$.post('./php/AddAppliance.php', {pic: _pic, name: _name, location: _location, wattage: _wattage, channel: _channel}, function(data) {
				$.notify("Appliance Successfully Added!", {position: "top center", className: "success"});

				setTimeout(function() {
					location.reload();
				}, 1000);
				
			});


		} 
		else if ($("#applianceProcess").val() == "edit"){
			$.post('./php/UpdateAppliance.php', {appID: _appID, pic: _pic, name: _name, location: _location, wattage: _wattage, channel: _channel}, function(data) {
				$.notify("Appliance Successfully Updated!", {position: "top center", className: "success"});

				setTimeout(function() {
					location.reload();
				}, 1000);
			});
		}
		

	});

	$("#edit i").on('click', function(event) {

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

			$.post('./php/GetAvailableChannels.php', function(data) {
				var _data = JSON.parse(data);
	
				for(var i = 0; i < _data.length; i++) {
					$("#addAppliance select").append('<option>'+ _data[i] +'</option>');
				}
			});

			$("#appliancePicture img").each(function(i, obj) {
				if ($(this).attr('src') == _data["appPic"]) {
					$(this).click();
				}
			});

		});
	});

	$("#delete i").on('click', function(event) {
		var ID = $(this).parent().parent().parent().siblings('#appID').val();
		
		$.post('./php/DeleteAppliance.php', {appID: ID}, function(data) {
			$.notify("Deleted Successfully!", {position: "top center", className: "success"});
			 
			location.reload();
		});
	});

	function clearModal() {

		$("#applianceID").val('');
		$("#addApplianceName").val('');
		$("#addApplianceLocation").val('');
		$("#addApplianceWattage").val('');
	}


});