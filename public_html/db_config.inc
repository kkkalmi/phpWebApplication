<?php
	$db = mysqli_connect("localhost", "bizappdb", "k000515!", "bizapp");
	if (mysqli_connect_errno()) { 
		echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
		exit; 
	} 

	mysqli_query($db, "SET NAMES 'utf8'");
	mysqli_query($db, "SET time_zone= '+09:00'");
?>