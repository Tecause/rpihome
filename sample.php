<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sample</title>
	<script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
		

		$(document).ready(function() {
			
			function schedule() {
				$.ajax({
					type: 'POST',
					url: 'checker.php',
					datatype: 'json',	
					success: function(response) {
						/*if (response.update == 'true')
						{
							// location.reload();
							
						}*/
						var x = JSON.parse(response);

						if(x.update == true)
						{
							alert('true');
						}
						else
						{
							alert('false');
						}
					}
				});
			}


			setInterval(schedule, 3000);
		});





	</script>
</head>
<body>
	<h1 id="text">0</h1>
</body>
</html>