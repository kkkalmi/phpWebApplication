<!DOCTYPE html>
<html>
	<!--
		이름 : 김건우(201910451)
		날짜 : 2024-05-10
		내용 : 회원 탈퇴 화면
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
			require("session_correct.inc");
		?>
		<?php
			require("fb_header_db.inc");
		?>
		<?php
			if(isset($_POST['delete_email'])) {
					require "db_config.inc";
					
					$delete_email = $_POST['delete_email'];
					$delete_pwd = $_POST['delete_password'];
					
					$query = "select * from fb_201910451 where email like '".$_POST["delete_email"]."'";
					
					$result = mysqli_query($db, $query);
					
					while($row = mysqli_fetch_array($result)) {
						if($delete_email == $row['email'] && $delete_pwd == $row["password"]) {
							$delete_query = "DELETE FROM fb_201910451 WHERE email = '".$_POST['delete_email']."' ";
							$delete_result = mysqli_query($db, $delete_query);
							mysqli_close($db);
							echo "<div>".$row['name']."의 정보가 삭제되었습니다.";
						} else {
							echo "잘못 입력된 정보가 존재합니다.";
						}
					}
				}
		?>
		<div id="content_login">
			<form method="post" action="" name="delete">
				<br>
				<table style="text-align: left; width: 250px; height: 153px; margin-left: auto; margin-right: auto;" border="1" cellpadding="2" cellspacing="2">
					<tbody>
						<tr>
							<td style="vertical-align: top;">
								<input maxlength="20" size="25" name="delete_email" placeholder = "이메일주소" autofocus required type="email"><br><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<input maxlength="30" size="25" name="delete_password" placeholder = "비밀번호" required type="password"><br><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<input name="submit" value="회원탈퇴" type="submit"><br>
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