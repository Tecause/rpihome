$(document).ready(function($) {
	
	$("#templateList").change(function(event) {

		 $("#templateContent").load('./php/LoadTemplate.php', {templateName: $(this).val()});

	});

	$("#ActivateTemplate").click(function(event) {

		var name = $("#templateList").val();

		$.post('./php/ActivateTemplate.php', {templateName: name}, function(data) {
			
			$.notify("Template " + name + " Activated!", {position: "top center", className: "success"});
			
		});

	});

});
