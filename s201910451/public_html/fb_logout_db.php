<!DOCTYPE html>
<html>
	<head>
		<title>김건우(201910451)의 miniFacebook</title>
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<link rel="stylesheet" type="text/css" href="./css/fb_style.css"/>
		<link rel="stylesheet" type="text/css" href="./css/fb_menu.css"/>
		<script>
			function updatemenu() {
				if (document.getElementById('responsive-menu').checked == true) {
					document.getElementById('menu').style.borderBottomRightRadius = '0';
					document.getElementById('menu').style.borderBottomLeftRadius = '0';
					}else{
					document.getElementById('menu').style.borderRadius = '5px';
				}
			}
		</script>
	</head>
	<body>
		<?php
			require("fb_header_db.inc");
		?>
		<?php
		if(isset($_POST['logout'])) {
			$user_logout = $_POST['logout'];
			
			if($user_logout == "true") {
				session_start();
				session_unset();
				session_destroy();
				header("Location:fb_guest_home_db.php");
			} else {
				session_start();
				header("Location:fb_home_db.php");
			}
		}
		?>
		<div id="content_login_process">
			<form method="post" action="" name="logout">
				<p>로그아웃 하시겠습니까?</p>
				<input name="logout" value="true" type="submit">
				<input name="logout" value="false" type="submit">
			</form>
		</div>
		<?php
			require("fb_footer_db.inc");
		?>
	</div>
</body>
</html>