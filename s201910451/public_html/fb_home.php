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
		<div id="content_home">
			<table
			style="text-align: left; width: 726px; height: 235px; margin-left: auto; margin-right: auto;"
			border="1" cellpadding="2" cellspacing="2">
				<tbody>
					<tr>
						<td style="vertical-align: top; width: 487px;">
							<img style="width: 477px; height: 216px;" alt="날씨" src="./image/weather.jpg"><br>
						</td>
						<td style="vertical-align: top; width: 219px;">
							<img style="width: 206px; height: 216px;" alt="시계" src="./image/clock.jpg"><br>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div id="footer" style="text-align: center;">
			<p>COPYLEFT ALL WRONGS RESERVED. Geoun Woo Kim</p>
			<p>Contact. 010-1234-5678</p>
		</div>
	</div>
</body>
</html>
