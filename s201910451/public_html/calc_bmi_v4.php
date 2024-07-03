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
		</style>
		<meta content="김건우 201910451" name="author">
	</head>
	<body>
		<!--
			이름 : 김건우(201910451)
			날짜 : 2024-04-16
			내용 : bmi 계산기
		-->
		<?php
			if(isset($_POST["cm"])) {
				$weight = $_POST["kg"];
				$height = $_POST["cm"];
				$bmi_height = ($height / 100) ** 2;
				$bmi = round($weight / $bmi_height, 1);
				echo <<<EOD
				입력하신 체중은 {$weight}kg이고 신장은 {$height}cm입니다.<br>
				귀하의 BMI(체질량지수)는 {$bmi}입니다.
				EOD;
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
