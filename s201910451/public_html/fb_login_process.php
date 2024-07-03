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
		<div id="wrapper">
			<div id="header" style="text-align: center; color: white;">
				<p style="font-weight: bold; font-size:400%">miniFacebook</p><br>
			</div>
			<div id="navigation">
				<nav id='menu'>
					<input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
					<ul>
						<li><a href='fb_home.html'>홈</a></li>
						<li><a href='fb_register.html'>회원가입</a></li>
						<li><a href='fb_search.html'>회원검색</a></li>
						<li><a href='fb_login.html'>로그인</a></li>
						<li><a href='fb_guestbook.html'>방명록</a></li>
					</ul>
				</nav>
			</div>
			<div id="content_login_process">
					<!--
					이름 : 김건우(201910451)
					날짜 : 2024-04-06
					내용 : 로그인 정보 출력
					-->
					<?php 
					echo <<<EOD
					<table class = "search_table_style">
						<tbody>
							<tr align="center">
								<td style="vertical-align: top; padding: 10px; background-color: #eee; border : 1px solid black;">회원 정보
								</td>
							</tr>
							<tr align="center">
								<td style="vertical-align: top; padding: 10px; background-color: #eee; border : 1px solid black;">
EOD;
								if ($_POST['login_name']) { 
									echo "".$_POST['login_name']."";
								}
					echo <<<EOD
								</td>
							</tr>
							<tr align="center">
								<td style="vertical-align: top; padding: 10px; background-color: #eee; border : 1px solid black;">
EOD;					
								if ($_POST['login_password']) { 
									echo "".$_POST['login_password']."";
								} 
					echo <<<EOD
								</td>
							</tr>
						</tbody>
					</table>
EOD;
					?>
			</div>
			<div id="footer" style="text-align: center;">
				<p>COPYLEFT ALL WRONGS RESERVED. Geoun Woo Kim</p>
				<p>Contact. 010-1234-5678</p>
			</div>
			</div>
			</body>
			</html>