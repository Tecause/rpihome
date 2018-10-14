$(document).ready(function($) {
	
	$("#templateList").change(function(event) {

		 $("#templateContent").load('./php/LoadTemplate.php', {templateName: $(this).val()});

	});

	$("#ActivateTemplate").click(function(event) {
		$.post('./php/ActivateTemplate.php', {templateName: $(this).val()}, function(data) {
			$.notify("Template " + $(this).val() + " Activated!", {position: "top center", className: "success"});
		});
	});

});