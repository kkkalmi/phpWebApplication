<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="UTF-8">
		<meta content="김건우 201910451" name="author">
		<style>
		td {
			border-color : red;
			borer-style : solid;
		}
		</style>
	</head>
	<!--
		이름 : 김건우(201910451)				
		날짜 : 2024-04-16
		내용 : 농장정보시스템 서버
	-->
	<body>
		<?php
			$calc_animal = $_POST['animal'];
			
			foreach($calc_animal as $key => $value) {
				if(empty($value)) {
					$calc_animal[$key] = 0;
				}
			}
			
			/*echo "<pre>";
			print_r($calc_animal);
			echo "</pre>";*/
			
			
			$cow = $calc_animal[0];
			$chicken = $calc_animal[1];
			$horse = $calc_animal[2];
			$turkey = $calc_animal[3];
			$pig = $calc_animal[4];
			$ostrich = $calc_animal[5];
			
			$cow_leg = $cow * 4;
			$chicken_leg = $chicken * 2;
			$horse_leg = $horse * 4;
			$turkey_leg = $turkey * 2;
			$pig_leg = $pig * 4;
			$ostrich_leg = $ostrich * 2;
			
			echo <<<EOD
			<h1 style = "text-align : center;">가축 별 다리 계산 결과</h1>
			<table style = "width: 200px; border-color:blue; border-style:dashed; margin-left: auto; margin-right: auto; text-align:center;" border="1">
				<tr>
					<th>가축종류</th>
					<th>다리</th>
				</tr>
				<tr>
					<td>소</td>	
					<td>{$cow_leg}</td>		
				</tr>
				<tr>
					<td>닭</td>	
					<td>{$chicken_leg}</td>		
				</tr>
				<tr>
					<td>말</td>	
					<td>{$horse_leg}</td>		
				</tr>
				<tr>
					<td>칠면조</td>	
					<td>{$turkey_leg}</td>		
				</tr>
				<tr>
					<td>돼지</td>	
					<td>{$pig_leg}</td>		
				</tr>
				<tr>
					<td>타조</td>	
					<td>{$ostrich_leg}</td>		
				</tr>
			</table>
			EOD;
		?>
	</body>
</html>
