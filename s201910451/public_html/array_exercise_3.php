<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="UTF-8">
		<meta content="김건우 201910451" name="author">
	</head>
	<body>
		<!--
			이름 : 김건우(201910451)	
			날짜 : 2024-04-16
			내용
			1. foreach 반복문 사용하여 배열 원소값의 합계와 평균값 출력
			2. 배열의 key값을 알파벳 순서대로 정렬 후 출력
			3. implode, range 함수 사용하여 200부터 250까지의 4의 배수 값 출력
		-->
		<?php
			$num_array = array(12,357,71,125,32,9,618);
			
			/*
				echo "<pre>";
				print_r($city);
				echo "</pre>";
			*/
			
			$total = 0;
			
			foreach($num_array as $value) {
				$total += $value;
			}
			
			$average = round(($total / count($num_array)), 1);
			
			echo "합계 : {$total} <br>";
			echo "평균 : {$average}";
			
			echo <<<EOD
			<hr width = "100%" color = "red">
			EOD;
			
			
			$city = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
			ksort($city);
			
			echo <<<EOD
			<table>
				<tr>
					<th>국가</th>
					<th>수도</th>
				</tr>
EOD;
			foreach($city as $key => $value) {
			echo <<<EOD
				<tr>
					<td> {$key} </td>	
					<td> {$value} </td>		
				</tr>
EOD;
			}
			echo "</table>";
			
			echo <<<EOD
			<hr width = "100%" color = "red">
			EOD;
			
			$num = implode(', ', range(200, 250, 4));
			
			echo "<pre>";
			print_r($num);
			echo "</pre>";
			
		?>
	</body>
</html>
