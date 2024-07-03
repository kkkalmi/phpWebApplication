<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="UTF-8">
		<meta content="김건우 201910451" name="author">
	</head>
	<!--
		이름 : 김건우(201910451)			
		날짜 : 2024-04-23				
		내용 : 사용자 항목 계산 및 출력 처리
	-->
	<body>
		<?php
			$user_deposit = $_POST['money'] * 10000;
			$deposit_period = $_POST['date'];
			$user_tariff_percent = $_POST['rate'] / 100;
			$user_tariff = $_POST['rate'];
			
			//세전 총 금액
			$total_money = round($user_deposit * (1 + ($user_tariff_percent / 12)) ** $deposit_period, 0);
			
			//세전 이자
			$interest_before_tax = $total_money - $user_deposit;
			
			//일반과세 정보 변수
			$tax = round($interest_before_tax * 0.154, 0);
			$after_tax_interest = $interest_before_tax - $tax;
			$final_money = $user_deposit + $after_tax_interest;
			$after_tax_interest_rate = round(($final_money - $user_deposit) / 10000, 2);
			
			//세금우대(A) 정보 변수
			$tax_a = round($interest_before_tax * 0.095, 0);
			$after_tax_interest_a = $interest_before_tax - $tax_a;
			$final_money_a = $user_deposit + $after_tax_interest_a;
			$after_tax_interest_rate_a = round(($final_money_a - $user_deposit) / 10000, 2);
			
			//세금우대(B) 정보 변수
			$tax_b = round($interest_before_tax * 0.014, 0);
			$after_tax_interest_b = $interest_before_tax - $tax_b;
			$final_money_b = $user_deposit + $after_tax_interest_b;
			$after_tax_interest_rate_b = round(($final_money_b - $user_deposit) / 10000, 2);
			
			//비과세 정보 변수
			$after_tax_interest_rate_exemption = round(($total_money - $user_deposit) / 10000, 2);
			
			echo <<<EOD
			<h1>분석결과</h1>
			{$user_deposit}원을 {$user_tariff}%으로 {$deposit_period}개월 예치했을 경우 예상금액은 아래와 같습니다.<br><br>
			
			<table border="1">
			<tr>
			<th>구분</th>
			<th>예치금액</th>
			<th>세전이자</th>
			<th>세금</th>
			<th>세후이자</th>
			<th>최종수령액</th>
			<th>세후금리(연)</th>
			</tr>
			<tr>
			<th>일반과세</th>
			<th>{$user_deposit}</th>
			<th>{$interest_before_tax}</th>
			<th>{$tax}</th>
			<th>{$after_tax_interest}</th>
			<th>{$final_money}</th>
			<th>{$after_tax_interest_rate}%</th>
			</tr>
			<th>세금우대(A)</th>
			<th>{$user_deposit}</th>
			<th>{$interest_before_tax}</th>
			<th>{$tax_a}</th>
			<th>{$after_tax_interest_a}</th>
			<th>{$final_money_a}</th>
			<th>{$after_tax_interest_rate_a}%</th>
			</tr>
			</tr>
			<th>세금우대(B)</th>
			<th>{$user_deposit}</th>
			<th>{$interest_before_tax}</th>
			<th>{$tax_b}</th>
			<th>{$after_tax_interest_b}</th>
			<th>{$final_money_b}</th>
			<th>{$after_tax_interest_rate_b}%</th>
			</tr>
			</tr>
			<th>비과세</th>
			<th>{$user_deposit}</th>
			<th>{$interest_before_tax}</th>
			<th>0</th>
			<th>{$interest_before_tax}</th>
			<th>{$total_money}</th>
			<th>{$after_tax_interest_rate_exemption}%</th>
			</tr>
			</table>
			
			<p>세율 : 일반과제 15,4%, 세금우대(A) 9.5%, 세금우대(B) 1.4%, 비과세 0%</p>
			EOD;
		?>
	</body>
</html>
