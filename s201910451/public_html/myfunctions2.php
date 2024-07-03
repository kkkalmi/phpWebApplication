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
		function largest($array) {
			$max = 0;
			foreach($array as $number) {
				if($max < $number) {
					$max = $number;
				}
			}
			
			return $max;
		}

		$myArray = array(12,85,74,1,521,999,62,94,8,29, 456, 48, 321, 54, 722, 88, 17);
		$max = largest($myArray);
		echo "배열값 중 가장 큰 숫자는: $max";
	?>
</body>
</html>
