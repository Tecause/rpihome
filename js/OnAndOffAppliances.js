$(document).ready(function($) {

	$("#contentHolder").delegate('.digitalSwitch .switch input', 'click', function(event) {
		var name = $(this).attr("name");
		var appID = $(this).parent().siblings('#appID').val();
		// $.notify(name, {position: "top center", className: "success"});

		$.post('./php/OnAndOffAppliance.php', {data: name, appId: appID}, function(data) {
		 	 location.reload();
		});
	});


	$("#contentHolder").delegate('#btnAddAppliance', 'click', function(event) {
		// $.notify("YOU CLICKED ME!", {position: "top center", className: "success"});
	});


});