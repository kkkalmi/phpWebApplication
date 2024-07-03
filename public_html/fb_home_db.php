<!DOCTYPE html
<html>
<!--
	이름 : 김건우(201910451)
	날짜 : 2024-04-06
	내용 : CRUD 홈 화면
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
				document.getElementById('menu').style.borderRadius = '8px';
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
	<div id="content_home">
		<table
		style="text-align: left; width: 500px; height: 405px; margin-left: auto; margin-right: auto;"
		border="1" cellpadding="2" cellspacing="2">
			<tbody>
				<tr>
					<td style="vertical-align: center; width: 487px;">
						<img style="width: 600px; height: 400px;" alt="홈화면" src="./image/HomeImage.jpg"><br>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<?php
		require("fb_footer_db.inc");
	?>
</body>
</html>
