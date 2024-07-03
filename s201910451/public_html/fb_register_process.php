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
			<div id="content_register_process">
				<!--
				이름 : 김건우(201910451)
				날짜 : 2024-04-06
				내용 : 회원가입 정보 출력
				-->
				<?php echo <<<EOD
				<table style="text-align: left; width: 564px; height: 274px; margin-left: auto; margin-right: auto;" border="1" cellpadding="2" cellspacing="2">
					<tbody>
						<tr>
							<td colspan="2" rowspan="1" style="border: 1px solid black; padding: 10px; vertical-align: top; width: 363px; background-color: rgb(238, 238, 238); text-align: center;">회원가입 결과<br>
							</td>
						</tr>
						<tr>
							<td style="border: 1px solid black; padding: 10px; vertical-align: top; width: 181px; background-color: rgb(238, 238, 238);">이름<br>
							</td>
							<td style="border: 1px solid black; padding: 10px; vertical-align: top; width: 363px; background-color: rgb(238, 238, 238);">
EOD;
								if ($_POST['register_name']) { 
								echo "".$_POST['register_name']."";
								}
								echo <<<EOD
								<br>
							</td>
						</tr>
						<tr>
							<td style="border: 1px solid black; padding: 10px; vertical-align: top; width: 181px; background-color: rgb(238, 238, 238);">이메일<br>
							</td>
							<td style="border: 1px solid black; padding: 10px; vertical-align: top; width: 363px; background-color: rgb(238, 238, 238);">
EOD;
								if ($_POST['register_email']) { 
								echo "".$_POST['register_email']."";
								}
								echo <<<EOD
								<br>
							</td>
						</tr>
						<tr>
							<td style="border: 1px solid black; padding: 10px; vertical-align: top; width: 181px; background-color: rgb(238, 238, 238);">비밀번호<br>
							</td>
							<td style="border: 1px solid black; padding: 10px; vertical-align: top; width: 363px; background-color: rgb(238, 238, 238);">
EOD;
								if ($_POST['register_password']) { 
								echo "".$_POST['register_password']."";
								}
								echo <<<EOD
								<br>
							</td>
						</tr>
						<tr>
							<td style="border: 1px solid black; padding: 10px; vertical-align: top; width: 181px; background-color: rgb(238, 238, 238);">태어난 년도<br>
							</td>
							<td style="border: 1px solid black; padding: 10px; vertical-align: top; width: 363px; background-color: rgb(238, 238, 238);">
EOD;
								if ($_POST['register_year']) { 
								echo "".$_POST['register_year']."";
								}
								echo <<<EOD
								<br>
							</td>
						</tr>
						<tr>
							<td style="border: 1px solid black; padding: 10px; vertical-align: top; width: 181px; background-color: rgb(238, 238, 238);">태어난 월<br>
							</td>
							<td style="border: 1px solid black; padding: 10px; vertical-align: top; width: 363px; background-color: rgb(238, 238, 238);">
EOD;
								if ($_POST['register_month']) { 
								echo "".$_POST['register_month']."";
								}
								echo <<<EOD
								<br>
							</td>
						</tr>
						<tr>
							<td style="border: 1px solid black; padding: 10px; vertical-align: top; background-color: rgb(238, 238, 238);">태어난 일자<br>
							</td>
							<td style="border: 1px solid black; padding: 10px; vertical-align: top; background-color: rgb(238, 238, 238);">
EOD;
								if ($_POST['register_day']) { 
								echo "".$_POST['register_day']."";
								}
								echo <<<EOD
								<br>
							</td>
						</tr>
						<tr>
							<td style="border: 1px solid black; padding: 10px; vertical-align: top; background-color: rgb(238, 238, 238);">성별<br>
							</td>
							<td style="border: 1px solid black; padding: 10px; vertical-align: top; background-color: rgb(238, 238, 238);">
EOD;
								if ($_POST['register_gender']) { 
								echo "".$_POST['register_gender']."";
								}
								echo <<<EOD
								<br>
							</td>
						</tr>
						<tr>
							<td style="border: 1px solid black; padding: 10px; vertical-align: top; background-color: rgb(238, 238, 238);">전화번호<br>
							</td>
							<td style="border: 1px solid black; padding: 10px; vertical-align: top; background-color: rgb(238, 238, 238);">
EOD;
								if ($_POST['register_tel']) { 
								echo "".$_POST['register_tel']."";
								}
								echo <<<EOD
								<br>
							</td>
						</tr>
						<tr>
							<td style="border: 1px solid black; padding: 10px; vertical-align: top; background-color: rgb(238, 238, 238);">주소<br>
							</td>
							<td style="border: 1px solid black; padding: 10px; vertical-align: top; background-color: rgb(238, 238, 238);">
EOD;
								if ($_POST['register_address']) { 
								echo "".$_POST['register_address']."";
								}
								echo <<<EOD
								<br>
							</td>
						</tr>
						<tr>
							<td style="border: 1px solid black; padding: 10px; vertical-align: top; background-color: rgb(238, 238, 238);">혼인여부<br>
							</td>
							<td style="border: 1px solid black; padding: 10px; vertical-align: top; background-color: rgb(238, 238, 238);">
EOD;
								if ($_POST['reigster_marriage']) { 
								echo "".$_POST['reigster_marriage']."";
								}
								echo <<<EOD
								<br>
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