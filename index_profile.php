<?php
	session_start();
	$uname = $_SESSION['nama'];

?>
	<p align="center">
		Welcome to your profile, <?php echo $uname; ?>
	</p>

<?php 

	//include_once("config.php");

	//$result = mysqli_query($mysqli, "SELECT * FROM data_user WHERE Username = '$uname'");
	/*
	if(@mysqli_num_rows($result)==1){
		while($row = mysqli_fetch_assoc($result)){
			echo "Username " . $row["Username"] . "<br>";
			echo "Fullname " . $row["Nama_Lengkap"] . "<br>";
			echo "Gender " . $row["Gender"] . "<br>";
			echo "Age " . $row["Umur"] . "<br>";
			echo "Deposit " . "$" . $row["Dompet"] . "<br>";
		}
	}
	*/
?>

<html>
	<head>
		<title>Profile</title>
	</head>
<body>
	
	<table border='1' align='center'>
		<tr>
			<th>Username</th>
			<th>Password</th>
			<th>Fullname</th>
			<th>Gender</th>
			<th>Age</th>
			<th>Deposit</th>
		</tr>

		<?php
		include_once("config.php");
		$result = mysqli_query($mysqli, "select * from data_user where Username = '$uname'");

		while($user_data = mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>".$user_data['Username']."</td>";
		echo "<td>".$user_data['Password']."</td>";
		echo "<td>".$user_data['Nama_Lengkap']."</td>";
		echo "<td>".$user_data['Gender']."</td>";
		echo "<td>".$user_data['Umur']."</td>";
		echo "<td>".$user_data['Dompet']."</td>";
		echo "</tr>";

		
		}

		echo "
			<tr>
				<td colspan=6 align='center'>
					<a href='update.php'>Edit Profile</a> 
					or 
					<a href='delete.php'>Delete Account</a>
				</td>
			</tr>
		";

		echo "
			
		";
		?>
	</table> 

</body>
</html>

