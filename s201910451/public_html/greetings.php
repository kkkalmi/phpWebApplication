<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta content="김건우 201910451" name="author">
</head>
<!--
이름 : 김건우(201910451)	
날짜 : 2024-04-30				
내용 : 조건문 연습
-->
<body>
	<?php
		date_default_timezone_set('Asia/Seoul');
	
		$today = date("H");
		$today_hour = date("Y-m-d H:i:s");
		
		echo "현재시간은 {$today_hour} 입니다.<br>";
		
		if(($today >= "0") && ($today < "12")) {
			echo "좋은 아침~!";
		} else if (($today >= "12") && ($today < "18")) {
			echo "오후 햇살이 좋군요^^";
		} else {
			echo "좋은 하루 보내세요~!";
		}
	?>
</body>
</html>
