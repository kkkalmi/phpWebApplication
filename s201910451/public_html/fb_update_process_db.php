<!DOCTYPE html>
<html>
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
		<?php
			require "db_config.inc";
			
			$email = $_POST['update_email'];
			$password = $_POST['update_password'];
			
			$query = "select * from fb_201910451 where email = '$email' and password = '$password' ";
			
			$result = mysqli_query($db, $query);
			
			$user_info = mysqli_fetch_array($result);
			
			if ( !isset($user_info['email']) || !isset($user_info['password']) ) {
				header("Location:fb_update_db.php");
			}
			
			list($year, $month, $day) = explode("-", $user_info["birth_date"]);
			$month = intval($month);
			$day = intval($day);
			
			$gender = $user_info["gender"];
			$status = $user_info["status"];
			echo <<<EOD
			<div id="content_register">
			<form method="post" action="fb_update_process_complete_db.php" name="register">
				<br>
				<table style="text-align: left; width: 500px; height: 400px; margin-left: auto; margin-right: auto;" border="1" cellpadding="2" cellspacing="2">
					<tbody>
						<tr>
							<td style="vertical-align: top;">
								<input maxlength="20" size="25" name="update_name" value="{$user_info['name']}" autofocus="" required="" type="text"><br><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<input maxlength="50" size="25" name="update_email" value="{$user_info['email']}" required="" type="email" type="text"><br><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<input maxlength="30" size="25" name="update_password" placeholder = "비밀번호" required="" type="password"><br><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<input maxlength="30" size="25" name="update_password2" placeholder = "비밀번호 확인" required="" type="password"><br><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">생년월일<br><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<input name="update_year" value = "{$year}" required="" type="number">
								<select name="update_month"  required="">
									<option value="{$month}">{$month}월</option>
									<option value="1">1월</option>
									<option value="2">2월</option>
									<option value="3">3월</option>
									<option value="4">4월</option>
									<option value="5">5월</option>
									<option value="6">6월</option>
									<option value="7">7월</option>
									<option value="8">8월</option>
									<option value="9">9월</option>
									<option value="10">10월</option>
									<option value="11">11월</option>
									<option value="12">12월</option>
								</select>
								<input name="update_day" value="{$day}" required="" type="number"><br><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<div class="select">
EOD;
								if($gender == "남") {
									echo <<<EOD
									<input name="update_gender" value="남" type="radio" id="select" checked><label for="select">남</label> 
									<input name="update_gender" value="여" type="radio" id="select2"><label for="select2">여</label><br><br>
									EOD;
								} else {
									echo <<<EOD
									<input name="update_gender" value="남" type="radio" id="select"><label for="select">남</label> 
									<input name="update_gender" value="여" type="radio" id="select2" checked><label for="select2">여</label><br><br>
									EOD;
								}
								echo <<<EOD
								</div>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<input name="update_tel" value="{$user_info['phone']}" size="25" type="text"><br><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<input maxlength="300" size="25" name="update_address" value="{$user_info['address']}" type="text"><br><br>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<div class="select">
EOD;
								if($status == "married") {
									echo <<<EOD
									<input name="update_marriage" value="single" type="radio" id="select3" ><label for="select3">기혼</label>
									<input name="update_marriage" value="married" type="radio" id="select4" checked><label for="select4">미혼</label><br><br>
									EOD;
								} else {
									echo <<<EOD
									<input name="update_marriage" value="single" type="radio" id="select3" checked><label for="select3">기혼</label>
									<input name="update_marriage" value="married" type="radio" id="select4"><label for="select4">미혼</label><br><br>
									EOD;
								}
									
								echo <<<EOD
								</div>
							</td>
						</tr>
						<td style="vertical-align: top;">
							<textarea name="update_introduce" rows="10" cols="50">{$user_info['memo']}</textarea><br><br>
						</td>
						</tr>
						<tr>
						<td style="vertical-align: top;">
							<input name="submit" value="수정" type="submit"><br>
						</td>
						</tr>
					</tbody>
				</table>
				<br>
			</form>
		</div>
EOD;
		?>
		
		<?php
			require("fb_footer_db.inc");
		?>
	</div>
</body>
</html>