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
		<div id="content_search_process">
			<!--
				이름 : 김건우(201910451)
				날짜 : 2024-04-06
				내용 : 로그인 정보 출력
			-->
			<?php echo <<<EOD
				<table class = "search_table_style">
				<tbody>
				<tr align="center">
				<td style="vertical-align: top; padding: 10px; background-color: #eee; border : 1px solid black; ">회원 조회 결과
				</td>
				</tr>
				<tr align="center">
				<td style="vertical-align: top; padding: 10px; background-color: #eee; border : 1px solid black;">
				EOD;
				if ($_POST['search_name']) { 
					echo "".$_POST['search_name']."";
				}
				echo <<<EOD
				</td>
				</tr>
				</tbody>
				</table>
				EOD;
			?>
		</div>
		<?php
			require("fb_footer_db.inc");
		?>
	</div>
</body>
</html>