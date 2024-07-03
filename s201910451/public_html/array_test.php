<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta content="김건우 201910451" name="author">
</head>
<!--
이름 : 김건우(201910451)			
날짜 : 2024-04-06				
내용 : 로그인 정보 출력
-->
<body>
	<?php
		$players = array ("001" => array ("name" => "추신수", "birthdate" => "1982/7/13", "email" => "sschoo@ssg.com"), 
                    "002" => array ("name" => "류현진", "birthdate" => "1987/3/25", "email" => "hjryu@bluejays.com"), 
                    "003" => array ("name" => "김연아", "birthdate" => "1990/9/5", "email" => "yunakim@skate.com"), 
                    "004" => array ("name" => "이대호", "birthdate" => "1982/6/21", "email" => "dhlee@baeksoo.com"));
                    
		$player_id = $_POST['id'];
		
		echo " {$players[$player_id]['name']} ";
	?>
		
</body>
</html>
