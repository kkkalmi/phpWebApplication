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
				날짜:2024-05-02
				내용:계산기 제작 (HTML 문서 없이)
			*/
			if(isset($_POST['num1'])) {
				echo "<h1>계산 결과는 다음과 같습니다</h1>";
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];
				$operator = $_POST['operator'];
				
				if($operator == '+') {
					$plus = $num1 + $num2;
					echo "{$num1} + {$num2} = {$plus}<br>";
					} else if($operator == '-') {
					$minus = $num1 - $num2;
					echo "{$num1} - {$num2} = {$minus}<br><br>";	
					} else if($operator == '*') {
					$multiply = $num1 * $num2;
					echo "{$num1} * {$num2} = {$multiply}<br><br>";
					} else if($operator == '/') {
					$divide = $num1 / $num2;
					echo "{$num1} / {$num2} = {$divide}<br><br>";
					} else if($operator == '%') {
					$remain = $num1 % $num2;
					echo "{$num1} % {$num2} = {$remain}<br><br>";
					} else {
					$number1 = substr($num1, -2);
					$number2 = substr($num2, -2);
					
					$result = $number1 + $number2;
					
					echo "{$num1} # {$num2} = {$result}<br><br>";
				}
			}
		?>
		
		<form method="post" action="" name="calculator">
			<h1>계산기</h1>
			<p>첫번째 숫자 : <input name="num1" placeholder="숫자1" type="number" step = 0.1 autofocus required></p>
			<p>두번째 숫자 : <input name="num2" placeholder="숫자2" type="number" step = 0.1 required></p>
			<p>연산자 <select name="operator">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
				<option value="%">%</option>
				<option value="#">#</option>
			</select></p>
			<p><input name="submit" value="보내기" type="submit"></p>
			<p>'#'연산자는 각 숫자 뒷자리 2개의 값을 더한 결과값을 보여준다.</p>
			<p>ex. 1234, 1234를 입력하면 각 뒷자리 34, 34를 더한 값인 68이 출력된다.</p>
		</form>
	</body>
</html>