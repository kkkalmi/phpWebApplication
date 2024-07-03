<!DOCTYPE html>
<html>
<!--
이름 : 김건우(201910451)
날짜 : 2024-04-06
내용 : CRUD 회원 검색 화면
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
		<div id="wrapper">
			<div id="header" style="text-align: center; color: white;">
				<p style="font-weight: bold; font-size:400%">miniFacebook</p><br>
			</div>
			<div id="navigation">
				<nav id='menu'>
					<input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
					<ul>
						<li><a href='fb_home.php'>홈</a></li>
						<li><a href='fb_register.php'>회원가입</a></li>
						<li><a href='fb_search.php'>회원검색</a></li>
						<li><a href='fb_login.php'>로그인</a></li>
						<li><a href='fb_guestbook.php'>방명록</a></li>
					</ul>
				</nav>
			</div>
			<div id="content_search">
				<form method="post" action="fb_search_process.php" name="register">
					<br>
					<table style="text-align: left; width: 300px; height: 128px; margin-left: auto; margin-right: auto;" border="1" cellpadding="2" cellspacing="2">
						<tbody>
							<tr>
								<td style="vertical-align: top;">
								<input maxlength="20" size="25" name="search_name" placeholder = "이름" autofocus required type="text"><br>
								</td>
							</tr>
							<tr>
								<td style="vertical-align: top;">
								<input name="submit" value="검색" type="submit"><br>
								</td>
							</tr>
						</tbody>
					</table>
					<br>
				</form>
			</div>
			<div id="footer" style="text-align: center;">
				<p>COPYLEFT ALL WRONGS RESERVED. Geoun Woo Kim</p>
				<p>Contact. 010-1234-5678</p>
			</div>
		</div>
	</body>
</html>