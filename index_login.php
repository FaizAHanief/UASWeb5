<?php require_once("config.php"); ?>

<html>
	<head>
		<title>MAHASISWA</title>
		<script language=javascript>
			var http = false;
			if (window.XMLHttpRequest){
				http = new XMLHttpRequest();
			} 
			else if (window.ActiveXObject){
				http = new ActiveXObject("Microsoft.XMLHTTP");
			}				
			function buka(file, target){
				http.responseText;
				http.abort();
				http.onreadystatechange = function(){
					if(http.readyState == 4){
						document.getElementById(target).innerHTML = http.responseText;
					}
				}
				http.open("GET", file, true);
				http.send(null);
			}

			buka("sign_in.php", "login");
			
		</script>
	</head>
<body>
	<table width="40%" align="center" border="0">
		<tr align="center">
			<td>
				<div id=login></div>
			</td>
			<td>
				<div id=formulir></div>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				Don't have any account yet?
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="button" value="Sign Up" onclick="buka('sign_up.php', 'formulir')">
			</td>
		</tr>
</body>
</html>