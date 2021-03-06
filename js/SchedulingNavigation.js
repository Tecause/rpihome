$(document).ready(function($) {
	
	$("#SchedulingPage .btn-group input").click(function(event) {

		if ($(this).hasClass('selected')) {
			$(this).removeClass('bg-primary')
			$(this).removeClass('selected')
			$(this).removeClass('text-light')
			$(this).addClass('btn-outline-primary');
		}
		else {
			$(this).removeClass('btn-outline-primary')
			$(this).addClass('bg-primary');
			$(this).addClass('text-light');
			$(this).addClass('selected');
		}
		

	});

	$("#btnSaveSchedule").click(function(event) {
		
		var name = $("#SchedulingPage #templateList").val();
		var onTime = getCurrentDate() + " " + $("#SchedulingPage #onTime").val() + ":00";
		var schedule = "";

		$("#SchedulingPage .btn-group input").each(function() {
			if ($(this).hasClass('selected')) {
				schedule += $(this).val() + ",";
			}
		});


		$.post('./php/SaveSchedule.php', {templateName: name, scheduleDay: schedule, timeStart: onTime}, function(data) {

			$.notify("Schedule Saved Successfully!", {position: "top center", className: "success"});

		});

	});

	$("#btnAddSpecificSchedule").on('click', function(event) {

		$.post('./php/GetTemplates.php', function(data) {
			var _data = JSON.parse(data);

			$(".modal-dialog #templateListSpecific").append('<option>Templates...</option>');
			for (var i = 0; i < _data.length; i++) {
				$(".modal-dialog #templateListSpecific").append(_data[i]);
			}

		});

	});

	$("#saveSpecificSchedule").click(function(event) {

		var dateTime = $("#specificDate").val() + " " + $("#specificOnTime").val();

		$.post('./php/SaveSchedule.php', {templateName: $("#templateListSpecific").val(), scheduleDay: "Specific", timeStart: dateTime}, function(data) {

			$.notify("Schedule Saved Successfully!", {position: "top center", className: "success"});

		});
	});


	$("#btnDeleteSchedule").click(function(event) {


		$.post('./php/GetSchedules.php', function(data) {
			var _data = JSON.parse(data);
			
			for (var i = 0; i < _data.length; i++) {

				$("#deleteScheduleList tbody").append('<tr><td id="schedID">'+_data[i]['scheduleID']+'</td><td>'+_data[i]['applianceID']+'</td><td>'+_data[i]['scheduleDay']+'</td><td>'+_data[i]['timeStart']+'</td><td><input type="button" value="X" class="btn btn-danger deleteThis"></td></tr>');
			}
		});

	});


	$("#deleteScheduleList table").delegate('input', 'click', function(event) {

		var tmpID = $(this).parent().siblings('#schedID').html();
		
		$.post('./DeleteSchedule.php', {schedID: tmpID}, function(data) {

			window.location.reload();

		});

	});

	function getCurrentDate() {
		var fullDate = new Date();
		var twoDigitMonth = ((fullDate.getMonth() + 1) >= 10)? (fullDate.getMonth() + 1) : '0' + (fullDate.getMonth() + 1);
		var currentDate = fullDate.getFullYear() + "-" + twoDigitMonth + "-" + fullDate.getDate();

		return currentDate;
	}

});

