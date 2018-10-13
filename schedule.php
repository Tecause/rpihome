<script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		
		function checkSchedule() {

			$.ajax({
				type: 'POST',
				url: 'checker.php',
				success: function(response) {
					// location.reload();
				}
			});
		}

		setInterval(checkSchedule, 3000);
	});

</script>