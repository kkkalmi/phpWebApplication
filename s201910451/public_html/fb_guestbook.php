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
			<div id="content_guestbook">
				<iframe src="http://users.smartgb.com/g/g.php?a=s&i=g19-01247-97" frameborder="0" width="100%" height="500px"></iframe>
			</div>
			<div id="footer" style="text-align: center;">
				<p>COPYLEFT ALL WRONGS RESERVED. Geoun Woo Kim</p>
				<p>Contact. 010-1234-5678</p>
			</div>
		</div>
	</body>
</html>