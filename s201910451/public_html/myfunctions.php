<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="UTF-8">
		<meta content="김건우 201910451" name="author">
	</head>
	<!--
		이름 : 김건우(201910451)	
		날짜 : 2024-05-14		
		내용 : 로그인 정보 출력
	-->
	<body>
		<?php
			/**
				* 두 숫자 중 큰 숫자를 보여줌
				* @param int $num1
				* @param int $num2
				* @print int
			*/
			function larger($num1, $num2) {
				if($num1 > $num2) {
					echo "{$num1}";
					} else {
					echo "{$num2}";
				}
			}
			
			echo "1. larger: 두 숫자 중 큰 숫자를 보여주는 함수<br>";
			larger(79, 15);
			
			echo <<<EOD
			<hr width = "100%" color = "blue" size = "3">
			EOD;
			
			/**
				* BMI 계산하여 반환하는 함수
				* @param float $cm (신장)
				* @param float $kg (체중)
				* @return float
			*/
			
			function calc_bmi($kg, $cm) {
				$bmi = $kg / (($cm / 100) ** 2);
				return $bmi;
			}
			
			$bmi = calc_bmi(72, 173); // 몸무게(Kg), 키(cm)
			// 소숫점 2자리까지 보이도록 밑줄부분을 각자 채우세요.
			$format = "당신의 신체질량지수는 %.2f 입니다";  
			printf ($format, $bmi);
			
			echo <<<EOD
			<hr width = "100%" color = "blue" size = "3">
			EOD;
			
			/**
				* 특정단의 구구단을 보여주는 함수
				* @param int $num
				* @print 특정 구구단
			*/
			
			function multiples($num) {
				if(is_int($num)) {
					for($i = 1; $i <= 9; $i++) {
						$result = $i * $num;
						echo "{$num} *  {$i} = {$result}<br>";
					}
					} else {
					echo "정수가 아닙니다.<br>";
				}
			}
			
			multiples(7);  // 7단
			multiples(4);  // 4단
			
			echo <<<EOD
			<hr width = "100%" color = "blue" size = "3">
			EOD;
			
			/**
				* 1부터 주어진 숫자까지 합계를 반환하는 함수
				* @param int $num
				* @return 1부터 $num까지의 합
			*/
			
			function addUp($number) {
				$sum = 0;
				if(is_int($number)) {
					for($i = 1; $i <= $number; $i++) {
						$sum += $i;
					}
					return $sum;
					} else {
					echo "정수가 아닙니다.<br>";
				}
			}
			
			$sum = addUp(40);
			echo $sum;
			
			echo <<<EOD
			<hr width = "100%" color = "blue" size = "3">
			EOD;
			
			/**
				* 주어진 배열값의 평균을 계산해서 반환하는 함수
				* @param array
				* @return 배열의 평균값 계산 후, 반환
			*/
			
			function arrayAverage($array) {
				$array_num = 0;
				$sum = 0;
				
				foreach($array as $number) {
					$sum += $number;
					$array_num += 1;
				}
				
				$average = round($sum / $array_num, 2);
				
				return $average;
			}
			
			$myArray = array(21, 62, 37, 44, 57, 96, 17, 38, 99, 10, 51);
			$arr_avg = arrayAverage($myArray);
			echo "배열의 평균값: {$arr_avg}";   // 48.36
			
			echo <<<EOD
			<hr width = "100%" color = "blue" size = "3">
			EOD;
			
			/**
				* 주어진 숫자 배열값 중 가장 큰 숫자를 반환하는 함수
				* @param $array
				* @return 배열값 중 가장 큰 숫자 반환
			*/
			
			function largest($array) {
				$max = PHP_FLOAT_MIN;
				
				foreach($array as $num) {
					if($num > $max) {
						$max = $num;
					}
				}
				return $max;
			}
			
			$myArray = array(12,85,74,1,521,999,62,94,8,29, 456, 48, 321, 54, 722, 88, 17);
			$max = largest($myArray);
			echo "배열값 중 가장 큰 숫자는: $max";
			
			echo <<<EOD
			<hr width = "100%" color = "blue" size = "3">
			EOD;
			
			/**
				* 두 변수의 값을 서로 바꾸는 함수
				* @param $first
				* @param $second
				* @return 두 변수 바꾼 값
			*/
			
			function swap(&$first, &$second) {
				$temp = $first;
				$first = $second;
				$second = $temp;
			}
			
			$first = "축구";
			$second = "야구";
			echo $first, $second;
			echo "<br>";
			swap ($first, $second);
			echo $first, $second;
			
			echo <<<EOD
			<hr width = "100%" color = "blue" size = "3">
			EOD;
			
			/**
				* 한 숫자를 다른 숫자로 나누어서 몫과 나머지를 계산 후 반환
				* @param float $a
				* @param float $b
				* @return 몫과 나머지 반환
			*/
			
			function division($a, $b) {
				$x = intval($a/$b);
				$y = $a % $b;
				return array($x, $y);
			}
			
			// division (13, 5) 호출하고, 몫과 나머지를 받는다.
			list($div, $mod) = division(13,5);
			echo "13을 5로 나눈 몫은 {$div}이고 나머지는 {$mod}이다";
			
			echo <<<EOD
			<hr width = "100%" color = "blue" size = "3">
			EOD;
			
			/**
				* 주어진 문자열이 모두 소문자인지 체크하는 함수
				* @param float $a
				* @param float $b
				* @return 몫과 나머지 반환
			*/
			
			function isLowercase ($str) {
				$num = 0;
				
				for($i = 0; $i <= strlen($str) - 1; $i++) {
					if(ord($str[$i]) >= 65 && ord($str[$i]) <= 90) 
						$num += 1;
				}
				
				if($num >= 1) {
					return false;
				} else {
					return true;
				}
			}
			
			$myString = "you only live once, but if you do it right, once is enough!";
			
			if (isLowercase($myString))
				echo "모두 소문자입니다";
			else
				echo "소문자가 아닌 문자가 포함되어 있습니다 ";
			
			echo <<<EOD
			<hr width = "100%" color = "blue" size = "3">
			EOD;
			
			/**
				* 주어진 문자열이 palidrome인지 체크하는 함수
				* @param $str
				* @return 체크 후 true or false 반환
			*/
			
			function isPalindrome ($str) {
				$str1 = "";
				for($i = 0; $i < strlen($str); $i++) {
					$str1 .= $str[$i];
				}
				
				$str2 = "";
				for($j = strlen($str)-1; $j >= 0; $j--) {
					$str2 .= $str[$j];
				}
				
				if($str1 == $str2) {
					return true;
					} else {
					return false;
				}
			}
			
			$myString = "madam";
			
			if (isPalindrome($myString)) {
				echo "palidrome이 맞습니다.";
				} else {
				echo "palidrome이 아닙니다.";
			}
		?>
	</body>
</html>
