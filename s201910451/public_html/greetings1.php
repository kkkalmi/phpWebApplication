<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta content="김건우 201910451" name="author">
</head>
<!--

이름 : 김건우(201910451)
					
날짜 : 2024-04-06
					
내용 : 로그인 정보 출력

-->
<body>
	<?php
		date_default_timezone_set('Asia/Seoul');
		
		$time = date("H");
		
		echo "$time";
		
		if( $time > 0 && $time < 12) {
			echo "좋은 아침!";
		} else if ( $time > 12 && $time < 18 ) {
			echo "오후 햇살이 좋군요 ^^";
		} else {
			echo "좋은 하루 보내세요~";
		}
	?>
</body>
</html>
