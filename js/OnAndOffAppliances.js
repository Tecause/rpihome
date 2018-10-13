$(document).ready(function($) {
	
	$(".switch input").click(function(event) {
		var name = $(this).attr("name");

		$.notify(name, {position: "top center", className: "success"});

		// $.post('../php/OnAndOffAppliance.php', {data: name}, function(data, textStatus, xhr) {
		// 	alert(1);
		// });
		
	});

});