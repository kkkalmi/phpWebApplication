<?php
	session_start();
	if( !isset($_SESSION['loggedIn']) ) {
		header("Location:fb_login_db.php");
	}
?>