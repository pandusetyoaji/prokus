<?php
session_start();
include "koneksi.php";
$username=htmlentities($_POST['username']);
$password=htmlentities($_POST['password']);

if(empty($username) || empty($password)){

	?><script language="javascript">document.location.href="error/error3.php"</script><?php
	
}else{

	$query=mysql_query("select * from admin where username='$username' and password='$password'");
	$user=mysql_fetch_array($query);
	$username=$user['username'];
	$cek=mysql_num_rows($query);
	
	if($cek){
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		?><script language="javascript">document.location.href="beranda/"</script><?php
	}else{
		echo "<script language='javascript'>document.location.href='error/error2.php'</script>";
	}
}
?>
