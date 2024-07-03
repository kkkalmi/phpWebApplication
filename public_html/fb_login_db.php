<!DOCTYPE html>
<html>
	<!--
		이름 : 김건우(201910451)
		날짜 : 2024-04-06
		내용 : CRUD 로그인 화면
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
			require("fb_header_guest_db.inc");
		?>
		<div id="content_login">
			<form method="post" action="fb_login_process_db.php" name="register">
				<br>
				<table style="text-align: left; width: 250px; height: 153px; margin-left: auto; margin-right: auto;" border="1" cellpadding="2" cellspacing="2">
					<tbody>
						<tr>
							<td style="vertical-align: top;">
								<input maxlength="20" size="25" name="login_email" placeholder = "이메일" autofocus required type="email"><br><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<input maxlength="30" size="25" name="login_password" placeholder = "비밀번호" required type="password"><br><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<input name="submit" value="로그인" type="submit"><br>
							</td>
						</tr>
					</tbody>
				</table>
				<br>
			</form>
		</div>
		<?php
			require("fb_footer_db.inc");
		?>
	</div>
</body>
</html>														