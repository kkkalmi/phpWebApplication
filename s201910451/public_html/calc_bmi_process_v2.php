<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		<title></title>
		<meta content="김건우 201910451" name="author">
		<style>
			div {
			text-align:center;
			width : 500px;
			height: 150px;
			border: 1px solid;
			}
			input[type=radio]{
			display: none;
			
			}
			input[type=radio]+label{
			display: inline-block;
			cursor: pointer;
			height: 24px;
			width: 90px;
			border: 1px solid #333;
			line-height: 24px;
			text-align: center;
			font-weight:bold;
			font-size:13px;
			
			}
			input[type=radio]+label{
			background-color: #fff;
			color: #333;
			}
			input[type=radio]:checked+label{
			background-color: #333;
			color: #fff;
			}
		</style>
	</head>
	<body>
		<!--
			이름 : 김건우(201910451)
			날짜 : 2024-04-30
			내용 : bmi 계산기 프로세스
		-->
		<?php
			$weight = $_POST["kg"];
			$height = $_POST["cm"];
			
			$bmi_height = ($height / 100) ** 2;
			$bmi = round($weight / $bmi_height, 1);
			
			$bmi_gender = $_POST['bmi_gender'];
			
			//이상 몸무게
			$ideal = 22 * ($bmi_height);
			
			//초과/미달 몸무게
			$diff = $weight - $ideal;
			
			//초과/미달 몸무게 양수표시
			$abs_diff = round(abs($diff), 1);
			
			echo "<div>";
			echo "<h1>분석 결과</h1>";
			if ($diff > 0) {
				echo "초과 몸무게: {$abs_diff}<br>";
				} else if ($diff < 0) {
				echo "미달 몸무게: {$abs_diff}<br>";
				} else {
				echo "정상";
			}
			
			if($bmi_gender == "men") {
				if($bmi <= 18.5) {
					echo "저체중, 낙상위험도는 1.29 입니다.";
					} else if(($bmi >= 18.5) && ($bmi <= 24.9)) {
					echo "정상체중, 낙상위험도는 없습니다.";
					} else if(($bmi >= 25) && ($bmi <= 29.9)) {
					echo "비만, 낙상위험도는 1.05입니다.";
					} else {
					echo "고도비만, 낙상위험도는 0.97입니다.";
				}
 				} else {
				if($bmi <= 18.5) {
					echo "저체중, 낙상위험도는 0.98입니다.";
					} else if(($bmi >= 18.5) && ($bmi <= 24.9)) {
					echo "정상체중, 낙상위험도는 없습니다.";
					} else if(($bmi >= 25) && ($bmi <= 29.9)) {
					echo "비만, 낙상위험도는 1.23입니다.";
					} else {
					echo "고도비만, 낙상위험도는 1.51입니다.";
				}
			}
			echo "</div>"; 
		?>
		<br>
		<br>
	</body>
</html>