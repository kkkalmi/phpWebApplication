<!DOCTYPE html>
<html>
	<!--
		이름 : 김건우(201910451)
		날짜 : 2024-04-06
		내용 : CRUD 회원 검색 화면
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
			require("fb_header_db.inc");
		?>
		<div id="content_search">
			<?php
				if(isset($_POST['search_name'])) {
					require "db_config.inc";
					
					$search_condition = $_POST['search_condition'];
					
					if($search_condition == 'name') {
						$query = "select * from fb_201910451 where name like '%".$_POST['search_name']."%'";
					} else if($search_condition == 'email') {
						$query = "select * from fb_201910451 where email like '%".$_POST['search_name']."%'";
					} else if($search_condition == 'phone') {
						$query = "select * from fb_201910451 where phone like '%".$_POST['search_name']."%'";
					}
					
					
					$result = mysqli_query($db, $query);
					
					echo <<<EOD
					<table border="1" bordercolor="blue" width ="900" height="300" align = "center">
					<th>회원번호</th>
					<th>이름</th>
					<th>이메일</th>
					<th>생년월일</th>
					<th>성별</th>
					<th>핸드폰</th>
					<th>주소</th>
					<th>상태</th>
					<th>메모</th>
					<th>등록일자</th>
				EOD;
					
					while($row = mysqli_fetch_array($result)) {
						$reg = strtotime($row["reg_date"]);
						$dateString = date('Y-m-d', $reg);
						echo "<tr>";
						echo "<td>" .$row["member_number"]."</td>";
						echo "<td>" .$row["name"]."</td>";
						echo "<td>".$row["email"]."</td>";
						echo "<td>".$row["birth_date"]."</td>";
						echo "<td>".$row["gender"]."</td>";
						echo "<td>".$row["phone"]."</td>";
						echo "<td>".$row["address"]."</td>";
						echo "<td>".$row["status"]."</td>";
						echo "<td>".$row["memo"]."</td>";
						echo "<td> {$dateString} </td>";
						echo "</tr>";
					}
					echo "</table>";
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
									<option value = "name">이름</option>
									<option value = "email">이메일주소</option>
									<option value = "phone">전화번호</option>
								</select>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<input maxlength="20" size="25" name="search_name" autofocus required type="text"><br>
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