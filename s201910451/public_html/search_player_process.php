<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="UTF-8">
		<meta content="김건우 201910451" name="author">
	</head>
	<!--
		이름 : 김건우(201910451)	
		날짜 : 2024-04-16
		내용 : 다차원 배열의 생성과 처리
	-->
	<?php
		$players = array ("001" => array ("name" => "추신수", "birthdate" => "1982/7/13", "email" => "sschoo@ssg.com"), 
		"002" => array ("name" => "류현진", "birthdate" => "1987/3/25", "email" => "hjryu@bluejays.com"), 
		"003" => array ("name" => "김연아", "birthdate" => "1990/9/5", "email" => "yunakim@skate.com"), 
		"004" => array ("name" => "이대호", "birthdate" => "1982/6/21", "email" => "dhlee@baeksoo.com"), 
		"005" => array ("name" => "전지현", "birthdate" => "1981/10/30", "email" => "jhjun@ddanddala.com"));
		
		/*
		echo "<pre>";
		print_r($players);
		echo "</pre>"; 
		*/
		
		$user_id = $_POST['id'];
		
		echo <<<EOD
		회원정보 <br>
		이름 : {$players[$user_id]["name"]} <br> 
		생년월일 : {$players[$user_id]["birthdate"]} <br>
		이메일 주소 : {$players[$user_id]["email"]} <br>
		
		EOD;
		
		
	?>
	<body>
		
	</body>
</html>
