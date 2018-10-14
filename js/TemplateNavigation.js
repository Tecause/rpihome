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

	$("#EditTemplate").click(function(event) {
		
		if ($(this).val() == "Edit") {
			$(this).val("Save");
		}
		else if ($(this).val() == "Save") {

			$newSettings = "";

			$("#templateContent .switch input").each(function(index, el) {
				
				if ($(this).is(":checked")) {
					$newSettings += "1";
				}
				else {
					$newSettings += "0";
				}

			});

			alert($newSettings);

		}

	});

});
