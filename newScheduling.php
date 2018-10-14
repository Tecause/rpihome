<link rel="stylesheet" href="./JqueryClock/bootstrap-clockpicker.min.css">
<link rel="stylesheet" href="./JqueryClock/jquery-clockpicker.min.css">

<script src="./JqueryClock/bootstrap-clockpicker.min.js"></script>
<script src="./JqueryClock/jquery-clockpicker.min.js"></script>


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
		    <input type="text" class="form-control" value="09:30">
		    <span class="input-group-addon">
		        <span class="glyphicon glyphicon-time"></span>
		    </span>
		</div>

		<div class="input-group clockpicker">
			<h4>Off Time:</h4>
		    <input type="text" class="form-control" value="09:30">
		    <span class="input-group-addon">
		        <span class="glyphicon glyphicon-time"></span>
		    </span>
		</div>
		
<!-- ==================== -->

	</div>


</div>

<script type="text/javascript">
	$('.clockpicker').clockpicker({
	    placement: 'bottom',
	    align: 'left',
	    donetext: 'Done'
	});
</script>