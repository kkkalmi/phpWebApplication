<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="UTF-8">
		<meta content="김건우 201910451" name="author">
		<style>
			table {
			width: 50%;
			border: 1px solid #444444;
			}
			th, td {
			border: 1px solid #444444;
			}
		</style>
	</head>
	<!--
		이름 : 김건우(201910451)	
		날짜 : 2024-05-07				
		내용 : 반복문으로 동전 던지기 횟수 구하기
	-->
	<body>
		<?php
			if(isset($_POST['user_number'])) {
				$user_number = $_POST['user_number'];
				
				$head = 0;
				$back = 0;
				
				for($i = 1; $i <= $user_number; $i++) {
					$dice = rand(1,2);
					
					if($dice == 1) {
						$head += 1;
						} else {
						$back += 1;
					}
					
				}
				
				$head_percentage = ($head / $user_number) * 100;
				$back_percentage = ($back / $user_number) * 100;
				
				$sum = $head + $back;
				$sum_percentage = $head_percentage + $back_percentage;
				echo <<<EOD
				<h1> 동전 {$user_number}회 던져서 앞.뒷면이 나온 횟수입니다.</h1>
				<table>
					<tr>
						<th></th>
						<th>빈도(회)</th>
						<th>비율(%)</th>
					</tr>
					<tr>
						<td>앞면</td>
						<td>{$head}</td>
						<td>{$head_percentage}</td>
					</tr>
					<tr>
						<td>뒷면</td>
						<td>{$back}</td>
						<td>{$back_percentage}</td>
					</tr>
					<tr>
						<td>합계</td>
						<td>{$sum}</td>
						<td>{$sum_percentage}</td>
					</tr>
				</table>
				EOD;
			
			
				if($head > $back) {
					$difference = $head - $back;
					echo "<p>앞면이 뒷면보다 {$difference}회 더 출현했습니다.</p>";
				} else {
					$difference = $back - $head;
					echo "<p>뒷면이 앞면보다 {$difference}회 더 출현했습니다.</p>";
				}
				
			}
		?>
		<hr width = "100%" color = "blue" size = "3">
		<form method = "post" action = "">
			<p>던질 횟수를 입력하시오</p>
			<p><input type = "number" name = "user_number"></p>
			<input type = "submit" value = "보내기">
		</form>
	</body>
</html>