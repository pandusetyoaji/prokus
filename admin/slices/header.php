<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php
session_start();
if(!isset($_SESSION['username'],$_SESSION['password'])){
	echo "<script language='javascript'>document.location.href='../error/error1.php'</script>";
}
include "../koneksi.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Bima Admin</title>
<!--link href="http://fonts.googleapis.com/css?family=Abel|Arvo" rel="stylesheet" type="text/css" /-->
<link href="../style/style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" media="all" href="../style/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="../js/jquery.dropotron-1.0.js"></script>
<script type="text/javascript" src="../js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "simple"
	});
</script>
<script type="text/javascript" src="../js/jsDatePick.jquery.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%Y-%m-%d"
		});
	};
</script>
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="dashed">
			<div id="logo">
				<h1><a href="#">BIMARENDRA PUTRA</a></h1>
				<p>administrator</p>
			</div>
			</div>
		</div>
	</div>
	<!-- end #header -->