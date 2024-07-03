<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		<title></title>
		<style>
			input[type=number] {
			text-align: center;
			width: 300px;
			height: 35px;
			font-size: 15px;
			border: 0;
			border-radius: 15px;
			outline: none;
			padding-left: 1px;
			background-color: rgb(233, 233, 233);
			}
			
			p {
			text-align : center;
			}
			
			input[type=submit] {
			color : white;
			width: 100px;
			height: 32px;
			font-size: 15px;
			border: 0;
			border-radius: 15px;
			outline: none;
			padding-left: 10px;
			background-color: #666666;
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
			div {
			text-align:center;
			width : 500px;
			height: 150px;
			border: 1px solid;
			}
		</style>
		<meta content="김건우 201910451" name="author">
	</head>
	<body>
		<!--
			이름 : 김건우(201910451)
			날짜 : 2024.04.30
			내용 : BMI 계산 프로그램 (HTML 문서 없이)
		-->
		<?php
			if(isset($_POST['kg'])) { 
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
				echo "</div><br><br>";
			}
		?>
		
		<form method="post" action="" name="bmi">
			<table style="text-align: left; width: 500px; height: 110px;"border="1" cellpadding="2" cellspacing="2">
				<tbody>
					<tr>
						<td style="vertical-align: top;">
							<p>제작자 : 김건우 (201910451)</p>
							<h1 style = "text-align : center;">체질량지수(BMI) 계산기</h1>
							<p><input name="cm" type="number" placeholder = "신장(cm)를 입력하세요" step = 0.1 autofocus required></p>
							<p><input name="kg" type="number" placeholder = "몸무게(kg)를 입력하세요" step = 0.1 ></p>
							<p style = "text-align:center;"><input name="bmi_gender" value="man" type="radio" id="select" checked><label for="select">남</label>
							<input name="bmi_gender" value="woman" type="radio" id="select2"><label for="select2">여</label></p>
							<p style = "text-align:center;"><input name="submit" value="입력" type="submit"></p><br>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
		<br>
		<br>
	</body>
</html>