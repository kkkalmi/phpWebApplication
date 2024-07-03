<!DOCTYPE html>
<html>
	<!--
		이름 : 김건우(201910451)
		날짜 : 2024-04-06
		내용 : CRUD 회원가입 화면
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
		<div id="content_register">
			<form method="post" action="fb_register_process_db.php" name="register">
				<br>
				<table style="text-align: left; width: 500px; height: 400px; margin-left: auto; margin-right: auto;" border="1" cellpadding="2" cellspacing="2">
					<tbody>
						<tr>
							<td style="vertical-align: top;">
								<input maxlength="20" size="25" name="register_name" placeholder = "이름" autofocus="" required="" type="text"><br><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<input maxlength="50" size="25" name="register_email" placeholder = "이메일" required="" type="email" type="text"><br><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<input maxlength="30" size="25" name="register_password" placeholder = "비밀번호" required="" type="password"><br><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<input maxlength="30" size="25" name="register_password2" placeholder = "비밀번호 확인" required="" type="password"><br><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">생년월일<br><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<input name="register_year" placeholder="년(4자)" required="" type="number">
								<select name="register_month" required="">
									<option value="">월</option>
									<option value="1">1월</option>
									<option value="2">2월</option>
									<option value="3">3월</option>
									<option value="4">4월</option>
									<option value="5">5월</option>
									<option value="6">6월</option>
									<option value="7">7월</option>
									<option value="8">8월</option>
									<option value="9">9월</option>
									<option value="10">10월</option>
									<option value="11">11월</option>
									<option value="12">12월</option>
								</select>
								<input name="register_day" placeholder="일" required="" type="number"><br><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<div class="select">
									<input name="register_gender" value="남" type="radio" id="select" checked><label for="select">남</label> 
									<input name="register_gender" value="여" type="radio" id="select2"><label for="select2">여</label><br><br>
								</div>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<input name="register_tel" placeholder = "전화번호" size="25" type="text"><br><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<input maxlength="300" size="25" name="register_address" placeholder = "주소" type="text"><br><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<div class="select">
									<input name="reigster_marriage" value="single" type="radio" id="select3" checked><label for="select3">기혼</label>
									<input name="reigster_marriage" value="married" type="radio" id="select4"><label for="select4">미혼</label><br><br>
								</div>
							</td>
						</tr>
						<td style="vertical-align: top;">
							<textarea name="register_introduce" placeholder = "자기소개" rows="10" cols="50"></textarea><br><br>
						</td>
					</tr>
					<tr>
						<td style="vertical-align: top;">
							<input name="submit" value="회원가입" type="submit"><br>
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