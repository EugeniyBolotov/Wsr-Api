<?php
	$mysqli = new mysqli('bh8pzn9jfci7qpzb9jo2-mysql.services.clever-cloud.com', 'urnoqaplantssriq', 's2dYOEs9F5acGiqTXVoS', 'wsr_food');
	$mysqli->query("SET NAMES UTF8");

	$query_user = $mysqli->query("select * from `dishes`;");
	$rows = array();
	while($r = mysqli_fetch_assoc($query_user)) {
		$rows[] = $r;
	}
	$json = json_encode($rows, JSON_UNESCAPED_UNICODE);
	echo $json;
?>
