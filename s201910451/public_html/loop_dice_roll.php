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
		날짜 : 2024-05-13				
		내용 : 주사위 굴리기
	-->
	<body>
		<?php
			if(isset($_POST['user_number'])) {
				$user_number = $_POST['user_number'];
				
				$dice_number = array(0,0,0,0,0,0);
				$dice_percentage = array(0,0,0,0,0,0);
				
				for($i = 1; $i <= $user_number; $i++) {
					$dice = rand(1,6);
					
					if($dice == 1) {
						$dice_number[0] += 1;
					} else if($dice == 2) {
						$dice_number[1] += 1;
					} else if($dice == 3) {
						$dice_number[2] += 1;
					} else if($dice == 4) {
						$dice_number[3] += 1;
					} else if($dice == 5) {
						$dice_number[4] += 1;
					} else {
						$dice_number[5] += 1;
					}
					
				}
				
				for($j = 0; $j < 6; $j++) {
					$percentage = round(($dice_number[$j] / $user_number) * 100, 1);
					$dice_percentage[$j] += $percentage;
				}
				
				$sum = 0;
				$sum_percentage = 0;
				
				for($k = 0; $k < 6; $k++) {
					$sum += $dice_number[$k];
					$sum_percentage += $dice_percentage[$k];
				}
				
				$max = 0;
				foreach($dice_number as $num) {
					if ($num > $max) {
						$max = $num;
					}
				}
				
				$min = $user_number;
				foreach($dice_number as $num) {
					if ($num < $min) {
						$min = $num;
					}
				}
				
				echo <<<EOD
				<h1> 주사위를 {$user_number}회 던진 결과</h1>
				<table>
					<tr>
						<th></th>
						<th>빈도(회)</th>
						<th>비율(%)</th>
					</tr>
EOD;
					for($q = 0; $q < 6; $q++) {
					$number = $q + 1;
						if($dice_number[$q] == $max) {
							echo <<<EOD
								<tr bgcolor = "yellow">
									<td style="color:red;">"{$number}"</td>
									<td style="color:red;">{$dice_number[$q]}</td>
									<td style="color:red;">{$dice_percentage[$q]}</td>
								</tr>
EOD;
						} else if($dice_number[$q] == $min) {
							echo <<<EOD
								<tr bgcolor = "skyblue">
									<td style="color:blue;">"{$number}"</td>
									<td style="color:blue;">{$dice_number[$q]}</td>
									<td style="color:blue;">{$dice_percentage[$q]}</td>
								</tr>
EOD;
						} else {
							echo <<<EOD
								<tr>
									<td style>"{$number}"</td>
									<td style>{$dice_number[$q]}</td>
									<td style>{$dice_percentage[$q]}</td>
								</tr>
EOD;
						}
				}
					echo <<<EOD
					<tr>
						<td>합계</td>
						<td>{$sum}</td>
						<td>{$sum_percentage}</td>
					</tr>
				</table>
EOD;
				for($y = 0; $y < 6; $y++) {
					if($max == $dice_number[$y]) {
						$max_num = $y + 1;
					} else if($min == $dice_number[$y]) {
						$min_num = $y + 1;
					}
				}
				
				echo "<p>{$max_num}번이 가장 많이, {$min_num}이 가장 적게 출현했습니다.</p>";
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