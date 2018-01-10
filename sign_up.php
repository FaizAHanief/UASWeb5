<html>
<head>
	<title>Daftar</title>
</head>
<body>

<form action='sign_up.php' method=post name='form2'>
	<table>
		<tr>
			<td bgcolor="yellow" align="center">
				<b>SIGN UP</b>
			</td>
		</tr>
		<tr>
			<td align="center">
				<input type="text" name="user" placeholder="Username" required="true">
			</td>
		</tr>
		<tr>
			<td align="center">
				<input type="password" name="pwd" placeholder="Password">
			</td>
		</tr>
		<tr>
			<td align="center">
				<input type="text" name="nama" placeholder="Nama Lengkap"></td>
		</tr>
		<tr>
			<td align="center">
				<input type="text" name="gen" placeholder="Gender (L/P)">
			</td>
		</tr>
		<tr>
			<td align="center">
				<input type="text" name="umur" placeholder="Umur">
			</td>
		</tr>
		<tr>
			<td align="center">
				<input type="int" name="saldo" placeholder="Saldo">
			</td>
		</tr>
		<tr>
			<td align="center">
				<input type="submit" name="simpan" value="Daftar">
			</td>
		</tr>
	</table>
</form>

<?php 
	if(isset($_POST['simpan'])){
		$uname = $_POST['user'];
		$pwd = $_POST['pwd'];
		$nama = $_POST['nama'];
		$gen = $_POST['gen'];
		$umur = $_POST['umur'];
		$saldo = $_POST['saldo'];
		require_once("konek_db.php"); 
		$result = mysqli_query($id_mysql, "insert into data_users (Username, Password, NamaLeng, Gender, Umur, Dompet) values ('$uname', '$pwd', '$nama', '$gen', '$umur', '$saldo')");
		if($result){
			session_start();
			echo "<b>Penambahan data berhasil!</b>";
			$_SESSION['LoggedIn']=true;
			$_SESSION['Status']=true;
			$_SESSION['Username']=$uname;
			header("location: index.php");
			
		} else {
			echo "<b>Penambahan data gagal</b>";
			header("location: login.php");
		}
	}
?>

	
</body>
</html>
