$(document).ready(function($) {

	$("#contentHolder").delegate('.switch input', 'click', function(event) {
		var name = $(this).attr("name");
		// $.notify(name, {position: "top center", className: "success"});

		$.post('./php/OnAndOffAppliance.php', {data: name}, function(data) {
		 	 location.reload();
		});
	});


	$("#contentHolder").delegate('#btnAddAppliance', 'click', function(event) {
		// $.notify("YOU CLICKED ME!", {position: "top center", className: "success"});
	});


});