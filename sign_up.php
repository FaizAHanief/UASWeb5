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
		$user = $_POST['user'];
		$pwd = $_POST['pwd'];
		$nama = $_POST['nama'];
		$gen = $_POST['gen'];
		$umur = $_POST['umur'];
		$saldo = $_POST['saldo'];

		require_once("config.php"); 

		$result = mysqli_query($mysqli, "insert into data_user (Username, Password, Nama_Lengkap, Gender, Umur, Dompet) values ('$user', '$pwd', '$nama', '$gen', '$umur', '$saldo')");

		if($result){
			echo "<b>Penambahan data berhasil!</b>";
		} else {
			echo "<b>Penambahan data gagal</b>";
		}
	}
?>

	
</body>
</html>