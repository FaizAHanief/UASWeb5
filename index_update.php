<html>
	<head>
		<title>MainPHP</title>
	</head>
<body>

<?php

	$db = mysqli_connect("localhost", "root", "", "db_uts_amiputra");

	$nama = $_POST['nama'];
	$uname = $_POST['uname'];
	$nim = $_POST['nim'];
	$pass = $_POST['pass'];
	

	if(isset($_POST['daftar'])){
		//memasukan akun baru ke database
		
		$perintah = "INSERT INTO tabel_login VALUES ('$nama', '$uname', '$nim', '$pass', '', '', '', '', '', '')";

		$result = mysqli_query($db, $perintah);
		
		echo "
			<script>
				alert('Data terinput! Silahkan login untuk input nilai!');
				location.href='index.html';
			</script>
		";
	}
	
	mysqli_close($db);
?>

</body>
</html>

