
<?php 
include "../koneksi.php";
?>
<?php
	$tanggal=$_POST['tanggal_berita'];
	$judul=$_POST['judul_berita'];
	$isi=$_POST['isi_berita'];
	
	$query=mysql_query("INSERT INTO home_news(tanggal_news, judul_news, isi_news) VALUE('$tanggal','$judul','$isi')");
	if($query){
	echo "Berhasil input data ke database<br>";
?>
<script language="javascript">document.location.href="berita.php";</script>
		
<?php
	}else{
	echo "Gagal input data";
	echo mysql_error();
	}
?>