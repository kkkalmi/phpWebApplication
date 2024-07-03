<?php
function calc_fee($start, $finish, $cartype = "중") {
	/**
	  * @param string $start
	  * @param string $finish
	  * @param string $cartype
      * @return array(거리, 통행료)
	*/
	
	require "/home/jhkim/distance.inc";
	
	$start_num = 0;
	$finish_num = 0;
	
	if($start == "A") {
		$start_num = 1;
	} else if($start == "B") {
		$start_num = 2;
	} else if($start == "C") {
		$start_num = 3;
	} else if($start == "D") {
		$start_num = 4;
	} else if($start =="E") {
		$start_num = 5;
	} else if($start == "F") {
		$start_num = 6;
	} else if($start == "G") {
		$start_num = 7;
	} else if($start == "H") {
		$start_num = 8;
	} else if($start == "I") {
		$start_num = 9;
	} else if($start == "J") {
		$start_num = 10;
	} else {
		return false;
	}

	if($finish == "A") {
		$finish_num = 1;
	} else if($finish == "B") {
		$finish_num = 2;
	} else if($finish == "C") {
		$finish_num = 3;
	} else if($finish == "D") {
		$finish_num = 4;
	} else if($finish == "E") {
		$finish_num = 5;
	} else if($finish == "F") {
		$finish_num = 6;
	} else if($finish == "G") {
		$finish_num = 7;
	} else if($finish == "H") {
		$finish_num = 8;
	} else if($finish == "I") {
		$finish_num = 9;
	} else if($finish == "J") {
		$finish_num = 10;
	} else {
		return false;
	}

	$km = 0;
	if(ord($start) < ord($finish)) {
		for($i = $start_num; $i < $finish_num; $i++) {
			$km += $distance[$i-1];
		}
	} else if(ord($start) > ord($finish)) {
		$start_num = $start_num - 1;
		for($i = $start_num; $i >= $finish_num; $i--) {
			$km += $distance[$i-1];
		}
	}

	if($cartype == "소") {
		$result_fee = $km * 100;
	} else if($cartype == "중") {
		$result_fee = $km * 100 * 1.2;
	} else if($cartype == "대") {
		$result_fee = $km * 100 * 1.5;
	} else {
		return false;
	}

	return array($km, $result_fee);
}
?>