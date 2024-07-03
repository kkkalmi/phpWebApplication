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
				require("fb_header_guest_db.inc");
			?>
			<div id="content_register_process">
				<!--
				이름 : 김건우(201910451)
				날짜 : 2024-06-11
				내용 : 운동기록 프로세스
				-->
				<?php
				require "db_config.inc";
				$active_name = $_POST['activity_name'];
				$activity_type = $_POST['activity_type'];
				$activity_start = $_POST['activity_start'];
				$activity_end = $_POST['activity_end'];
				$activity_spot = $_POST['activity_spot'];
				$activity_difficult = $_POST['activity_difficult'];
				$activity_memo = $_POST['activity_memo'];

				
				$query = "insert into final_201910451 (active_name, active_type, active_start, active_end, active_spot, active_difficult, active_memo) values ('$active_name', '$activity_type', '$activity_start', '$activity_end', '$activity_spot', '$activity_difficult', '$activity_memo')";
				
				$result = mysqli_query($db, $query);
				
				$select_query = "select count(*) from final_201910451";
				
				$result2 = mysqli_query($db, $select_query);
				
				$user_info = mysqli_fetch_row($result2);
				
				mysqli_close($db);
				
				echo <<<EOD
					<p>운동등록에 성공하였습니다.</p>
					<p>현재 등록된 운동 개수는 {$user_info[0]} 입니다.</p>
				EOD;
				?>
			</div>
			<?php
				require("fb_footer_db.inc");
			?>
		</div>
	</body>
</html>