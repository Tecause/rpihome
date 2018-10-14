$(document).ready(function($) {

	$("#linkHome").click(function(event) {
		window.location.href = "./newHome.php";
	});
	
	$("#linkTemplates").click(function(event) {
		$("#contentHolder").load("./newTemplatePage.php");

		$.post('./php/GetTemplates.php', function(data) {
			var _data = JSON.parse(data);

			$("#templateList").append('<option>Templates...</option>');
			for (var i = 0; i < _data.length; i++) {
				$("#templateList").append(_data[i]);
			}


		});
	});


});