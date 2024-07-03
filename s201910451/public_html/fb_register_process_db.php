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
			<?php
				require("fb_header_db.inc");
			?>
			<div id="content_register_process">
				<!--
				이름 : 김건우(201910451)
				날짜 : 2024-05-28
				내용 : 회원가입 정보 출력
				-->
				<?php
				require "db_config.inc";
				$user_name = $_POST['register_name'];
				$user_email = $_POST['register_email'];
				$user_password = $_POST['register_password'];
				
				$year = $_POST['register_year'];
				$month = $_POST['register_month'];
				$day = $_POST['register_day'];
				
				$user_birth = $year . '-' . $month . '-' . $day;
				
				$user_gender = $_POST['register_gender'];
				$user_phone = $_POST['register_tel'];
				$user_address = $_POST['register_address'];
				$user_status = $_POST['reigster_marriage'];
				$user_memo = $_POST['register_introduce'];
				
				$query = "insert into fb_201910451 (name, email, password, birth_date, gender, phone, address, status, memo) values ('$user_name', '$user_email', '$user_password', '$user_birth', '$user_gender', '$user_phone', '$user_address', '$user_status', '$user_memo')";
				
				$result = mysqli_query($db, $query);
				
				mysqli_close($db);
				
				echo <<<EOD
					{$user_name}님 회원가입에 성공하였습니다.
				EOD;
				?>
			</div>
			<?php
				require("fb_footer_db.inc");
			?>
		</div>
	</body>
</html>