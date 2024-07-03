<!DOCTYPE html>
<html>
<!--
이름 : 김건우(201910451)
날짜 : 2024-04-06
내용 : CRUD 방명록 화면
-->
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
			session_start();
			if( !isset($_SESSION['loggedIn']) ) {
				require("fb_header_guest_db.inc");
			} else {
				require("fb_header_db.inc");
			}
		?>
			<div id="content_guestbook">
				<iframe src="http://users.smartgb.com/g/g.php?a=s&i=g19-01247-97" frameborder="0" width="100%" height="500px"></iframe>
			</div>
			<?php
				require("fb_footer_db.inc");
			?>
		</div>
	</body>
</html>