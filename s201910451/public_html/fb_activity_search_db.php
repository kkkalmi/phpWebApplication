<!DOCTYPE html>
<html>
	<!--
		이름 : 김건우(201910451)
		날짜 : 2024-06-11
		내용 : 운동 검색 화면
	-->
	<head>
		<title>김건우(201910451)의 miniFacebook</title>
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<link rel="stylesheet" type="text/css" href="./css/fb_style.css"/>
		<link rel="stylesheet" type="text/css" href="./css/fb_menu.css"/>
		<script>
			function updatemenu() {
				if (document.getElementById('responsive-menu').checked == true) {
					document.getElementById('menu').style.borderBottomRightRadius = '0';
					document.getElementById('menu').style.borderBottomLeftRadius = '0';
					}else{
					document.getElementById('menu').style.borderRadius = '5px';
				}
			}
		</script>
	</head>
	<body>
		<?php
			require("fb_header_guest_db.inc");
		?>
		<div id="content_search">
			<?php
				if(isset($_POST['search_condition'])) {
					require "db_config.inc";
					
					$search_condition = $_POST['search_condition'];
					
					if($search_condition == 'active_name') {
						$query = "select * from final_201910451 where active_name like '%".$_POST['user_input']."%'";
					} else if($search_condition == 'active_type') {
						$query = "select * from final_201910451 where active_type like '%".$_POST['user_input']."%'";
					} else if($search_condition == 'active_spot') {
						$query = "select * from final_201910451 where active_spot like '%".$_POST['user_input']."%'";
					} else if($search_condition == 'active_date') {
						$query = "select * from final_201910451 where active_start like '%".$_POST['user_input']."%' or active_end like '%".$_POST['user_input']."%'";
					}
					
					
					$result = mysqli_query($db, $query);
					
					echo <<<EOD
					<table border="1" bordercolor="blue" width ="900" height="300" align = "center">
					<th>운동활동이름</th>
					<th>유형</th>
					<th>장소</th>
					<th>시작일시</th>
					<th>종료일시</th>
					<th>소감</th>
				EOD;
					
					while($row = mysqli_fetch_array($result)) {
						$start = strtotime($row["active_start"]);
						$active_start = date('Y-m-d', $start);
						
						$end = strtotime($row["active_end"]);
						$active_end = date('Y-m-d', $end);
						echo "<tr>";
						echo "<td>" .$row["active_name"]."</td>";
						echo "<td>" .$row["active_type"]."</td>";
						echo "<td>" .$row["active_spot"]."</td>";
						echo "<td> $active_start </td>";
						echo "<td> $active_end </td>";
						echo "<td>".$row["active_memo"]."</td>";
						echo "</tr>";
					}
					echo "</table>";
					
					if($search_condition == 'active_name') {
						$search_query = "select count(*) from final_201910451 where active_name like '%".$_POST['user_input']."%'";
					} else if($search_condition == 'active_type') {
						$search_query = "select count(*) from final_201910451 where active_type like '%".$_POST['user_input']."%'";
					} else if($search_condition == 'active_spot') {
						$search_query = "select count(*) from final_201910451 where active_spot like '%".$_POST['user_input']."%'";
					} else if($search_condition == 'active_date') {
						$search_query = "select count(*) from final_201910451 where  active_start like '%".$_POST['user_input']."%' or active_end like '%".$_POST['user_input']."%'";
					}
					
					
				
					$result2 = mysqli_query($db, $search_query);
				
					$user_info = mysqli_fetch_row($result2);
					
					$user_input = $_POST['user_input'];
					
					echo <<<EOD
						<p>입력하신 검색어 : {$user_input}</p>
						<p>검색된 운동활동 수 : {$user_info[0]} </p>
					EOD;
					mysqli_close($db);
				}
			?>
			<form method="post" action="" name="search_v2">
				<br>
				<table style="text-align: left; width: 300px; height: 128px; margin-left: auto; margin-right: auto;" border="1" cellpadding="2" cellspacing="2">
					<tbody>
						<tr>
							<td>
								<select name="search_condition">
									<option value = "active_name">운동활동이름</option>
									<option value = "active_type">운동유형</option>
									<option value = "active_spot">장소</option>
									<option value = "active_date">날짜</option>
								</select>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<input maxlength="20" size="25" name="user_input" autofocus required type="text"><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<input name="submit" value="검색" type="submit"><br>
							</td>
						</tr>
					</tbody>
				</table>
				<br>
			</form>
		</div>
		<?php
			require("fb_footer_db.inc");
		?>
	</div>
</body>
</html>