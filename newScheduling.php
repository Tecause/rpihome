<link rel="stylesheet" href="./JqueryClock/bootstrap-clockpicker.min.css">
<link rel="stylesheet" href="./JqueryClock/jquery-clockpicker.min.css">

<script src="./JqueryClock/bootstrap-clockpicker.min.js"></script>
<script src="./JqueryClock/jquery-clockpicker.min.js"></script>

<script src="./js/SchedulingNavigation.js"></script>


<div id="SchedulingPage" class="mt-xl-5">


	<div>

		<div>
			<h3 class="font-weight-bold">Choose Template:</h3>
			<div class="form-group">


			<select class="form-control" id="templateList">

			</select>

		</div>

<!-- TIME -->
		<div class="input-group clockpicker">
			<h4>On Time:</h4>
		    <input id="onTime" type="text" class="form-control" value="09:30">
		    <span class="input-group-addon">
		        <span class="glyphicon glyphicon-time"></span>
		    </span>
		</div>
<!-- ==================== -->


		<div class="btn-group">
			
			<input type="button" class="btn border-primary btn-outline-primary" value="Sunday">
			<input type="button" class="btn border-primary btn-outline-primary" value="Monday">
			<input type="button" class="btn border-primary btn-outline-primary" value="Tuesday">
			<input type="button" class="btn border-primary btn-outline-primary" value="Wednesday">
			<input type="button" class="btn border-primary btn-outline-primary" value="Thursday">
			<input type="button" class="btn border-primary btn-outline-primary" value="Friday">
			<input type="button" class="btn border-primary btn-outline-primary" value="Saturday">

		</div>

		<div>
			<input id="btnSaveSchedule" type="button" class="btn btn-success text-white" value="Save!">
		</div>

	</div>


</div>

<script type="text/javascript">
	$('.clockpicker').clockpicker({
	    placement: 'bottom',
	    align: 'left',
	    donetext: 'Done'
	});
</script>