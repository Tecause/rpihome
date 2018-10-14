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
			var newSettings = $("#templateSettings").val();			

			$("#templateContent .switch input").each(function(index, el) {

				var num = $(this).attr('name').match(/\d+/) - 1;
				// alert(oldSettings.replaceAt(num, "1"));

				if ($(this).is(":checked")) {
					newSettings = newSettings.replaceAt(num, "1");

				}
				else {
					newSettings = newSettings.replaceAt(num, "0");
				}

			});

			$.post('./php/UpdateTemplate.php', {settings: newSettings, templateName: $("#templateList").val()}, function(data) {
				$.notify("Template Saved!", {position: "top center", className: "success"});
			});
			
		}

	});

	String.prototype.replaceAt=function(index, replacement) {
	    return this.substr(0, index) + replacement+ this.substr(index + replacement.length);
	}

});
