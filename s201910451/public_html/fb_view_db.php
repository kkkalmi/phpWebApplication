<!DOCTYPE html
<html>
<!--
	이름 : 김건우(201910451)
	날짜 : 2024-05-28
	내용 : 모든 회원 보기 화면
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
	<?php
		require("session_correct.inc");
	?>
	<?php
		require("fb_header_db.inc");
	?>
	<div id="content_home">
		<?php
		require "db_config.inc";
		
		$result = mysqli_query($db, "select * from fb_201910451");
		echo <<<EOD
			<table border="1" bordercolor="blue" width ="1000" height="500" align = "center">
			<th>회원번호</th>
			<th>이름</th>
			<th>이메일</th>
			<th>생년월일</th>
			<th>성별</th>
			<th>핸드폰</th>
			<th>주소</th>
			<th>상태</th>
			<th>메모</th>
			<th>등록일자</th>
		EOD;
		while ($row = mysqli_fetch_array($result)) {
			$reg = strtotime($row["reg_date"]);
			$dateString = date('Y-m-d', $reg);
			echo "<tr>";
			echo "<td>" .$row["member_number"]."</td>";
			echo "<td>" .$row["name"]."</td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["birth_date"]."</td>";
			echo "<td>".$row["gender"]."</td>";
			echo "<td>".$row["phone"]."</td>";
			echo "<td>".$row["address"]."</td>";
			echo "<td>".$row["status"]."</td>";
			echo "<td>".$row["memo"]."</td>";
			echo "<td> {$dateString} </td>";
			echo "</tr>";
		}
		echo "</table>";
		mysqli_close($db);
		?>
	</div>
	<?php
		require("fb_footer_db.inc");
	?>
</div>
</body>
</html>
