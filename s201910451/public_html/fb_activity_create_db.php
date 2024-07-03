<!DOCTYPE html>
<html>
	<!--
		이름 : 김건우(201910451)
		날짜 : 2024-06-11
		내용 : 운동기록 화면
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
			<form method="post" action="fb_activity_create_process_db.php" name="register">
				<br>
				<table style="text-align: left; width: 500px; height: 400px; margin-left: auto; margin-right: auto;" border="1" cellpadding="2" cellspacing="2">
					<tbody>
						<tr>
							<td style="vertical-align: top;">
								<input maxlength="20" size="25" name="activity_name" placeholder = "운동이름" autofocus="" required="" type="text"><br><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<p>운동종류</p>
								<select name="activity_type" required="">
									<option value="walk">걷기</option>
									<option value="swim">수영</option>
									<option value="run">달리기</option>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<p>시작 일시 <input type="datetime-local" name="activity_start"></p>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<p>종료 일시 <input type="datetime-local" name="activity_end"></p>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<input maxlength="20" size="25" name="activity_spot" placeholder = "운동장소" autofocus="" required="" type="text"><br><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<div class="select">
									<p>난이도</p>
									<p><input name="activity_difficult" value="1" type="radio" id="select3" checked><label for="select3">1</label>
									<input name="activity_difficult" value="2" type="radio" id="select4"><label for="select4">2</label>
									<input name="activity_difficult" value="3" type="radio" id="select5" checked><label for="select5">3</label>
									<input name="activity_difficult" value="4" type="radio" id="select6"><label for="select6">4</label>
									<input name="activity_difficult" value="5" type="radio" id="select7" checked><label for="select7">5</label></p>
								</div>
							</td>
						</tr>
						<td style="vertical-align: top;">
							<textarea name="activity_memo" placeholder = "운동설명" rows="10" cols="50"></textarea><br><br>
						</td>
					</tr>
					<tr>
						<td style="vertical-align: top;">
							<input name="submit" value="등록" type="submit"><br>
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