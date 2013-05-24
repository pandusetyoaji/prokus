<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION['username'],$_SESSION['password'])){
?>
<html>
	<head>
		<title>Log In</title>
		<link href="style/log-style.css" rel="stylesheet" type="text/css" media="screen" />	
	</head>
	<body>
		<div id="wrapper">
			<div id="dashed">
				
					<div id="logger-up">
					<h1>PT Bimarendra Putra Administrator</h1>
					</div>
					<div id="logger">
						<form action="login_proses.php" method="post">
							<table style="color:black;">
								<tr>
									<td><div class="label">Username</div></td>
									<td><input name="username" size="15" class="id"/></td>
								</tr>
								<tr>
									<td><div class="label">Password</div></td>
									<td><input name="password" type="password" size="15" class="id"/></td>
								</tr>
								<tr>
									<td colspan=2><input type="submit" name="Login" value="masuk" class="tombol" style="float:right;" ></td>
								</tr>
							</table>
						</form>
					</div>
				
			</div>
		</div>
	</body>
</html>
<?php
} else{
	echo "<script language='javascript'>document.location.href='beranda/'</script>";
}
?>