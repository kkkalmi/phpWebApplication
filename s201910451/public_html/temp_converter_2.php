<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		<title></title>
		<meta content="김건우 201910451" name="author">
	</head>
	<body>
		<?php
			/*
			이름:김건우
			날짜:2024-04-09
			내용:섭씨/화씨 변환기
			*/
			if ($_GET['celcius']) {
				$temp = $_GET['celcius'];
				$fahrenhiet = ((9/5) * $temp) + 32;
				echo "섭씨 {$temp} 는 화씨 {$fahrenhiet} 입니다.";
			}
		?>
	</body>
</html>