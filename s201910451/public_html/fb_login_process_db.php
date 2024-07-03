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
		<div id="content_login_process">
			<!--
				이름 : 김건우(201910451)
				날짜 : 2024-04-06
				내용 : 로그인 정보 출력
			-->
			<?php
					require "db_config.inc";
					
					$email = $_POST['login_email'];
					$pwd = $_POST['login_password'];
					
					session_start();
					$query = "select * from fb_201910451 where email = '".$_POST['login_email']."' and password = '".$_POST['login_password']."' ";
					
					$result = mysqli_query($db, $query);
					
					$user_info = mysqli_fetch_array($result);
					
					if( isset($user_info['name']) ) {
						$_SESSION["loggedIn"] = True;
						$_SESSION["email"] = $email;
						$_SESSION["name"] = $user_info["name"];
						
						header("Location:fb_home_db.php");
					} else {
						$_SESSION["loggedIn"] = False;
						header("Location:fb_login_db.php");
						session_unset();
						session_destroy();
					}
			?>
		</div>
		<?php
			require("fb_footer_db.inc");
		?>
	</div>
</body>
</html>