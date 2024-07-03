<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		<title></title>
		<meta content="김건우 201910451" name="author">
	</head>
	<body>
		<!--
			이름 : 김건우(201910451)
			날짜 : 2024-04-16
			내용
			1. 배열변수 연습 - 배열변수 생성 후 대입하여 화면에 보여줌
			2. 배열변수 생성 후 스타일 코드에 배열변수 적용
			3. 배열변수(key, value) 생성 후 해당 키에 대응하는 값 출력
		-->
		<?php
			$words = ['영광', '환희', '황홀', '기쁨', '무지개', '찬란함'];
			$color = array('OR' => 'orange', 'BL' => 'blue', 'GR' => 'green', 'RD' => 'red');
			$city = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
			
			//echo "<pre>";
			//print_r($city);
			//echo "</pre>";
			
			echo "[바람꽃은 시들지 않는다] (유안진)<br>";
			echo "내일 몫은 {$words[3]}<br>";
			echo "내일 몫은 {$words[1]}<br>";
			echo "내일 몫은 {$words[5]}<br>";
			echo "내일 몫은 {$words[0]}<br>";
			echo "내일 몫은 눈부신 {$words[2]} 이니<br>";
			echo "나는 견디리<br>";
			echo "견디어 이기리<br>";
			echo "오늘 비록 비가 내려도<br>";
			echo "내일은 해가 뜨리<br>";
			echo "저 하늘의 {$words[4]} 그 약속을<br>";
			echo "믿으리";
			
			echo <<<EOD
			<h1>green, red, orange, blue</h1>
			<ul>
			<li style = "color:{$color["GR"]}">green</li>
			<li style = "color:{$color["RD"]}">red</li>
			<li style = "color:{$color["OR"]}">orange</li>
			<li style = "color:{$color["BL"]}">blue</li>
			</ul>
			EOD;
			
			echo <<<EOD
			Netherlands의 수도는 <span style = "color:{$color["BL"]}">{$city['Netherlands']}</span> <br>
			Greece의 수도는 <span style = "color: {$color["RD"]}">{$city['Greece']}</span> <br>
			Germany의 수도는 {$city['Germany']} <br>
			Czech Republic의 수도는 {$city['Czech Republic']}
			EOD;

?>
	</body>
</html>