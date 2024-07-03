<?php
	session_start();
	if( isset($_SESSION['loggedIn']) == False ) {
		header("Location:fb_login_db.php");
	}
?>