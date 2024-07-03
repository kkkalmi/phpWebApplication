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
내용 : 반복문을 이용한 제곱계산
-->
<body>
	<?php
		$while_number1 = 2;
		$while_number2 = 0;
		
		echo <<<EOD
			<h2>while문을 이용한 제곱계산</h2>
			<table>
		EOD;
		while($while_number2 <= 10) {
			$while_result = $while_number1 ** $while_number2;
			echo <<<EOD
				<tr>
					<td>{$while_number1}<sup>{$while_number2}</sup> = {$while_result}</td>
				</tr>
			EOD;
			$while_number2 += 1;
		}
		echo <<<EOD
			</table>
		EOD;
		
		echo <<<EOD
			<hr width = "100%" color = "blue" size = "3">
		EOD;
		
		$do_while_number1 = 2;
		$do_while_number2 = 0;
		echo <<<EOD
			<h2>do while문을 이용한 제곱계산</h2>
			<table>
		EOD;
		do {
			$do_while_result = $do_while_number1 ** $do_while_number2;
			echo <<<EOD
				<tr>
					<td>{$do_while_number1}<sup>{$do_while_number2}</sup> = {$do_while_result}</td>
				</tr>
			EOD;
			$do_while_number2 += 1;
		} while($do_while_number2 <= 10);
		echo <<<EOD
			</table>
		EOD;
		
		echo <<<EOD
			<hr width = "100%" color = "blue" size = "3">
		EOD;
		
		
		echo <<<EOD
			<h2>for문을 이용한 제곱계산</h2>
			<table>
		EOD;
		$for_number1 = 2;
		$for_number2 = 0;
		for($i = 0; $i <= 10; $i++) {
			$for_result = $for_number1 ** $for_number2;
			echo <<<EOD
				<tr>
					<td>{$for_number1}<sup>{$for_number2}</sup> = {$for_result}</td>
				</tr>
			EOD;
			$for_number2 += 1;
		}
		echo <<<EOD
			</table>
		EOD;
	?>
</body>
</html>
