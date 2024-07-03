<!--
이름 : 김건우(201910451)
날짜 : 2024-04-09
내용 : 계산기 폼
-->
<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		<title>계산기</title>
		<meta content="김건우 201910451" name="author">
	</head>
	<body>
		<?php
			if(isset($_POST["num1"])) {
				$num1 = $_POST["num1"];
				$num2 = $_POST["num2"];
				$operator = $_POST["operator"];
				
				if($operator == "+") {
					$result = $num1 + $num2;
					echo "$result";
				} else if($operator == "-") {
					$result = $num1 - $num2;
					echo "$result";
				}
			}
		?>
		<form method="post" action="" name="calculator">
			<h1>계산기</h1>
			첫번째 숫자 : <input name="num1" placeholder="숫자1" type="number" step = 0.1 autofocus required><br><br>
			두번째 숫자 : <input name="num2" placeholder="숫자2" type="number" step = 0.1 required><br><br>
			<p>
			<select name="operator" required="">
									<option value="+">+</option>
									<option value="-">-</option>
									<option value="*">*</option>
									<option value="/">/</option>
									<option value="%">%</option>
								</select>
			</p>
			<input name="submit" value="보내기" type="submit">
			<br><br>
			제작자 : 김건우 (201910451)
		</form>
	</body>
</html>