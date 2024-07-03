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
				
				$user_email = $_POST['update_email'];
				
				$select_query = "select * from fb_201910451 where email = '$user_email'";
				
				$result = mysqli_query($db, $select_query);
				
				$user_info = mysqli_fetch_array($result);
				
				$member_number = $user_info['member_number'];
				
				$user_name = $_POST['update_name'];
				$user_password = $_POST['update_password'];
				
				$year = $_POST['update_year'];
				$month = $_POST['update_month'];
				$day = $_POST['update_day'];
				
				$user_birth = $year . '-' . $month . '-' . $day;
				
				$user_gender = $_POST['update_gender'];
				$user_phone = $_POST['update_tel'];
				$user_address = $_POST['update_address'];
				$user_status = $_POST['update_marriage'];
				$user_memo = $_POST['update_introduce'];
				
				$query = "update fb_201910451 set name = '$user_name', email = '$user_email', password = '$user_password', birth_date = '$user_birth', gender = '$user_gender', phone ='$user_phone' , address = '$user_address', status = '$user_status', memo = '$user_memo' where member_number = '$member_number' "; 
				
				$result2 = mysqli_query($db, $query);
				
				mysqli_close($db);
				
				echo <<<EOD
					{$user_name}님 회원수정에 성공하였습니다.
				EOD;
				?>
			</div>
			<?php
				require("fb_footer_db.inc");
			?>
		</div>
	</body>
</html>