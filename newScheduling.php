<link rel="stylesheet" href="./JqueryClock/bootstrap-clockpicker.min.css">
<link rel="stylesheet" href="./JqueryClock/jquery-clockpicker.min.css">

<script src="./JqueryClock/bootstrap-clockpicker.min.js"></script>
<script src="./JqueryClock/jquery-clockpicker.min.js"></script>

<script src="./js/SchedulingNavigation.js"></script>


<center><div id="SchedulingPage" class="mt-xl-5 mx-auto" style="max-width: 80%">


	<div class="w-100">
		<div class="w-50">
			<h3 class="font-weight-bold w-25">Choose Template:</h3>
			<div class="form-group">


			<select class="form-control" id="templateList">

			</select>

		</div>

<!-- TIME -->
		<div class="input-group clockpicker">
			<h4>Schedule Time:</h4>
		    <input id="onTime" type="text" class="form-control ml-3" value="09:30">
		    <span class="input-group-addon">
		        <span class="glyphicon glyphicon-time"></span>
		    </span>
		</div>
		<br>
<!-- ==================== -->


			<div class="btn-group">
				
				<input type="button" class="btn btn-sm border-primary btn-outline-primary" value="Sunday">
				<input type="button" class="btn btn-sm border-primary btn-outline-primary" value="Monday">
				<input type="button" class="btn btn-sm border-primary btn-outline-primary" value="Tuesday">
				<input type="button" class="btn btn-sm border-primary btn-outline-primary" value="Wednesday">
				<input type="button" class="btn btn-sm border-primary btn-outline-primary" value="Thursday">
				<input type="button" class="btn btn-sm border-primary btn-outline-primary" value="Friday">
				<input type="button" class="btn btn-sm border-primary btn-outline-primary " value="Saturday">

			</div>
		
		

			<div><br>
				<input id="btnSaveSchedule" type="button" class="btn btn-success text-white btn-lg w-25" value="Save!"><br>
				<input id="btnDeleteSchedule" type="button" class="btn btn-danger text-white btn-lg w-25 mt-2" data-toggle="modal" data-target="#deleteschedule" value="Delete Schedule">
			</div>

		</div>


	</div>
</div></center>



<div class="modal fade" id="deleteschedule">
	<div class="modal-dialog modal-dialog-centered modal-lg w-100">
		<div class="modal-content w-100">


				<div class="modal-header">
					<h4 class="modal-title">Delete Schedule</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				
				<div class="modal-body">
					<div class="container">
						<form action="newSchedule.php">
							
							  <div class="list-group">
							    <a href="#" class="list-group-item list-group-item-action list-group-item-danger mb-1" data-toggle="modal" data-target="#option"></a>
							    <a href="#" class="list-group-item list-group-item-action list-group-item-danger mb-1" data-toggle="modal" data-target="#option"></a>
							    <a href="#" class="list-group-item list-group-item-action list-group-item-danger mb-1" data-toggle="modal" data-target="#option"></a>
							    <a href="#" class="list-group-item list-group-item-action list-group-item-danger mb-1" data-toggle="modal" data-target="#option"></a>
							    
							  </div>
						
					</form>
				</div>
			</div>
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