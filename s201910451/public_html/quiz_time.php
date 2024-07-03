<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="UTF-8">
		<meta content="김건우 201910451" name="author">
	</head>
	<!--
		이름 : 김건우(201910451)				
		날짜 : 2024-05-02
		내용 : 초간단 퀴즈 관리 시스템
	-->
	<body>
		<h1>김건우 (201910451)</h1>
		<?php
			$score = 0;
			if(isset($_POST['album']) && isset($_POST['title_song']) && isset($_POST['busan'])){
				$question1 = $_POST['album'];
				if($question1 == "Every letter i sent you") 
				$score += 10;
				
				$question2 = $_POST['title_song'];
				if($question2 == "Our love is great")
				$score += 10;
				
				$question3 = $_POST['busan'];
				if($question3 == "I'll be your family!")
				$score += 10;
				
				echo <<<EOD
				<h3>당신의 퀴즈 점수 {$score}점 입니다.</h3>
				<p>각 문제 당 점수는 10점입니다</p>
				<p>1번 문제의 정답은 Every letter I sent you </p>
				<p>2번 문제의 정답은 Our love is great </p>
				<p>3번 문제의 정답은 I'll be your family! </p>
			EOD;
				} else {
				echo "입력되지 않은 값이 있습니다.";
			}
		?>
		
		<form method="post" action="" name="quiz">
			<h1>다음 퀴즈를 답하시오</h1>
			<div>
			<h2>질문1 : 다음 사진의 앨범 제목을 고르시오</h2>
			<img style="width: 300px; height: 300px;" alt="Every letter i sent you" src = "./image/yerinbeak.jpg"><br>
			<input name="album" value="FRANK" type="radio" id="select1"><label for="select1">FRANK</label><br>
			<input name="album" value="Our love is great" type="radio" id="select2"><label for="select2">Our love is great</label><br>
			<input name="album" value="Every letter i sent you" type="radio" id="select3"><label for="select3">Every letter I sent you</label>
			</div>
			<div>
			<h2>질문2 : 다음 중 백예린 앨범의 타이틀 곡이 아닌 것은?</h2>
			<select name="title_song">
				<option value="0310">0310</option>
				<option value="Square">Square</option>
				<option value="Our love is great">Our love is great</option>
				<option value="Bye bye my blue">Bye bye my blue</option>
				<option value="0415">0415</option>
				<option value="물고기">물고기</option>
			</select>
		</div>
		<div>
			<h2>질문3 : 백예린이 19년 부산국제록페스티벌에서 공개한 미공개곡은? </h2>
			<img style="width: 600px; height: 300px;" alt="yerin_beak" src = "./image/busan_yerin.JPG"><br>
			<input name="busan" value="0415" type="radio" id="select4"><label for="select4">0415</label><br>
			<input name="busan" value="Bunny" type="radio" id="select5"><label for="select5">Bunny</label><br>
			<input name="busan" value="I'll be your family!" type="radio" id="select6"><label for="select6">I'll be your family!</label>
		</div>
		<p><input type="submit" value="제출"></p>
		</form>
	</body>
</html>
