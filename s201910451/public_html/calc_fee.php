<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta content="김건우 201910451" name="author">
</head>
<!--
이름 : 김건우(201910451)		
날짜 : 2024-05-16				
내용 : 도로 함수
-->
<body>
	<?php
		require("201910451.inc");
		
		list($x,$y) = calc_fee("A", "C");
		
		echo "귀하는 총 {$x}km를 운행하였으며 중형차 통행료는 {$y}입니다.";
	?>
</body>
</html>
