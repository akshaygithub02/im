<?php
	include('config.php');
 	if ($conn->connect_error){
 		die("Connection failed: " . $conn->connect_error);
	}

	$code = $_GET["code"];
	echo $code;

?>