<script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		
		function checkSchedule() {

			$.post('./newChecker.php', function(data) {
				var _data = JSON.parse(data);

				if (_data == "none") {
					alert(_data);
				}
				else {

					$.post('./php/ActivateTemplate.php', {templateName: _data}, function(data) {
						// TRY
					});

				}
				
			});
		}

		setInterval(checkSchedule, 3000);
	});

</script>