<?php 
include "koneksi.php";
?>
<?php
	$nama=$_POST['nama_saran'];
	$email=$_POST['email_saran'];
	$isi=$_POST['isi_saran'];
	
	$query=mysql_query("INSERT INTO saran(nama_saran, email_saran, isi_saran) VALUE('$nama','$email','$isi')");
	if($query){
	echo "Berhasil input data ke database<br>";
?>
	<script language="javascript">document.location.href="contact.php";</script>		
<?php
	}else{
	echo "Gagal input data";
	echo mysql_error();
	}
?>