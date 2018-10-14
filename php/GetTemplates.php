<?php  

	include './db.php';

	if (isset($_POST)) {
		$templateList = array();

		$sql = "SELECT templateName FROM templates ORDER BY templateID";
		$result = mysqli_query($db,$sql);

		if ($result) {
			while ($data = mysqli_fetch_assoc($result)) {

				array_push($templateList, "<option>".$data['templateName']."</option>");

			}
		}

		echo json_encode($templateList);
	}

?>