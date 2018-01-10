<?php
	session_start();
	$uname = $_SESSION['nama'];
?>

<html>
<head>
	<title>Edit User Data</title>
</head>
<body>	
	<form action="update.php" method="post" name="form3">
		<table border=0>
			<tr>
				<td>Username</td>
				<td><input type='text' name='Username'></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type='text' name='Password'></td>
			</tr>
			<tr>
				<td>Fullname</td>
				<td><input type='text' name='Fullname'></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type='text' name='Gender'></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><input type='number' name='Umur'></td>
			</tr>
			<tr>
				<td>Deposit</td>
				<td><input type='number' name='Dompet'></td>
			</tr>
			<tr>
				<td><input type='submit' name='update' value="OK"></td>
			</tr>
		</table>
	</form>

	<?php

	if(isset($_POST['update'])){

		$usname = $_POST['Username'];
		$pass = $_POST['Password'];
		$fullname = $_POST['Nama_Lengkap'];
		$gen = $_POST['Gender'];
		$age = $_POST['Umur'];
		$depo = $_POST['Dompet'];

		include_once("config.php");

		//update user data
		$result = mysqli_query($mysqli, "UPDATE data_user SET Username='$usname', Password='$pass', Nama_Lengkap='$fullname', Gender='$gen', Umur='$age', Dompet='$depo' WHERE Username='$uname'");

		if($result){
			echo "
			<script>
				alert('Succeed. Please Re-Login');
				location.href='index_login.php';
			</script>
			";
		} else {
			echo "<b>Penambahan data gagal</b>";
		}
		
	}
	?>
</body>
</html>