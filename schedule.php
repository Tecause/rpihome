
<h1>
	<span id="currentTime">TIME</span>
</h1>
<h1>
	<span id="templateName">TRY</span>
</h1>

<script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		
		function checkSchedule() {
			var dt = new Date($.now());
			var hours = ((dt.getHours().toString().length === 1)? "0" + dt.getHours(): dt.getHours());
			var minutes = ((dt.getMinutes().toString().length === 1)? "0" + dt.getMinutes(): dt.getMinutes());
			var seconds = ((dt.getSeconds().toString().length === 1)? "0" + dt.getSeconds(): dt.getSeconds());
			
			$("#currentTime").text(hours + ":" + minutes + ":" + seconds);

			$.post('./newChecker.php', function(data) {

				var _data = JSON.parse(data);

				// alert(_data);

				if (_data == "none") {
					
					$("#templateName").text(_data);

				}
				else {

					$.post('./php/ActivateTemplate.php', {templateName: _data}, function(data) {
						
						$("#templateName").text(_data);

					});

				}
				
			});
		}

		setInterval(checkSchedule, 1000);
	});

</script>

