<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		<title></title>
		<meta content="김건우 201910451" name="author">
	</head>
	<body>
		<?php
			/*
			이름:김건우
			날짜:2024-04-09
			내용:계산기
			*/
			echo "<h1>김건우 (201910451)</h1>";
			echo "계산 결과는 다음과 같습니다<br><br>";
			if ($_POST['num1']) {
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];
				
				$plus = $num1 + $num2;
				$minus = $num1 - $num2;
				$multiply = $num1 * $num2;
				$divide = $num1 / $num2;
				$remain = $num1 % $num2;
				$square = $num1 ** $num2;
				
				echo "{$num1} + {$num2} = {$plus}<br><br>";
				echo "{$num1} - {$num2} = {$minus}<br><br>";
				echo "{$num1} * {$num2} = {$multiply}<br><br>";
				echo "{$num1} / {$num2} = {$divide}<br><br>";
				echo "{$num1} % {$num2} = {$remain}<br><br>";
				echo "{$num1} ** {$num2} = {$square}<br><br>";
			}
		?>
	</body>
</html>