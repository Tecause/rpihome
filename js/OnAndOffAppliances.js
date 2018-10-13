$(document).ready(function($) {
	$("#contentHolder").load("./php/Appliances.php");

	$("#contentHolder").delegate('.switch input', 'click', function(event) {
		var name = $(this).attr("name");
		$.notify(name, {position: "top center", className: "success"});

		$.post('./php/OnAndOffAppliance.php', {data: name}, function(data) {
		 	 $("#contentHolder").load("./php/Appliances.php");
		});
	});


});