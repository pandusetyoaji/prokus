<?php 
include "../koneksi.php";
?>
<?php
	$id_berita=$_POST['id_berita'];
	$tanggal_berita=$_POST['tanggal_berita'];
	$judul_berita=$_POST['judul_berita'];
	$isi_berita=$_POST['isi_berita'];
	$query=mysql_query("UPDATE home_news SET tanggal_news='$tanggal_berita', judul_news='$judul_berita', isi_news='$isi_berita' WHERE id_news='$id_berita'");
	if($query){
	echo "Berhasil update data ke database<br>";
?>
<script language="javascript">document.location.href="berita.php";</script>
		
<?php
	}else{
	echo "Gagal input data";
	echo mysql_error();
	}
?>