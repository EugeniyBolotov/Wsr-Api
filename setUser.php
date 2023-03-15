<?php
	$mysqli = new mysqli('bh8pzn9jfci7qpzb9jo2-mysql.services.clever-cloud.com', 'urnoqaplantssriq', 'urnoqaplantssriq', 'wsr_food');
	$mysqli->query("SET NAMES UTF8");

	$email = $_GET['email'];
	$password = $_GET['password'];
	$query_user = $mysqli->query("select * from `Users` where email = '".$email."';");
	
	if($user_read = $query_user->fetch_row()) {
		echo "400";
	} else {
		$query_user = $mysqli->query("insert into `Users` (surname, name, patronymic, email, password) values ('".$email."', '".$password."');");
	    echo "200";
	}
?>