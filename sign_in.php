<html>
<head>
	<title>Login</title>
</head>
<body>
	
	<form action="sign_in.php" method="post" name="form1">
		<table border="0">
			<tr>
				<td colspan="2" bgcolor="yellow" align="center">
					<b>SIGN IN</b>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="text" placeholder="Username" name="uname" >
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="password" placeholder="Password" name="pass" >
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<hr>
					<img src="captcha.php" alt="gambar"/>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input name="nilaiCaptcha" placeholder="Captcha" value="" maxlength="6" >
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="login" value="Login">
					<!--<input type=submit value="Login"> -->
				</td>
			</tr>
		</table>
	</form>

	<?php
	if(isset($_POST['login'])){
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];

		include_once("config.php");

		//insert user data
		$result = mysqli_query($mysqli, "select *from data_user where Username = '$uname' and Password = '$pass'");

		if(@mysqli_num_rows($result)==1){
			//direct ke nilai.php
			session_start("Captcha");
			if($_SESSION["Captcha"] != $_POST["nilaiCaptcha"]){
				echo "
				<script>
					alert('Input Captcha Salah');
					location.href='index_login.php';
				</script>
				";
			}
			else {
				echo "
					<form action=nilai.php method=post>
						<input type=hidden name='uname' value=$username>
						<input type=submit>
					</form>
				";
				header("location: njay.php");
			}

		} else {
			echo "
			<script>
				alert('Username atau Password Anda salah');
				location.href='index_login.php';
			</script>
			";
		}
	}

	?>
	
</body>
</html>