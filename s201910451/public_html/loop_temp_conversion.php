<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="UTF-8">
		<meta content="김건우 201910451" name="author">
	</head>
	<!--
		이름 : 김건우(201910451)			
		날짜 : 2024-05-07				
		내용 : while 반복문을 이용한 온도변환
	-->
	<body>
		<h3>while 반복문 <온도 변환표></h3>
		<?php
			$fahrenheit = 100;
			echo <<<EOD
			<table>
				<tr>
					<th>F</th>
					<th>C</th>
				</tr>
			EOD;
			
			while($fahrenheit >= 0) {
				$celcius = round((5 / 9) * ($fahrenheit - 32), 1);
				
				if($celcius < 0) {
					echo <<<EOD
					<tr>
						<td style = "color:red";>{$fahrenheit}</td>
						<td style = "color:red";>{$celcius}</td>
					</tr>
					EOD;
					} else {
					echo <<<EOD
					<tr>
						<td style = "color:blue";>{$fahrenheit}</td>
						<td style = "color:blue";>{$celcius}</td>
					</tr>
					EOD;
				}
				$fahrenheit -= 10;
			}
			echo <<<EOD
			</table>
			EOD;
			
		?>
	</body>
</html>
