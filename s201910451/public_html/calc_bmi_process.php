<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		<title></title>
		<meta content="김건우 201910451" name="author">
	</head>
	<body>
		<!--
			이름 : 김건우(201910451)
			날짜 : 2024-04-16
			내용 : bmi 계산기
		-->
		<form method="post" action="calc_bmi_process.php" name="bmi">
			<?php
				$weight = $_POST["kg"];
				$height = $_POST["cm"];
				$bmi_height = ($height / 100) ** 2;
				$bmi = round($weight / $bmi_height, 1);
				echo <<<EOD
				입력하신 체중은 {$weight}kg이고 신장은 {$height}cm입니다.<br>
				귀하의 BMI(체질량지수)는 {$bmi}입니다.
				EOD;
			?>
		</form>
		<br>
		<br>
	</body>
</html>
