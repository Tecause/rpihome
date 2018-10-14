$(document).ready(function($) {
	
	$("#templateList").change(function(event) {

		 $("#templateContent").load('./php/LoadTemplate.php', {templateName: $(this).val()});

	});

});