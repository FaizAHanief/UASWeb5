<?php
	session_start();
	$uname = $_SESSION['nama'];
?>

<?php
	include_once("config.php");

	//delete user row from table based on given id
	$result = mysqli_query($mysqli, "DELETE FROM data_user WHERE Username='$uname");

	if($result){
		echo "
		<script>
			alert('Delete Succeed. Thankyou');
			location.href='index_login.php';
		</script>
		";
	} else {
		echo "<b>Delete Failed</b>";
	}
?>